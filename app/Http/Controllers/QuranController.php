<?php

namespace App\Http\Controllers;

use App\Models\Quran;
use Illuminate\Http\Request;

class QuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qurans = Quran::all();
        return view('admin.quran.index', compact('qurans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Quran $quran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quran $quran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quran $quran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quran $quran)
    {
     
    }
}
