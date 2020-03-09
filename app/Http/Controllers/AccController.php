<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class AccController extends Controller
{
    //
    public function __construct(){
        // $this->midleware();
    }

    public function Show () {
        $acc = DB::table('UsersInfo')->get();
        return view('account.account', ['acc'=>$acc]);
    }

}
