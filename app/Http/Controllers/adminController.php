<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\mission;
use App\category;
use App\category1;
use App\User;

class adminController extends Controller
{

  
public function create()
{
    
    return view('admin/adminCereate');


}
public function createjointopd()
{
  
    $c_viewData = category::all();
    $c_viewData1 = category1::all();
    $c_viewData2 = User::all()->where('status','=',"المصحح");
    return view('admin/jointopd' ,compact('c_viewData','c_viewData1','c_viewData2'));


}
public function Stort( Request $request)
{


    $mission= new mission;
    $mission->m_address = $request->m_address;
    $mission->m_describe = $request->m_describe;
    $mission->c_name =$request->c_name;
    $mission->c_name1 = $request->c_name1;
    $mission->m_person =$request->m_person;
    $mission->save();
    return back()->with('success','تم الاضافة بنجاح');

}

}
