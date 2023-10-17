<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::find(1);
        //compact
        $array = [1, 2, 3, 4, 'alan'];
        $html = "<h1>Titulo</h1>";
        return view('Post.welcome', compact('array','user','html'));
        //return view('Post.welcome', ['user' => $user, 'html' => '<h1>Titulo</h1>', 'array' => [1, 2, 3, 4, 'alan']]);
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
