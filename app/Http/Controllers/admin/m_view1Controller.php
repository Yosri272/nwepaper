<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\topic;
class m_view1Controller extends Controller
{
    public function index($id)
    {

        $data2=0;
        $a_viewData = User::all()->where('id','=',$id);
                            
        foreach($a_viewData as $data)
        {
            $val=$data->name;
            
        }
    
      
        
        $topic= topic::all()->where('t_folg','=','1')
                            ->where('d_folg','=','1')
                            ->where('c_folg','=','1')
                            ->where('c_folg1','=','1');
        
    foreach($topic as $data)
{
    if($data->journalist ==$val)
    {
    
    $data2++;
    }     

    elseif($data->corrector ==$val)
    {   
         
    $data2++;
    }                  
}

  


        return view('admin/m_view1' ,compact('a_viewData','data2'));
    }
}
