@extends('client.master-2')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/login.css">
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
                <div class="container login-window">
                    <div class="xstartup">
                        <div class="xblue"></div>
                        <div class="xred"></div>
                    </div>

                    <div id="login">
                        <div class="login-form">
                            <h5>Đăng ký</h5>

                            @if(isset($error))
                                <p class="text-danger">{{$error}}</p>
                            @endif

                            <form id="register" method="post" action="{{route('post_register_client')}}">
                                {{csrf_field()}}
                                <input type="text" value="{{$fullname}}" placeholder="Họ và tên" name="fullname">

                                <input type="email" value="{{$email}}" placeholder="Email" name="email">

                                <input type="password" value="{{$password}}" id="password" placeholder="Mật khẩu" name="password">

                                <input type="password" value="{{$password}}" placeholder="Nhập lại mật khẩu" name="password_1">

                                <input type="text" value="{{$card_id}}" placeholder="CMND" name="card_id">

                                <input type="text" value="{{$phone}}" placeholder="Số điện thoại" name="phone">

                                <button type="submit" style="cursor: pointer">Đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop