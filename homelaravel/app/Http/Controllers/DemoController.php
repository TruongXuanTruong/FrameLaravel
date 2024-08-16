<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;


class DemoController extends Controller
{
    //
    function sendmail(){
        $data = [
            'key1' => 'Dữ liệu được truyền vào Laravel'
        ];
        Mail::to('txt.franky28@gmail.com')->send(new DemoMail($data));
    }
}
