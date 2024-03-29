<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // protected static $baseUri = 'http://localhost/kumala/ms/public/api/';
    // protected static $baseImg = 'http://localhost/kumalagroup/assets/img_marketing/';
    
    protected static $baseUri = 'https://portal.kumalagroup.co.id/kmg/ms/public/api/';
    protected static $baseImg = 'https://kumalagroup.id/assets/img_marketing/';

    protected static $token;

    public function __construct()
    {
        self::getToken();

        self::$token = session('apiToken');
    }

    public static function auth()
    {
        $auth = ['email' => 'mazda@x.com', 'password' => 'mazdakumala??'];

        $response = Http::withoutVerifying()->withBody(json_encode($auth), 'application/json')->post(self::$baseUri.'auth');
        $result  = $response->json();

        if($result['status'] === true)
        {
           session(['apiToken' => $result['token']]);
        }
    }

    public static function getToken()
    {
        $token = session('apiToken');

        if ($token === null)
        {
            return self::auth();
        }

        $response = Http::withoutVerifying()->withToken($token)->get(self::$baseUri.'auth/validate');
        $result = $response->json();

        if($result['status'] === false)
        {
            return self::auth();
        }
    }
}
