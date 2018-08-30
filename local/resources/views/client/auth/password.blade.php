@extends('client.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/profile.css">
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
                <div class="change-pass-form">
                    <h5>Đổi mật khẩu</h5>
                    <form id="change_pass" action="{{route('action_change_pass')}}" method="post">
                        {{csrf_field()}}
                        <div class="group">
                            <label>Mật khẩu cũ</label>
                            <input type="password" name="pass_old">
                        </div>

                        <div class="group">
                            <label>Mật khẩu mới</label>
                            <input id="pass_new_1" type="password" name="pass_new_1">
                        </div>

                        <div class="group">
                            <label>Nhập lại mật khẩu</label>
                            <input type="password" name="pass_new_2">
                        </div>

                        <div class="group btn">
                            <a href="{{asset('')}}">Không</a>
                            <button type="submit">Đổi mật khẩu</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@stop