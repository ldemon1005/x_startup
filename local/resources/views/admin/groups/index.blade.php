@extends('admin.master')
@section('title', 'Quản trị')
@section('main')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 ">Danh sách nhóm</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ asset('admin') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Danh sách nhóm</li>
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
                                    <th>Tên nhóm</th>
                                    <th>Ngày tạo</th>
                                    <th>Chủ để</th>
                                    <th>Tên chủ đề</th>
                                    <th>Nguồn</th>
                                    <th>Video</th>
                                    <th class="text-center">Chi tiết</th>
                                    <th class="text-center">Trạng thái</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($list_group as $group)
                                    <tr>
                                        <td>{{$group->name}}</td>
                                        <td>{{date('d/m/Y H:m',$group->created_at)}}</td>
                                        <td></td>
                                        <td>{{$group->name_topic}}</td>
                                        <td>{{$group->source}}</td>
                                        <td>
                                            <button {{($group->url_video == null || !file_exists(storage_path('app/video/'.$group->url_video)))  ? 'disabled' : ''}} onclick="wathch_video('{{route('watch_video',$group->id)}}')" class="btn btn-primary">Xem video</button>
                                        </td>
                                        <td class="text-center">
                                            <a style="cursor: pointer" onclick="view_detail('{{$group->id}}')"><i class="fa fa-eye text-primary"></i></a>

                                        </td>
                                        <td class="text-center">
                                            <button id="{{$group->id}}" onclick="update_status({{$group->id}})" class="btn btn-block btn-sm {{$group->status == 2 ? 'btn-success': 'btn-danger'}}">{{$group->status == 2 ? 'Hoạt đông': 'Không hoạt đông'}}</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row form-group pull-right" style="margin: 10px 0px">
                                {{$list_group->links()}}
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
    <div class="modal fade" id="detail_group" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

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
                url: '/admin/group/update_status_group/'+id,
                method: 'get',
                dataType: 'json',
            }).fail(function (ui, status) {
            }).done(function (data, status) {
                if(data.group){
                    data.group = JSON.parse(data.group);

                    var id = '#' + data.group.id;

                    if(data.group.status == 2) {
                        $(id).removeClass('btn-danger');
                        $(id).addClass('btn-success');
                        $(id).html('Hoạt động');
                    }else {
                        $(id).removeClass('btn-success');
                        $(id).addClass('btn-danger');
                        $(id).html('Không hoạt động');
                    }
                }
            });
        }
        
        function view_detail(id) {
            $.ajax({
                url: '/admin/group/detail_group/'+id,
                method: 'get',
                dataType: 'json',
            }).fail(function (ui, status) {
            }).done(function (data, status) {
                if(data.content){
                    $('#detail_group').html(data.content);
                    $('#detail_group').modal('show');
                }
            });
        }
        
        function wathch_video(url) {
            newwindow=window.open(url,'X-startup','height=500,width=800,top=150,left=200, location=0');
            if (window.focus) {newwindow.focus()}
            return false;
        }
    </script>
@stop