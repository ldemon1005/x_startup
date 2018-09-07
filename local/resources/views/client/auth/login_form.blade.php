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
                            <h5>Đăng nhập</h5>

                            @if (session('error'))
                                <div class="alert alert-error">
                                    <p class="text-danger">{{ session('error') }}</p>
                                </div>
                            @endif

                            <form id="login_form" method="post" action="{{route('post_login_client')}}">
                                {{csrf_field()}}
                                <input type="email" placeholder="Email" name="email">

                                <input type="password" placeholder="Mật khẩu" name="password">

                                <a onclick="forgot_password()" style="text-decoration: none;cursor: pointer"  class="text-warning">Quên mật khẩu</a>
                                <br><br>
                                <button type="submit">Đăng nhập</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="padding: 50px;">
                        <form class="forgot-password" action="{{route('forget_password')}}" method="post"  style="margin-top: 0;">
                            {{csrf_field()}}
                            <input type="email" name="email" placeholder="Nhâp email.">
                            <button type="submit">Quên mật khẩu</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop