<?php

namespace App\Http\Controllers\teacher\SingleSession;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleSessionController extends Controller
{
    public function index()
    {
        return view('teacher.singlesessions.index');
    }

    public  function create()
    {
        return view('teacher.singlesessions.create');
    }
}
