@extends('admin.master')

@section('css')
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/select2.min.css">
@stop
@section('main')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ $career->id == 0? 'Thêm mới ': 'Chỉnh sửa '}} Ngành nghề</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ asset('admin') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="">Bài viết</a></li>
                            <li class="breadcrumb-item active">{{ $career->id == 0? 'Thêm mới ': 'Chỉnh sửa '}}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8 col-sm-8">
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">{{ $career->id == 0? 'Thêm mới ': 'Chỉnh sửa '}}</h3>
                            </div>
                            <form id="create_creer" action="{{route('action_career')}}" method="post">
                                {{csrf_field()}}
                                <div class="card-body">
                                    <input type="text" name="id" value="{{$career->id}}"
                                           class="form-control d-none" placeholder="ID danh mục">

                                    <div class="row form-group">
                                        <label class="col-sm-2">Tên ngành nghề <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="name" placeholder="Tên ngành nghề" value="{{$career->name}}">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-2">Trạng thái</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <label class="col-sm-3 text-primary">
                                                    <input value="2" type="radio"
                                                           name="status" {{ $career->status == 2 ? 'checked' : '' }}>
                                                    Hoạt động
                                                </label>
                                                <label class="col-sm-3 text-primary">
                                                    <input value="1" type="radio"
                                                           name="status" {{ $career->status != 2 ? 'checked' : '' }}>
                                                    Không hoạt động
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-info pull-right"
                                                style="margin-right: 10px">{{ $career->id ? 'Cập nhật' : 'Tạo mới' }}</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./row -->
    </div>
@stop

@section('script')
    <script>
        $("#create_creer").validate({
            ignore: [],
            rules: {
                'name': {
                    required: true
                }
            },
            messages: {
                'name': {
                    required: 'Vui lòng nhập tên ngành nghề'
                }
            }
        });
    </script>
@stop
