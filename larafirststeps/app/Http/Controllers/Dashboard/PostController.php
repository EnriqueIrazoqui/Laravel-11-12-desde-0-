<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::find(1);
        $category = Category::find(1);

        dd($category->posts[0]);

        // return response('Hello World', 200)
        //         ->header('Content-Type', 'text/plain');

        // return response()->json([
        //     'name' => 'Enrique',
        //     'state' => 'Dead',
        // ]);

    //    $post = Post::find(2)->delete();

       //$post->delete();

    //    $post->update(
    //         [
    //             'title' => 'test new title',
    //             'slug' => 'test slug',
    //             'description' => 'test description',
    //             'content' => 'test content',
    //             'image' => 'test image',
    //         ]
    //         );

            // dd($post);


        // Post::create(
        //     [
        //         'title' => 'test title',
        //         'slug' => 'test slug',
        //         'description' => 'test description',
        //         'content' => 'test content',
        //         'image' => 'test image',
        //         'posted' => 'not',
        //         'category_id' => 1,
        //         'update_at' => '2025-07-16 18:38:02',
        //         'created_at' =>'2025-07-16 18:38:02',
        //     ]
        //     );
        return 'Index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //›
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
