<?php

namespace App\Http\Controllers\Dashboard\Faq;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        $faq = Faq::all();
        return view('admin.faq.index',compact('faq'));
    }
    public function create(){
        return view('admin.faq.create');
    }

    public function store(Request $request){
        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer
        ]);
        return redirect()->route('admin.faq.index');
    }

    public function destroy($id){
        Faq::findOrFail($id)->delete();
        return redirect()->route('admin.faq.index');

    }
    public function edit($id){
        $faq = Faq::findOrFail($id);

        return view('admin.faq.edit',compact('faq'));
    }

    public function update(Request $request){
        $faq = Faq::findOrFail($request->id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return redirect()->route('admin.faq.index');

    }
}
