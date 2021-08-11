<?php

namespace App\Http\Controllers\journalist;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topic;
use App\category;
use App\category1;
use App\topicsave;
class topicController extends Controller
{
    public function createtopic()
    {
        
        return view('journalist/topic');
    
    
    }
    public function Stort( Request $request)
    {
    
    
   
        if($request->input('later')== 'on'){
           
            $topicsave= new topicsave;
            $topicsave->t_address = $request->t_address;
            $topicsave->t_body = $request->t_body;
            $topicsave->c_name =$request->c_name;
            $topicsave->c_name1 =$request->c_name1;
            $topicsave->save();
            return back()->with('success','تم الاضافة بنجاح');
            
            }else{

                $val=Auth::user()->name;
            $topic= new topic;
            $topic->t_address = $request->t_address;
            $topic->t_body    = $request->t_body;
            $topic->c_name    = $request->c_name;
            $topic->c_name1   = $request->c_name1;
            $topic->journalist=$val; 
            $topic->t_folg    = 1;
            $topic->save();
            return back()->with('success','تم الاضافة بنجاح');
            
            }
   
          
    
    }
    public function index()
    {
    $s_topic = topicsave::all();

    if($s_topic->isEmpty())

    {
        return view('journalist/s_topic2');
    }
    else
    {
    return view('journalist/s_topic' ,compact('s_topic'));
    }   
    }



    
    public function index1($id)
    {
        $s_topic     = topicsave::where('id','=',$id)->first();
        $c_viewData  = category::all();
        $c_viewData1 = category1::all();
        return view('journalist/s_topic1' ,compact('s_topic','c_viewData','c_viewData1'));
    
    }
    public function Stort1( Request $request,$id)
    {
    
    
   
        if($request->input('later')== 'on'){
            $topicsave = topicsave::where('id','=',$id)->first();
            $topicsave->t_address = $request->t_address;
            $topicsave->t_body    = $request->t_body;
            $topicsave->c_name    = $request->c_name;
            $topicsave->c_name1   = $request->c_name1;
            $topicsave->save();
            return back()->with('success','تم الاضافة بنجاح');
            
            }else{
               


              $val=Auth::user()->name;
            
            $topic= new topic;
            $topic->t_address   = $request->t_address;
            $topic->t_body      = $request->t_body;
            $topic->c_name      = $request->c_name;
            $topic->c_name1     = $request->c_name1;
            $topic->journalist  = $val; 
            $topic->t_folg = 1;
            $topic->save();
            $topic = topicsave::find($id);
            $topic ->delete();
            
            return redirect('j_index')->with('success','تم الاضافة بنجاح');


            
            }
   
          
    
    }
    
}
