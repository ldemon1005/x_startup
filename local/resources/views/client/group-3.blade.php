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
                        <form class="update-info">
                            <div class="group">
                                <label>Tên dự án</label>
                                <input type="text" name="">
                            </div>

                            <div class="group">
                                <label>Lĩnh vực</label>
                                <select>
                                    <option>Thương mại - dịch vụ</option>
                                    <option>Công nghiệp</option>
                                    <option>Nông nghiệp</option>
                                    <option>Y tế</option>
                                    <option>Giáo dục</option>
                                    <option>Khác</option>
                                </select>
                            </div>

                            <div class="group">
                                <label>Mô tả</label>
                                <textarea></textarea>
                            </div>

                            <div class="group">
                                <label>Video (Giới thiệu nhóm, thành viên, ý tưởng, tính khả thi...)</label>
                                <br>
                                <a class="upload">Upload</a> <span class="file-name">Bạn chưa có file video nào</span>
                                <input class="file" style="display: none;" type="file" name="">
                            </div>

                            <div class="group">
                                <label>Mô hình sản phẩm</label>
                                <select>
                                    <option>Không</option>
                                    <option>Có</option>
                                </select>
                            </div>

                            <div class="group">
                                <label>Bạn biết cuộc thi qua phương tiện?</label>
                                <select>
                                    <option>Fanpage facebook</option>
                                    <option>Bạn bè</option>
                                    <option>Báo chí</option>
                                    <option>Khác</option>
                                </select>
                            </div>

                            <div>
                                <a class="back">Quay lại</a>
                                <button>Nộp bài</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop