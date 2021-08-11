<?php

namespace App\Http\Controllers\corrector;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\mission;
use App\topic;
use App\category;
use App\category1;
class c_missionController extends Controller
{
    public function index(){
        $val=Auth::user()->name;
        $c_data=0;
        $c_data1=0;
        $c_viewData = mission::all()->where('c_folg','=','0')
                                    ->where('m_person','=',$val);
         $topicData = topic::all()->where('c_folg','=','0');
         foreach($topicData as $data)
                        
         {
            $c_data++;
                                        
        }
         $topicData1 = topic::all()->where('c_folg','=','1' )
                                    ->where('c_folg1','=','0');
            foreach($topicData1 as $data)
                        
             {
                 $c_data1++;
                                        
              }
              return view('corrector/c_index' ,compact('c_viewData','c_data','c_data1'));
                                    

        
        
            }
     public function j_mission($id)
    {
        
        $edit = mission::where('id','=',$id)->first();
        $c_viewData = category::all();
        $c_viewData1 = category1::all();
        $edit->c_folg =1;
        $edit->save();

       return view('corrector/mission',compact('edit','c_viewData','c_viewData1'));
    } 
    
    public function Stort( Request $request)
    {
        $val=Auth::user()->name;
   $topic= new topic;
   $topic->t_address = $request->t_address;
   $topic->t_body = $request->t_body;
   $topic->c_name =$request->c_name;
   $topic->c_name1 =$request->c_name1;
   $topic->corrector=$val;
   $topic->t_folg = 1;
   $topic->save();

   
   return redirect()->route('j_mission1')->with('success','تم انجاز المهم  بنجاح');

    }
}
