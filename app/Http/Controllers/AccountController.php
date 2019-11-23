<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    //
    $nm = DB::table('user')->get();
    public function Account() {
        return view('account.account',['name'->$nm]);
    }
}
