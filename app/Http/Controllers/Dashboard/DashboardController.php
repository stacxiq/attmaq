<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function index(){
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
}
