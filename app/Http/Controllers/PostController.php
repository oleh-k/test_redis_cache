<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::all();
    }

    public function indexCache()
    {
        return 'indexCache';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        return Post::factory()->count(1000)->create();
    }

    public function storeCache()
    {
        return 'storeCache';
    }

}
