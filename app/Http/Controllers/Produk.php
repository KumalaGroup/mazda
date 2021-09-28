<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;

class Produk extends Controller
{
    public function detail($id)
    {
        $uri      = parent::$baseUri . 'produk/' . Crypt::decryptString($id);
        $response = Http::withoutVerifying()->withToken(parent::$token)->get($uri);

        $data = $response->json()['data'];

        $index   = 'produk';
        $baseImg = parent::$baseImg;

        // dd($data);
       
        $details['nama']   = $data['product']['to_models'][0]['nama_model'];
        $details['harga']  = 'Rp.'.number_format($data['product']['harga'],'0',',','.');
        $details['desc']   = $data['product']['deskripsi'];
        $details['brosur'] = $baseImg.'otomotif/brosur/'.$data['product']['brosur'];
        $details['img']    = $baseImg.'otomotif/'.$data['product']['gambar'];
        $details['warna']  = $data['warna'];
        // dd($details);
        return view('detail',compact('data','index','baseImg','details'));
    }
}
