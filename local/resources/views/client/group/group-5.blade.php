@extends('client.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/group.css">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('.upload').click(function() {
                $('.file').click();
            });

            $('.file').change(function(){
                var filename = $('.file')[0].files[0].name;

                if (isVideo(filename)){
                    // console.log($('.file')[0].files[0].size);
                    if($('.file')[0].files[0].size > 209715200){
                        $('.file-name').addClass('text-danger');
                        $('.file-name').html("File quá lớn.");
                        return;
                    }
                    $('.file-name').removeClass('text-danger');
                    $('.file-name').html(filename);
                }else  {
                    $('.file-name').addClass('text-danger');
                    $('.file-name').html("File không đúng định dạng.");
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

        function getExtension(filename) {
            var parts = filename.split('.');
            return parts[parts.length - 1];
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
                <h2 class="section-label">{{$group->name}}</h2>

                <p class="mt-5">Bao gồm các thành viên</p>

                <div class="row">
                    @foreach($list_user as $user)
                        <div class="col-12 col-md-4 col-lg-4">
                            <div class="member-item" style="position: relative">
                                @if($user->id != $group->user_created)
                                    <a style="position: absolute;top: 15px;right: 15px;" class="text-danger {{$user->id == $group->user_created ? '' : 'disabled'}}" href="{{route('remove_member',$user->id)}}">Xóa</a>
                                @endif
                                <div class="ava" style="background-image:url({{file_exists(storage_path('app/user/resized500-'.$user->avatar)) ? asset('local/storage/app/user/resized500-'.$user->avatar) : asset('local/resources/assets/images/default-image.png')}})"></div>
                                <div class="name">{{$user->fullname}}</div>
                                <div class="position {{$user->id == $group->user_created ? 'lead' : ''}}">{{$user->id == $group->user_created ? 'Trưởng nhóm' : 'Thành viên'}}</div>
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
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="add-image">
                            <div class="plus"></div>
                        </div>
                    </div>
                </div>

                <h2 class="section-label mt-5">Thông tin bài thi</h2>

                <div id="group-create">
                    <div class="notify-text mt-5">Bài thi của bạn chưa đc xác nhận</div>
                    <form class="update-info mt-5" method="post" action="{{route('action_group_5')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="group">
                            <label>Tên nhóm</label>
                            <input type="text" name="group[name]" value="{{$group->name}}">
                        </div>

                        <div class="group">
                            <label>Tên dự án</label>
                            <input type="text" name="group[name_topic]" value="{{$group->name_topic}}">
                        </div>

                        <div class="group">
                            <label>Lĩnh vực</label>
                            <select name="group[career]">
                                @foreach($list_career as $career)
                                    <option {{$group->career == $career->id ? 'selected' : ''}} value="{{$career->id}}">{{$career->name}}</option>
                                @endforeach
                                <option {{$group->career == 0 ? 'selected' : ''}} value="0">Khác</option>
                            </select>
                        </div>

                        <div class="group">
                            <label>Mô tả</label>
                            <textarea name="group[description]">{{$group->description}}</textarea>
                        </div>

                        <div class="group">
                            <label>Video (Giới thiệu nhóm, thành viên, ý tưởng, tính khả thi... Video ở định dạng mp4,và nhỏ hơn 200mb)</label>
                            <br>
                            <a class="upload">Upload</a>
                            <span class="file-name">
                                @if($group->url_video)
                                    {{$group->url_video}}
                                @else
                                    Bạn chưa có file video nào
                                @endif
                            </span>
                            <input class="file" style="display: none;" type="file" name="video">
                        </div>

                        <div class="group">
                            <label>Mô hình sản phẩm</label>
                            <select name="group[type_product]">
                                <option {{$group->type_product == 1 ? 'selected' : ''}} value="1">Không</option>
                                <option {{$group->type_product == 2 ? 'selected' : ''}} value="2">Có</option>
                            </select>
                        </div>

                        <div class="group">
                            <label>Bạn biết cuộc thi qua phương tiện?</label>
                            <select name="group[source]">
                                <option {{$group->source == 1 ? 'selected' : ''}} value="1">Fanpage facebook</option>
                                <option {{$group->source == 2 ? 'selected' : ''}} value="2">Bạn bè</option>
                                <option {{$group->source == 3 ? 'selected' : ''}} value="3">Báo chí</option>
                                <option {{$group->source == 0 ? 'selected' : ''}} value="0">Khác</option>
                            </select>
                        </div>

                        <div>
                            <a class="back">Không</a>
                            <button type="submit">Lưu thay đổi</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="padding: 50px;">
                <form class="add-member" style="margin-top: 0;">
                    <labe>Email</labe>
                    <input type="email" name="">
                    <button>Thêm thành viên</button>
                </form>
            </div>
        </div>
    </div>
@stop