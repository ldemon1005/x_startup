<?php

namespace App\Http\Controllers\Admin;

use App\Models\Group;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class GroupController extends Controller
{
    function index(Request $request){

        $req = $request->all();

        $list_group = DB::table('group')->paginate(15);

        $data = [
            'list_group' => $list_group
        ];

        return view('admin.groups.index',$data);
    }

    function update_status($id){
        $group = Group::find($id);
        $group->status == 2 ? $group->status = 1 : $group->status = 2;
        $group->save();

        return json_encode([
            'group' => $group->toJson()
        ]);
    }

    function detail_group($id){
        $group = DB::table('group')->find($id);

        $user_ids = explode(',',$group->user_id);

        $list_user = DB::table('accounts')->whereIn('id',$user_ids)->get();

        $data = [
            'group' => $group,
            'list_user' => $list_user
        ];

        $view = View::make('admin.groups.detail_group',$data)->render();

        return json_encode([
            'content' => $view
        ]);
    }

    function watch_video($id){
        $group = DB::table('group')->find($id);

        $data = [
            'group' => $group
        ];

        return view('admin.groups.watch_video',$data);
    }
}
