<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/{any?}', function () {
    return view('app');
});
// Route::get('upload-file', function () {
//     // \Storage::disk('google')->put('google-drive.txt', 'Google Drive As Filesystem In Laravel (ManhDanBlogs)');
//     // dd('Đã upload file lên google drive thành công!');

//     // $files = Storage::disk('local')->allFiles();
//     // $key = array_rand($files);

//     $pro = Product::find(1);

//     // dd($pro);

//     dd(Storage::disk('google')->url($pro->image, now()->addMinutes(5)));
// });