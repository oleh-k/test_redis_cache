<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Redis;

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

        $data = Redis::get('posts');
        
        if (!$data) {
            $data = Post::all();
            Redis::set('posts', $data, 'EX', 36000);
        }
        return $data;

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
