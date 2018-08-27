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
                            <div class="avatar" style="background-image: url(https://orig00.deviantart.net/7676/f/2015/336/6/e/beautiful_in_white_by_bwaworga-d9irza9.jpg);"></div>
                            <a class="avatar-btn">Up avatar</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 offset-md-1">
                        <h6>Cao T.Ling</h6>
                        <div class="group">
                            <label>Mail</label>
                            <input type="email" name="">
                        </div>

                        <div class="group">
                            <label>Phone</label>
                            <input type="text" name="">
                        </div>

                        <div class="group">
                            <label>CMND</label>
                            <input type="text" name="">
                        </div>

                        <div class="group">
                            <label>Facebook</label>
                            <input type="text" name="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop