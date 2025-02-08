<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Course;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('key');

        $blogs = Blog::where('head_az', 'like', "%{$query}%")
            ->orWhere('head_en', 'like', "%{$query}%")
            ->orWhere('content_az', 'like', "%{$query}%")
            ->orWhere('content_en', 'like', "%{$query}%")
            ->orderBy('date', 'desc')
            ->get();

        $courses = Course::where('head_az', 'like', "%{$query}%")
            ->orWhere('head_en', 'like', "%{$query}%")
            ->orWhere('content_az', 'like', "%{$query}%")
            ->orWhere('content_en', 'like', "%{$query}%")
            ->orderBy('id', 'desc')
            ->get();

        return view('search_results', compact('query', 'blogs', 'courses'));
    }
}
