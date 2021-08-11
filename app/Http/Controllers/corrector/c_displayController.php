<?php

namespace App\Http\Controllers\corrector;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topic;

class c_displayController extends Controller
{
    public function index()
    {
    //return view('corrector.c_display');
    $topicData = topic::all()->where('c_folg','=','0');
    if($topicData->isEmpty())

{
    return view('corrector/s_topic2');
}
else
{
    return view('corrector/c_display' ,compact('topicData'));
}
   
    
}
}
