<div id="header">
    <section>
        <div class="d-flex">
            <a href="{{asset('/')}}" class="logo"></a>
            <ul class="menu">
                <li><a href="{{ asset('/') }}">Trang chủ</a></li>
                <li><a href="">Tin tức</a></li>
                <li><a href="{{route('group')}}">Trang nhóm</a></li>
            </ul>
            <div class="login">
                @if( !Auth::check() )
                    <a class="login-btn" href="{{route('login_client')}}">Đăng nhập</a>
                    <a class="signup-btn" href="{{route('register_client')}}">Đăng ký</a>
                @else
                    <a class="user">{{\Illuminate\Support\Facades\Auth::user()->fullname}} <span class="ava" style="background-image: url({{file_exists(storage_path('app/user/resized500-'.Auth::user()->avatar)) ? asset('local/storage/app/user/resized500-'.Auth::user()->avatar) : asset('local/resources/assets/images/default-image.png')}});"></span></a>
                    <div class="dropdown">
                        <ul>
                            <li><a href="{{route('profile')}}">Hồ sơ cá nhân</a></li>
                            <li><a href="{{route('change_pass')}}">Thay đổi mật khẩu</a></li>
                            <li><a href="{{route('change_pass')}}">Đăng xuất</a></li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </section>
</div>