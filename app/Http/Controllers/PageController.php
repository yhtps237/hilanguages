<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CommentVideo;
use App\Models\Course;
use App\Models\Faq;
use App\Models\OurTeam;
use App\Models\PhotoGallery;
use App\Models\Student;
use App\Models\VideoGallery;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $blogs = Blog::latest()->take(3)->get();
        $faqs = Faq::where('type', 'Ümumi suallar')->latest()->take(3)->get();
        return view('index', compact('courses', 'blogs', 'faqs'));
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

    public function register()
    {
        return view('register');
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


    public function course()
    {
        $courses = Course::orderBy('id', 'desc')->get();

        return view('course', compact('courses'));
    }

    public function courseDetail($slug)
    {
        $locale = app()->getLocale(); // Get current language

        // Determine the correct column based on language
        $column = "slug_{$locale}";

        $course = Course::where($column, $slug)->firstOrFail();

        return view('course_detail', compact('course'));
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

    public function students()
    {
        $students = Student::all();
        return view('students', compact('students'));
    }

    public function comments()
    {
        $videos = CommentVideo::all();
        return view('comments', compact('videos'));
    }
}
