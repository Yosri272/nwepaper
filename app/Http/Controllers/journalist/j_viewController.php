<?php

namespace App\Http\Controllers\journalist;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\topic;

class j_viewController extends Controller
{
    public function index($id)
    {
        $val=Auth::user()->name;

        $data2=0;
        $a_viewData = User::all()->where('id','=',$id);
        $topic= topic::all()->where('t_folg','=','1')
                            ->where('d_folg','=','1')
                            ->where('c_folg','=','1')
                            ->where('c_folg1','=','1')
                            ->where('journalist','=',$val);
        foreach($topic as $data)

{

    $data1=$data->journalist ;
    $data2++;
}
        return view('journalist/j_view' ,compact('a_viewData','data2'));
    }
}
