<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function add(){
        DB::table('posts') -> insert(
            ['title' => 'Post 3','content' => 'Content 3', 'user_id' => 17]
        );
    }
    function show(){

            // $posts = DB::table('posts')->select('title','content')->get();
            // foreach($posts as $post){
            //     echo $post->title;
            //     echo "<br>";
            // }
            // return $posts;
            // $posts = DB::table('posts')->where('id', 3)->first();
            // echo $posts -> title;
            // print_r($posts);
            // $numer_posts = DB::table('posts')->where('user_id',2)->count();
            // echo $numer_posts;


            // $max = DB::table('posts')->max('user_id');
            // $min = DB::table('posts')->min('user_id');
            // $avg = DB::table('posts')->avg('user_id');
            // // echo $max;
            // // echo $min;
            // echo $avg;


        //     $post = DB::table('posts')
        //     ->join('users','user_id','=','posts.user_id')
        //     ->select('users.name','posts.title')
        //     ->get();

        // print_r($post);
        // // return $post;

        // $post = DB::table('posts')
        // ->where('user_id',17)
        // ->get();

        // echo "<pre>";
        // print_r($post);
        // echo "</pre>";
        // $post = DB::table('posts')
        // ->where(
        //     [
        //         ['title','like','%iphone%',],
        //         ['votes','<>',0]
        //     ]
        // )
        // ->get();
        // $post = DB::table('posts')
        // ->where('votes','<',20)
        // ->orWhere('user_id','=',17)
        // ->get();
        // $post = DB::table('posts')
        // ->selectRaw("COUNT('id') as number_posts, user_id")
        // ->groupBy('user_id')
        // ->get();

        // $post = DB::table('posts')
        // ->orderBy('votes','desc')
        // ->get();

        $post = DB::table('posts')
        ->offset(2)
        ->limit(3)
        ->get();

        echo "<pre>";
        print_r($post);
        echo "</pre>";
    }
    function update($id){

        $post=Post::where('id',$id)
        ->update(
            [
                'title' => 'Create',
                'content' => 'Content',
                'user_id' => 3,
                'votes' =>30
            ]
        );
    }



    function delete($id){


        // $post = Post::find($id);
        // $post->delete();

        // Post::where('user_id',3)->delete();



        // Post::destroy($id);

        // Post::destroy([3,9]);



        $post = Post::find($id);
        $post->delete();

        $post = Post::withTrashed()->find($id);
        $post->restore();
    }

    function read(){
        // $post = Post::all();
        // echo"<pre>";
        // print_r($post);
        // echo "</pre>";
        // return $post;

        // $post = Post::where('title', 'like','%iphone%')->get();
        // $post = Post::where('user_id', 2)->first();

        // $post = Post::find(2);
        // $post = Post::find([2,7]);
        // $post = Post::orderBy('votes','desc')
        // ->get();


        // $post = Post::selectRaw("COUNT('id') as number_posts,user_id")
        // ->groupBy('user_id')
        // ->orderBy('number_posts','desc')
        // ->get();


        // $post = Post::limit(2)
        // ->offset(1)
        // ->get();
        // return $post;

        // $post = Post::where('user_id',17)->first();

        // return $post->title;




        // $post = Post::where('title','like','%iphone%')->get();
        // return $post;



        // $post = Post::withTrashed()
        // ->get();

        // $post = Post::onlyTrashed()
        // ->get();

        // return $post;



        // $img = Post::find(2)
        // ->FeatureImages;

        // return $img;


        $user = Post::find(2)
        ->user;

        $post = User::find(2)
        ->post;

        return $post;
    }
    function restore($id){
        Post::onlyTrashed()
        ->where('id',$id)
        ->restore();
    }
    function permanentlyDelete($id){
        Post::onlyTrashed()
        ->where('id',$id)
        ->forceDelete();
    }
}
