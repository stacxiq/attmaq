<?php

namespace App\Http\Controllers\Dashboard\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentStoreRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        $students = Student::all();
        return view('admin.students.index', compact('students'));
    }


    public function create(){
        return view('admin.students.create');
    }

    public function edit($id){
        $student = Student::find($id);
        return view('admin.students.edit', compact('student'));
    }

    public function store(StudentStoreRequest $request){
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('student_images', 'public');
            $validated['image'] = $imagePath;
        }

        $validated['password'] = bcrypt($validated['password']);

        Student::create($validated);

        return redirect()->route('admin.student.index')->with('success', 'Student created successfully.');
    }

    public function destroy($id){
        Student::find($id)->delete();
        smilify('success', 'تم حذف المشترك بنجاح');
        return redirect()->route('admin.student.index')->with('success', 'Student deleted successfully.');
    }

    public function update($id, Request $request){
        $student = Student::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|min:11|max:11',
            'age' => 'required|max:2',
            'gender' => 'required',
            'country' => 'required',
            'city' => 'required',
            'main_language' => 'required',
            'is_active' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('student_images', 'public');
            $validatedData['image'] = $imagePath;
        }
        $student->update($validatedData);
        smilify('success', 'تم تحديث بيانات المشترك بنجاح');

        return redirect()->route('admin.student.index');

    }
}
