<?php

namespace App\Http\Controllers\Client;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    function index(){
        $list_article = DB::table('article')->where('status',2)->orderByDesc('id')->paginate(8);

        $data = [
            'list_article' => $list_article
        ];

        return view('client.news.list',$data);
    }

    function detail($slug){
        $slug = explode('---n-',$slug);

        $article = Article::find($slug[1]);

        $article_related = DB::table('article')->where('status',2)->orderByDesc('id')->take(3)->get();

        $data = [
            'article' => $article,
            'article_related' => $article_related
        ];

        return view('client.news.detail',$data);
    }
}
