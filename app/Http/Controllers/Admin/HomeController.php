<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::latest()->get();

        return view('admin.index', [
            'posts'         => [
                'total'             =>  $posts->count(),
                'totalActivePosts'  =>  Post::activePost()->count(),
                'drafts'            =>  Post::inactivePost()->count(),
            ],
            'latestPosts'   => $posts->take(5),
        ]);
    }
}
