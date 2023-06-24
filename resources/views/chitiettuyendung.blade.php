@extends('layout.trangchu')
@section('content')
@if($chitiettuyendung)
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