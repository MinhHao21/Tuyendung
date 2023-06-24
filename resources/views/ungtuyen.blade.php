@extends('layout.trangchu')
@section('content')
<style>
    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
    }

    textarea,
    input[type="file"],
    input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 14px;
    }

    button[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>


<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <label for="email">Email của bạn:</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="diachi">Địa chỉ:</label>
    <input type="text" name="diachi" id="diachi" required><br><br>

    <label for="hoten">Họ tên của bạn:</label>
    <input type="text" name="hoten" id="hoten" required><br><br>

    <label for="sodienthoai">Điện thoại của bạn:</label>
    <input type="text" name="sodienthoai" id="sodienthoai" required><br><br>

    <label for="file">File:</label>
    <input type="file" name="file" id="file" required><br><br>




    <button type="submit" name="submit">Nộp CV</button>
</form>
@endsection