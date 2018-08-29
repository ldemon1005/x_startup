@extends('admin.master')
@section('title', 'Quản trị')
@section('main')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 ">Danh sách ngành nghề</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ asset('admin') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Danh sách ngành nghề</li>
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
                        <div class="card-header">
                            <a href="{{route('form_career',0)}}" class="btn btn-primary">Thêm mới</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Tên ngành nghề</th>
                                    <th>Ngày tạo</th>
                                    <th>Người tạo</th>
                                    <th class="text-center">Trạng thái</th>
                                    <th class="text-center">Thao tác</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($list_career as $career)
                                    <tr>
                                        <td>{{$career->name}}</td>
                                        <td>{{date('d/m/Y H:m',$career->created_at)}}</td>
                                        <td>
                                            @if($career->user)
                                                {{$career->user->fullname}}
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <button id="{{$career->id}}" onclick="update_status({{$career->id}})" class="btn btn-block btn-sm {{$career->status == 2 ? 'btn-success': 'btn-danger'}}">{{$career->status == 2 ? 'Hoạt đông': 'Không hoạt đông'}}</button>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('form_career',$career->id)}}" data-toggle="tooltip" title="Chỉnh sửa" class="col-sm-4 text-primary"><i class="fa fa-wrench"></i></a>

                                            <a href="{{route('delete_career',$career->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa')" data-toggle="tooltip" title="Xóa" class="col-sm-4 text-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row form-group pull-right" style="margin: 10px 0px">
                                {{$list_career->links()}}
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
                url: '/admin/career/update_status_career/'+id,
                method: 'get',
                dataType: 'json',
            }).fail(function (ui, status) {
            }).done(function (data, status) {
                if(data.career){
                    data.career = JSON.parse(data.career);

                    var id = '#' + data.career.id;

                    if(data.career.status == 2) {
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
    </script>
@stop