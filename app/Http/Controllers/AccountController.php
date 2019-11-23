<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    //
    
    public function Account() {
        $nm = DB::table('users')->get();
        return view('account.account',
        ['acc_name'=>$nm]
    );
    }
}
