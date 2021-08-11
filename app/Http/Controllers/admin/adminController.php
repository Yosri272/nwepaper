<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topic;
use App\User;

class adminController extends Controller
{
    public function index()
    {
    $topicData = topic::all()->where('t_folg','=','1')
                             ->where('d_folg','=','1')
                             ->where('c_folg','=','1')
                             ->where('c_folg1','=','1');
       if($topicData->isEmpty())

       {
        return view('admin/s_topic2');
       }
       else
       {
        return view('admin/display/a_display' ,compact('topicData'));
                                                 
       }
    
    }
    public function index1()
    {
    $topicData = topic::all()->where('t_folg','=','1')
                             ->where('d_folg','=','0')
                             ->where('c_folg','=','1')
                             ->where('c_folg1','=','0');

   if($topicData->isEmpty())

   {
    return view('admin/s_topic2');
   }
   else
   {
    return view('admin/display/a_display1' ,compact('topicData'));                                                                       
   }                         

    
    }
    public function index2()
    {
    $topicData = topic::all()->where('t_folg','=','1')
                             ->where('d_folg','=','1')
                             ->where('c_folg','=','1')
                             ->where('c_folg1','=','0');
     if($topicData->isEmpty())

     {
      return view('admin/s_topic2');
     }
     else
     {
      return view('admin/display/a_display2' ,compact('topicData'));
     }                         
                          
      
    
    }
    public function c_admin()
    {
        
        return view('admin/c_register');
    
    
    }
    public function Stort( Request $request)
    {
    
    
  $admin= new User;
  $admin->name = $request->name;
  $admin->status   = $request->status ;
  $admin->email  = $request->email;
  $admin->password =Hash::make($request->input('password'));
  
  $admin->save();
  return back()->with('success','تم الاضافة بنجاح');
    
}
}
