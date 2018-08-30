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

        if($group){
            $user_ids = explode(',',$group->user_id);

            $list_user = DB::table('accounts')->whereIn('id',$user_ids)->get();

            $list_career = DB::table('careers')->where('status',2)->get();

            $data = [
                'group' => $group,
                'list_user' => $list_user,
                'list_career' => $list_career
            ];

            return view('client.group.group-5',$data);
        }else {
            $group = [
                'id' => 0,
                'name' =>''
            ];
            $group = (object)$group;

            $data = [
                'group' => $group
            ];
            return view('client.group.group-1',$data);
        }
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

    function remove_member($id){
        $user = Auth::user();

        $group = DB::table('group')->find($user->group_id);

        $user_ids = explode(',',$group->user_id);

        $key = array_search($id,$user_ids);

        unset($user_ids[$key]);

        $user_ids = implode(',',$user_ids);

        DB::beginTransaction();

        $check = 1;

        if(!DB::table('group')->where('id',$user->group_id)->update(['user_id'=>$user_ids])){
            $check = 0;
        }

        if(!DB::table('accounts')->where('id',$id)->update(['group_id' => null])){
            $check = 0;
        }

        if($check == 1){
            DB::commit();
            return back()->with('success','Xóa thành viên thành công');
        }else {
            DB::rollBack();
            return back()->with('error','Xóa thành viên không thành công');
        }

    }

    function group_3(){
        $list_career = DB::table('careers')->where('status',2)->get();

        $user = Auth::user();

        $group = Group::find($user->group_id);

        $data = [
            'group' => $group,
            'list_career' => $list_career
        ];

        return view('client.group.group-3',$data);
    }

    function action_group_3(Request $request){
        $req = $request->get('group');

        $user = Auth::user();

        if(DB::table('group')->where('id',$user->group_id)->update($req)){
            return redirect()->route('group_complete');
        }else {
            return redirect()->route('group_3')->with('error','Nộp bài không thành công');
        }
    }

    function group_complete(){
        return view('client.group.group-4');
    }

    function action_group_5(Request $request){
        $req = $request->get('group');
        $user = Auth::user();

        if(DB::table('group')->where('id',$user->group_id)->update($req)){
            return back()->with('success','Cập nhật thành công');
        }else {
            return back()->with('error','Cập nhật không thành công');
        }
    }
}
