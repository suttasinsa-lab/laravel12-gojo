<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get("/homepage", function() {
 	return "<h1>This is home page</h1>" ;
});

Route::get("/blog/{id}", function($id) {
     return "<h1>This is blog page : {$id} </h1>" ;
});

Route::get( "/blog/{id}/edit" , function($id) {
 	return "<h1>This is blog page : {$id} for edit</h1>" ;
});

Route::get("/product/{a}/{b}/{c}", function($a, $b, $c) {
 	return "<h1>This is product page </h1><div>{$a} , {$b}, {$c}</div>" ;
});

Route::get("/hello", function () {	
return view("hello");
});

Route::get('/greeting', function () {

	$name = 'James';
$last_name = 'Mars';

return view('greeting', compact('name','last_name') );
});


Route::get("/teacher" , function (){
	return view("teacher");
});

Route::get("/student" , function (){
	return view("student");
});

Route::get("/theme" , function (){
	return view("theme");
});
