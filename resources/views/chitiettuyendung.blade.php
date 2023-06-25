@extends('layout.trangchu')
@section('content')
@if($chitiettuyendung)

<style>
    #clock {
        width: 196px;
    margin-top: -6px;
    display: block;
    }
</style>
<div class="job-post-company pt-1 pb-120">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Left Content -->
            <div class="col-xl-7 col-lg-8">
                <!-- job single -->
                <!-- <div class="single-job-items mb-50">
                    <div class="job-items">
                        <div class="company-img company-img-details">
                            <a href="#"><img src="../img/pngtree-b-logo-png-image_3604523.jpg" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="#">
                                <h4>Công ty TNHH cầu nối Mekong</h4>
                            </a>
                        </div>
                    </div>
                </div> -->
                <!-- job single End -->

                <div class="job-post-details">
                    <div class="post-details1 mb-50">
                        <!-- Small Section Tittle -->
                        <!-- <div class="small-section-tittle">
                            <h2>{{$chitiettuyendung->title}}</h2>
                        </div> </br> -->
                        <p>{!! $chitiettuyendung->content !!}</p>
                    </div>
                </div>

            </div>
            <!-- Right Content -->
            <div class="col-xl-4 col-lg-4">
                @if(isset($data))
                <div class="card mb-50" style="color: #4B515D; border-radius: 35px;">
                    <div class="card-body p-4">

                        <div class="d-flex">
                            <h6 class="flex-grow-1">{{$data['name']}}</h6>
                           
                            <p class=" " style="height:30px;">
                                <span id="clock" class="relative top-1">Chủ nhật, Ngày 25/6/2023 12:27:18 AM</span>
                            </p>
                            <script type="text/javascript">
                                /*<![CDATA[*/
                                function refrClock() {
                                    var i = new Date();
                                    var n = i.getSeconds();
                                    var e = i.getMinutes();
                                    var f = i.getHours();
                                    var k = i.getDay();
                                    var c = i.getDate();
                                    var g = i.getMonth();
                                    var j = i.getFullYear();
                                    var l = new Array("Chủ nhật", "Thứ hai", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7");
                                    var b = new Array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");
                                    var a;
                                    if (n < 10) {
                                        n = "0" + n
                                    }
                                    if (e < 10) {
                                        e = "0" + e
                                    }
                                    if (f > 12) {
                                        f -= 12;
                                        AM_PM = "PM"
                                    } else {
                                        AM_PM = "AM"
                                    }
                                    if (f < 10) {
                                        f = "0" + f
                                    }
                                    document.getElementById("clock").innerHTML = l[k] + ", Ngày " + c + "/" + b[g] + "/" + j + " " + f + ":" + e + ":" + n + " " + AM_PM;
                                    setTimeout("refrClock()", 1000)
                                }
                                refrClock(); /*]]>*/
                            </script>
                        </div>

                        <div class="d-flex flex-column text-center mt-5 mb-4">
                            <h6 class="display-4 mb-0 font-weight-bold" style="color: #1C2331;"> {{ $data['main']['temp'] }}°C </h6>
                            <span class="small" style="color: #868B94">{{ $data['weather'][0]['description'] }}</span>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1" style="font-size: 1rem;">
                                <div><i class="fas fa-wind fa-fw" style="color: #868B94;"></i> <span class="ms-1"> 40 km/h
                                    </span></div>
                                <div><i class="fas fa-tint fa-fw" style="color: #868B94;"></i> <span class="ms-1"> 84% </span>
                                </div>
                                <div><i class="fas fa-sun fa-fw" style="color: #868B94;"></i> <span class="ms-1"> 0.2h </span>
                                </div>
                            </div>
                            <div>
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-weather/ilu3.webp" width="100px">
                            </div>
                        </div>

                    </div>
                </div>
                @endif
                <div class="post-details3  mb-50">
                    <!-- Small Section Tittle -->
                    <div class="small-section-tittle">
                        <h4>Job Overview</h4>
                    </div>
                    <ul>
                        <li>Ngày đăng : <span>2022-03-29</span></li>
                        <li>Địa điểm : <span>TP Vinh</span></li>
                        <li>Số lượng : <span>5</span></li>
                        <li>Hình thức : <span>Dài hạn</span></li>
                        <li>Trợ cấp : <span>Thỏa thuận theo năng lực</span></li>
                        <li>Giới tính : <span>Nam</span></li>
                        Hạn nộp cv : <span>2022-10-30</span></li>

                    </ul>
                    <div class="apply-btn2">
                        <a href="/ung-tuyen" class="btn">Ứng tuyển</a>
                    </div>
                </div>
                <div class="post-details4  mb-50">
                    <!-- Small Section Tittle -->
                    <div class="small-section-tittle">
                        <h4>Company Information</h4>
                    </div>
                    <span>Colorlib</span>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout.</p>
                    <ul>
                        <li>Name: <span>Colorlib </span></li>
                        <li>Web : <span> colorlib.com</span></li>
                        <li>Email: <span>mekong@gmail.com</span></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
@endif
@endsection