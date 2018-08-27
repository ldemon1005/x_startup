@extends('admin.master')
@section('title', 'Quản trị')
@section('main')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 ">Danh sách phản hồi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ asset('admin') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Danh sách phản hồi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        @if (session('error'))
                            <div class="alert alert-error">
                                <p>{{ session('error') }}</p>
                            </div>
                        @endif

                        @if (session('status'))
                            <div class="alert alert-success">
                                <p>{{ session('status') }}</p>
                            </div>
                        @endif

                        <div class="card-header">
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                    <th>Nội dung</th>
                                    <th>Ngày gửi</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày trả lời</th>
                                    <th>Người trả lời</th>
                                    <th class="text-center">Thao tác</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($list_question as $ques)
                                    <tr>
                                        <td>{{$ques->fullname}}</td>
                                        <td>{{$ques->email}}</td>
                                        <td>{{$ques->content}}</td>
                                        <td>{{date('d/m/Y H:m',$ques->created_at)}}</td>
                                        <td>
                                            <button id="{{$ques->id}}" onclick="update_status({{$ques->id}})" class="btn btn-block btn-sm {{$ques->status == 2 ? 'btn-success': 'btn-danger'}}">{{$ques->status == 2 ? 'Đã phản hồi': 'Chưa phản hồi'}}</button>
                                        </td>
                                        <td>{{date('d/m/Y H:m',$ques->updated_at)}}</td>
                                        <td>
                                            @if($ques->user_update)
                                                {{$ques->user_update->fullname}}
                                            @else
                                                Không tìm thấy
                                            @endif
                                        </td>
                                        <td class="text-center text-primary">
                                            <a style="cursor: pointer;" title="Gửi mail phản hồi" onclick="send_mail({{$ques->id}})"><i class="fa fa-share-square"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row form-group pull-right" style="margin: 10px 0px">
                                {{$list_question->links()}}
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="send_mail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    </div>
@stop

@section('css')
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/select2.min.css">
@stop

@section('script')
    <!-- Select2 -->
    <script src="plugins/select2/select2.full.min.js"></script>
    <script>
        function update_status(id) {
            $.ajax({
                url: '/admin/question/update_status_question/'+id,
                method: 'get',
                dataType: 'json',
            }).fail(function (ui, status) {
            }).done(function (data, status) {
                if(data.question){
                    data.question = JSON.parse(data.question);

                    var id = '#' + data.question.id;

                    if(data.question.status == 2) {
                        $(id).removeClass('btn-danger');
                        $(id).addClass('btn-success');
                        $(id).html('Đã phản hồi');
                    }else {
                        $(id).removeClass('btn-success');
                        $(id).addClass('btn-danger');
                        $(id).html('Chưa phản hồi');
                    }
                }
            });
        }


        function send_mail(id) {
            $.ajax({
                url: '/admin/question/form_send_mail/'+id,
                method: 'get',
                dataType: 'json',
            }).fail(function (ui, status) {
            }).done(function (data, status) {
                if(data.content){
                    $('#send_mail').html(data.content);
                    $('#send_mail').modal('show');
                }
            });
        }
    </script>
@stop