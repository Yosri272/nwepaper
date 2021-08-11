<?php

namespace App\Http\Controllers\corrector;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topic;

class c_AssepController extends Controller
{
    public function edit($id)
    {
        $edit = topic::where('id','=',$id)->first();
        $edit->c_folg=1;
        $edit->save();
        return back()->with('success','تم الاختيار بنجاح');
    }
}
