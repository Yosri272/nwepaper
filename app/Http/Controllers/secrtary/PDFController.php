<?php

namespace App\Http\Controllers\secrtary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topic;
use PDF;

class PDFController extends Controller
{
    public function getpdf($Id)
    {
    
        $topic = topic::all() ->where('id','=',$Id);
        $pdf= PDF::loadView('pdf.customer' ,['topic' =>  $topic] , 'UTF-8');
       // return $pdf ->stream('customer.pdf');
        return $pdf ->download('customer.pdf');
        
    }
}
