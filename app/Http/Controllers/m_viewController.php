<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class m_viewController extends Controller
{
    
    public function index(){
        $s_journalist=0;
        $s_secrtary=0;
        $s_correctary=0;

        $m_viewData=User::orderBy('id' , 'DESC')->paginate(6);

        
        foreach($m_viewData as $data)
        {
              if($data->status =="المصحح")
               {  

                $s_correctary++;
                }
              elseif($data->status == "الصحفى")
               {

                $s_journalist++;

              }
              elseif($data->status =="سكرتير التحرير")
                {
                   $s_secrtary++;
                
                }

        }
        return view('admin/m_view',compact('m_viewData','s_journalist','s_secrtary','s_correctary'));
       
    }
    public function update(Request $request, $id){

                $update= User::find($id);
                $update->name = $request->name;
                $update->email = $request->email;
                $update->status = $request->status;
               
                $update->save();
                return redirect()->route('m_view')->with('success','تم التعديل بنجاح');
            
            
    }
            
    public function edit($id)
    {
                $edit = User::where('id','=',$id)->first();
               return view('admin/editview',compact('edit'));
            
    }
    public function distory($id)
    {
            
                $Delm_view = User::find($id);
                $Delm_view->delete();
                return back()->with('error','تم الحذف بنجاج');
                
            
    }
}