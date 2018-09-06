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
                    <div>
                        <div class="member">
                            <div class="image" style="background-image:url('https://timedotcom.files.wordpress.com/2014/05/mariah-carey-thirsty.jpg')"></div>
                            <div class="info">
                                <div class="member-name">Cao T.Linh</div>
                                <div class="label">Trưởng nhóm</div>
                                <table>
                                    <tr>
                                        <td>Số điện thoại</td>
                                        <td>0987676543</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>0987676543</td>
                                    </tr>
                                    <tr>
                                        <td>CMND</td>
                                        <td>0987676543</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div>
                        <form class="add-member">
                            <label>Email</label>
                            <input type="email" name="">
                            <button>Thêm thành viên</button>
                        </form>

                        <div>
                            <a href="" class="back">Quay lại</a>
                            <a href="" class="red-btn">Bước tiếp theo</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop