<?php

namespace App\Http\Controllers\Dashboard\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherFormRequuest;
use App\Models\Banner;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    //

    public function index(){
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }

    public function create(){
        return view('admin.teachers.create');
    }

    public function store(TeacherFormRequuest $request){

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('teacher_images', 'public');
            $validated['image'] = $imagePath;
        }

        $validated['password'] = bcrypt($validated['password']);

        Teacher::create($validated);

        return redirect()->route('teachers.index')->with('success', 'Teacher created successfully.');
    }

    public function destroy($id){
        Teacher::destroy($id);
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully.');
    }

    public function bannerCreate($id){
        $teacher = Teacher::findOrFail($id);

        Banner::create([
            'title' => $teacher->name,
            'type' => 'teacher',
            'value' => $teacher->id,
            'image' => $teacher->image,
        ]);


        smilify('success', 'تم اضافه القارئ الى لوحه الاعلانات');

        return redirect()->route('teachers.index')->with('success', 'Teacher banner created successfully.');

    }
    public function edit($id){
        $teacher =  Teacher::findOrFail($id);
        return view('admin.teachers.edit', compact('teacher'));
    }

    public function login(){
        return view('admin.teachers.login');
    }

    public function update(Request $request) {
        $validated = Validator::make($request->all(), [
            'id' => 'required',
            'name' => 'required',
            'title' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'age' => 'required',
        ]);
        $validated = $validated->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('teacher_images', 'public');
            $validated['image'] = $imagePath;
            $teacher = $this->getTeacher($validated);
            $teacher->image = $validated['image'];
            $teacher->save();
            return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully.');
        } else{
            $teacher = $this->getTeacher($validated);
            $teacher->save();
            return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully.');

        }
    }

    public function teacherDashboard(){
        return view('teacher.index');
    }

    public function teacherLogin(Request $request) {

        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::guard('teacher')->attempt($request->only(['email','password']),true)){
            return redirect()->route('teacher.dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    /**
     * @param array $validated
     * @return mixed
     */
    public function getTeacher(array $validated): mixed
    {
        $teacher = Teacher::find($validated['id']);
        $teacher->name = $validated['name'];
        $teacher->title = $validated['title'];
        $teacher->phone = $validated['phone'];
        $teacher->email = $validated['email'];
        $teacher->gender = $validated['gender'];
        $teacher->age = $validated['age'];
        return $teacher;
    }

    public function logout(){
        auth()->guard(
            'teacher'

        )->logout();
        return redirect()->route('teacher.login-view');
    }
}
