<?php

namespace App\Http\Controllers;

use App\Category;
use App\App;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function index(App $app)
    {
        return $app->categories()->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function create(App $app)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, App $app)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\App  $app
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(App $app, Category $category)
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\App  $app
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(App $app, Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\App  $app
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, App $app, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\App  $app
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(App $app, Category $category)
    {
        //
    }
}
