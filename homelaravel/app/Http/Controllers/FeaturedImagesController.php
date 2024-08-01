<?php

namespace App\Http\Controllers;

use App\Models\FeaturedImages;
use Illuminate\Http\Request;

class FeaturedImagesController extends Controller
{
    function read(){
        $post = FeaturedImages::find(2)
        ->post;

        return $post;
    }
}
