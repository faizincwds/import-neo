<?php

namespace App\Http\Controllers\ApiNeoFeeder\ViewPT;

use Illuminate\Http\Request;
use Curl\Curl;


class ProfilPTController
{

    public function index()
    {
        echo "Halaman API";

    }
    

    public function GetAllPT(Request $request)
    {
        // Ambil token dari session
        $token = $request->session()->get('token');
        $url = $request->session()->get('apiUrl');
        // Data yang akan dikirim
        $data = [
            'act' => 'GetAllPT',
            'token' => $token,
            'filter' => '',
            'order' => '',
            'limit' => '',
            'offset' => ''
        ];

        // Inisialisasi PHP-Curl-Class
        $curl = new Curl();
        $curl->setHeader('Content-Type', 'application/json');
        $curl->setHeader('Accept', 'application/json');
        $curl->post($url, json_encode($data));

        // Periksa respons
        if ($curl->error) {
            return response()->json([
                'error' => $curl->errorCode . ': ' . $curl->errorMessage
            ], $curl->errorCode);
        } else {
            return response()->json([
                'data' => $curl->response->data
            ]);
        }
    }

    public function GetProfilPT(Request $request)
    {
        // Ambil token dari session
        $token = $request->session()->get('token');
        $url = $request->session()->get('apiUrl');
        // Data yang akan dikirim
        $data = [
            'act' => 'GetProfilPT',
            'token' => $token,
            'filter' => '',
            'order' => '',
            'limit' => '',
            'offset' => ''
        ];

        // Inisialisasi PHP-Curl-Class
        $curl = new Curl();
        $curl->setHeader('Content-Type', 'application/json');
        $curl->setHeader('Accept', 'application/json');
        $curl->post($url, json_encode($data));

        // Periksa respons
        if ($curl->error) {
            return response()->json([
                'error' => $curl->errorCode . ': ' . $curl->errorMessage
            ], $curl->errorCode);
        } else {
            return response()->json([
                'data' => $curl->response->data
            ]);
        }
    }


    public function GetCountPerguruanTinggi(Request $request)
    {
        // Ambil token dari session
        $token = $request->session()->get('token');
        $url = $request->session()->get('apiUrl');
        // Data yang akan dikirim
        $data = [
            'act' => 'GetCountPerguruanTinggi',
            'token' => $token,
            'filter' => '',
            'order' => '',
            'limit' => '',
            'offset' => ''
        ];

        // Inisialisasi PHP-Curl-Class
        $curl = new Curl();
        $curl->setHeader('Content-Type', 'application/json');
        $curl->setHeader('Accept', 'application/json');
        $curl->post($url, json_encode($data));

        // Periksa respons
        if ($curl->error) {
            return response()->json([
                'error' => $curl->errorCode . ': ' . $curl->errorMessage
            ], $curl->errorCode);
        } else {
            return response()->json([
                'data' => $curl->response->data
            ]);
        }
    }


}
