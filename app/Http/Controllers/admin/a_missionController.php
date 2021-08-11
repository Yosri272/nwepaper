<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\mission;
use App\topic;
use App\category;
use App\category1;
class a_missionController extends Controller
{
    public function a_mission()
    {
         $d_data=0;
         $d_data1=0;
        $d_data2=0;
      $c_viewData = mission::all()->where('c_folg','=','0');

     $d_topicData = topic::all()->where('t_folg','=','1')
                                     ->where('d_folg','=','0')
                                     ->where('c_folg','=','0')
                                     ->where('c_folg1','=','0');
             
         foreach($d_topicData as $data)

         {
          $d_data++;
                                               
         }
      $d_topicData1 = topic::all()->where('t_folg','=','1')
         ->where('d_folg','=','0')
         ->where('c_folg','=','1')
         ->where('c_folg1','=','0');
         foreach($d_topicData1 as $data)

         {
          $d_data1++;
                                               
         }
      $d_topicData2 = topic::all()->where('t_folg','=','1')
                                  ->where('d_folg','=','1')
                                  ->where('c_folg','=','1')
                                  ->where('c_folg1','=','0');
        foreach($d_topicData2 as $data)

        {
         $d_data2++;
                                                                        
        }
            return view('admin/index' ,compact('c_viewData','d_data','d_data1','d_data2')); 
    }
        
        
}

