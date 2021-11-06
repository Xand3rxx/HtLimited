<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Post;
use App\models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create', [
            'categories'    => Category::get()->sortBy('name'),
            'tags'          => \App\models\Tag::get()->sortBy('name')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate blog post request
        $validated = $this->validateRequest();

        //Check if image was uploaded on create
        if ($image = $request->file('cover_image')) {
            //Generate unique string as name appended to the image extension
            $coverImage = Str::uuid().'-img.'.$image->getClientOriginalExtension();
            $image->move(public_path('img/cover-images'), $coverImage);
        }

        $post = Post::create([
            'user_id'       => $request->user()->id,
            'category_id'   => $validated['category_id'] ?? Category::where('slug', 'uncategorized')->firstOrFail()->id,
            'title'         => Str::title($validated['title']),
            'slug'          => Str::slug($validated['title']),
            'excerpt'       => $validated['excerpt'],
            'cover_image'   => $coverImage,
            'status'        => $validated['status'],
        ]);

        if($request->has('tag')){
            $post->tags()->attach($validated['tag']);
        }

        $post->lb_content = $validated['content'];

        return($post->save())
        ? redirect()->route('admin.posts.index')->with('success', 'Post was created successfully')
        : back()->with('error', 'Sorry! An error occured while trying to create a post.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $uuid
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        return view('admin.posts.show', [
            'post'  =>  Post::where('uuid', $uuid)->firstOrFail()
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
        return view('admin.posts.edit', [
            'categories'    => Category::get()->sortBy('name'),
            'tags'          => \App\models\Tag::get()->sortBy('name'),
            'post'  =>  Post::where('uuid', $uuid)->firstOrFail()
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
        $post = Post::where('uuid', $uuid)->firstOrFail();

        // Validate blog post request
        $validated = $this->validateUpdateRequest();

        //Check if image was uploaded on create
        if ($image = $request->file('cover_image')) {
            //Generate unique string as name appended to the image extension
            $coverImage = Str::uuid().'-img.'.$image->getClientOriginalExtension();
            $image->move(public_path('img/cover-images'), $coverImage);

            //Delete old image
            $oldImage = $post['cover_image'];

            if(File::exists(public_path('img/cover-images/'.$oldImage)))
            {
                File::delete(public_path('img/cover-images/'.$oldImage));
            }

        }else{
            $coverImage = $post['cover_image'];
        }

        $post->update([
            'user_id'       => $request->user()->id,
            'category_id'   => $validated['category_id'] ?? Category::where('slug', 'uncategorized')->firstOrFail()->id,
            'title'         => Str::title($validated['title']),
            'slug'          => Str::slug($validated['title']),
            'excerpt'       => $validated['excerpt'],
            'cover_image'   => $coverImage,
            'status'        => $validated['status'],
        ]);

        if($request->has('tag')){
            $post->tags()->detach();
            $post->tags()->attach($validated['tag']);
        }

        $post->lb_content = $validated['content'];

        return($post->save())
        ? redirect()->route('admin.posts.index')->with('success', 'Post was updated successfully')
        : back()->with('error', 'Sorry! An error occured while trying to update your post post.');
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
     * Deactivate the specified uuid
     * @param  string  $uuid
     * @return \Illuminate\Http\Response
     */
    public function unpublishPost($uuid)
    {
        //Change post status to inactive state
        return (Post::where('uuid', $uuid)->firstOrFail()->update(['status'=>'inactive']))
        ? redirect()->back()->with('success', 'Post was successfully saved as draft.')
        : back()->with('error', 'Sorry! An error occured while trying to save post as draft.');
    }

    /**
     * Reinstate the specified uuid from storage.
     *
     * @param  string  $uuid
     * @return \Illuminate\Http\Response
     */
    public function publishPost($uuid)
    {
        //Change post status to active state
        return (Post::where('uuid', $uuid)->firstOrFail()->update(['status'=>'active']))
        ? redirect()->back()->with('success', 'Post was successfully published.')
        : back()->with('error', 'Sorry! An error occured while trying to publish post.');
    }

    /**
     * Validate user input fields
     */
    private function validateRequest(){
        return request()->validate([
            'title'         =>  'bail|required|string',
            'cover_image'   =>  'bail|required|mimes:jpg,png,jpeg,gif,svg|max:256',
            'category_id'   =>  'bail|sometimes|numeric',
            'status'        =>  'bail|required|string|in:active,inactive',
            'excerpt'       =>  'bail|required|string',
            'content'       =>  'bail|required|string',
            'tag'           =>  'bail|sometimes|array',
            'tag.*'         =>  'bail|sometimes|numeric',
        ]);
    }

    /**
     * Validate user input fields
     */
    private function validateUpdateRequest(){
        return request()->validate([
            'title'         =>  'bail|required|string',
            'cover_image'   =>  'bail|sometimes|mimes:jpg,png,jpeg,gif,svg|max:256',
            'category_id'   =>  'bail|sometimes|numeric',
            'status'        =>  'bail|required|string|in:active,inactive',
            'excerpt'       =>  'bail|required|string',
            'content'       =>  'bail|required|string',
            'tag'           =>  'bail|sometimes|array',
            'tag.*'         =>  'bail|sometimes|numeric',
        ]);
    }
}
