<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\regcase;
use App\topic;

class regcaseController extends Controller
{
    public function Stort( Request $request,$id)
{
$topic = topic::find($id);


    
       

$regcase= new regcase;
$regcase->journalist=$topic->journalist; 
$regcase->r_address = $request->r_address;
$regcase->r_reason = $request->r_reason;
$regcase->save();
$topic ->delete();
return redirect()->route('d_topic')->with('success', 'تم رفض المقال بنجاح');

}
}
