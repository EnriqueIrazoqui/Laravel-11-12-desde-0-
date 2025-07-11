<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegundoControlador extends Controller
{
    function index()
    {
        $posts = ['post1', 'post2'];
        //return view('contact/contact', ['posts'=> $posts]);
        return view('contact/contact', compact('posts'));
    }

    function otro($post=60, $otro=60)
    {
        echo $post;
        echo $otro;
    }
}
