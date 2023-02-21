<?php

namespace App\Http\Controllers;

use App\Models\Choose;
use Illuminate\Http\Request;

class ChooseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $choose = Choose::all();
        return view('dashboard.choose.index', compact('choose'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.choose.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['en' => $request->title_en, 'ar'  => $request->title_ar],
            'number' => 'required|numeric',
        ]);
        $choose = Choose::create([
            'title' => ['en'=>$request->title_en, 'ar' => $request->title_ar],
            'number' => $request->number,
        ]);
        return redirect()->route('choose.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function show(Choose $choose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function edit(Choose $choose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Choose $choose)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Choose  $choose
     * @return \Illuminate\Http\Response
     */
    public function destroy(Choose $choose)
    {
        //
    }
}
