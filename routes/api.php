<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ApiNeoFeeder\Umum\umumController;
use App\Http\Controllers\ApiNeoFeeder\ViewPT\profilPTController;
use App\Http\Controllers\ApiNeoFeeder\ViewProdi\prodiController;
use App\Http\Controllers\ApiNeoFeeder\DataMahasiswa\mahasiswaController;
use Curl\Curl;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



// Umum 
Route::get('/', [umumController::class, 'index']);
Route::get('/GetToken', [umumController::class, 'GetToken']);
Route::get('/GetDictionary', [umumController::class, 'GetDictionary']);
Route::get('/GetPeriode', [umumController::class, 'GetPeriode']);

// ViewPT
Route::get('/GetAllPT', [profilPTController::class, 'GetAllPT']);
Route::get('/GetProfilPT', [profilPTController::class, 'GetProfilPT']);
Route::get('/GetCountPerguruanTinggi', [profilPTController::class, 'GetCountPerguruanTinggi']);

// ViewProdi
Route::get('/GetAllProdi', [prodiController::class, 'GetAllProdi']);
Route::get('/GetProdi', [prodiController::class, 'GetProdi']);
Route::get('/GetCountProdi', [prodiController::class, 'GetCountProdi']);

// Data Mahasiswa
Route::get('/GetListMahasiswa', [mahasiswaController::class, 'GetListMahasiswa']);
Route::get('/GetBiodataMahasiswa', [mahasiswaController::class, 'GetBiodataMahasiswa']);
Route::get('/InsertBiodataMahasiswa', [mahasiswaController::class, 'InsertBiodataMahasiswa']);
Route::get('/UpdateBiodataMahasiswa', [mahasiswaController::class, 'UpdateBiodataMahasiswa']);
Route::get('/DeleteBiodataMahasiswa', [mahasiswaController::class, 'DeleteBiodataMahasiswa']);



//BELAJAR

// Route::get('/test-http-client', function () {
//     $response = Http::get('https://jsonplaceholder.typicode.com/posts');

//     return $response->json(); // Kembalikan hasil respons dalam format JSON
// });

// Route::get('/get-posts', function () {
//     $response = Http::get('https://jsonplaceholder.typicode.com/posts');

//     if ($response->successful()) {
//         return $response->json(); // Mengembalikan data
//     }

//     return response()->json(['error' => 'Failed to fetch data'], 500);
// });

// Route::post('/create-post', function () {
//     $data = [
//         'title' => 'Belajar Laravel',
//         'body' => 'Ini adalah contoh POST request menggunakan Laravel HTTP Client.',
//         'userId' => 1,
//     ];

//     $response = Http::post('https://jsonplaceholder.typicode.com/posts', $data);

//     if ($response->successful()) {
//         return $response->json();
//     }

//     return response()->json(['error' => 'Failed to create post'], 500);
// });


// // Menambahkan header, seperti Authorization token:
// Route::get('/protected-resource', function () {
//     $response = Http::withHeaders([
//         'Authorization' => 'Bearer your_api_token_here',
//         'Accept' => 'application/json',
//     ])->get('https://api.example.com/protected-resource');

//     if ($response->successful()) {
//         return $response->json();
//     }

//     return response()->json(['error' => 'Unauthorized access'], 401);
// });


// // Request dengan Query Parameters
// Route::get('/search', function () {
//     $queryParams = [
//         'query' => 'Laravel',
//         'page' => 1,
//     ];

//     $response = Http::get('https://api.example.com/search', $queryParams);

//     return $response->json();
// });


// // Menangani status error dari respons:
// Route::get('/error-handling', function () {
//     $response = Http::get('https://api.example.com/failing-endpoint');

//     if ($response->failed()) {
//         return response()->json([
//             'status' => $response->status(),
//             'message' => $response->body(),
//         ], $response->status());
//     }

//     return $response->json();
// });


// Untuk melihat respons secara langsung, gunakan fungsi dd() atau dump() untuk debugging:
// $response = Http::get('https://jsonplaceholder.typicode.com/posts');
// dd($response->json());



