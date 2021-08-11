<?php

namespace App\Http\Controllers\corrector;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topic;
class arshefController extends Controller
{
    public function index()
    {
        $val=Auth::user()->name;

    $topicData = topic::all()->where('t_folg','=','1')
                             ->where('d_folg','=','1')
                             ->where('c_folg','=','1')
                             ->where('c_folg1','=','1')
                             ->where('corrector','=',$val);
    return view('corrector/arshef' ,compact('topicData'));
}
}