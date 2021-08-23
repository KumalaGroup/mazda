<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Beranda extends Controller
{
    public function index(Request $request)
    {
        $uri = parent::$baseUri.'home'; 
        $response = Http::withToken(parent::$token)->get($uri);
        $data = $response->json()['data'];
        
        $index = 'home';
        $baseImg = parent::$baseImg;
        $class = '';
        
        return view('home',compact('data','index','baseImg','class'));
    }
}
