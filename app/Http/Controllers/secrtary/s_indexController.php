<?php

namespace App\Http\Controllers\secrtary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topic;
class s_indexController extends Controller
{
    public function index()
    {
             $s_data=0;
            $s_data1=0;
            $s_data2=0;
            $topicData1 = topic::all()->where('t_folg','=','1')
                             ->where('d_folg','=','1')
                             ->where('c_folg','=','1')
                             ->where('c_folg1','=','1')
                             ->where('d_mark','=','1');
        foreach($topicData1 as $data)

        {
             $s_data++;

        }
        
          $topicData = topic::all()->where('t_folg','=','1')
                                 ->where('d_folg','=','0')
                                 ->where('c_folg','=','1')
                                 ->where('c_folg1','=','0');
        foreach($topicData as $data)

        {
            $s_data1++;
                         
        }
        $topicData2 = topic::all()->where('t_folg','=','1')
                             ->where('d_folg','=','1')
                             ->where('c_folg','=','1')
                             ->where('c_folg1','=','0');
                                 
        
         foreach($topicData2 as $data)

        {
         $s_data2++;
                                              
        }
        
            return view('secrtary/s_index' ,compact('s_data','s_data1','s_data2'));


            
    }
}
