<?php

namespace App\Http\Controllers\secrtary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;

class e_passwordController extends Controller
{
    public function s_index()
    {
        
        return view('secrtary/e_password');
    
    
    }
    public function s_Stort( Request $request,$id)
   {
   $ver= $request->o_password;
   $post = User::where('id','=',$id)->first();
   $post->password =Hash::make($request->input('n_password'));
   $post->save();
   return back()->with('success', 'تم تعديل كلمة السر بنجاح');
   
   }
}
