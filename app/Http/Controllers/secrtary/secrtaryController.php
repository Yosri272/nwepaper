<?php

namespace App\Http\Controllers\secrtary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topic;

class secrtaryController extends Controller
{
    public function index()
    {
    $topicData = topic::all()->where('t_folg','=','1')
                             ->where('d_folg','=','1')
                             ->where('c_folg','=','1')
                             ->where('c_folg1','=','1')
                             ->where('d_mark','=','1');
        if($topicData->isEmpty())

        {
         return view('secrtary/s_topic2');
        }
        else
        {
            return view('secrtary/s_display' ,compact('topicData'));
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
        return view('secrtary/s_topic2');
       }
        else
        {
            return view('secrtary/s_display1' ,compact('topicData'));

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
     return view('secrtary/s_topic2');
    }
    else
    {
        return view('secrtary/s_display2' ,compact('topicData'));                      
    }          
   
    
    }
  
}
