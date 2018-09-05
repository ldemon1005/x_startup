@extends('client.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/group.css">
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
                <h2 class="section-label">Nộp bài dự thi</h2>

                <p class="mt-5">Thí sinh chỉ được đăng ký 1 dự án theo cá nhân hoặc nhóm tối đa 3 người, ý tưởng khởi nghiệp.</p>
                <div id="group-create">
                    <div id="navigation">
                        <a href="" class="active">Tạo nhóm</a>
                        <a href="">Thông tin dự án</a>
                        <a href="">Gửi bài</a>
                    </div>
                    <div>
                        @foreach($list_user as $user)
                            <div class="member">
                                <div class="image" style="background-image:url({{file_exists(storage_path('app/user/resized500-'.$user->avatar)) ? asset('local/storage/app/user/resized500-'.$user->avatar) : asset('local/resources/assets/images/default-image.png')}})"></div>
                                <div class="info">
                                    <div class="member-name">{{$user->fullname}}</div>

                                    @if($group->user_created == $user->id)
                                        <div class="label">Trưởng nhóm</div>
                                    @endif

                                    <table>
                                        <tr>
                                            <td>Số điện thoại</td>
                                            <td>{{$user->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{$user->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>CMND</td>
                                            <td>{{$user->card_id}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        @endforeach


                    </div>

                    <div>
                        @if($group->user_created == \Illuminate\Support\Facades\Auth::user()->id)
                            <form class="add-member" id="add-member" action="{{route('add_member')}}" method="post">
                                {{csrf_field()}}
                                <labe>Email</labe>
                                <input value="{{$group->id}}" name="group_id" class="d-none">
                                <input type="email" name="email">
                                <button type="submit">Thêm thành viên</button>
                            </form>
                        @endif
                        <div>
                            <a class="back" href="{{route('group')}}">Quay lại</a>
                            <a class="btn btn-primary" href="{{route('group_3')}}">Bước tiếp theo</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop