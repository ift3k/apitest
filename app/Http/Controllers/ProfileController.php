<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
    //fetching api data
    public function fetch()
    {
        $data = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        return view('profiles',['data' => $data ]);
    }
}
