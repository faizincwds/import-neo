<?php

namespace App\Http\Controllers\ApiNeoFeeder\DataMahasiswa;

use Illuminate\Http\Request;
use Curl\Curl;


class MahasiswaController
{

    public function index()
    {
        echo "Halaman API Mahasiswa";

    }
    
    public function GetListMahasiswa(Request $request)
    {
        // Ambil token dari session
        $token = $request->session()->get('token');
        $url = $request->session()->get('apiUrl');
        // Data yang akan dikirim
        $data = [
            'act' => 'GetListMahasiswa',
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
                 $curl->response->data
            ]);
        }

    }

    public function GetBiodataMahasiswa(Request $request)
    {
        // Ambil token dari session
        $token = $request->session()->get('token');
        $url = $request->session()->get('apiUrl');
        // Data yang akan dikirim
        $data = [
            'act' => 'GetBiodataMahasiswa',
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
                 $curl->response->data
            ]);
        }

    }

    
    public function InsertBiodataMahasiswa(Request $request)
    {
        // Ambil token dari session
        $token = $request->session()->get('token');
        $url = $request->session()->get('apiUrl');
        // Data yang akan dikirim
        $data = [
                "act" => "InsertBiodataMahasiswa",
                "token" => $token,
                "record" => [
                    "nama_mahasiswa" => "Pangeran Ridwan",
                    "jenis_kelamin" => "L",
                    "tempat_lahir" => "Banggai",
                    "tanggal_lahir" => "2001-03-03",
                    "id_agama" => 1,
                    "nik" => "8208060305400002",
                    "nisn" => null,
                    "npwp" => null,
                    "kewarganegaraan" => "ID",
                    "jalan" => "Jl. Raya tanjung situ",
                    "dusun" => null,
                    "rt" => 5,
                    "rw" => 0,
                    "kelurahan" => "Kelurahan Tanjung Situ",
                    "kode_pos" => null,
                    "id_wilayah" => 999999,
                    "id_jenis_tinggal" => 1,
                    "id_alat_transportasi" => null,
                    "telepon" => null,
                    "handphone" => null,
                    "email" => null,
                    "penerima_kps" => 0,
                    "nomor_kps" => null,
                    "nik_ayah" => "8208060305400001",
                    "nama_ayah" => "Ayahku",
                    "tanggal_lahir_ayah" => "1980-10-01",
                    "id_pendidikan_ayah" => 35,
                    "id_pekerjaan_ayah" => 6,
                    "id_penghasilan_ayah" => 13,
                    "nik_ibu" => "8208060305400001",
                    "nama_ibu_kandung" => "Ibuku",
                    "tanggal_lahir_ibu" => "1982-01-04",
                    "id_pendidikan_ibu" => 20,
                    "id_pekerjaan_ibu" => 9,
                    "id_penghasilan_ibu" => 14,
                    "nama_wali" => null,
                    "tanggal_lahir_wali" => null,
                    "id_pendidikan_wali" => null,
                    "id_pekerjaan_wali" => null,
                    "id_penghasilan_wali" => null,
                    "id_kebutuhan_khusus_mahasiswa" => 0,
                    "id_kebutuhan_khusus_ayah" => 0,
                    "id_kebutuhan_khusus_ibu" => 0
                ]
            ]
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
                 $curl->response->data
            ]);
        }

    }

    public function UpdateBiodataMahasiswa(Request $request)
    {
        // Ambil token dari session
        $token = $request->session()->get('token');
        $url = $request->session()->get('apiUrl');
        // Data yang akan dikirim
        $data = [
            'act' => 'UpdateBiodataMahasiswa',
            'token' => $token,
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
                 $curl->response->data
            ]);
        }

    }

    public function DeleteBiodataMahasiswa(Request $request)
    {
        // Ambil token dari session
        $token = $request->session()->get('token');
        $url = $request->session()->get('apiUrl');
        $id_mahasiswa = 'd835a572-4d51-420c-a470-428be55c08b3';

        // Data yang akan dikirim
        $body = '{
                  "act": "DeleteBiodataMahasiswa",
                  "token": "'.$token.'",
                  "key": {
                    "id_mahasiswa": "'.$id_mahasiswa.'"
                  }
                }';

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
                 $curl->response->data
            ]);
        }

    }
}
