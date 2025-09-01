<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageControllers;


//Pages Default Files 
Route::get('/', [PageControllers::class, 'home'])->name('home');
Route::get('/Contact', [PageControllers::class, 'contact'])->name('contact');
Route::get('/About-us', [PageControllers::class, 'about'])->name(name: 'about');
Route::get('/Our_Instructors', [PageControllers::class, 'instructor'])->name(name: 'instructor');
Route::get('/Gallery', [PageControllers::class, 'gallery'])->name('gallery');
Route::get('/Blogs', [PageControllers::class, 'blog'])->name('blog');
Route::get('/AllCourses', [PageControllers::class, 'allcourse'])->name('allcourse');
Route::get('JoinNow', [PageControllers::class,'joinNow'])->name(('joinnow'));
Route::get('Results', [PageControllers::class,'result'])->name(('result'));
Route::get('/Events', [PageControllers::class,'event'])->name('event');
Route::get('/Developer@5vot', [PageControllers::class,'developer'])->name('developer');
Route::get('/PageNotFound', [PageControllers::class,'pageNotFound'])->name('pagenotfound');

/// Courses Tab files

Route::get('/Category1', [PageControllers::class,'coursefirst'])->name('category1');
Route::get('/Category2', [PageControllers::class,'course_two'])->name('category2');
Route::get('/Category3', [PageControllers::class,'course_three'])->name('category3');
Route::get('/Category4', [PageControllers::class,'course_four'])->name('category4');
Route::get('/Category5', [PageControllers::class,'course_five'])->name('category5');
Route::get('/Category6', [PageControllers::class,'course_six'])->name('category6');
Route::get('/Category7', [PageControllers::class,'course_seven'])->name('category7');
Route::get('/Category8', [PageControllers::class,'course_eight'])->name('category8');
Route::get('/Category9', [PageControllers::class,'course_nine'])->name('category9');

