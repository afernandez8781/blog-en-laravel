<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function spa()
    {
        return view('pages.spa');
    }

    
    public function home()
    {
        $query = Post::published();

        if(request('month')){
            $query->whereMonth('published_at', request('month'));
        }

        if(request('year')) {
            $query->whereYear('published_at', request('year'));
        }

        $posts = $query->paginate(2);

        if( request()->wantsJson() )
        {
            return $posts;
        }

        return view('pages.home', compact('posts'));
    }

    public function about() 
    {
    	return view('pages.about');
    }

    public function archive()
    {

        $data = [
            'authors' => User::latest()->take(4)->get(),
            'categories' => Category::take(7)->get(),
            'posts' => Post::latest('published_at')->take(5)->get(),
            'archive' => Post::published()->byYearAndMonth()->get()
        ];

        if (request()->wantsJson())
        {
            return $data;
        }

    	return view('pages.archive', $data);
    }

    public function contact()
    {
    	return view('pages.contact');
    }
}
