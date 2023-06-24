@extends('layout.trangchu')
@section('content')


 <!-- slider Area Start-->
 <div class="slider-area ">
                <!-- Mobile Menu -->
                <div class="slider-active">
                    <div
                        class="single-slider slider-height d-flex align-items-center"
                        data-background="../css/assets/img/hero/ngoctrinhnha.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-9 col-md-10">
                                    <div class="hero__caption">
                                        <h1>Bạn muốn thực tập ở đâu?</h1>
                                    </div>
                                </div>
                            </div>
                            <!-- Search Box -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="our-services section-pad-t30">
                <div class="container">
                    <!-- Section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center">
                                <h2>DANH MỤC TUYỂN DỤNG THEO NGHÀNH</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-contnet-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-tour"></span>
                                </div>
                                <div class="services-cap">
                                    <h5><a href="list_job.php">Công nghệ thông
                                            tin</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-cms"></span>
                                </div>
                                <div class="services-cap">
                                    <h5><a href="list_job.php">Kế toán</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-report"></span>
                                </div>
                                <div class="services-cap">
                                    <h5><a href="list_job.php">Kinh tế</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-app"></span>
                                </div>
                                <div class="services-cap">
                                    <h5><a href="list_job.php">Công nghệ kỹ
                                            thuật điện</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-helmet"></span>
                                </div>
                                <div class="services-cap">
                                    <h5><a href="list_job.php">Công nghệ thực
                                            phẩm</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-high-tech"></span>
                                </div>
                                <div class="services-cap">
                                    <h5><a href="list_job.php">Công nghệ kỹ
                                            thuật ô tô</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-real-estate"></span>
                                </div>
                                <div class="services-cap">
                                    <h5><a href="list_job.php">Báo chí</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-content"></span>
                                </div>
                                <div class="services-cap">
                                    <h5><a href="list_job.php">Xây dựng</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- More Btn -->
                    <!-- Section Button -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="browse-btn2 text-center mt-50">
                                <a href="list_job.php" class="border-btn2">Đi
                                    đến danh mục tuyển dụng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Services End -->

            <!-- Featured_job_start -->
            <section class="featured-job-area feature-padding">
                <div class="container">
                    <!-- Section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center">
                                <span>DANH SÁCH BÀI TUYỂN DỤNG </span>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <!-- single-job-content -->
                            @foreach($baituyendung as $btd)
                            <div class="single-job-items mb-30">
                                <div class="job-items">

                                    <div class="company-img">
                                        <img src="/storage/{{$btd->thumbnail}}">
                                    </div>
                                    <div class="job-tittle">
                                        <a href="/chi-tiet-tuyen-dung/{{$btd->slug}}">
                                            <h4>{{$btd->title}}</h4></a>
                                        <ul>
                                            <li><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="16" height="16"
                                                    fill="currentColor"
                                                    class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg>&nbsp5</li>
                                            <li><i class="fas fa-map-marker-alt"></i>TP
                                                Vinh</li>
                                            <li>Thỏa thuận theo năng lực</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link f-right">
                                    <a href="">{{$btd->excerpt}}</a>
                                </div>
                            </div> 
                            @endforeach
                            <!-- <div class="single-job-items mb-30">
                                <div class="job-items">

                                    <div class="company-img">
                                        <img
                                            src="../img/pngtree-b-logo-png-image_3604523.jpg">
                                    </div>
                                    <div class="job-tittle">
                                        <a href="list_job.php">
                                            <h4>Thực tập sinh PR - Truyền Thông</h4></a>
                                        <ul>
                                            <li><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="16" height="16"
                                                    fill="currentColor"
                                                    class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg>&nbsp5</li>
                                            <li><i class="fas fa-map-marker-alt"></i>TP
                                                Vinh</li>
                                            <li>3.000.000đ - 5.000.000đ</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link f-right">
                                    <a href="list_job.php">Ngắn hạn</a>
                                </div>
                            </div> 
                            <div class="single-job-items mb-30">
                                <div class="job-items">

                                    <div class="company-img">
                                        <img
                                            src="../img/pngtree-coming-soon-label-logo-vector-template-design-illustration-png-image_2090980.jpg">
                                    </div>
                                    <div class="job-tittle">
                                        <a href="list_job.php">
                                            <h4>Tuyển dụng Thực tập sinh
                                                Marketing </h4></a>
                                        <ul>
                                            <li><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="16" height="16"
                                                    fill="currentColor"
                                                    class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg>&nbsp5</li>
                                            <li><i class="fas fa-map-marker-alt"></i>TP
                                                Vinh</li>
                                            <li>Thỏa thuận theo năng lực</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link f-right">
                                    <a href="list_job.php">Ngắn hạn</a>
                                </div>
                            </div> 
                            <div class="single-job-items mb-30">
                                <div class="job-items">

                                    <div class="company-img">
                                        <img src="../img/job-list1.png">
                                    </div>
                                    <div class="job-tittle">
                                        <a href="list_job.php">
                                            <h4>Tuyển thực tập sinh Marketting</h4></a>
                                        <ul>
                                            <li><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="16" height="16"
                                                    fill="currentColor"
                                                    class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg>&nbsp5</li>
                                            <li><i class="fas fa-map-marker-alt"></i>TP
                                                Vinh</li>
                                            <li>2.000.000 - 4.000.000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link f-right">
                                    <a href="list_job.php">ngắn hạn</a>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </section>
            <!-- Featured_job_end -->

            <!-- Support Company Start-->
            <div class="support-company-area support-padding fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="right-caption">
                                <!-- Section Tittle -->
                                <div class="section-tittle section-tittle2">
                                    <span>Chúng tôi đang làm gì ?</span>
                                    <h2>Là cầu nối hơn giữa sinh viên và nhà
                                        tuyển dụng</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="support-location-img">
                                <img src="../css/assets/img/service/tt.jpg" alt>
                                <div class="support-img-cap text-center">
                                    <span>2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Support Company End-->

@endsection