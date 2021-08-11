<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topic;
use App\category;
use App\category1;
class AssepController extends Controller
{
    public function edit($id)
    {
        $edit = topic::where('id','=',$id)->first();
        $edit->d_folg=1;
        $edit->save();
        return redirect()->route('d_topic')->with('success','تم الاضافة بنجاح');
    }
    public function modfile($id)
    {
        $modfile = topic::where('id','=',$id)->first();
        $c_viewData = category::all();
        $c_viewData1 = category1::all();
        return view('admin/modfile' ,compact('modfile','c_viewData','c_viewData1'));

    }
    public function modfile1( Request $request,$id)
    {
    $topic= topic::where('id','=',$id)->first();
    $topic->t_address = $request->t_address;
    $topic->t_body = $request->t_body;
    $topic->c_name =$request->c_name;
    $topic->c_name1 =$request->c_name1;
    $topic->t_folg = 1;
    $topic->d_folg=1;
    $topic->save();
    return redirect()->route('d_topic')->with('success','تم الاضافة بنجاح');
  }
}
