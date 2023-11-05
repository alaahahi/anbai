<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Slider;
use App\Models\BlogComments;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        app()->setLocale(session('locale'));

        $slider = Slider::where('category_id',1)->limit(6)->where('active',1)->get();
        $posts_new = Blog::with(['comments','category'])->where('lang',app()->getLocale())->where('active',1)->orderByDesc('created_at')->paginate(5);
        $posts_featured = Blog::with(['comments','category'])->where('lang',app()->getLocale())->where('active',1)->where('featured',1)->orderByDesc('created_at')->limit(2)->get();
        $posts_trend = Blog::with(['comments','category'])->where('lang',app()->getLocale())->where('active',1)->where('trending',1)->orderByDesc('created_at')->limit(3)->get();
        $posts_random = Blog::with(['comments'])->where('lang',app()->getLocale())->where('active',1)->inRandomOrder()->limit(7)->get();
        $posts_social_media = $posts_featured;
        $tags = Tag::where('lang',app()->getLocale())->orderByDesc('created_at')->limit(10)->get();
        $meta = Blog::where('active',1)->orderByDesc('created_at')->limit(12)->pluck('title');
        
        return inertia('blog',[
            'meta' => $meta,
            'slider' => $slider,
            'posts_new' => $posts_new,
            'posts_featured' => $posts_featured,
            'posts_trend' => $posts_trend,
            'posts_random' => $posts_random,
            'posts_social_media' => $posts_social_media,
            'tags' => $tags,
        ]);

    }

    public function show($id)
    {
        app()->setLocale(session('locale'));

        $blog = Blog::with(['comments','category'])->where('active',1)->find($id);
        $meta = Blog::where('active',1)->orderByDesc('created_at')->limit(12)->pluck('title');

        return inertia('article',[
            'meta' => $meta,
            'blog' => $blog,
        ]);

    }

    public function comments(Request $request)
    {

        $request->validate([
            'comment' => 'required|string|max:255',
        ]);

        $data = new BlogComments();
        $data-> blog_id = $request->blog_id;
        $data-> comment = $request->comment;
        $data-> active = 1;
        $data->save();

        return redirect()->back()->with('success', 'Organization created.');

    }
    
}
