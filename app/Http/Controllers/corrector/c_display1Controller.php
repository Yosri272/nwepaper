<?php

namespace App\Http\Controllers\corrector;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topic;

class c_display1Controller extends Controller
{
    public function index()
    {
    
    $topicData = topic::all()->where('c_folg','=','1' )
                             ->where('c_folg1','=','0');
     if($topicData->isEmpty())

    {
      return view('corrector/s_topic2');
    }
    else
    {
        return view('corrector/c_display1' ,compact('topicData'));

    }

    
    }
}
