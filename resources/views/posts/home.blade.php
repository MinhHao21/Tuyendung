@extends('layout.trangchu')
@section('content')

<div class="container grid grid-cols-12 mx-auto">

    <div class="sm:col-span-3 col-span-12 text-center  border-2 sm:mt-0 mt-2 sm:block hidden">
        <h2 class="border-b-2 text-sm text-white rounded-sm" style="background-image:url(/images/bg-red.jpg); height:30px;">
            <span id="clock" class="relative top-1">Thứ 4, Ngày 1/3/2023 10:21:14 AM</span>
        </h2>
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
        <div id="menu">
            @foreach($menuleft as $mnl)
            <div class="uldoc mx-auto bg-blue-600 hover:bg-blue-500" style=" width:100%; list-style-type: none; text-align: left;">
                <div class="lidoc font-bold grid grid-cols-12 cursor-pointer" style="text-transform: uppercase; font-size: 12px; position: relative; border-bottom: 1px solid #e8e8e8; padding: 8px 3px; color: #fff;">
                    <div class="col-span-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 ">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="col-span-10">
                        <a href="/tin-tuc/{{$mnl['slug']}}" class="text-white font-bold">{{$mnl['label']}}</a>
                    </div>

                    <div class="sub-menu uldoc bg-blue-600" style="font-size: 11px;">
                        @foreach($mnl['children'] as $mn)
                        <div class="lidoc font-bold" style="font-size: 11px;">
                            <a href="/tin-tuc/{{$mn['slug']}}">
                                {{$mn['label']}}
                            </a>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div id="testthu" class="sm:col-span-9 col-span-12">
        <div class="container col-span-12 grid grid-cols-12">
            <div class=" col-span-12 grid grid-cols-12 ">
                <div class="product col-span-12 grid grid-cols-12">
                    <div class="sm:col-span-7 col-span-12 sm:px-2 px-0 bg-white">
                        <div class="image w-full sm:px-0 px-2">
                            <div class="tinmoi-img-l  sm:pt-8 pt-0" style="height: 300px;">
                                <a>
                                    <img v-bind:src=" '/storage/' + linkanh" alt="" style="height:90%" class="w-full h-full">
                                </a>
                            </div>
                        </div>
                        <div>
                            <p class="text-justify sm:pt-4 pt-0 sm:px-0 px-2" style="display: -webkit-box;height:80px;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;">
                                @{{ tenbaiviet }}
                            </p>
                        </div>
                    </div>

                    <div class="product-content sm:px-0 px-2 sm:mt-0  sm:col-span-5 col-span-12 sm:px-0 px-0">
                        <a href="/danh-muc/Tin-noi-bat">
                            <div class="text-blue-600 text-center " style="color:rgba(2, 57, 119, 0.8);">
                                <p class="font-bold text-center text-white pt-1 rounded-sm" style="background-image:url(/images/bg-red.jpg); height:30px">
                                    TIN NỔI BẬT
                                </p>
                            </div>
                        </a>
                        <div class="wrapper-color px-2 h-tang bg-white" style="border:solid 1px #C7C7C7; ">
                            <div class="list-color">
                                <!-- <p class="color-text">@{{ getProduct.title }}</p> -->
                                <div class="pt-2" style="border-top:solid 1px #C7C7C7;" v-for="(item, index) in listProductDetail">
                                    <a :href="'/chi-tiet-tin-tuc/'+item.slug">
                                        <p class="text-justify " style="display: -webkit-box;height: 60px;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;line-height:20px;" v-on:mouseover='doianh(item.thumbnail, item.title)'>@{{ item.title }}
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="grid grid-cols-10 sm:pb-4 pb-2 pt-2 sm:cols-span-10">
    <!--  Height : 86px ,   Widt: 232px  -->
    <div class="sm:col-span-2 col-span-5 sm:mr-2 ml-0 mr-0 sm:ml-0 sm:pl-0 pl-2">
        <a href="http://vbpl.vn/Pages/portal.aspx"><img src="images/chucnang-1.jpg" class="w-full h-full  border-2" alt="" style="max-height: 86px; ">
        </a>
    </div>
    <div class="sm:col-span-2 col-span-5 sm:mr-2 mr-0 ml-2 sm:ml-0 sm:pr-0 pr-2 ">
        <a href="https://qppl.hatinh.gov.vn/"><img src="images/chucnang-2.jpg" class="w-full h-full border-2" alt="" style="max-height: 86px; ">
        </a>
    </div>
    <div class="sm:col-span-2 col-span-5 sm:mr-2 mr-0 ml-2 sm:ml-0 sm:py-0 py-1  ">
        <a href="https://dichvucong.hatinh.gov.vn/portaldvc/KenhTin/chi-tiet-thu-tuc.aspx?_nlv=STP"><img src="./images/chuyen-doi-so.png" class="w-full h-full border-2" alt="" style="max-height: 86px; ">
        </a>
    </div>
    <div class="sm:col-span-2 col-span-5 sm:mr-2 mr-0 ml-2 sm:ml-0 sm:pr-0 pr-2 sm:py-0 py-1 ">
        <a href="https://dichvucong.hatinh.gov.vn/portaldvc/KenhTin/dich-vu-cong-truc-tuyen.aspx?_dv=578E3597-D1C6-FEA0-1671-D63152DA1967&amp;_tk="><img src="images/chucnang-3.jpg" class="w-full h-full border-2" alt="" style="max-height: 86px; ">
        </a>
    </div>
    <div class="sm:col-span-2 col-span-5 sm:mr-2 mr-0 ml-2 sm:ml-0 sm:pb-0 pb-1">
        <a href="danh-muc/chuyen-doi-so.html"><img src="images/dich-vu-cong.jpg" class="w-full h-full border-2" alt="" style="max-height: 86px; ">
        </a>
    </div>
</div>



<div class="news-banner grid grid-cols-12  mx-auto sm:px-0 px-2 sm:pt-3 pt-2">
    <div class="sm:col-span-3 col-span-12 text-center sm:mr-3 mr-0 border-2 sm:mt-0 mt-2 h-96 overflow-hidden" style="height: 25.4rem">
        <h2 class="border-b-2 text-center text-xl font-bold text-white rounded-sm " style="background: url(./images/tab-right.png),linear-gradient(#2282e2, #0f69c3);">
            Chỉ Đạo Điều Hành
        </h2>
        <marquee behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="up" style="height: 25.4rem">
            <ul class="pointer">
                @foreach( $chidaodieuhanh as $cd)
                <div class="mb-1 divide-y divide-dashed ml-2">
                    <i class="fa-regular fa-file-word ml-1 text-red-500"></i>
                    <a href="/chi-tiet-tin-tuc/{slug}" class="hover:text-pink-700 ">{{$cd->title}}</a>
                </div>
                @endforeach
            </ul>
        </marquee>
    </div>
    <div class="sm:col-span-7 col-span-12 sm:mt-0 pt-2">
        <div class="w-full relative  text-center mb-2 col-span-12 flex" style="border-bottom:solid 2px #d82231; top: -10px;">
            <!-- <img src="./images/222pxddon-gg.svg.png" alt="" style="height: 16px; margin: 4px;"> -->
            <p class="font-bold border-b-2 mb-1 pseudo border-indigo-400 text-white rounded-sm text-left sm:ml-2 mx-auto text-xl" style="border-bottom:solid 3px; transform: translate(-8px, 4px);background-image: url(/images/bg-red.jpg); height: 30px; margin-bottom:7px;padding-right: 5px;">
                Tin Tức, Sự Kiện
            </p>
        </div>
        @if($tintucsukiennoibat)
        <div class="grid grid-cols-12 pb-3 border-b-2">
            <div class="sm:col-span-4 col-span-12">
                <div class="noibat mx-auto fix-img">
                    <img src="/storage/{{$tintucsukiennoibat->thumbnail}}" alt="" class="w-full">
                </div>
            </div>
            <div class="sm:col-span-8 col-span-12 sm:pl-4 pl-0 sm:pt-0 pt-3">
                <h3 class="mb-2 hover:text-pink-700 cursor-pointer fix-content">
                    <a href="/chi-tiet-tin-tuc/{{$tintucsukiennoibat['slug']}}">{{$tintucsukiennoibat->title}}</a>
                </h3>
                <p class="fix-boxcontent"> {{$tintucsukiennoibat->content}}
                </p>
            </div>
        </div>
        @endif
        <ul class="overflow-hidden " style="padding: 5px 0 5px 13px;">
            @foreach($tintucsukien as $ttsukien)
            <div class="cursor-pointer h-9">
                <i class="fa-solid fa-diamond icon-link hover:text-pink-700"></i>
                <a href="/chi-tiet-tin-tuc/{{$ttsukien['slug']}}" class="hover:text-pink-700 fix-listlink ">{{$ttsukien->title}}</a>
            </div>
            @endforeach
        </ul>
    </div>
    <div class="sm:col-span-2 col-span-12">
        <ul class="fix-bn-right sm:block hidden">
            <li class="rounded-sm mx-1.5 pb-1"><a href=""><img src="./images/vanphongdientu.png" alt=""></a></li>
            <li class="rounded-sm mx-1.5 pb-1"><a href=""><img src="./images/bn-left-2.png" alt=""></a></li>
            <li class="rounded-sm mx-1.5 pb-1"><a href=""><img src="./images/bn-left-3.jpg" alt=""></a></li>
            <li class="rounded-sm mx-1.5 pb-1"><a href=""><img src="./images/bn-left-4.png" alt=""></a></li>
            <li class="rounded-sm mx-1.5 pb-1"><a href=""><img src="./images/bn-left-5.png" alt=""></a></li>

        </ul>
    </div>

</div>
<div class="dieuhanh grid grid-cols-12  mx-auto sm:px-0 px-3 sm:pt-3 pt-2">
    <div class="sm:col-span-3 col-span-12 sm:mr-3 mr-0 mb-2">
        <h2 class="border-b-2 text-center text-xl font-bold text-white rounded-sm" style="background: url(./images/tab-right.png),linear-gradient(#2282e2, #0f69c3);">
            Bản Đồ Hành Chính </h2>
        <iframe class="sm:col-span-3 col-span-12 w-full " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121101.39672004388!2d105.79845187365953!3d18.46468658914131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3138498f85874361%3A0x86cf39e29b9076a4!2zTOG7mWMgSMOgLCBIw6AgVMSpbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1673507107829!5m2!1svi!2s" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="sm:col-span-7 col-span-12 sm:border-b-0 border-b">
        <div class="w-full relative  text-center mb-2 col-span-12 flex" style="border-bottom:solid 2px #d82231; top: -2px;">
            <!-- <img src="./images/222pxddon-gg.svg.png" alt="" style="height: 16px; margin: 4px;"> -->
            <p class="font-bold border-b-2 mb-1 pseudo  border-indigo-400 text-white rounded-sm text-left   sm:ml-2 mx-auto text-xl" style="border-bottom:solid 3px; transform: translate(-8px, 4px);background-image: url(/images/bg-red.jpg); height: 30px; margin-bottom:7px;padding-right: 5px;">
                Xây Dựng Đảng
            </p>
        </div>
        @if($xaydungdangnb)
        <div class="grid grid-cols-12 pb-3 border-b-2">
            <div class="sm:col-span-4 col-span-12">
                <div class="noibat col-span-3 mx-auto fix-img ">
                    <img src="/storage/{{$xaydungdangnb->thumbnail}}" alt="" class="w-full col-span-12">
                </div>
            </div>
            <div class="sm:col-span-8 col-span-12 sm:pl-4 pl-0 sm:pt-0 pt-3">
                <h3 class="font-bold mb-2 hover:text-pink-700 cursor-pointer fix-content"><a href="/chi-tiet-tin-tuc/{{$xaydungdangnb['slug']}}">{{$xaydungdangnb->title}}</a></h3>
                <p class="fix-boxcontent"> {{$xaydungdangnb->content}}
                </p>
            </div>
        </div>
        @endif
        <div class="sm:col-span-9 mt-3">
            <ul class="pointer " style="padding: 5px 0 5px 13px;">
                @foreach($xaydungdang as $dangnb)
                <div class="h-9">
                    <i class="fa-solid fa-diamond icon-link hover:text-pink-700"></i>
                    <a href="/chi-tiet-tin-tuc/{{$dangnb['slug']}}" class="hover:text-pink-700 fix-listlink ">{{$dangnb->title}}</a>
                </div>

                @endforeach
            </ul>
        </div>
    </div>
    <div class="sm:col-span-2 col-span-12">
        <ul class="fix-bn-right sm:block hidden">
            <li class="rounded-sm mx-1.5"><a href=""><img src="./images/bn-left-6.png" alt=""></a></li>
            <li class="rounded-sm mx-1.5"><a href=""><img src="./images/bn-left-7.png" alt=""></a></li>
            <li class="rounded-sm mx-1.5"><a href=""><img src="./images/bn-left-8.png" alt=""></a></li>
            <li class="rounded-sm mx-1.5"><a href=""><img src="./images/bn-left-9.png" alt=""></a></li>
            <li class="rounded-sm mx-1.5"><a href=""><img src="./images/bn-left-10.jpg" alt=""></a></li>
            <li class="rounded-sm mx-1.5 pb-1"><a href="https://hscvlh.hatinh.gov.vn/locha/vbpq.nsf/DefaultMetro?OpenForm"><img src="./images/z4278729772695_c58580fbf07a02953df6b55a33ca5621.jpg" alt=""></a></li>
        </ul>
    </div>

</div>

<div class="economy grid grid-cols-12  mx-auto sm:px-0 px-3 sm:pt-3 pt-2">
    <div class="sm:col-span-3 col-span-12 text-center sm:mr-3 mr-0 border-2 sm:mt-0 mt-2 sm:block hidden">
        <h2 class="border-b-2 text-center font-bold text-xl text-white rounded-sm" style="background: url(./images/tab-right.png),linear-gradient(#2282e2, #0f69c3);">
            Ảnh Lộc Hà
        </h2>
        <div class="max-w-2xl mx-auto">
            <div id="default-carousel" class="relative" data-carousel="static">
                <!-- Slide  -->
                <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-64" style="border-radius: 2px;">
                    <!-- Ảnh 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                        <img src="./images/imageslide.jfif" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                    <!-- Ảnh 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./images/image_gallery.jfif" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                    <!-- Ảnh 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./images/image_gallerya.jfif" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="flex absolute bottom-7 left-1/2 z-30 space-x-3 -translate-x-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>

            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        </div>
    </div>
    <div class="sm:col-span-7 col-span-12 sm:border-b-0 border-b ">
        <div class="w-full relative  text-center mb-2 col-span-12 flex" style="border-bottom:solid 2px #d82231; top: -2px;">
            <!-- <img src="./images/222pxddon-gg.svg.png" alt="" style="height: 16px; margin: 4px;"> -->
            <p class="font-bold border-b-2 mb-1 pseudo  border-indigo-400 text-white rounded-sm text-left   sm:ml-2 mx-auto text-xl" style="border-bottom:solid 3px; transform: translate(-8px, 4px);background-image: url(/images/bg-red.jpg); height: 30px; margin-bottom:7px;padding-right: 5px;">
                Kinh Tế Đầu Tư
            </p>
        </div>
        @if($tintucsukiennoibat)
        <div class="grid grid-cols-12 pb-3 border-b-2">
            <div class="sm:col-span-4 col-span-12">
                <div class="noibat  mx-auto fix-img">
                    <img src="/storage/{{$tintucsukiennoibat->thumbnail}}" alt="" class="w-full">
                </div>
            </div>
            <div class="sm:col-span-8 col-span-12 sm:pl-4 pl-0 sm:pt-0 pt-3">
                <h3 class="font-bold mb-2 hover:text-pink-700 cursor-pointer fix-content">
                    <a href="/chi-tiet-tin-tuc/{{$tintucsukiennoibat['slug']}}">{{$tintucsukiennoibat->title}}</a>
                </h3>
                <p class="fix-boxcontent"> {{$tintucsukiennoibat->content}}
                </p>
            </div>
        </div>
        @endif
        <ul class="" style="padding: 5px 0 5px 13px;">
            @foreach($tintucsukien as $ttsukien)
            <div class="">
                <i class="fa-solid fa-diamond icon-link hover:text-pink-700"></i>
                <a href="/tin-tuc/{slug}" class="hover:text-pink-700 fix-listlink">{{$ttsukien->title}}</a>
            </div>
            @endforeach
        </ul>
    </div>
    <div class="sm:col-span-2 col-span-12">
        <ul class="fix-bn-right sm:block hidden">
            <li class="mx-1.5 rounded-sm"><a href=""><img src="./images/bn-left-11.png" alt=""></a>
            </li>
            <li class="mx-1.5 rounded-sm"><a href=""><img src="./images/bn-left-12.png" alt=""> </a>
            </li>
            <li class="mx-1.5 rounded-sm"><a href=""><img src="./images/bn-left-13.png" alt=""> </a>
            </li>
            <li class="mx-1.5 rounded-sm"> <a href=""><img src="./images/bn-left-14.png" alt=""></a>
            </li>
            <li class="mx-1.5 rounded-sm"> <a href=""><img src="./images/bn-left-15.png" alt=""></a>
            </li>
        </ul>
    </div>
</div>
<div class="culturel grid grid-cols-12  mx-auto sm:px-0 px-3 sm:pt-3 pt-2">
    <div class="sm:col-span-3 col-span-12 text-center sm:mr-3 mr-0 border-2 sm:mt-0 mt-2 sm:block hidden">
        <h2 class="border-b-2 text-center text-xl text-white rounded-sm " style="background: url(./images/tab-right.png),linear-gradient(#2282e2, #0f69c3);">
            Thư Viện Âm Nhạc
        </h2>
        <div>
            <div style="border: 1px solid #C7C7C7;" class="p-2">
                <iframe width="100%" class="bttpht" src="https://www.youtube.com/embed/ia8HYgGF_1g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="sm:col-span-7 col-span-12 sm:border-b-0 border-b ">
        <div class="w-full relative  text-center mb-2 col-span-12 flex" style="border-bottom:solid 1px #d82231; top: -2px;">
            <!-- <img src="./images/222pxddon-gg.svg.png" alt="" style="height: 16px; margin: 4px;"> -->
            <p class="font-bold border-b-2 mb-1 pseudo  border-indigo-400 text-white rounded-sm text-left   sm:ml-2 mx-auto text-xl" style="border-bottom:solid 3px; transform: translate(-8px, 4px);background-image: url(/images/bg-red.jpg); height: 30px; margin-bottom:7px;padding-right: 5px;">
                Văn Hóa - Xã Hội
            </p>
        </div>
        @if($vanhoaxhnb)
        <div class="grid grid-cols-12 pb-3 border-b-2">
            <div class="sm:col-span-4 col-span-12 ">
                <div class="noibat  mx-auto fix-img">
                    <img src="/storage/{{$vanhoaxhnb->thumbnail}}" alt="" class="w-full">
                </div>
            </div>
            <div class="sm:col-span-8 col-span-12 sm:pl-4 pl-0 sm:pt-0 pt-3">
                <h3 class="font-bold mb-2 hover:text-pink-700 cursor-pointer fix-content">
                    <a href="/chi-tiet-tin-tuc/{{$vanhoaxhnb['slug']}}"> {{$vanhoaxhnb->title}}</a>
                </h3>
                <p class="fix-boxcontent"> {{$vanhoaxhnb->content}}
                </p>
            </div>
        </div>
        @endif
        <ul class="" style="padding: 5px 0 5px 13px;">
            @foreach($vanhoaxh as $vhxh)
            <div class="h-9">
                <i class="fa-solid fa-diamond icon-link hover:text-pink-700"></i>
                <a href="/chi-tiet-tin-tuc/{{$vhxh['slug']}}" class="hover:text-pink-700 fix-listlink">{{$vhxh->title}}</a>
            </div>
            @endforeach
        </ul>
    </div>
    <div class="sm:col-span-2 col-span-12">
        <ul class="fix-bn-right sm:block hidden">
            <li class="mx-1.5 rounded-sm"><a href=""><img src="./images/bn-left-16.png" alt="">
                </a>
            </li>
            <li class="mx-1.5 rounded-sm"><a href=""><img src="./images/bn-left-17.png" alt="">
                </a>
            </li>
            <li class="mx-1.5 rounded-sm"><a href=""> <img src="./images/bn-left-18.png" alt="">
                </a>
            </li>
            <li class="mx-1.5 rounded-sm"> <a href=""><img src="./images/bn-left-19.png" alt="">
                </a>
            </li>
            <li class="mx-1.5 rounded-sm"> <a href=""><img src="./images/bn-left-20.png" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="quoc-phong grid grid-cols-12  mx-auto sm:px-0 px-3 sm:pt-3 pt-2  sm:border-b-0 border-b">
    <div class="sm:col-span-3 col-span-12 text-center sm:mr-3 mr-0 border-2 sm:mt-0 mt-2 sm:block hidden">
        <h2 class="border-b-2 text-center text-xl text-white rounded-sm " style="background: url(./images/tab-right.png),linear-gradient(#2282e2, #0f69c3);">
            Truyền hình Lộc Hà
        </h2>
        <div>
            <div style="border: 1px solid #C7C7C7;" class="p-2">
                <iframe width="100%" class="bttpht" src="https://www.youtube.com/embed/ia8HYgGF_1g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="sm:col-span-7 col-span-12 ">
        <div class="w-full relative  text-center mb-2 col-span-12 flex" style="border-bottom:solid 2px #d82231; top: -2px;">
            <!-- <img src="./images/222pxddon-gg.svg.png" alt="" style="height: 16px; margin: 4px;"> -->
            <p class="font-bold border-b-2 mb-1 pseudo  border-indigo-400 text-white rounded-sm text-left   sm:ml-2 mx-auto text-xl" style="border-bottom:solid 3px; transform: translate(-8px, 4px);background-image: url(/images/bg-red.jpg); height: 30px; margin-bottom:7px;padding-right: 5px;">
                Quốc Phòng - An Ninh
            </p>
        </div>
        @if($quocphongnb)
        <div class="grid grid-cols-12 pb-3 border-b-2">
            <div class="sm:col-span-4 col-span-12">
                <div class="noibat  mx-auto fix-img">
                    <img src="/storage/{{$quocphongnb->thumbnail}}" alt="" class="w-full">
                </div>
            </div>
            <div class="sm:col-span-8 col-span-12 sm:pl-4 pl-0 sm:pt-0 pt-3">
                <h3 class="font-bold mb-2 hover:text-pink-700 cursor-pointer fix-content">
                    <a href="/chi-tiet-tin-tuc/{{$quocphongnb['slug']}}"> {{$quocphongnb->title}}</a>
                </h3>
                <p class="fix-boxcontent"> {{$quocphongnb->content}}
                </p>
            </div>
        </div>
        @endif
        <ul class="" style="padding: 5px 0 5px 13px;">
            @foreach($quocphong as $qp)
            <div class="h-9">
                <i class="fa-solid fa-diamond icon-link hover:text-pink-700"></i>
                <a href="/chi-tiet-tin-tuc/{{$qp['slug']}}" class="hover:text-pink-700 fix-listlink">{{$qp->title}}</a>
            </div>
            @endforeach
        </ul>
    </div>
    <div class="sm:col-span-2 col-span-12">
        <ul class="fix-bn-right sm:block hidden">
            <li class="mx-1.5 rounded-sm">
                <a href=""> <img src="./images/bn-left-21.png" alt="">
                </a>
            </li>
            <li class="mx-1.5 rounded-sm"><a href=""><img src="./images/bn-left-22.png" alt="">
                </a>
            </li>
            <li class="mx-1.5 rounded-sm"> <a href=""><img src="./images/bn-left-23.png" alt="">
                </a>
            </li>
            <li class="mx-1.5 rounded-sm"> <a href=""><img src="./images/bn-left-24.png" alt="">
                </a>
            </li>
            <li class="mx-1.5 rounded-sm"> <a href=""> <img src="./images/bn-left-25.png" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="unit grid grid-cols-12  mx-auto sm:px-0 px-3 sm:pt-3 pt-2">
    <div class="sm:col-span-3 col-span-12 text-center sm:mr-3 mr-0 border-2 sm:mt-0 mt-2 sm:block hidden">
        <h2 class="border-b-2 text-center text-xl text-white rounded-sm" style="background: url(./images/tab-right.png),linear-gradient(#2282e2, #0f69c3);">
            Thống Kê
        </h2>
        <div class="shadow-lg" style="border: 1px solid #C7C7C7;">
            <p class="text-white py-2 font-bold text-center text-base " style="background-color: #024fc3;">
                LƯỢT TRUY CẬP</p>
            <div class="flex p-2">
                <i class="fa-solid fa-star" style="margin-top: 2px;"></i>
                <p class="px-2"> Tháng :1100</p>
            </div>
            <div class="flex p-2 ">
                <i class="fa-solid fa-star" style="margin-top: 2px;"></i>
                <p class="px-2"> Tổng :2434324 </p>
            </div>
        </div>

    </div>
    <div class="sm:col-span-9 col-span-12">
        <div class="div w-full bg-sky-500 border-2 text-center mb-2 col-span-12 flex rounded-sm" style="background: url(./images/tab-right.png),linear-gradient(#2282e2, #0f69c3);">
            <!-- <img src="./images/nhanuoc.png" alt="" style="height: 16px; margin: 4px;"> -->
            <p class="font-bold text-gray-100 text-left sm:ml-2 mx-auto text-xl ">Đơn Vị Trực Thuộc </p>
        </div>
        <div class="">
            <ul class="flex grid grid-cols-12 ">
                <li class="flex mr-3  sm:col-span-3 col-span-4 mb-2 ">
                    <i class="fa-solid fa-location-pin mt-1" style="color: #1773cf;"></i>
                    <p class="mx-1">Xã Thạch Kim </p>
                </li>
                <li class="flex mr-3 sm:col-span-3 col-span-4 mb-2">
                    <i class="fa-solid fa-location-pin mt-1" style="color: #1773cf;"></i>
                    <p class="mx-1">Xã Thạch Châu </p>
                </li>
                <li class="flex mr-3 sm:col-span-3 col-span-4 mb-2">
                    <i class="fa-solid fa-location-pin mt-1" style="color: #1773cf;"></i>
                    <p class="mx-1">Xã Tân Lộc </p>
                </li>
                <li class="flex mr-3 sm:col-span-3 col-span-4 mb-2">
                    <i class="fa-solid fa-location-pin mt-1" style="color: #1773cf;"></i>
                    <p class="mx-1">Thị Trấn Lộc Hà </p>
                </li>
                <li class="flex mr-3 sm:col-span-3 col-span-4 mb-2">
                    <i class="fa-solid fa-location-pin mt-1" style="color: #1773cf;"></i>
                    <p class="mx-1">Xã Hộ Độ </p>
                </li>
                <li class="flex mr-3 sm:col-span-3 col-span-4 mb-2">
                    <i class="fa-solid fa-location-pin mt-1" style="color: #1773cf;"></i>
                    <p class="mx-1">Xã Ích Hậu </p>
                </li>
                <li class="flex mr-3 sm:col-span-3 col-span-4 mb-2">
                    <i class="fa-solid fa-location-pin mt-1" style="color: #1773cf;"></i>
                    <p class="mx-1">Xã Bình An </p>
                </li>
                <li class="flex mr-3 sm:col-span-3 col-span-4 mb-2">
                    <i class="fa-solid fa-location-pin mt-1" style="color: #1773cf;"></i>
                    <p class="mx-1">Xã Hồng Lộc </p>
                </li>
                <li class="flex mr-3 sm:col-span-3 col-span-4 mb-2">
                    <i class="fa-solid fa-location-pin mt-1" style="color: #1773cf;"></i>
                    <p class="mx-1">Xã Thịnh Lộc </p>
                </li>
            </ul>
        </div>
    </div>
    <div>
        <div class="relative h-10 min-w-[200px] mt-2 sm:ml-0 ml-10" style="width:280px">
            <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-blue-700 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                <option value="brazil"><a href="">Sở Văn Hóa Hà Tĩnh</a></option>
                <option value="bucharest">Báo Hà Tĩnh</option>
                <option value="london">Công An Tỉnh Hà Tĩnh</option>
                <option value="washington">Sở Kế Hoạch và Đầu Tư Hà Tĩnh</option>
            </select>
            <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[12px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-blue-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-blue-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-blue-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                Chọn liên kết Website
            </label>
        </div>
    </div>
</div>

<div class="ontoplist w-full mx-auto border-t-2 mt-2 sm:block hidden ">
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <i class="fa-regular fa-circle-dot fix-bottom-icon p-2 "></i><a href="" class="underline hover:text-pink-700"> Tin Tức Sự Kiện </a>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <i class="fa-regular fa-circle-dot fix-bottom-icon p-2"></i><a href="" class="underline hover:text-pink-700"> Tin Lộc Hà </a>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <i class="fa-regular fa-circle-dot fix-bottom-icon p-2"></i><a href="" class="underline hover:text-pink-700"> Chiến Lược Quy Hoạch </a>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <i class="fa-regular fa-circle-dot fix-bottom-icon p-2"></i><a href="" class="underline hover:text-pink-700"> Du Lịch </a>
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a href="" class="hover:text-pink-700"> Tin tức Hà Tĩnh</a>
                    </th>
                    <td class="px-6 py-4">
                        <a href="" class="hover:text-pink-700">Kinh tế đầu tư</a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="" class="hover:text-pink-700">Quy hoạch tổng thể-KT-XH</a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="" class="hover:text-pink-700">Thông tin du lịch</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a href="" class="hover:text-pink-700">Tin Lộc Hà</a>
                    </th>
                    <td class="px-6 py-4">
                        <a href="" class="hover:text-pink-700">Quốc phòng, An ninh</a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="" class="hover:text-pink-700">Quy hoạch xây dựng đô thị</a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="" class="hover:text-pink-700">Kinh tế đầu tư</a>
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a href="" class="hover:text-pink-700">Tin quốc tế</a>
                    </th>
                    <td class="px-6 py-4">
                        <a href="" class="hover:text-pink-700">Văn hóa , Xã hội</a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="" class="hover:text-pink-700">An toàn thực phẩm</a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="" class="hover:text-pink-700">Kỷ niệm 10 năm Lộc Hà</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    var vueInstance = new Vue({
        el: '#testthu',
        data: {
            listProductDetail: [],
            soLuotxem: 0,
            linkanh: '',
            tenbaiviet: '',
            tieude: '',
        },
        mounted: function() {

            const self = this;
            axios.get("/listPost")
                .then(function(response) {
                    // self.Kvcha = response.data[0];
                    self.listProductDetail = response.data;
                    self.linkanh = response.data[0].thumbnail;
                    self.tenbaiviet = response.data[0].title;
                    self.tieude = response.data[0].title;

                });
            // window.location = '/danhsach/'+ item.slug+ '/' + this.slug  ;

        },
        methods: {
            tinhLuotxem(item) {

                const x = Number(item.luotxem);
                this.soLuotxem = x + 1;
                const self = this;
                axios.put("/tinhLuotxem?id=" + item.id + '&luotxem=' + self.soLuotxem)
                    .then(function(response) {});
                // window.location = '/danhsach/'+ item.slug+ '/' + this.slug  ;
            },
            doianh(linkanh, tenbaiviet) {
                this.linkanh = linkanh;
                // console.log(linkanh);
                this.tenbaiviet = tenbaiviet;

            },
        },
        computed: {

        }
    });
</script>

@endsection