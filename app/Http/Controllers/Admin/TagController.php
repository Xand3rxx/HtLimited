<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use \App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Tag::withCount('products')->latest()->get();
        return view('admin.tags.index', [
            'tags' => Tag::latest()->get()
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
            'name'  =>  'bail|required|string|max:180|unique:tags,name',
        ]);

        $tag = Tag::create([
            'user_id'   => $request->user()->id,
            'name'      => $validate['name'],
            'slug'      => Str::slug($validate['name']),
        ]);

        return ($tag == true)
        ? redirect()->back()->with('success', $validate['name'].' tag was successfully created.')
        : back()->with('error', 'Sorry! An error occured while trying to create '. $validate['name'].' tag.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $uuid
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        //Return $data to partial tag view
        return view('admin.tags.show', [
            'tag'    =>  Tag::where('uuid', $uuid)->firstOrFail()
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
        //Get tag record
        return view('admin.tags.edit', [
            'tag'  =>   Tag::where('uuid', $uuid)->firstOrFail()
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
        $tag = Tag::where('uuid', $uuid)->firstOrFail();

        //Validate user request field
        $validate = $request->validate([
            'name'  =>  'bail|required|string|max:180|unique:tags,name,'.$tag->id.',id',
        ]);

        $tag->update([
            'user_id'   => $request->user()->id,
            'name'  =>  $validate['name'],
            'slug'  =>  Str::slug($validate['name']),
        ]);

        return ($tag == true)
        ? redirect()->back()->with('success', $validate['name'].' tag was successfully updated.')
        : back()->with('error', 'Sorry! An error occured while trying to update '. $validate['name'].' tag.');
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
        //Verify if tag uuid exists
        $tag = Tag::where('uuid', $uuid)->firstOrFail();

        $deleteCategory = $tag->delete();

        return ($deleteCategory)
        ? redirect()->back()->with('success', $tag['name'].' tag was successfully deleted.')
        : back()->with('error', 'Sorry! An error occured while trying to delete '.$tag['name'].' tag.');
    }
}
