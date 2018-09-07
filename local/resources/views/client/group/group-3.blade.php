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
                <h2 class="section-label">Nộp bài dự thi</h2>

                <p class="mt-5">Thí sinh chỉ được đăng ký 1 dự án theo cá nhân hoặc nhóm tối đa 3 người, ý tưởng khởi nghiệp.</p>
                <div id="group-create">
                    <div id="navigation">
                        <a href="">Tạo nhóm</a>
                        <a href="" class="active">Thông tin dự án</a>
                        <a href="">Nộp bài</a>
                    </div>
                    <div>
                        <form id="info_project" class="update-info" action="{{route('action_group_3')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
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
                                <label>Bản tóm tắt dự án</label>
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

                                <input id="name-description_1" value="{{$group->description}}" style="display: none;" name="name-description_1">
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
                                <input id="name-video_1" value="{{$group->url_video}}" class="file" style="display: none;" name="name-video_1">
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
                                    <option {{$group->source == 4 ? 'selected' : ''}} value="3">Truyền thông</option>
                                    <option {{$group->source == 0 ? 'selected' : ''}} value="0">Khác</option>
                                </select>
                            </div>


                            <div>
                                <a class="back" href="{{route('group_1')}}">Quay lại</a>
                                <button onclick="info_project()" type="submit">Nộp bài</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop