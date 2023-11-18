<?php

namespace App\Http\Controllers\Dashboard\CustomNotification;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomNotificationStoreRequest;
use App\Models\CustomNotification;
use App\Models\Sessiongroup;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CustomNotificationController extends Controller
{
    public function index()
    {
        $customNotifications = CustomNotification::all();
        return view('admin.custom-notification.index', compact('customNotifications'));
    }

    public function create()
    {


        $students = Student::all();
        $sessions = Sessiongroup::all();
        $teachers = Teacher::all();
        return view('admin.custom-notification.create' , compact('students','sessions','teachers'));
    }

    public function store(CustomNotificationStoreRequest $request)
    {
        $validated = $request->validated();
        $customNotification = CustomNotification::create($validated);
        smilify('success', 'تم اضافه الاشعار بنجاح');
        return redirect()->route('custom_notification.index');
    }

    public function show()
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        CustomNotification::findOrFail($id)->delete();
        smilify('success', 'تم ازالة الاشعار بنجاح');
        return redirect()->route('custom_notification.index');
    }

}
