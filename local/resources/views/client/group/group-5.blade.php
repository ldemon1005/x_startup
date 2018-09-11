@extends('client.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/group.css">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#video').click(function() {
                $('#file-video').click();
            });

            $('#description').click(function() {
                $('#file-description').click();
            });

            $('#file-video').change(function(){

                var filename = $('#file-video')[0].files[0].name;

                if (isVideo(filename)){
                    // console.log($('.file')[0].files[0].size);
                    if($('#file-video')[0].files[0].size > 1610612736){
                        $('#name-video').addClass('text-danger');
                        $('#name-video').html("File quá lớn.");
                        return;
                    }
                    $('#name-video').removeClass('text-danger');
                    $('#name-video').html(filename);
                    $('#name-video_1').val(filename);
                }else  {
                    $('#name-video').addClass('text-danger');
                    $('#name-video').html("File không đúng định dạng.");
                }
            });

            $('#file-description').change(function(){
                console.log('chào');
                var filename = $('#file-description')[0].files[0].name;

                if (isPdf(filename)){
                    $('#name-description').removeClass('text-danger');
                    $('#name-description').html(filename);
                    $('#name-description_1').val(filename);
                }else  {
                    $('#name-description').addClass('text-danger');
                    $('#name-description').html("File không đúng định dạng.");
                }
            });

            $('.add-image').click(function(){
                $('#myModal').modal();
            });
        });

        function isVideo(filename) {
            var ext = getExtension(filename);
            switch (ext.toLowerCase()) {
                case 'mp4': return true;
            }
            return false;
        }

        function isPdf(filename) {
            var ext = getExtension(filename);
            switch (ext.toLowerCase()) {
                case 'pdf': return true;
            }
            return false;
        }

        function getExtension(filename) {
            var parts = filename.split('.');
            return parts[parts.length - 1];
        }

        function change_value() {
            $('#reload').removeClass('d-none');
            $('#change').removeClass('not-change');
            $('#change').addClass('change');
        }

    </script>
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
                <h2 class="section-label">{{$group->name}}<a href="{{route('delete_group',$group->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa')" class="btn {{\Illuminate\Support\Facades\Auth::user()->id == $group->admin ? '' : 'd-none'}}" title="Xóa nhóm"><i class="fa fa-trash text-danger"></i></a></h2>

                <p class="mt-5">Bao gồm các thành viên</p>

                <div class="row">
                    @foreach($list_user as $user)
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="member-item" style="position: relative">
                                @if($user->id != $group->admin)
                                    <a onclick="return confirm('Bạn chắc chắn muốn xóa')" style="position: absolute;top: 15px;right: 15px;" class="text-danger {{(\Illuminate\Support\Facades\Auth::user()->id == $group->admin || \Illuminate\Support\Facades\Auth::user()->id == $user->id) ? '' : 'd-none'}}" href="{{route('remove_member',$user->id)}}" title="Xóa thành viên"><i class="fa fa-trash text-danger"></i></a>
                                    <a onclick="return confirm('Bạn chắc chắn muốn ủy quyển')" style="position: absolute;top: 15px;right: 40px;" class="text-primary {{(\Illuminate\Support\Facades\Auth::user()->id == $group->admin || \Illuminate\Support\Facades\Auth::user()->id == $user->id) ? '' : 'd-none'}}" href="{{route('setup_admin',$user->id)}}" title="Ủy quyền nhóm trưởng"><i class="fa fa-layer-group text-primary"></i></a>
                                @endif
                                <div class="ava" style="background-image:url({{file_exists(storage_path('app/user/resized500-'.$user->avatar)) ? asset('local/storage/app/user/resized500-'.$user->avatar) : asset('local/resources/assets/images/default-image.png')}})"></div>
                                <div class="name">{{$user->fullname}}</div>
                                <div class="position {{$user->id == $group->admin ? 'lead' : ''}}">{{$user->id == $group->admin ? 'Trưởng nhóm' : 'Thành viên'}}</div>
                                <table class="info">
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
                    <div class="col-12 col-md-4 col-lg-4 {{(\Illuminate\Support\Facades\Auth::user()->id == $group->admin && $list_user->count() < 3) ? '' : 'd-none'}}">
                        <div class="add-image">
                            <div class="plus"></div>
                        </div>
                    </div>
                </div>

                <h2 class="section-label mt-5">Thông tin bài thi</h2>

                <div id="group-create">
                    @if(count($check) != 0)
                        <div class="notify-text mt-5">Bài thi của bạn chưa được xác nhận ({{implode(', ',$check)}})</div>
                    @endif

                    <form id="form-group" class="update-info mt-5" method="post" action="{{route('action_group_5')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="group">
                            <label>Tên nhóm</label>
                            <input type="text" name="group[name]" onchange="change_value()" value="{{$group->name}}">
                        </div>

                        <div class="group">
                            <label>Tên dự án</label>
                            <input type="text" name="group[name_topic]" onchange="change_value()" value="{{$group->name_topic}}">
                        </div>

                        <div class="group">
                            <label>Lĩnh vực</label>
                            <select name="group[career]" onchange="change_value()">
                                @foreach($list_career as $career)
                                    <option {{$group->career == $career->id ? 'selected' : ''}} value="{{$career->id}}">{{$career->name}}</option>
                                @endforeach
                                <option {{$group->career == 0 ? 'selected' : ''}} value="0">Khác</option>
                            </select>
                        </div>

                        <div class="group">
                            <label>Bản tóm tắt dự án(File PDF)</label>
                            {{--<textarea name="group[description]">{{$group->description}}</textarea>--}}
                            <br>
                            <a id="description" class="upload">Upload</a>
                            <span id="name-description" class="file-name">
                                @if($group->description)
                                    {{$group->description}}
                                @else
                                    Nhóm chưa có file mô tả nào
                                @endif
                            </span>
                            <input id="file-description" class="file" style="display: none;" type="file" name="description">

                            <input id="name-description_1" value="{{$group->description}}" onchange="change_value()" style="display: none;" name="name-description">
                        </div>

                        <div class="group">
                            <label>Video (Giới thiệu nhóm, thành viên, ý tưởng, tính khả thi... Video ở định dạng mp4,và nhỏ hơn 1.5gb)</label>
                            <br>
                            <a id="video" class="upload">Upload</a>
                            <span id="name-video" class="file-name">
                                @if($group->url_video)
                                    {{$group->url_video}}
                                @else
                                    Nhóm chưa có file video nào
                                @endif
                            </span>
                            <input id="file-video" class="file" style="display: none;" type="file" name="video">

                            <input id="name-video_1" value="{{$group->url_video}}" onchange="change_value()" class="file" style="display: none;" name="name-video">
                        </div>

                        <div class="group">
                            <label>Mô hình sản phẩm</label>
                            <select name="group[type_product]" onchange="change_value()">
                                <option {{$group->type_product == 1 ? 'selected' : ''}} value="1">Chưa</option>
                                <option {{$group->type_product == 2 ? 'selected' : ''}} value="2">Có</option>
                            </select>
                        </div>

                        <div class="group">
                            <label>Bạn biết cuộc thi qua phương tiện?</label>
                            <select name="group[source]" onchange="change_value()">
                                <option {{$group->source == 1 ? 'selected' : ''}} value="1">Fanpage facebook</option>
                                <option {{$group->source == 2 ? 'selected' : ''}} value="2">Bạn bè</option>
                                <option {{$group->source == 3 ? 'selected' : ''}} value="3">Báo chí</option>
                                <option {{$group->source == 4 ? 'selected' : ''}} value="3">Truyền thông</option>
                                <option {{$group->source == 0 ? 'selected' : ''}} value="0">Khác</option>
                            </select>
                        </div>

                        <div>
                            <a id="reload" class="back d-none" onclick="location.reload();">Hủy</a>
                            <button id="change" onclick="submit_form()" type="submit" class="not-change">Lưu thay đổi</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="padding: 50px;">
                <form class="add-member" action="{{route('add_member')}}" method="post"  style="margin-top: 0;">
                    {{csrf_field()}}
                    <input value="{{$group->id}}" name="group_id" class="d-none">
                    <input type="email" name="email" placeholder="Nhâp email thành viên.">
                    <button type="submit">Thêm thành viên</button>
                </form>
            </div>
        </div>
    </div>
@stop