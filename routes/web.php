<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//Route::get('about', [AboutController::class, 'index']);
Route::get('about/', function(){
    $content = TCG\Voyager\Models\Page::where('slug', '=', 'about-wende')->firstOrFail();
    //$audio = App\Models\Audio::all();
	return view('about', compact('content'), compact('audio'));
});

Route::get('/blog', function () {
    $posts = TCG\Voyager\Models\Post::orderBy('created_at','desc')->get();
    $categories = TCG\Voyager\Models\Category::all();
    return view('blog', compact('posts'), compact('categories'));
});

Route::get('/blog/{slug}', function ($slug) {
    $post = TCG\Voyager\Models\Post::where('slug', '=', $slug)->firstOrFail();
    $categories = TCG\Voyager\Models\Category::all();
    return view('blog-single', compact('post'), compact('categories'));
});

Route::get('/text-books', function () {
    return view('text-books');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
