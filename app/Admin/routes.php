<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('faqs', FaqController::class);
    $router->resource('photo-galleries', PhotoGalleryController::class);
    $router->resource('video-galleries', VideoGalleryController::class);
    $router->resource('services', ServiceController::class);
    $router->resource('blogs', BlogController::class);
    $router->resource('our-teams', OurTeamController::class);
    $router->resource('certificates', CertificateController::class);
    $router->resource('courses', CourseController::class);
    $router->resource('students', StudentController::class);
    $router->resource('comment-videos', CommentVideoController::class);
    $router->resource('contacts', ContactController::class);
    $router->resource('sliders', SliderController::class);
});
