<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Specialty;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $categories = Specialty::inRandomOrder()->with('blogs')->limit(7)->get();
        $carousels = Blog::inRandomOrder()->with('author', 'file', 'category')->limit(6)->get();
        $latest_blogs = Blog::orderBy('id', 'desc')->with('author', 'file')->limit(5)->get();
        $trends = Blog::withCount('ratings')->with('ratings', 'file', 'author', 'category')->orderBy('ratings_count', 'desc')->limit(7)->get();
        
        return view('index', compact('categories', 'carousels', 'latest_blogs', 'trends'));
    }

}
