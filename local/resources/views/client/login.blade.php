@extends('client.master-2')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('client') }}/login.css">
@stop

@section('main')
    <div id="main">
        <section class="demo-2 loading section-1">
            <div class="container content">
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

                <div id="login">
                    <div class="login-form">
                        <h5>Đăng ký</h5>
                        <form method=""  action="">
                            <input type="text" placeholder="Họ và tên" name="">

                            <input type="email" placeholder="Email" name="">

                            <input type="password" placeholder="Mật khẩu" name="">

                            <input type="password" placeholder="Nhập lại mật khẩu" name="">

                            <input type="text" placeholder="CMND" name="">

                            <input type="text" placeholder="Số điện thoại" name="">

                            <button>Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop