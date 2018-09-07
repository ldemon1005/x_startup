<h3>Tên của Email: Admin_XStartup</h3>
<h3>Chủ đề email: Email xác nhận đăng ký thành viên "Cuộc thi XStartup"</h3>
<h2 style="margin: 20px 0"><b>Nội dung:</b></h2>

<h3>Chào bạn!</h3>

<h3>BQT Cuộc thi XStartup nhận được thông tin đăng ký của bạn bao gồm:</h3>
<h3>-        Họ và tên: {{$account['fullname']}}</h3>
<h3>-        Email: {{$account['email']}}</h3>
<h3>-        Số điện thoại: {{$account['phone']}}</h3>
<h3>-        Số CMND: {{$account['card_id']}}</h3>

<h3></h3>Nếu đây không phải là bạn thì hãy xóa bỏ thông báo này.

<h3></h3>Nếu đúng là bạn hãy truy cập link dưới đây để xác thực tài khoản.

<h3>Link xác thực: <a href="{{$link}}" target="_blank"></a>{{$link}}</h3>

---------------
<div style="text-align: left">
    <img src="{{asset('local/resources/assets/guest/logo.png')}}" alt="X-startup">
</div>
