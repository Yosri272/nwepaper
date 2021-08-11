<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topic;

class d_displayController extends Controller
{
    
        public function index($id)
{
    $edit = topic::where('id','=',$id)->first();
    
   return view('admin/a_display1',compact('edit'));
} 
}
