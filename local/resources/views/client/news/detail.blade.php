@extends('client.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/news.css">
    <style>
        #header{
            background-color:#000!important;
        }
        .section-1{
            margin-top: var(--header-height);
        }
    </style>
@stop

@section('main')
    <div id="main">
        <section class="section-1">
            <div class="main-image" style="background-image: url('http://cdn.uvideo.vn/images/04-2017/050cc813246aceafa408863a35810733.jpg')"></div>
        </section>

        <section class="su-section">
            <div class="container">
                <div class="article">
                    <h1>8 lợi ích của APIs dành cho nhà phát triển ứng dụng</h1>
                    <hr>
                    <div>
                        <span class="date">16/08/2018 12:13:42</span>
                        <div class="facebook">facebook like</div>
                    </div>
                    <hr>
                    <p>API không chỉ cách mạng hóa các mô hình kinh doanh của các doanh nghiệp mà còn là cách thức làm việc dành cho các nhà phát triển ứng dụng. Công nghệ này giúp đơn giản hóa công việc của họ và giới thiệu tính linh hoạt và quan điểm mới.
                    </p>
                    <p>
                    API không chỉ cách mạng hóa các mô hình kinh doanh của các doanh nghiệp mà còn là cách thức làm việc dành cho các nhà phát triển ứng dụng. Công nghệ này giúp đơn giản hóa công việc của họ và giới thiệu tính linh hoạt và quan điểm mới.
                    </p>

                    <img src="https://pa1.narvii.com/6008/d73a59e9aad9fe82a588c01b9508e6e9b3ad8bae_hq.gif" alt="">
                </div>
            </div>
        </section>

        <section class="su-section section-bd-t">
            <div class="container">
                <h2 class="section-label">Tin không liên quan</h2>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="news-item">
                            <a href="" class="image"
                               style="background-image: url('http://cdn.uvideo.vn/images/04-2017/050cc813246aceafa408863a35810733.jpg')"></a>
                            <div class="content">
                                <a href="" class="title">8 lợi ích của APIs dành cho nhà phát triển ứng dụng </a>
                                <div class="date">28-08-2018</div>
                                <a href="" class="see-more">Xem thêm</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="news-item">
                            <a href="" class="image"
                               style="background-image: url('http://cdn.uvideo.vn/images/04-2017/050cc813246aceafa408863a35810733.jpg')"></a>
                            <div class="content">
                                <a href="" class="title">8 lợi ích của APIs dành cho nhà phát triển ứng dụng </a>
                                <div class="date">28-08-2018</div>
                                <a href="" class="see-more">Xem thêm</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="news-item">
                            <a href="" class="image"
                               style="background-image: url('http://cdn.uvideo.vn/images/04-2017/050cc813246aceafa408863a35810733.jpg')"></a>
                            <div class="content">
                                <a href="" class="title">8 lợi ích của APIs dành cho nhà phát triển ứng dụng </a>
                                <div class="date">28-08-2018</div>
                                <a href="" class="see-more">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop