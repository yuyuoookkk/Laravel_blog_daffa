<?php

use Illuminate\Support\Facades\Route;


// Public pages
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// Blog index
Route::view('/blog', 'blog.index')->name('blog.index');

// Blog posts (explicit routes for each static Blade view)
Route::prefix('blog')->group(function () {
    Route::view('/microbreaks-productivity', 'blog.microbreaks-productivity')->name('blog.microbreaks-productivity');
    Route::view('/css-tips-clean-ui', 'blog.css-tips-clean-ui')->name('blog.css-tips-clean-ui');
    Route::view('/start-a-tech-blog-2025', 'blog.start-a-tech-blog-2025')->name('blog.start-a-tech-blog-2025');
    Route::view('/content-that-converts', 'blog.content-that-converts')->name('blog.content-that-converts');
    Route::view('/minimalist-design-guide', 'blog.minimalist-design-guide')->name('blog.minimalist-design-guide');
    Route::view('/web-accessibility-basics', 'blog.web-accessibility-basics')->name('blog.web-accessibility-basics');
});

// Alternate site routes
Route::prefix('alt')->group(function () {
    Route::view('/', 'alt.home')->name('alt.home');
    Route::view('/about', 'alt.about')->name('alt.about');
    Route::view('/contact', 'alt.contact')->name('alt.contact');

    // Blog
    Route::view('/blog', 'alt.blog.index')->name('alt.blog.index');
    Route::prefix('blog')->group(function () {
        Route::view('/productivity-habits-2025', 'alt.blog.productivity-habits-2025')->name('alt.blog.productivity-habits-2025');
        Route::view('/mastering-email-clarity', 'alt.blog.mastering-email-clarity')->name('alt.blog.mastering-email-clarity');
        Route::view('/design-systems-starter', 'alt.blog.design-systems-starter')->name('alt.blog.design-systems-starter');
        Route::view('/time-blocking-deep-work', 'alt.blog.time-blocking-deep-work')->name('alt.blog.time-blocking-deep-work');
        Route::view('/fast-laravel-tips', 'alt.blog.fast-laravel-tips')->name('alt.blog.fast-laravel-tips');
        Route::view('/accessibility-checklist-quickstart', 'alt.blog.accessibility-checklist-quickstart')->name('alt.blog.accessibility-checklist-quickstart');
    });
});
