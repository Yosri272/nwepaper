<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topic;

class d_topicController extends Controller
{
    public function index()
{
    $topicData = topic::all()->where('t_folg','=','1')
                             ->where('d_folg','=','0')
                             ->where('c_folg','=','0')
                             ->where('c_folg1','=','0');

     if($topicData->isEmpty())

     {
       return view('admin/s_topic2');
     }
     else
     {
        return view('admin/a_display' ,compact('topicData'));
                         
    }
}
}
