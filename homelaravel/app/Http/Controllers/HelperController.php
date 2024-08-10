<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    //
    function url()
    {
        // 1.Tạo url cơ bản

        $url = url('login');

        echo $url;
    }
}
