<?php

namespace App\Http\Controllers\Dashboard\Banner;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|unique:banners',
            'image' => 'required',
            'value' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('banner_images', 'public');
            $validatedData['image'] = $imagePath;
        }

        $banner = Banner::create([
            'title' => $validatedData['title'],
            'type' => 'link',
            'image' => $validatedData['image'],
            'value' => $validatedData['value']
        ]);

        return redirect()->route('admin.banner.index');
    }

    public function destroy($id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        return redirect()->route('admin.banner.index');
    }

}
