<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    function index(Request $request){
        $req = $request->all();

        $list_article = DB::table('article')->orderByDesc('id')->paginate(15);

        $data = [
            'list_article' => $list_article
        ];

        return view('admin.article.index',$data);
    }

    function form_article($id = 0){
        if($id == 0){
            $article = [
                'id' => 0,
                'title' => '',
                'avatar' => '',
                'caption' => '',
                'status' => 2,
                'content' => '',
                'author' => ''
            ];
            $article = (object)$article;
        }else {
            $article = Article::find($id);
        }

        $data = [
            'article' => $article
        ];

        return view('admin.article.form_article',$data);
    }

    function action_article(Request $request){
        $req = $request->get('article');

        $user = Auth::user();

        $req['updated_at'] = time();

        $req['slug'] = str_slug($req['title']);

        $req['user_created'] = $user->id;

        $image = $request->file('img');
        if ($request->hasFile('img')) {
            $req['avatar'] = saveImageArticle([$image], 'article');
        }

        if($req['id'] == 0){
            $req['created_at'] = time();

            if($article = Article::create($req)){
                return redirect()->route('list_article')->with('success','Tạo mới thành công');
            }else {
                return redirect()->route('form_article',0)->with('error','Tạo mới không thành công');
            }
        }else {
            $article = Article::find($req['id']);

            if($article->update($req)){
                return redirect()->route('list_article')->with('success','Cập nhật thành công');
            }else {
                return redirect()->route('form_article',0)->with('error','Cập nhật không thành công');
            }
        }
    }

    function update_status($id){
        $article = Article::find($id);
        $article->status == 2 ? $article->status = 1 : $article->status = 2;
        $article->save();

        return json_encode([
            'article' => $article->toJson()
        ]);
    }

    function delete_article($id){
        if(DB::table('article')->delete($id)){
            return redirect()->route('list_article')->with('success','Xóa thành công');
        }else {
            return redirect()->route('list_article')->with('error','Xóa không thành công');
        }
    }

}
