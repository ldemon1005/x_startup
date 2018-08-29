<?php

namespace App\Http\Controllers\Client;

use App\Models\Account;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    function index(){
        $user = Auth::user();

        $group = Group::find($user->group_id);

        if(!$group){
            $group = [
                'id' => 0,
                'name' =>''
            ];
            $group = (object)$group;
        }

        $data = [
            'group' => $group
        ];
        return view('client.group.group-1',$data);
    }

    function action_group(Request $request){
        $req = $request->get('group');

        $user = Auth::user();

        if($req['id'] == 0){
            unset($req['id']);
            $req['status'] = 2;
            $req['created_at'] = time();
            $req['user_created'] = $user->id;
            $req['user_id'] = $user->id;

            $group = Group::create($req);
            if($group->id){
                DB::table('accounts')->where('id',$user->id)->update(['group_id' => $group->id]);
                return redirect()->route('group_1');
            }
        }else {
            $id_group = $req['id'];
            unset($req['id']);
            DB::table('group')->where('id',$id_group)->update($req);
            return back()->with('success','Cập nhật thành công!');
        }
    }

    function group_1(){
        $user = Auth::user();

        if($user->group_id){
            $group = Group::find($user->group_id);

            $user_ids = explode(',',$group->user_id);

            $list_user = DB::table('accounts')->whereIn('id',$user_ids)->get();

            $data = [
                'group' => $group,
                'list_user' => $list_user
            ];

            return view('client.group.group-2',$data);
        }else {
            return view('client.group.group-1');
        }
    }

    function add_member(Request $request){
        $req = $request->all();

        $user = DB::table('accounts')->where('email',$req['email'])->first();

        if(!$user){
            return back()->with('error','Email chưa đăng ký tài khoản');
        }

        if($user->group_id){
            return back()->with('error','Tài khoản đã thuộc một nhóm khác');
        }

        DB::table('accounts')->where('id',$user->id)->update(['group_id' => $req['group_id']]);

        $group = DB::table('group')->where('id',$req['group_id'])->first();

        $user_ids = explode(',',$group->user_id);

        array_push($user_ids,$user->id);

        $user_ids = array_unique($user_ids);

        $user_ids = implode(',',$user_ids);

        DB::table('group')->where('id',$req['group_id'])->update(['user_id' => $user_ids]);

        return redirect()->route('group_1')->with('success','Thêm thành viên thành công');
    }
}
