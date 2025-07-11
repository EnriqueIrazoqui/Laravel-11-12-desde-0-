<?php

use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\SegundoControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', [PrimerControlador::class,'index']);
Route::get('otro/{post?}/{otro?}', [SegundoControlador::class,'otro']);

Route::resource('post', PrimerControlador::class);
Route::resource('post', PrimerControlador::class);


// Route::get('/test', function(){
//     return "Welcome";
// });

// Route::get('/test', function(){
//     return view('test');
// });

// Route::get('/crud', function(){
//     return view('crud/index');
// });

// Route::get('/contact', function(){

//     $data = ['name' => 'Test contact'];

//     // return redirect()->route('contact-1');
//     // return to_route('contact-1');

//     return view('contact/contact', $data);
// })->name('contact');

// Route::get('/contact-1', function(){

//        $data = ['name' => 'Test contact 1'];

//     return view('contact/contact-1', $data);
// })->name('contact-1');

