@extends('client.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/news.css">
@stop

@section('main')
    <div id="main">
        <section class="demo-2 loading section-1">
            <div class="content">
                <div class="glitch">
                    <div class="glitch__img"></div>
                    <div class="glitch__img"></div>
                    <div class="glitch__img"></div>
                    <div class="glitch__img"></div>
                    <div class="glitch__img"></div>
                </div>
                <div class="xstartup">
                    <div class="xblue"></div>
                    <div class="xred"></div>
                </div>
            </div>
        </section>

        <section class="su-section">
            <div class="container">
                <h2 class="section-label">Tin tức</h2>

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
                </div>
            </div>
        </section>
    </div>
@stop