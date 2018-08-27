<div id="header">
    <section>
        <div class="d-flex">
            <div class="logo"></div>
            <ul class="menu">
                <li><a href="">Trang chủ</a></li>
                <li><a href="">Tin tức</a></li>
                <li><a href="">Trang nhóm</a></li>
            </ul>
            <div class="login">
                <a class="login-btn" href="{{route('login_client')}}">{{\Illuminate\Support\Facades\Auth::user() ? \Illuminate\Support\Facades\Auth::user()->fullname : 'Đăng nhập'}}</a>
                @if(! \Illuminate\Support\Facades\Auth::user())
                    <a class="signup-btn" href="{{route('register_client')}}">Đăng ký</a>
                @endif

            </div>
        </div>
    </section>
</div>