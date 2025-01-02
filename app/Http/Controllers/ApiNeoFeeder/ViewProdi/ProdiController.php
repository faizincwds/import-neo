<?php

namespace App\Http\Controllers\ApiNeoFeeder\ViewProdi;

use Illuminate\Http\Request;
use Curl\Curl;


class ProdiController
{

    public function index()
    {
        echo "Halaman API";

    }
    

    public function GetAllProdi(Request $request)
    {
        // Ambil token dari session
        $token = $request->session()->get('token');
        $url = $request->session()->get('apiUrl');
        // Data yang akan dikirim
        $data = [
            'act' => 'GetAllProdi',
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

    public function GetProdi(Request $request)
    {
        // Ambil token dari session
        $token = $request->session()->get('token');
        $url = $request->session()->get('apiUrl');
        // Data yang akan dikirim
        $data = [
            'act' => 'GetProdi',
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

    public function GetCountProdi(Request $request)
    {
        // Ambil token dari session
        $token = $request->session()->get('token');
        $url = $request->session()->get('apiUrl');
        // Data yang akan dikirim
        $data = [
            'act' => 'GetCountProdi',
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
