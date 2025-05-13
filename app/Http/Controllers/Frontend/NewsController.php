<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        $recentNews = News::latest()->take(5)->get();

        return view('news', compact('news', 'recentNews'));
    }

    public function show($id)
    {
        $newsItem = News::findOrFail($id);

        return view('news1', compact('newsItem'));
    }
}
