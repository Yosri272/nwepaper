<?php

namespace App\Http\Controllers\corrector;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\topic;

class c_viewController extends Controller
{
    public function index($id)
    {
        $val=Auth::user()->name;
        $data2=0;


    $a_viewData = User::all()->where('id','=',$id);
    $topic= topic::all()->where('corrector','=',$val);
    
foreach($topic as $data)

{

$data1=$data->journalist ;
$data2++;
}
    return view('corrector/c_view' ,compact('a_viewData','data2'));
}
}


