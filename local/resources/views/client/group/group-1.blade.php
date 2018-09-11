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

                <p class="mt-5">Thí sinh chỉ được đăng ký 1 dự án theo cá nhân hoặc nhóm tối đa 3 người.</p>
                <div id="group-create">
                    <div id="navigation">
                        <a href="" class="active">Tạo nhóm</a>
                        <a href="">Thông tin dự án</a>
                        <a href="">Gửi bài</a>
                    </div>

                    @if($group->id == 0)
                        <form id="group_create_client" action="{{route('action_group')}}" method="post">
                            {{csrf_field()}}
                            <label>Tên nhóm</label>
                            <input class="d-none" name="group[id]" value="{{$group->id}}">
                            <input type="text" name="group[name]" value="{{$group->name}}">
                            <input checked type="checkbox" name="license"> Tôi đã đọc <a href="{{ asset('/#terms') }}"
                                                                                         id="terms"
                                                                                         style="color: var(--text-1);">điều
                                khoản</a> của chương trình <br>
                            <button class="change" type="submit">Tạo nhóm</button>
                        </form>
                    @else
                        @if($group->user_created == \Illuminate\Support\Facades\Auth::user()->id)
                            <form id="group_create_client" action="{{route('action_group')}}" method="post">
                                {{csrf_field()}}
                                <label>Tên nhóm</label>
                                <input class="d-none" name="group[id]" value="{{$group->id}}">
                                <input type="text" name="group[name]" value="{{$group->name}}">
                                <input checked type="checkbox" name="license"> Tôi đã đọc <a
                                        href="{{ asset('/#terms') }}"
                                        id="terms"
                                        style="color: var(--text-1);">điều khoản</a> của chương trình
                                <br>
                                <button type="submit">Cập nhật</button>
                                <a href="{{route('group_1')}}" class="btn btn-primary">Tiếp</a>
                            </form>
                        @else
                            <form>
                                <label>Tên nhóm</label>
                                <input disabled type="text" name="" value="{{$group->name}}">
                                <input disabled checked type="checkbox" name="license"> Tôi đã đọc <a
                                        href="{{ asset('/#terms') }}"
                                        id="terms"
                                        style="color: var(--text-1);">điều khoản</a> của chương
                                trình <br>
                                <a class="btn btn-primary" href="{{route('group_1')}}" style="color: white;">Tiếp
                                    theo</a>
                            </form>
                        @endif
                    @endif
                </div>
            </div>
        </section>
    </div>
@stop
