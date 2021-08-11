<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\mission;
use App\topic;
use App\regcase;
use App\topicsave;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */




     
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $val=Auth::user()->status;
        $ar_val=Auth::user()->name;
        $r_val=Auth::user()->name;

       
  
        if($val == "الصحفى")
        {
            $data2=0;
            $ar_data=0;
            $t_s_data=0;
            $regcase= regcase::all()->where('journalist','=',$r_val);
            foreach($regcase as $data)

            {
                $data2++;
                
            }
            $topicData = topic::all()->where('t_folg','=','1')
            ->where('d_folg','=','1')
            ->where('c_folg','=','1')
            ->where('c_folg1','=','1')
            ->where('journalist','=',$ar_val);
            foreach($topicData as $data)

            {
                $data1=$data->id ;
                $ar_data++;
                
            }
            $topicsave= topicsave::all();
            foreach($topicsave as $data)

            {
                $t_s_data++;
                
            }
            return view('journalist/j_index',compact('data2','ar_data','t_s_data'));

           
        }


        elseif($val == "المصحح")
        {
            $c_data=0;
            $c_data1=0;
            $val1=Auth::user()->name;

            $c_viewData = mission::all()->where('c_folg','=','0')
                                        ->where('m_person','=',$val1);
            $topicData = topic::all()->where('c_folg','=','0');
            foreach($topicData as $data)

            {
                $c_data++;
                
            }
            $topicData1 = topic::all()->where('c_folg','=','1' )
                                      ->where('c_folg1','=','0');
            foreach($topicData1 as $data)

            {
                $c_data1++;
                
            }
            return view('corrector/c_index' ,compact('c_viewData','c_data','c_data1'));
            
            
           
        }


        elseif($val == "سكرتير التحرير")
        {
            $s_data=0;
            $s_data1=0;
            $s_data2=0;
            $topicData1 = topic::all()->where('t_folg','=','1')
                             ->where('d_folg','=','1')
                             ->where('c_folg','=','1')
                             ->where('c_folg1','=','1')
                             ->where('d_mark','=','1');
        foreach($topicData1 as $data)

        {
             $s_data++;

        }
        
          $topicData = topic::all()->where('t_folg','=','1')
                                 ->where('d_folg','=','0')
                                 ->where('c_folg','=','1')
                                 ->where('c_folg1','=','0');
        foreach($topicData as $data)

        {
            $s_data1++;
                         
        }
        $topicData2 = topic::all()->where('t_folg','=','1')
                             ->where('d_folg','=','1')
                             ->where('c_folg','=','1')
                             ->where('c_folg1','=','0');
                                 
        
         foreach($topicData2 as $data)

        {
         $s_data2++;
                                              
        }
        
            return view('secrtary/s_index' ,compact('s_data','s_data1','s_data2'));


            
        }
        elseif($val == "المدير" )
        {
            $d_data=0;
            $d_data1=0;
            $d_data2=0;
            $c_viewData = mission::all()->where('c_folg','=','0');

            $d_topicData = topic::all()->where('t_folg','=','1')
                                     ->where('d_folg','=','0')
                                     ->where('c_folg','=','0')
                                     ->where('c_folg1','=','0');
             
         foreach($d_topicData as $data)

         {
          $d_data++;
                                               
         }
         $d_topicData1 = topic::all()->where('t_folg','=','1')
         ->where('d_folg','=','0')
         ->where('c_folg','=','1')
         ->where('c_folg1','=','0');
         foreach($d_topicData1 as $data)

         {
          $d_data1++;
                                               
         }
         $d_topicData2 = topic::all()->where('t_folg','=','1')
                                  ->where('d_folg','=','1')
                                  ->where('c_folg','=','1')
                                  ->where('c_folg1','=','0');
        foreach($d_topicData2 as $data)

        {
         $d_data2++;
                                                                        
        }
            return view('admin/index' ,compact('c_viewData','d_data','d_data1','d_data2')); 
        }
        
    }
}
