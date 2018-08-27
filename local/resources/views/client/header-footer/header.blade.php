<div id="header">
    <section>
        <div class="d-flex">
            <a href="{{asset('/')}}" class="logo"></a>
            <ul class="menu">
                <li><a href="{{ asset('/') }}">Trang chủ</a></li>
                <li><a href="">Tin tức</a></li>
                <li><a href="">Trang nhóm</a></li>
            </ul>
            <div class="login">
                @if( Auth::guest() )
                <a class="login-btn" href="{{route('login_client')}}">Đăng nhập</a>
                <a class="signup-btn" href="{{route('register_client')}}">Đăng ký</a>
                @else
                <a class="user">{{Auth::user()->fullname}} <span class="ava" style="background-image: url('');"></span></a>
                @endif
            </div>
        </div>
    </section>
</div>