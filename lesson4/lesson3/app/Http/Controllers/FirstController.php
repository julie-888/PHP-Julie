<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FirstController extends Controller
{
    public function create(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = $request->password;
        $user->save();
    }

    public function list()
    {
        $user = User::get();
        return $user;
    }
    public function item($id)
    {
        $user = User::where('id', $id)->first();
        return $user;

    }
    public function lesson(Request $request)
    {
        //$user = User::where('id', 1)->first();
        //$user->email = 'test@mail.com';
        //$user->save();

        $new_user = User::class;
        $new_user->email = 'test@mail.com';
        $new_user->save();

       // $user_with_info = User::with('userInfo')->get();

        DB::query("update set 'email' = 'test' from user where id = 1");
        DB::query("select * from t1 join t2 on t1.id = t2.id");
        

    }
}
