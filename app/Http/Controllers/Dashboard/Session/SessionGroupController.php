<?php

namespace App\Http\Controllers\Dashboard\Session;

use App\Http\Controllers\Controller;
use App\Http\Requests\SessionGroupRequest;
use App\Models\Banner;
use App\Models\Sessiongroup;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SessionGroupController extends Controller
{
    //
    public function index(Request $request){
        $query = $request->query('query');
        $sessionGroups = $query == null || $query == 'اختر ال قارئ' ?  Sessiongroup::all() : Sessiongroup::where('teacher_id', $query)->get();
        $teachers = Teacher::all();
        return view('admin.sessions.index', compact('sessionGroups', 'teachers'));
    }

    public function create(){
        $teachers = Teacher::all();
        return view('admin.sessions.create', compact('teachers'));
    }

    public function store(SessionGroupRequest $request){
        $sessionGroup = $request->validated();
        $sessionGroup = Sessiongroup::create($sessionGroup);
        return redirect()->route('admin.sessions.index');
    }

    public function destroy($id){
        $sessionGroup = Sessiongroup::find($id);
        $sessionGroup->delete();
        return redirect()->route('admin.sessions.index');
    }
    public function edit($id){
        $sessionGroup = Sessiongroup::find($id);
        $teachers = Teacher::all();
        return view('admin.sessions.edit', compact('sessionGroup', 'teachers'));
    }

    public function update(Request $request){
        $sessionGroup = $request->all();
        $sessionGroupO = Sessiongroup::find($sessionGroup['id']);
        $sessionGroupO->update($sessionGroup);
        return redirect()->route('admin.sessions.index');
    }

    public function bannerAdd($id){
        $sessionGroup = Sessiongroup::findOrFail($id);

        Banner::create([
            'title' => $sessionGroup->title,
            'type' => 'session',
            'value' => $sessionGroup->id,
            'image' => '',
        ]);

        smilify('success', 'تم اضافه الحلقة الى لوحه الاعلانات');

        return redirect()->route('admin.sessions.index');
    }
}
