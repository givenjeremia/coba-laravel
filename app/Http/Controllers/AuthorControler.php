<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorControler extends Controller
{
    public function index()
    {
        return view(
            'posts',
            [
                'title' => 'User Posts',
                'posts' => User::all(),
            ]
    
        );
    } 
    public function show(User $author)
    {
        return view(
            'posts',
            [
                'title' => "Post By Author : $author->name",
                'posts' => $author->posts->load('category','user'),
            ]
    
        );
    }
}
