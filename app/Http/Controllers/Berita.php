<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Berita extends Controller
{
    
    public function index()
    {
        $uri      = parent::$baseUri.'berita';
        $response = Http::withoutVerifying()->withToken(parent::$token)->get($uri);

        $data     = $response->json()['data'];

        $index    = 'berita';
        $baseImg  = parent::$baseImg;

        return view('berita',compact('data','index','baseImg'));
    }

    public function detail($slug)
    {
        $uri      = parent::$baseUri.'berita/'.$slug;
        $response = Http::withoutVerifying()->withToken(parent::$token)->get($uri);

        $data     = $response->json()['data'];
        $baseImg  = parent::$baseImg;

        $content['header']  = ucfirst($data['blog']['type']);
        $content['judul']   = ucwords($data['blog']['judul']);
        $content['desc']    = $data['blog']['deskripsi'];
        $content['gambar']  = $baseImg.'berita/'.$data['blog']['gambar'];
        $content['tanggal'] = Carbon::parse($data['blog']['created_at'])->formatLocalized('%d %B %Y');
        
        return view('detailBerita',compact('data','baseImg','content'));
    }
}
