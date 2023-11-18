<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(){
        $settings = Setting::latest()->first();
        return view('admin.settings.index', compact('settings'));
    }

    public function create(){
        $settings = Setting::latest()->first();
        return view('admin.settings.create', compact('settings'));
    }

    public function store(Request $request) {
        $settings = Setting::latest()->first();
        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'email' => ['required'],
            'phone' => ['required'],
            'terms_of_use' => ['required']
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news_images', 'public');
            $validatedData['image'] = $imagePath;
        }

        if($settings != null){
            $settings->title = $validatedData['title'];
            $settings->phone = $validatedData['phone'];
            $settings->email = $validatedData['email'];
            $settings->terms_of_use = $validatedData['terms_of_use'];
            if(isset($validatedData['image'])) {
                $settings->logo = $validatedData['image'];
            }
            $settings->save();

        } else {
            $settings = Setting::create([
                'title' => $validatedData['title'],
                'phone' => $validatedData['phone'],
                'email' => $validatedData['email'],
                'logo' => $validatedData['image'],
                'terms_of_use' => $validatedData['terms_of_use']
            ]);
        }

        return redirect()->route('admin.settings.index');
    }

}
