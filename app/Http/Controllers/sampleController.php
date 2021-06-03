<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;
use database\migrations\create_samples_table;

class sampleController extends Controller
{
    public function index() {
        return view('sample');

    }

    public function store(Request $request) {

        $sample = new Sample;
        $sample->name = $request->name;
        $sample->mobile = $request->mobile;
        $sample->email = $request->email;
        $sample->save();
        return redirect('simple');
        

       


    }
}
