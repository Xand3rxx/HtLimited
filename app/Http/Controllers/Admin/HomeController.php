<?php

namespace App\Http\Controllers\Admin;

use Spatie\Analytics\AnalyticsFacade as Analytics;
use App\Models\Post;
use Illuminate\Http\Request;
use Spatie\Analytics\Period;

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

        //retrieve visitors and pageview data for the current day and the last seven days
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));

        //retrieve visitors and pageviews since the 6 months ago
        // $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));

        //retrieve sessions and pageviews with yearMonth dimension since 1 year ago
        // $analyticsData = Analytics::performQuery(
        //     Period::years(1),
        //     'ga:sessions',
        //     [
        //         'metrics' => 'ga:sessions, ga:pageviews',
        //         'dimensions' => 'ga:yearMonth'
        //     ]
        // );

        dd($analyticsData);


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



