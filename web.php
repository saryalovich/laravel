<?php

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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
Route::get('/post/{n}', function ($n) {
	$categ=App\Category::all();
	$z=App\Post::find($n);
    return view('post',["zapis"=>$z,"results"=>$categ]);
});
Route::get('/', function () {
	$categ=App\Category::all();
    return view('welcome',["results"=>$categ]);
});
Route::get('/posts/{num}', function ($num) {
	$x=App\Post::where('category_id', $num)
		->get();
	$categ=App\Category::all();
    return view('page',["catid"=>$num,"results"=>$categ,"posts"=>$x]);
});
Route::get('/test/{name}', function ($name) {
    App\Category::create([
		"name"=>$name
	]);
});
Route::post('/comment/{id}', function ($id, Request $req) {
    App\Comment::create([
		"body"=>$req->comment_body,
		"post_id"=>$id
	]);
	return back();
});
Route::get('/admin', function () {
    return view('admin');
});
Route::post('/addPost', function (Request $req) {

	$path=Storage::put('public',$req->file('img'));
	$url=Storage::url($path);
	App\Post::create([
		"title"=>$req->title,
		"body"=>$req->body,
		"category_id"=>1,
		"path"=>$url,
			
	]);
	
    
});
Route::get('/ajax', function (Request $req) {
	header('Access-Control-Allow-Origin:*');
	return App\Post::find($req->test);
	
});
Route::get('/getALL', function () {
	header('Access-Control-Allow-Origin:*');
	return App\Item::all();
});