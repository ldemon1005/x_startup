@extends('client.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('local/resources/assets/guest/css') }}/news.css">
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
                <h2 class="section-label">Tin tức</h2>

                <div class="row">
                    @foreach($list_article as $article)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="news-item">
                                <a href="{{route('detail_client',$article->slug.'---n-'.$article->id)}}" class="image"
                                   style="background-image: url({{file_exists(storage_path('app/article/resized500-'.$article->avatar)) ? asset('local/storage/app/article/resized500-'.$article->avatar) : asset('local/resources/assets/images/default-image.png')}})"></a>
                                <div class="content">
                                    <a href="{{route('detail_client',$article->slug.'---n-'.$article->id)}}" class="title">{{$article->title}}</a>
                                    <div class="date">{{date('d-m-Y',$article->created_at)}}</div>
                                    <a href="{{route('detail_client',$article->slug.'---n-'.$article->id)}}" class="see-more">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@stop