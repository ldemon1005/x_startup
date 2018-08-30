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
                        <a href="" class="active">Tạo nhóm</a>
                        <a href="">Thông tin dự án</a>
                        <a href="">Nộp bài</a>
                    </div>
                    <form>
                        <label>Tạo nhóm</label>
                        <input type="text" name="">
                        <input type="checkbox" name=""> Tôi đã đọc điều khoản của chương trình <br>
                        <button>Tạo nhóm</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@stop