<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use \App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Category::withCount('products')->latest()->get();
        return view('admin.categories.index', [
            'categories' => Category::withCount('posts')->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate user request field
        $validate = $request->validate([
            'name'  =>  'bail|required|string|max:180|unique:categories,name',
        ]);

        $category = Category::create([
            'user_id'   => $request->user()->id,
            'name'      => $validate['name'],
            'slug'      => Str::slug($validate['name']),
        ]);

        return ($category == true)
        ? redirect()->back()->with('success', $validate['name'].' category was successfully created.')
        : back()->with('error', 'Sorry! An error occured while trying to create '. $validate['name'].' category.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $uuid
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        //Return $data to partial cateogory view
        return view('admin.categories.show', [
            'category'    =>  Category::where('uuid', $uuid)->firstOrFail()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $uuid
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        //Get category record
        return view('admin.categories.edit', [
            'category'  =>   Category::where('uuid', $uuid)->firstOrFail()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $uuid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uuid)
    {
        $category = Category::where('uuid', $uuid)->firstOrFail();

        //Validate user request field
        $validate = $request->validate([
            'name'  =>  'bail|required|string|max:180|unique:categories,name,'.$category->id.',id',
        ]);

        $category->update([
            'user_id'   => $request->user()->id,
            'name'  =>  $validate['name'],
            'slug'  =>  Str::slug($validate['name']),
        ]);

        return ($category == true)
        ? redirect()->back()->with('success', $validate['name'].' category was successfully updated.')
        : back()->with('error', 'Sorry! An error occured while trying to update '. $validate['name'].' category.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Deactivate the specified uuid using softDeletes
     * @param  string  $uuid
     * @return \Illuminate\Http\Response
     */
    public function deactivate($uuid)
    {
        //Verify if category uuid exists
        $category = Category::where('uuid', $uuid)->firstOrFail();

        $deleteCategory = $category->delete();

        return ($deleteCategory)
        ? redirect()->back()->with('success', $category['name'].' category was successfully deleted.')
        : back()->with('error', 'Sorry! An error occured while trying to delete '.$category['name'].' category.');
    }
}
