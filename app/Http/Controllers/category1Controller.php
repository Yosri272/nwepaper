<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category1;

class category1Controller extends Controller
{
    public function index()
    {
        
       $category1Data = category1::all();
      
        return view('admin/category1' ,compact('category1Data'));
    
    }
    public function distory($id)
    {
    
        $Delcategory1 = category1::find($id);
        $Delcategory1 ->delete();
        return back()->with('error','تم الحذف بنجاج');
    
    }
public function createcategory()
{
    
    return view('admin/category1');


}
public function Stort( Request $request)
{


$category1= new category1;
$category1->c_name = $request->c_name;


$category1->save();
return back()->with('success','تم الاضافة بنجاح');

}
}
