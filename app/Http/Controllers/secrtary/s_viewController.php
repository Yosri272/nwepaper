<?php

namespace App\Http\Controllers\secrtary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class s_viewController extends Controller
{
    public function index($id)
    {
        $a_viewData = User::all()->where('id','=',$id);
        return view('secrtary/s_view' ,compact('a_viewData'));
    }
}
