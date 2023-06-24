<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KyanhController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\NghesynghenhanController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AudioController;
use App\Http\Controllers\DisannghethuatController;
use App\Http\Controllers\VanbanController;
use App\Http\Controllers\FileuploadController;
use App\Http\Controllers\TuyendungController;
use App\Models\Fileupload;

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
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/check', [DanhmucController::class, 'check'])->name('khieunaitocaos.check');

Route::get('/check-post', [DanhmucController::class, 'checkpost'])->name('khieunaitocaos.checkpost');


// file upload
Route::get('/xoa-file', [FileuploadController::class, 'xoafile'])->name('khieunaitocaos.xoafile');
Route::get('/xoa-uuid', [FileuploadController::class, 'xoauuid'])->name('khieunaitocaos.xoauuid');
Route::get('/load-file', [FileuploadController::class, 'loadfile'])->name('khieunaitocaos.loadfile');
Route::post('/uploads', [FileuploadController::class, 'fileupload'])->name('khieunaitocaos.fileupload');
Route::get('/config', [FileuploadController::class, 'config'])->name('khieunaitocaos.config');

#Route::get('/lien-he(đường dẫn)', [ProPhuongnamController::class, 'lienhe (tên fublic trong controller)'])->name('pn.lienhe (là controller) ');


// Route::get('/chi-tiet-nghe-sy/{slug}', [NghesynghenhanController::class, 'chitiet'])->name('nghesy.chitiet');

// Route::get('/van-ban', [DanhmucController::class, 'vanban'])->name('vanban.vanban');
// Route::get('/video', [VideoController::class, 'danhsach'])->name('video.danhsach');
// Route::get('/chi-tiet-video/{slug}', [VideoController::class, 'chitiet'])->name('video.chitiet');
// Route::get('/chi-tiet-audio/{slug}', [AudioController::class, 'chitiet'])->name('audio.chitiet');
// Route::get('/chi-tiet-di-san-nghe-thuat/{slug}', [DisannghethuatController::class, 'chitiet'])->name('disannghethuat.chitiet');

// Route::get('/', [PostController::class, 'trangchulocha'])->name('posts.home');
Route::get('/danhmuccon/{id}', [DanhmucController::class, 'danhmuccon'])->name('post.danhmuccon');
// //Route::get('/bai-viet', [KyanhController::class, 'gioithieu'])->name('kyanh.gioithieu');
// Route::get('/co-cau-to-chuc', [KyanhController::class, 'gioithieu'])->name('kyanh.gioithieu');
Route::get('/chi-tiet/{slug}', [DanhmucController::class, 'chitiet'])->name('post.chitiet');
Route::get('/danh-muc-so-tp', [DanhmucController::class, 'danhmuchacon'])->name('posts.danhmuchacon');

// Route::get('/van-ban/{slug}', [DanhmucController::class, 'vanban'])->name('posts.vanban');
Route::get('/hoi-dap', [DanhmucController::class, 'hoidap'])->name('posts.hoidap');
// Route::get('/lien-he', [KyanhController::class, 'lienhe'])->name('posts.lienhe');
Route::post('/luu-cau-hoi', [DanhmucController::class,'luuhd'])->name('posts.luuhd');
Route::get('/lich-cong-tac', [DanhmucController::class, 'lichcongtac'])->name('posts.lichcongtac');

Route::get('/ajax-van-ban', [DanhmucController::class, 'ajaxvanban'])->name('posts.ajaxvanban');
Route::get('/van-ban-tinh', [DanhmucController::class, 'vanbantinh'])->name('posts.vanbantinh');
Route::get('/van-ban-huyen', [DanhmucController::class, 'vanbanhuyen'])->name('posts.vanbanhuyen');
Route::get('/van-ban-chi-tiet/{id}', [DanhmucController::class, 'vanbanchitiet'])->name('posts.vanbanchitiet');
Route::get('/so-do-website', [DanhmucController::class, 'sodowebsite'])->name('posts.sodowebsite');
Route::get('/di-san-dan-ca/{slug}', [DanhmucController::class, 'chitietdisan'])->name('chitietdisan');
// Route::get('/he-thong-cau-lac-bo/{slug}', [CaulacboController::class, 'chitietdisan'])->name('chitietdisan');

// Route::get('/reloadNghenhan', [NghesynghenhanController::class, 'reloadNghenhan'])->name('reloadNghenhan');
// Route::get('/getDiaban', [NghesynghenhanController::class, 'getDiaban'])->name('getDiaban');


Route::get('/thu-vien-anh/{slug}', [DanhmucController::class, 'thuvienanh'])->name('thuvienanh.index');

// Route::get('/', [PostController::class, 'trangchulocha'])->name('layout.trangchu');
// Route::get('/du-lieu', [VanbanController::class, 'dulieu'])->name('dulieu');


// Route::get('/tin-tuc/{slug}', [PostController::class, 'tintuc'])->name('posts.tintuc');

// Route::get('/chi-tiet-tin-tuc/{slug}', [PostController::class, 'chitiettintuc'])->name('posts.chitiettintuc');
// Route::get('/tim-kiem', [PostController::class, 'timkiem'])->name('posts.timkiem');
// Route::get('/searchPost', [PostController::class, 'searchPost'])->name('searchPost');
// Route::post('/updateData', [PostController::class, 'updateData'])->name('updateData');
// Route::get('/danh-muc/{table}', [PostController::class, 'danhmuc'])->name('danhmuc');
// Route::get('/listPost', [PostController::class, 'listPost'])->name('listPost');

// Route::get('/list', [PostController::class, 'list'])->name('list');
Route::get('/', [TuyendungController::class, 'trangchu'])->name('trangchu');
// Route::get('/tin-tuc/{slug}', [TuyendungController::class, 'tintuc'])->name('posts.tintuc');
Route::get('/chi-tiet-tuyen-dung/{slug}', [TuyendungController::class, 'tuyendung'])->name('chitiettuyendung');
Route::get('/ung-tuyen', [TuyendungController::class, 'ungtuyen'])->name('ungtuyen');
Route::post('/ung-tuyen', [TuyendungController::class, 'phanhoi'])->name('ungtuyen');
Route::get('/danh-muc', [TuyendungController::class, 'danhmuc'])->name('posts.danhmuchacon');










