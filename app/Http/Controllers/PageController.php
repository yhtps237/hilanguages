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
use Illuminate\Support\Facades\Response;

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

    public function sitemap()
    {
        $baseUrl = config('app.url');
        $languages = ['az', 'en', 'ru'];

        // Common URLs for static pages
        $staticUrls = collect([
            '/' => ['index', '/'],
            '/about' => ['about', '/about'],
            '/faq' => ['faq', '/faq'],
            '/our-team' => ['ourTeam', '/our-team'],
            '/blog' => ['blog', '/blog'],
            '/courses' => ['course', '/courses'],
            '/photo-gallery' => ['photoGallery', '/photo-gallery'],
            '/video-gallery' => ['videoGallery', '/video-gallery'],
            '/contact' => ['contact', '/contact'],
            '/career' => ['career', '/career'],
            '/students' => ['students', '/students'],
            '/comments' => ['comments', '/comments'],
            '/register' => ['register', '/register'],
        ])->flatMap(function ($route) use ($baseUrl, $languages) {
            return collect($languages)->map(fn($lang) => [
                'loc' => localized_route($route[0], [], $lang),
                'lastmod' => now()->toAtomString(),
            ]);
        });
        // Dynamic blog URLs
        // $blogUrls = Blog::all()->flatMap(function ($blog) use ($baseUrl, $languages) {
        //     return collect($languages)->map(fn($lang) => [
        //         'loc' => "{$baseUrl}/{$lang}/blog/" . ($lang == 'az' ? $blog->slug_az : ($lang == 'en' ? $blog->slug_en : $blog->slug_ru)),
        //         'lastmod' => $blog->updated_at->toAtomString(),
        //     ]);
        // });
        $blogUrls = Blog::all()->flatMap(function ($blog) use ($languages) {
            return collect($languages)->map(fn($lang) => [
                'loc' => localized_route('blogDetail', ['slug' => ($lang == 'az' ? $blog->slug_az : ($lang == 'en' ? $blog->slug_en : $blog->slug_ru))], $lang),
                'lastmod' => $blog->updated_at->toAtomString(),
            ]);
        });


        // Dynamic our team URLs
        $ourTeamUrls = OurTeam::all()->flatMap(function ($member) use ($baseUrl, $languages) {
            return collect($languages)->map(fn($lang) => [
                'loc' => localized_route('ourTeamDetail', ['slug' => ($lang == 'az' ? $member->slug_az : ($lang == 'en' ? $member->slug_en : $member->slug_ru))], $lang),
                'lastmod' => $member->updated_at->toAtomString(),
            ]);
        });

        // Dynamic course URLs
        $courseUrls = Course::all()->flatMap(function ($course) use ($baseUrl, $languages) {
            return collect($languages)->map(fn($lang) => [
                'loc' => localized_route('courseDetail', ['slug' => ($lang == 'az' ? $course->slug_az : ($lang == 'en' ? $course->slug_en : $course->slug_ru))], $lang),
                'lastmod' => $course->updated_at->toAtomString(),
            ]);
        });

        // Merge all URLs
        // $allUrls = $staticUrls->merge($blogUrls)->merge($ourTeamUrls)->merge($serviceUrls);

        // return Response::make(view('sitemap', compact('allUrls')), 200, [
        //     'Content-Type' => 'application/xml',
        return Response::make(view('sitemap', compact('staticUrls', 'blogUrls', 'ourTeamUrls', 'courseUrls')), 200, [
            'Content-Type' => 'application/xml',
        ]);
    }
}
