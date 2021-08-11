<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\regcase;

class journalistController extends Controller
{
    public function index()
    {
    $regcaseData = regcase::all();
    if($regcaseData->isEmpty())

    {
        return view('admin/s_topic2');
    }
    else
    {
        return view('admin/Rejected' ,compact('regcaseData'));

    }
    
    }
}
