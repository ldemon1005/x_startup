@extends('client.master')

@section('fb_url', route('detail_client',$article->slug.'---n-'.$article->id))
@section('fb_title', cut_string($article->title, 70))
@section('fb_des', $article->caption)
@section('fb_img', file_exists(storage_path('app/article/resized500-'.$article->avatar)) ? asset('local/storage/app/article/resized500-'.$article->avatar) : asset('local/resources/assets/images/default-image.png'))


@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/news.css">
    <style>
        #header{
            background-color:#000!important;
        }
        .section-1{
            margin-top: var(--header-height);
        }

        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }

        .video-wrapper iframe {
            position: absolute;
            top:0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
@stop

@section('main')
    <div id="main">
        <section class="section-1">
            <div class="main-image" style="background-image: url({{file_exists(storage_path('app/article/'.$article->avatar)) ? asset('local/storage/app/article/'.$article->avatar) : asset('local/resources/assets/images/default-image.png')}})"></div>
        </section>

        <section class="su-section">
            <div class="container">
                <div class="article">
                    <h1 style="text-align: justify">{{$article->title}}</h1>
                    <hr>
                    <div>
                        <span class="date">{{date('d/m/Y H:m',$article->release_time)}}</span>
                        <div class="float-right">
                            <div class="fb-like" data-href="{{route('detail_client',$article->slug.'---n-'.$article->id)}}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                        </div>
                    </div>
                    <hr>
                    <div style="font-weight: bold;font-size: 14px;font-family: 'Arial';text-align: justify">
                        {!! $article->caption !!}
                    </div>
                    <hr>
                    <div>
                        {!! $article->content !!}
                    </div>
                </div>
            </div>
        </section>

        <section class="su-section section-bd-t">
            <div class="container">
                <h2 class="section-label">Tin liên quan</h2>

                <div class="row">
                    @foreach($article_related as $related)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="news-item">
                                <a href="" class="image"
                                   style="background-image: url({{file_exists(storage_path('app/article/resized500-'.$related->avatar)) ? asset('local/storage/app/article/resized500-'.$related->avatar) : asset('local/resources/assets/images/default-image.png')}})"></a>
                                <div class="content">
                                    <a href="" class="title">{{$related->title}}</a>
                                    <br>
                                    <a href="{{route('detail_client',$related->slug.'---n-'.$related->id)}}" class="title" style="font-weight: normal !important;position: absolute;text-transform : none !important;">
                                        {!! cut_string($related->caption,120) !!}
                                    </a>
                                    <div class="date">{{date('d-m-Y',$related->created_at)}}</div>
                                    <a href="{{route('detail_client',$related->slug.'---n-'.$related->id)}}" class="see-more">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@stop
@section('js')
@stop