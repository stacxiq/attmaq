<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentLoginRequest;
use App\Http\Requests\StudentStoreRequest;
use App\Models\Banner;
use App\Models\Faq;
use App\Models\News;
use App\Models\Setting;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\UserNotifications;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function Register(StudentStoreRequest $request){
        $student = $request->validated();
        $student = Student::create($student);
        $token = $student->createToken(time())->plainTextToken;;
        return response()->json([
            'message' => 'Student created successfully',
            'access_token' => $token,
            'token_type' => 'Bearer',
        ], 200);
    }
    public function Login(StudentLoginRequest $request){
        $student = $request->validated();
        $student = Student::where('phone', $student['phone'])->first();
        if(!$student || !password_verify($request->password, $student->password)){
            return response()->json([
                'message' => 'Invalid credentials',
            ], 401);
        }
        $token = $student->createToken(time())->plainTextToken;;
        return response()->json([
            'message' => 'Student logged in successfully',
            'access_token' => $token,
            'token_type' => 'Bearer',
        ], 200);
    }
    public function Settings(){
        $setting = Setting::first();

        return response()->json([
            'message' => 'Settings retrieved successfully',
            'settings' => $setting,
        ], 200);
    }
    public function Teachers(){
        $teachers = Teacher::paginate(10);

        return response()->json([
            'message' => 'Teachers retrieved successfully',
            'teachers' => $teachers,
        ], 200);
    }
    public function notifications(){
        $notifications= UserNotifications::all();

        return response()->json([
            'message' => 'Notifications retrieved successfully',
            'notifications' => $notifications,
        ], 200);
    }
    public function banners(){
        $banner = Banner::all();

        return response()->json([
            'message' => 'Banner retrieved successfully',
            'banner' => $banner,
        ], 200);
    }
    public function news(){
        $news = News::paginate(10);
        return response()->json([
            'message' => 'Banner retrieved successfully',
            'banner' => $news,
        ], 200);
    }
    public function faq(){
        $faqs = Faq::all();
        return response()->json([
            'message' => 'Banner retrieved successfully',
            'banner' => $faqs,
        ], 200);
    }



}
