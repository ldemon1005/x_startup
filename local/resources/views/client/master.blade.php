<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta property="og:url"           content="@yield('fb_url')" />
	<meta property="og:type"          content="article" />
	<meta property="og:title"         content="@yield('fb_title')" />
	<meta property="og:description"   content="@yield('fb_des')" />
	<meta property="og:image"         content="@yield('fb_img')" />

	<link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/reset.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/base.css">
	@yield('css')
</head>
<body>
	<div id="wrapper">
		@include('client.header-footer.header')

		@yield('main')

		@include('client.header-footer.footer')
        <div class="errorAlert">
            @include('errors.note')
        </div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ asset('local/resources/assets/guest/js') }}/imageloaded.js"></script>
	<script type="text/javascript" src="{{ asset('local/resources/assets/js/jquery.validate.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('local/resources/assets/guest/js') }}/home.js"></script>


    <script>
        $('.errorAlert').css('bottom','100px');
        setTimeout(function(){
            $('.errorAlert').css('bottom', '-200px');
        }, 3000);
        setTimeout(function(){
            $('.errorAlert').fadeOut();
        }, 3900);
    </script>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=1084775134984999&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
	@yield('js')
</body>
</html>