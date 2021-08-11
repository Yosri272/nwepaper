<?php

namespace App\Http\Controllers\journalist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\category;
use App\category1;
class categController extends Controller
{
    public function categ(){

        $c_viewData = category::all();
        $c_viewData1 = category1::all();
        return view('journalist/topic' ,compact('c_viewData','c_viewData1'));
        
            }
}
