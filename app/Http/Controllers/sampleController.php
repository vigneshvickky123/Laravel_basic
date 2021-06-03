<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;


class samplecontroller extends Controller
{
    public function index(){
        return view('sample');
    }
    public function store(Request $req)
    {
        $req->validate([
            'name'=>'required | max:10',
            'mobile'=>'required ',
            'email'=>'required | max:100'

        ]);

        $detail= new Detail;
        $detail->name=$req->name;
        $detail->mobile=$req->mobile;
        $detail->email=$req->email;
        $detail->save();
        


    }


}
