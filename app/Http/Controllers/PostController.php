<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\user;

class PostController extends Controller
{
    //
    public function savePost(){
        $newPost=new Post([
            'title'=>"This is title",
            'content'=>"Contents can be save or not lets see"
        ]);
        $newPost->save();
    }

    public function multiplePost(){
        $cts = user::where('name', 'cts')->first();
        $tech = user::where('name', 'tech')->first();

        $cts->posts()->create([
        'title' => "cts's Post 1",
        'content' => "This is cts's third post.",
        ]);

        $tech->posts()->create([
            'title' => "tech's Post 3",
            'content' => "This is tech's third post.",
        ]);

        $cts->posts()->create([
            'title' => "cts's Post 2",
            'content' => "This is cts's second post.",
        ]);
    
        $tech->posts()->create([
                'title' => "tech's Post 2",
                'content' => "This is tech's second post.",
        ]);
    
    return "<h1>Done Successfully</h1>";

    }

}
