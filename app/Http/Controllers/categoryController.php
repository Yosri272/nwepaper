<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
class categoryController extends Controller
{
    public function index()
    {
        
        //return view('admin/category');
       $categoryData = category::all();
      
        return view('admin/category' ,compact('categoryData'));
    
    }
    public function distory($id)
{

    $Delcategory = category::find($id);
    $Delcategory->delete();
    return back()->with('error','تم الحذف بنجاج');

    

}
public function createcategory()
{
    
    return view('admin/category');


}
public function Stort( Request $request)
{


$category= new category;
$category->c_name = $request->c_name;


$category->save();
return back()->with('success','تم الاضافة بنجاح');


}
}
