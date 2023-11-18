<?php

namespace App\Http\Controllers\Dashboard\News;

<<<<<<< HEAD
use App\Models\Banner;
=======
>>>>>>> b71d6a1 (add notifications)
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'unique:news', 'max:255'],
            'content' => ['required'],
            'date' => ['required', 'date'],
            'image' => ['required', 'mimes:jpeg,png,jpg,gif'],
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news_images', 'public');
            $validatedData['image'] = $imagePath;
        }
        $validatedData['url'] = $request->url;



        News::create($validatedData);

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'unique:news,title,'.$news->id, 'max:255'],
            'content' => ['required'],
            'date' => ['required', 'date'],
            'image' => ['mimes:jpeg,png,jpg,gif'],
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news_images', 'public');
            $validatedData['image'] = $imagePath;
        }
        $validatedData['url'] = $request->url;

        $news->update($validatedData);

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index');
        //
    }
<<<<<<< HEAD

    public function bannerCreate($id)
    {
        $news = News::find($id);
        Banner::create([
            'title' => $news->title,
            'type' => 'news',
            'image' => $news->image,
            'value' => $news->id,
        ]);
        smilify('success', 'تم اضافه الخبر الى لوحه الاعلانات');
        return redirect()->route('news.index');
    }
=======
>>>>>>> b71d6a1 (add notifications)
}
