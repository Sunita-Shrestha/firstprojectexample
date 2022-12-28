<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;


class User1Controller extends Controller
{
    //
    function index(){
        echo "db connection will be here";
        return DB::select("select * from  user");
    }
}
