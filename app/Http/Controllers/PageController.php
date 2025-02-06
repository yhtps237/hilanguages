<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Faq;
use App\Models\OurTeam;
use App\Models\PhotoGallery;
use App\Models\VideoGallery;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(1);

        return view('blog', compact('blogs'));
    }

    public function blogDetail($slug)
    {
        $locale = app()->getLocale(); // Get current language

        // Determine the correct column based on language
        $column = "slug_{$locale}";

        // Fetch the blog using the appropriate slug
        $blog = Blog::where($column, $slug)->firstOrFail();

        $latestBlogs = Blog::latest()->take(5)->get();

        return view('blog_detail', compact('blog', 'latestBlogs'));
    }

    public function faq()
    {
        $faqsGeneral = Faq::where('type', 'Ümumi suallar')->get();
        $faqsPeyment = Faq::where('type', 'Ödənişlər')->get();

        return view('faq', compact('faqsGeneral', 'faqsPeyment'));
    }

    public function ourTeam()
    {
        $personals = OurTeam::all();
        return view('our_team', compact('personals'));
    }


    public function ourTeamDetail($slug)
    {
        $locale = app()->getLocale(); // Get current language

        // Determine the correct column based on language
        $column = "slug_{$locale}";

        // Fetch the blog using the appropriate slug
        $personal = OurTeam::where($column, $slug)->firstOrFail();


        return view('personal_detail', compact('personal'));
    }

    public function photoGallery()
    {
        $photoGalleries = PhotoGallery::orderBy('id', 'desc')->get();
        return view('photo_gallery', compact('photoGalleries'));
    }

    public function videoGallery()
    {
        $videos = VideoGallery::all();
        return view('video_gallery', compact('videos'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function career()
    {
        return view('career');
    }
}
