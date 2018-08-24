<?php

namespace App\Http\Controllers\Admin;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    function index(Request $request){
        $list_user = DB::table('accounts')->paginate(15);

        $data = [
            'list_user' => $list_user
        ];
        return view('admin.account.index',$data);
    }

    function update_status($id){
        $account = Account::find($id);
        $account->status == 2 ? $account->status = 1 : $account->status = 2;
        $account->save();

        return json_encode([
            'account' => $account->toJson()
        ]);
    }
}
