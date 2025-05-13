<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News; // Ganti dengan model yang sesuai

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $results = News::where('title', 'like', '%' . $query . '%')
            ->orWhere('content', 'like', '%' . $query . '%')
            ->get();

        return view('search_results', compact('query', 'results'));
    }
}
