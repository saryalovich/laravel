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
use Illuminate\Database\Eloquent\Collection;
Route::get('/', function () {
    return view('welcome');
});
//Route::get('/getUser',function(Request $req){
//	App\
//});
Route::get('/addUser', function (Request $req) {
	header('Access-Control-Allow-Origin:*');
	$id=App\User::insertGetId([
		"user_password"=>$req->password,
		"user_login"=>$req->login,
		"user_email"=>$req->email,
	]);
	return $id;
});
Route::get('/addUser_vol',function(Request $req){
	header('Access-Control-Allow-Origin:*');
	App\Volunteer::create([
		"fio"=>$req->name,
		"pasport"=>$req->pasport,
		"contact_phone"=>$req->phone,
		"user_id"=>$req->user_id,
		"status"=>1,
	]);
	return "djvn";
});
Route::get('/addUser_client',function(Request $req){
	header('Access-Control-Allow-Origin:*');
	App\Client::create([
		"fio_parent"=>$req->name_parent,
		"fio_child"=>$req->name_child,
		"diagnisis"=>$req->diagnosis,
		"limitations"=>$req->limitations,
		"user_id"=>$req->user_id,
		"contact_phone"=>$req->phone,
		"status"=>0,
	]);
	return "djvn";
});
Route::get('/sign_in',function(Request $req){
	header('Access-Control-Allow-Origin:*');
	$user=App\User::where('user_login',$req->login)->where('user_password',$req->password)->get();
	return $user;
});
Route::get('/success',function(Request $req){
	header('Access-Control-Allow-Origin:*');
	$id_1=App\Client::where('user_id',$req->id)->get();
	$id_2=App\Volunteer::where('user_id',$req->id)->get();
	$res = new Collection();
	$result = $res->merge($id_1)->merge($id_2);
	return $result;
});

