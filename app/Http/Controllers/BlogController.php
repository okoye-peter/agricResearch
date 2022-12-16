<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Specialty;
use App\Traits\FilesTrait;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;

class BlogController extends Controller
{
    use FilesTrait;

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $blogs = Blog::query();
        if ($request->has('cat')) {
            if (is_array($request->cat) && count($request->cat)) {
                $blogs = Blog::whereIn('specialty_id', $request->cat);
            }elseif(is_numeric($request->cat)) {
                $blogs = Blog::where('specialty_id', $request->cat);
            }
        }
        if ($request->has('q') && $request->q != '') {
            $blogs = $blogs->where('title', 'like', '%'.$request->q.'%');
        }
        $blogs = $blogs->with(['category', 'file', 'ratings', 'author'])->paginate(18);
        $categories = Specialty::select('id', 'name')->orderBy('name', 'desc')->get();
        return view('blogs.index', compact('blogs', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialties = Specialty::select('id','name')->get();
        return view('blogs.create',  compact('specialties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        $data = $request->safe()->only(['title', 'body', 'specialty_id']);
        $file = $request->safe()->file;
        
        $user = Auth::user();
        $blog = $user->blogs()->create($data);
        $path = 'assets/upload/images';
        $file_data = $this->upload($file, $path);
        $blog->file()->create($file_data);
        return back()->with('success', 'blog created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        // $latest_blogs = Blog::orderBy('id', 'desc')->with('author', 'file')->limit(5)->get();
        // return view('blogs.show', ['blog' => $blog->load(['file', 'category', 'author', 'author.file', 'ratings', 'ratings.user', 'ratings.user.file']), 'latest_blogs' => $latest_blogs]);
        return view('blogs.show', ['blog' => $blog->load([
                'file', 
                'category', 
                'author', 
                'author.file', 
                'ratings', 
                'ratings.user', 
                'ratings.user.file', 
                'ratings.comments',
                'ratings.comments.user',
                'ratings.comments.user.file'
            ])
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }

    /**
     * create a rating for the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function rateBlog(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'rate' => 'nullable|numeric|max:5|min:0',
            'comment' => 'required|string',
            'reply_id' => Rule::requiredIf(fn () => !$request->rate)
        ]);

        $blog->ratings()->create(array_merge($data, ['user_id' => Auth::id()]));

        return back()->with('success', 'Blog rated successfully');
    }

    public function replyRating(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'comment' => 'required|string',
            'reply_id' => 'required|exists:ratings,id'
        ]);

        $blog->ratings()->create(array_merge($data, ['user_id' => Auth::id()]));

        return back()->with('success', 'Replied to comment successfully');
    }
}
