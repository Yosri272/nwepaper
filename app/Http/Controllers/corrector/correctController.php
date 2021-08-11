<?php

namespace App\Http\Controllers\corrector;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topic;
use App\category;
use App\category1;
class correctController extends Controller
{
    public function correct($id)
    {  
        $edit = topic::where('id','=',$id)->first();
        $c_viewData = category::all();
        $c_viewData1 = category1::all();
        return view('corrector/correct' ,compact('edit','c_viewData','c_viewData1'));
    } 
    public function edit($id, Request $request)
    {
        $val=Auth::user()->name;
        $edit = topic::where('id','=',$id)->first();
        $edit->t_address =$request->t_address;
        $edit->t_body = $request->t_body;
        $edit->c_name = $request->c_name;
        $edit->c_name1 = $request->c_name1;
        $edit->corrector=$val;
        $edit->c_folg1=1;
        $edit->d_mark=1; 
        $edit->save();
        return redirect()->route('c_display1')->with('success','تم الحفظ بنجاح');


        
    }
}
