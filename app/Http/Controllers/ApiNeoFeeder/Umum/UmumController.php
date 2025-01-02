<?php

namespace App\Http\Controllers\ApiNeoFeeder\Umum;

use Illuminate\Http\Request;
use Curl\Curl;


class UmumController
{

    public function index()
    {
        echo "Halaman API";

    }
    
    public function GetToken()
    {
        // URL API
        $url = 'http://localhost:3003/ws/live2.php'; // Ganti dengan URL endpoint API
        // Data yang akan dikirim
        $data = [
            'act' => 'GetToken',
            'username' => '213622',
            'password' => 'K4mpushijau!'
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
            $token = $curl->response->data->token;
            // Simpan session
            session()->put('token', $token);
            session()->put('apiUrl', $url);
        }

    }

    public function GetPeriode(Request $request)
    {
        // Ambil token dari session
        $token = $request->session()->get('token');
        $url = $request->session()->get('apiUrl');
        // Data yang akan dikirim
        $data = [
            'act' => 'GetPeriode',
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
                'jumlah' => $curl->response->jumlah,
                'data' => $curl->response->data
            ]);
        }
    }

    public function GetDictionary(Request $request)
    {
        // Ambil token dari session
        $token = $request->session()->get('token');
        $url = $request->session()->get('apiUrl');
        // Data yang akan dikirim
        $data = [
            'act' => 'GetDictionary',
            'token' => $token,
            'fungsi' => 'getPeriode'
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
                'data' => $curl->response
            ]);
        }
    }
}
