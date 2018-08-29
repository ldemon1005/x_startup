@extends('client.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/group.css">
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
                <h2 class="section-label">Nộp bài dự thi</h2>

                <p class="mt-5">Thí sinh chỉ được đăng ký 1 dự án theo cá nhân hoặc nhóm tối đa 3 người, ý tưởng khởi nghiệp.</p>
                <div id="group-create">
                    <div id="navigation">
                        <a href="">Tạo nhóm</a>
                        <a href="">Thông tin dự án</a>
                        <a href="" class="active">Nộp bài</a>
                    </div>

                    <div>
                        <div class="complete">
                            <img src="{{asset('local/resources/assets/guest/image')}}/check.png">
                            <h6>Bạn đã nộp bài thành công</h6>
                            <p>Cảm ơn bạn đã tham gia chương trình của chúng tôi</p>
                            <div>
                                <a class="back">Quay về trang nhóm</a>
                                <a class="red-btn">Quay về trang chủ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop