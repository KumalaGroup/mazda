<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class Produk extends Controller
{
    public function detail($id)
    {
        $uri      = parent::$baseUri . 'produk/' . Crypt::decryptString($id);
        $response = Http::withoutVerifying()->withToken(parent::$token)->get($uri);

        $data = $response->json()['data'];

        $index   = 'produk';
        $baseImg = parent::$baseImg;

        $str_desc = nl2br($data['product']['deskripsi']);
        $desc_tambahan = nl2br($data['detail_tambahan'][0]['detailTambahan'] ?? '');
                       
        $details['nama']           = $data['product']['to_models'][0]['nama_model'];
        $details['harga']          = 'Rp.'.number_format($data['product']['harga'],'0',',','.');
        $details['desc']           = $str_desc;
        $details['brosur']         = $baseImg.'otomotif/brosur/'.$data['product']['brosur'];
        $details['img']            = $baseImg.'otomotif/'.$data['product']['gambar'];
        $details['warna']          = $data['warna'];
        $details['detailTambahan'] = $desc_tambahan;
        return view('detail',compact('data','index','baseImg','details'));
    }
}
