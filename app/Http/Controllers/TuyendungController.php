<?php

namespace App\Http\Controllers;
use GNAHotelSolutions\Weather\Weather;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\sinhvien;
use Illuminate\Tests\Integration\Queue\Order;

class TuyendungController extends Controller
{
    
    public function trangchu()
    {
        $baituyendung = Post::orderBy('id', 'desc')->take(4)->get();
        
        return view('home', [
            'baituyendung' => $baituyendung,

        ]);
    }

    public function tuyendung($slug)
    {
        $chitiettuyendung = Post::where('slug', $slug)->firstOrFail();

        $ungtuyen = sinhvien::all();
        
        return view('chitiettuyendung', [
            'ungtuyen' =>$ungtuyen,
            
            'chitiettuyendung' => $chitiettuyendung,
        ]);
    }

    public function ungtuyen()
    {
        $ungtuyen = sinhvien::all();
        return view('ungtuyen', [
            
            'ungtuyen' =>$ungtuyen,
        ]);
    }

    // public function phanhoi(Request  $request)
    // {
    //     $hoten = $request->input('hoten');
    //     $email = $request->input('email');
    //     $diachi = $request->input('diachi');
    //     $sodienthoai = $request->input('sodienthoai');
    //     if ($request->hasFile('file')) {
    //         $file = $request->file('file');
    //         $path = $file->store('uploads');
    //         // Lưu file vào thư mục 'uploads' và lấy đường dẫn lưu trữ
    
    //         // Lưu thông tin về file vào CSDL
    //         $fileModel = new sinhvien();
    //         $fileModel->filecv = $file->getClientOriginalName();
    //         $fileModel->save();
    // }

    //     $thongtinphanhoi = new sinhvien();
    //     $thongtinphanhoi->hoten = $hoten;
    //     $thongtinphanhoi->email = $email;
    //     $thongtinphanhoi->diachi = $diachi;
    //     $thongtinphanhoi->sodienthoai = $sodienthoai;
    //     $thongtinphanhoi->trangthai = 'Chờ xét duyệt';
    //     $thongtinphanhoi->save();



    //     return redirect('/ung-tuyen')->with('status', 'Phản hồi của bạn đã được gửi. Chúng tôi sẽ sớm phản hồi lại!');
    // }

    public function danhmuc()
    {
        $datas = getDanhmuc(null);
        return $datas;
    }
    
    public function phanhoi(Request $request)
{

    $thongtinphanhoi = new sinhvien();
    $thongtinphanhoi->hoten = $request->input('hoten');
    $thongtinphanhoi->email = $request->input('email');
    $thongtinphanhoi->diachi = $request->input('diachi');
    $thongtinphanhoi->sodienthoai = $request->input('sodienthoai');
    $thongtinphanhoi->trangthai = 'Chờ xét duyệt';
    
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->storeAs('public', $fileName); // Lưu file vào thư mục 'uploads' với tên gốc của file

        // Lưu thông tin về file vào CSDL
        
        $thongtinphanhoi->filecv = $fileName;
        $thongtinphanhoi->path = $filePath;
        $thongtinphanhoi->save();
    }
    $thongtinphanhoi->save();

    return redirect('/ung-tuyen')->with('status', 'Phản hồi của bạn đã được gửi. Chúng tôi sẽ sớm phản hồi lại!');
}


public function getWeather()
{
    $weather = new Weather();

    $currentWeather = $weather->getCurrentWeatherByCityName('Ho Chi Minh');

    $temperature = $currentWeather->temperature();
    $description = $currentWeather->description();

    return view('weather', compact('temperature', 'description'));
}
}
