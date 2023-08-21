<?php
use App\Models\post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts');
});


Route::get('posts/{post}', function ($slug) {
	// find a post by its slug and pass it to the view called "post"
	$post=post::find($slug);

	return view('post',['post'=>post::find($slug)]);


});
