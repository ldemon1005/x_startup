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

                                <button>Đăng nhập</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop