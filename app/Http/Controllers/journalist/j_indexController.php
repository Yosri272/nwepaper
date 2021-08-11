<?php

namespace App\Http\Controllers\journalist;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topic;
use App\regcase;
use App\topicsave;
class j_indexController extends Controller
{ 
    
    public function index()
    {
    $val=Auth::user()->status;
        $ar_val=Auth::user()->name;
        $r_val=Auth::user()->name;
        $data2=0;
        $ar_data=0;
        $t_s_data=0;
        $regcase= regcase::all()->where('journalist','=',$r_val);
        foreach($regcase as $data)

        {
            $data2++;
            
        }
        $topicData = topic::all()->where('t_folg','=','1')
        ->where('d_folg','=','1')
        ->where('c_folg','=','1')
        ->where('c_folg1','=','1')
        ->where('journalist','=',$ar_val);
        foreach($topicData as $data)

        {
            $data1=$data->id ;
            $ar_data++;
            
        }
        $topicsave= topicsave::all();
        foreach($topicsave as $data)

        {
            $t_s_data++;
            
        }
        return view('journalist/j_index',compact('data2','ar_data','t_s_data'));
    }
}
