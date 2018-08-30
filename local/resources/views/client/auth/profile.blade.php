@extends('client.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/profile.css">
@stop
@section('js')
    <script type="text/javascript" src="{{ asset('local/resources/assets/guest/js') }}/profile.js"></script>
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
                <div class="row">

                    <div class="col-12 col-md-3 col-lg-3">
                        <div class="avatar-block">
                            <div class="avatar" id="avatar_img"
                                 style="background-image: url({{file_exists(storage_path('app/user/resized500-'.$user->avatar)) ? asset('local/storage/app/user/resized500-'.$user->avatar) : asset('local/resources/assets/images/default-image.png')}});"></div>
                            <a id="upload_avatar" class="avatar-btn btn">Up avatar</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 offset-md-1">
                        <form class="profile-form" action="{{route('update_user')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input id="img" type="file" name="img"
                                   onchange="changeImage(this)" style="display: none!important;">
                            <div class="group">
                                <label>Họ tên</label>
                                <input type="text" name="user[fullname]" value="{{$user->fullname}}">
                            </div>

                            <div class="group">
                                <label>Mail</label>
                                <input disabled type="email" name="user[email]" value="{{$user->email}}">
                            </div>

                            <div class="group">
                                <label>Phone</label>
                                <input type="text" name="user[phone]" value="{{$user->phone}}">
                            </div>

                            <div class="group">
                                <label>CMND</label>
                                <input type="text" name="user[card_id]" value="{{$user->card_id}}">
                            </div>

                            <button type="submit">Lưu thay đổi</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop