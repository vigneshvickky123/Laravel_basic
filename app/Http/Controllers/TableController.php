<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Detail;

class TableController extends Controller
{
    function getData(Request $req) 
    {
       $data= Detail::all();
       return view('table',['details'=>$data]);
    }
}
