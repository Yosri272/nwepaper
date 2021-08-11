<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topic;

class arshefController extends Controller
{
    public function index()
    {
    $topicData = topic::all()->where('t_folg','=','1')
                             ->where('d_folg','=','0')
                             ->where('c_folg','=','1')
                             ->where('c_folg1','=','0');
    return view('admin/arshef' ,compact('topicData'));
}
}