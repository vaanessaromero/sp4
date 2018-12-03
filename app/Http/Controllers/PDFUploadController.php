<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class PDFUploadController extends Controller
{
	public function home()
   	{
       return view('pdfhome');
   	}
    //
    public function uploadPDF(Request $request)
    {
       $this->validate($request,[
           'pdf_name'=>'required|mimes:pdf|between:1, 6000',
       ]);

       $pdf_name = $request->file('pdf_name')->getRealPath();;

       Cloudder::upload($pdf_name, null);

       return redirect()->back()->with('status', 'PDF Uploaded Successfully');

    }
}
