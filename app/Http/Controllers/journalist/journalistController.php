<?php

namespace App\Http\Controllers\journalist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topicsave;
use App\category;
use App\category1;

class journalistController extends Controller
{
    public function createtopicsave()
    {
        $c_viewData = category::all();
        $c_viewData1 = category1::all();
        return view('journalist/topic' ,compact('c_viewData','c_viewData1'));
        
            
    
    
    }
    public function Stort( Request $request)
    {
      
           
    $topic= new topic;
    // echo($topicsave);
    $topic->t_address = $request->t_address;
    $topic->t_body = $request->t_body;
    $topic->c_name =$request->c_name;
    $topic->c_name1 =$request->c_name1;
    $topic->t_folg = 1;
    $topic->save();
    return back()->with('success','تم الاضافة بنجاح');
  
      
   

}
}
