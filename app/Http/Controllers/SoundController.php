<?php

namespace App\Http\Controllers;

use App\Sound;
use App\Category;
use Illuminate\Http\Request;

class SoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category $category)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @param  \App\Sound  $sound
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, Sound $sound)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @param  \App\Sound  $sound
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, Sound $sound)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @param  \App\Sound  $sound
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, Sound $sound)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @param  \App\Sound  $sound
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, Sound $sound)
    {
        //
    }
}
