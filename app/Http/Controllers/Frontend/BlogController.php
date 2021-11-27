<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.blog.index', [
            'posts'         => Post::activePost()->latest()->paginate(10),
            'tags'          => Tag::orderBy('name')->latest()->get(),
            'categories'    => Category::withCount('posts')->orderBy('name')->get(),
            'recentPosts'   => Post::activePost()->inRandomOrder()->take(5)->get(10)
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('frontend.blog.show', [
            'post'          => Post::where('slug', $slug)->firstOrFail(),
            'tags'          => Tag::orderBy('name')->latest()->get(),
            'recentPosts'   => Post::activePost()->inRandomOrder()->take(5)->get(10),
            'categories'    => Category::withCount('posts')->orderBy('name')->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
     * Display a listing of blog posts by category name.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function filterByCategory($name){
        return view('frontend.blog.filter.category', [
            'posts'         => Category::where('name', $name)->with('posts')->latest()->firstorFail(),
            'tags'          => Tag::orderBy('name')->latest()->get(),
            'categories'    => Category::withCount('posts')->orderBy('name')->get(),
            'recentPosts'   => Post::activePost()->inRandomOrder()->take(5)->get(10),
            'title'         => 'Category: '.$name,
        ]);
    }

    /**
     * Display a listing of blog posts by tag name.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function filterBytag($name){

        $tag = Tag::where('name', $name)->firstOrFail();

        return view('frontend.blog.filter.tag', [
            'posts'         => \App\Models\PostTag::where('tag_id', $tag['id'])->with('posts')->get(),
            'tags'          => Tag::orderBy('name')->latest()->get(),
            'categories'    => Category::withCount('posts')->orderBy('name')->get(),
            'recentPosts'   => Post::activePost()->inRandomOrder()->take(5)->get(10),
            'title'         => 'Tag: '.$name,
        ]);
    }

    /**
     * Display a listing of blog posts by search query.
     *
     * @param  string  $query
     * @return \Illuminate\Http\Response
     */
    public function search($query){

        return DB::table('lb_contents')->where('rendered_content', 'LIKE', "%{$query}%")->get();
        // return Post::where('excerpt', 'LIKE', "%{$query}%")
                // ->orWhere('lb_content', 'LIKE', "%{$query}%")
                // ->latest()->get();

        return view('frontend.blog.filter.search', [
            'posts'         => Post::where('name', $query)->latest()->firstorFail(),
            'tags'          => Tag::orderBy('name')->latest()->get(),
            'categories'    => Category::withCount('posts')->orderBy('name')->get(),
            'recentPosts'   => Post::activePost()->inRandomOrder()->take(5)->get(10),
            'title'         => 'Search Query: '.$query,
        ]);
    }
}
