<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index()
    {
        return view('helloWorld', ['message' => 'Hello, World!']);
    }
}
