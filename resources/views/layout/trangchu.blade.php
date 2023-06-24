
<!doctype html>
<html class="no-js" lang="zxx">

    <!-- Mirrored from localhost/tuyendung/tuyendung/view/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2023 00:16:51 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type"
        content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Việc làm 24h | Home </title>
        <meta name="description" content>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon"
            href="../css/assets/img/favicon.ico">
        <!-- desc giảm dần asc t dần -->

        <!-- CSS here -->
        <link rel="stylesheet" href="../css/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../css/assets/css/flaticon.css">
        <link rel="stylesheet" href="../css/assets/css/price_rangs.css">
        <link rel="stylesheet" href="../css/assets/css/slicknav.css">
        <link rel="stylesheet" href="../css/assets/css/animate.min.css">
        <link rel="stylesheet" href="../css/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="../css/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="../css/assets/css/themify-icons.css">
        <link rel="stylesheet" href="../css/assets/css/slick.css">
        <link rel="stylesheet" href="../css/assets/css/nice-select.css">
        <link rel="stylesheet" href="../css/assets/css/style.css">

    </head>

    <body>
        <!-- Preloader Start -->
        <div id="preloader-active">
            <div
                class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="../css/assets/img/logo/logo.png" alt>
                    </div>
                </div>
            </div>
        </div>
        <!-- header menu -->

        <header>
            <!-- Header Start -->
            <div class="header-area header-transparrent">
                <div class="headder-top header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-2">
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="index.php"><img
                                            src="../img/logo.png" alt></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="menu-wrapper">
                                    <!-- Main-menu -->
                                    <div class="main-menu">
                                        <nav class="d-none d-lg-block">
                                            <ul id="navigation">
                                                <li><a href="/">Trang
                                                        chủ</a></li>
                                                @foreach($danhmuc as $dm)
                                                <li>
                                                    <a href="/">{{$dm['label']}}</a>
                                                    </li>
                                                @endforeach
                                                <!-- <li><a href="toadam.php">Tọa đàm
                                                    </a></li>
                                                <li><a href="cv-template.php">Mẫu
                                                        CV</a></li>
                                                <li><a
                                                        href="danhsach-congty.php">Công
                                                        ty</a></li> -->
                                            </ul>
                                        </nav>
                                    </div>
                                    <div
                                        class="header-btn d-none f-right d-lg-block">
                                        <a href="../view/dangkitaikhoan.php"
                                            class="btn head-btn1">Đăng kí</a>
                                        <a href="../view/dangnhap.php"
                                            class="btn head-btn2">Đăng nhập</a>
                                    </div>

                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            @yield('content')

            <footer>
                <!-- Footer Start-->
                <div class="footer-area footer-bg footer-padding">
                    <div class="container">
                        <div class="row d-flex justify-content-between">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="single-footer-caption mb-30">
                                        <div class="footer-tittle">
                                            <h4>Về chúng tôi</h4>
                                            <div class="footer-pera">
                                                <p>Hổ trợ nhanh chống 24/7</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Thông tin liên lạc</h4>
                                        <ul>
                                            <li>
                                                <p>Địa chỉ :10 Mai Lão Bạng</p>
                                            </li>
                                            <li><a href="#">SDT :090909090</a></li>
                                            <li><a href="#">Email :
                                                    123@gmail.com</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Liên kết ngoài</h4>
                                        <ul>
                                            <li><a href="#"> Công ty ADC</a></li>
                                            <li><a href="#"> Công ty đầu tư phát
                                                    triển MeKong</a></li>
                                            <li><a href="#"> VinUni</a></li>
                                            <li><a href="#"> Proparties</a></li>
                                            <li><a href="#"> Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Chính sách sử dụng website</h4>
                                        <div class="footer-pera footer-pera2">
                                            <p>Nhấn để xem chính sách</p>
                                        </div>
                                        <!-- Form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                    </div>
                </div>
                <!-- footer-bottom area -->
                <div class="footer-bottom-area footer-bg">
                    <div class="container">
                        <div class="footer-border">
                            <div
                                class="row d-flex justify-content-between align-items-center">
                                <div class="col-xl-10 col-lg-10 ">
                                    <div class="footer-copy-right">
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2">
                                    <div class="footer-social f-right">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fas fa-globe"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End-->
            </footer>

        </main>

        <!-- JS here -->

        <!-- All JS Custom Plugins Link Here here -->
        <script src="../css/assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="../css/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../css/assets/js/popper.min.js"></script>
        <script src="../css/assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="../css/assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="../css/assets/js/owl.carousel.min.js"></script>
        <script src="../css/assets/js/slick.min.js"></script>
        <script src="../css/assets/js/price_rangs.js"></script>

        <!-- One Page, Animated-HeadLin -->
        <script src="../css/assets/js/wow.min.js"></script>
        <script src="../css/assets/js/animated.headline.js"></script>
        <script src="../css/assets/js/jquery.magnific-popup.js"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="../css/assets/js/jquery.scrollUp.min.js"></script>
        <script src="../css/assets/js/jquery.nice-select.min.js"></script>
        <script src="../css/assets/js/jquery.sticky.js"></script>

        <!-- contact js -->
        <script src="../css/assets/js/contact.js"></script>
        <script src="../css/assets/js/jquery.form.js"></script>
        <script src="../css/assets/js/jquery.validate.min.js"></script>
        <script src="../css/assets/js/mail-script.js"></script>
        <script src="../css/assets/js/jquery.ajaxchimp.min.js"></script>

        <!-- Jquery Plugins, main Jquery -->
        <script src="../css/assets/js/plugins.js"></script>
        <script src="../css/assets/js/main.js"></script>

    </body>

    <!-- Mirrored from localhost/tuyendung/tuyendung/view/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2023 00:17:49 GMT -->
</html>
