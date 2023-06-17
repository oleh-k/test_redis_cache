<?php

namespace App\Http\Controllers;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'index';
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
        return 'store';
    }

    public function storeCache()
    {
        return 'storeCache';
    }

}
