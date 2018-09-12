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
                        <h1>{{ $article->id == 0? 'Thêm mới ': 'Chỉnh sửa '}}Bài viết</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ asset('admin') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="">Bài viết</a></li>
                            <li class="breadcrumb-item active">{{ $article->id == 0? 'Thêm mới ': 'Chỉnh sửa '}}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12 col-sm-12">
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">{{ $article->id == 0? 'Thêm mới ': 'Chỉnh sửa '}}</h3>
                            </div>
                            <form id="create_article" action="{{route('action_article')}}" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="card-body">
                                    <input type="text" name="article[id]" value="{{$article->id}}"
                                           class="form-control d-none" placeholder="ID danh mục">

                                    <div class="row form-group">
                                        <label class="col-sm-2">Tiêu đề bài viết <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="article[title]" required
                                                   value="{{$article->title}}"
                                                   class="form-control" placeholder="Tiêu đề bài viết">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-2">Mô tả</label>
                                        <div class="col-sm-10">
                                            <textarea type="text" name="article[caption]" class="form-control"
                                                      placeholder="Mô tả">{{$article->caption}}</textarea>
                                            {{--<textarea id="editor2" name="article[caption]" rows="10"--}}
                                                      {{--cols="5">--}}
                                                                {{--{{ $article->caption != '' ? $article->caption : 'Mô tả' }}--}}
                                                            {{--</textarea>--}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-2">Ngày phát hành <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="date" name="article[release_time][day]" required
                                                   value="{{$article->release_time->day}}" min="1000-01-01"
                                                   max="3000-12-31" class="form-control">
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="bootstrap-timepicker">
                                                <div class="input-group">
                                                    <input type="text" name="article[release_time][h]"
                                                           value="{{$article->release_time->h}}" class="form-control timepicker">

                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                    </div>
                                                </div>
                                                <!-- /.form group -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-2">Ảnh đại diện</label>
                                        <div class="col-sm-3 form-group">
                                            <input id="img" type="file" name="img" class="cssInput"
                                                   onchange="changeImg(this)" style="display: none!important;">
                                            <img style="cursor: pointer;max-width: 100%;max-height: 300px;" id="avatar"
                                                 class="cssInput thumbnail imageForm"
                                                 src="{{file_exists(storage_path('app/article/resized500-'.$article->avatar)) ? asset('local/storage/app/article/resized500-'.$article->avatar) : asset('local/resources/assets/images/default-image.png')}}">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-2">Nội dung bài viết</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="box box-info">
                                                        <!-- /.box-header -->
                                                        <div class="box-body pad">
                                                            <textarea id="editor1" name="article[content]" rows="10"
                                                                      cols="80">
                                                                {{ $article->content != '' ? $article->content : 'Nội dung bài viết' }}
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-2">Tác giả</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="article[author]"
                                                   value="{{$article->author}}">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <label class="col-sm-2">Trạng thái</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <label class="col-sm-3 text-primary">
                                                    <input value="2" type="radio"
                                                           name="article[status]" {{ $article->status == 2 ? 'checked' : '' }}>
                                                    Hoạt động
                                                </label>
                                                <label class="col-sm-3 text-primary">
                                                    <input value="1" type="radio"
                                                           name="article[status]" {{ $article->status != 2 ? 'checked' : '' }}>
                                                    Không hoạt động
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-info pull-right"
                                                style="margin-right: 10px">{{ $article->id ? 'Cập nhật' : 'Tạo mới' }}</button>
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
    <script src="plugins/ckeditor/ckeditor.js"></script>
    <script>
        $(function () {
            CKEDITOR.replace('editor1', {
                height: '400px',
                filebrowserBrowseUrl: 'plugins/ckfinder/ckfinder.html',
                filebrowserImageBrowseUrl: 'plugins/ckfinder/ckfinder.html?type=Images',
                filebrowserFlashBrowseUrl: 'plugins/ckfinder/ckfinder.html?type=Flash',
                filebrowserUploadUrl: 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                filebrowserImageUploadUrl: 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                filebrowserFlashUploadUrl: 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
            });
        });

        CKEDITOR.on( 'instanceReady', function( evt ) {
            evt.editor.dataProcessor.htmlFilter.addRules( {
                elements: {
                    img: function(el) {
                        el.addClass('zb');
                    },
                    iframe: function( element ) {
                        if ( !element.parent || !( element.parent.name == 'div' && element.parent.hasClass( 'video-wrapper' ) ) ) {
                            element.wrapWith( new CKEDITOR.htmlParser.element( 'div', { 'class': 'video-wrapper' } ) );
                        }
                    }
                }
            });
        });
    </script>

    <script>
        $("#create_article").validate({
            ignore: [],
            rules: {
                'article[title]': {
                    required: true
                },
                'article[caption]': {
                    required: true
                }
            },
            messages: {
                'article[title]': {
                    required: 'Vui lòng nhập tên danh mục'
                },
                'article[caption]': {
                    required: 'Vui lòng nhập mô tả tin tức'
                }
            }
        });
    </script>
@stop
