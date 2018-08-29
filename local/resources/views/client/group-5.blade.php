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
                <h2 class="section-label">Nhóm 3 con chim</h2>

                <p class="mt-5">Bao gồm các thành viên</p>

                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="member-item">
                            <div class="ava" style="background-image:url('https://timedotcom.files.wordpress.com/2014/05/mariah-carey-thirsty.jpg')"></div>
                            <div class="name">Cao T.Linh</div>
                            <div class="position lead">Trưởng nhóm</div>
                            <table class="info">
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td>090090900</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>090090900</td>
                                </tr>
                                <tr>
                                    <td>CMND</td>
                                    <td>090090900</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="member-item">
                            <div class="ava" style="background-image:url('https://timedotcom.files.wordpress.com/2014/05/mariah-carey-thirsty.jpg')"></div>
                            <div class="name">Cao T.Linh</div>
                            <div class="position">Thành viên</div>
                            <table class="info">
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td>090090900</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>090090900</td>
                                </tr>
                                <tr>
                                    <td>CMND</td>
                                    <td>090090900</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="member-item">
                            <div class="ava" style="background-image:url('https://timedotcom.files.wordpress.com/2014/05/mariah-carey-thirsty.jpg')"></div>
                            <div class="name">Cao T.Linh</div>
                            <div class="position">Thành viên</div>
                            <table class="info">
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td>090090900</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>090090900</td>
                                </tr>
                                <tr>
                                    <td>CMND</td>
                                    <td>090090900</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <h2 class="section-label mt-5">Thông tin bài thi</h2>

                <div id="group-create">
                    <div class="notify-text mt-5">Bài thi của bạn chưa đc xác nhận</div>
                    <form class="update-info mt-5">
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
                            <input type="file" name="">
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
                            <a class="back">Không</a>
                            <button>Lưu thay đổi</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@stop