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
                $('.file-name').html(filename);
            });
        });
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
                        <form id="info_project" class="update-info" action="{{route('action_group_3')}}" method="post">
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
                                <label>Mô tả</label>
                                <textarea name="group[description]">{{$group->description}}</textarea>
                            </div>

                            <div class="group">
                                <label>Video (Giới thiệu nhóm, thành viên, ý tưởng, tính khả thi...)</label>
                                <br>
                                <a class="upload">Upload</a> <span class="file-name">Bạn chưa có file video nào</span>
                                <input class="file" style="display: none;" type="file" name="">
                                
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
                                <a class="back" href="{{route('group_1')}}">Quay lại</a>
                                <button type="submit">Nộp bài</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop