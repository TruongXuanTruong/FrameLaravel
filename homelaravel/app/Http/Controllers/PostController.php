<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function add(){
        DB::table('posts') -> insert(
            ['title' => 'Post 1','content' => 'Content 1', 'user_id' => 1]
        );
    }
    function show(){

            // $posts = DB::table('posts')->select('title','content')->get();
            // foreach($posts as $post){
            //     echo $post->title;
            //     echo "<br>";
            // }
            // return $posts;
            $posts = DB::table('posts')->select('title','content')->first();
            print_r($posts);
    }
}
