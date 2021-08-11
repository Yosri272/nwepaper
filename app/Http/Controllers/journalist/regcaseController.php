<?php

namespace App\Http\Controllers\journalist;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\regcase;

class regcaseController extends Controller
{
    public function index()
{

    $val=Auth::user()->name;

$regcaseData = regcase::all()->where('journalist','=',$val);

if($regcaseData->isEmpty())

{
    return view('journalist/s_topic2');
}
else
{
    return view('journalist/Rejected' ,compact('regcaseData'));

}
}
}