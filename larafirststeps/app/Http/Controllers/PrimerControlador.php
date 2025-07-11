<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index()
    {
        //return view('contact/contact', ['name' => 'Enrique']);
        $posts = ['post1', 'post2'];
        //return view('contact/contact', ['posts'=> $posts]);
        return view('contact/contact', compact('posts'));
    }



}
