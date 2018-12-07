<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use App\Upload;

class PDFUploadController extends Controller
{
	public function home()
   	{
       $pdfs = Upload::all();
       return view('journalCRUD.create', compact('pdfs'));
   	}
    //
    public function uploadPDF(Request $request)
    {
       $this->validate($request,[
           'pdf_name'=>'required|mimes:pdf|between:1, 2000',
       ]);


       $pdf = $request->file('pdf_name');

       $name = $request->file('pdf_name')->getClientOriginalName();

       $pdf_name = $request->file('pdf_name')->getRealPath();;

       Cloudder::upload($pdf_name, null);

       list($width, $height) = getimagesize($pdf_name);

       $pdf_url= Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);

       //save to uploads directory
       $pdf->move(public_path("uploads"), $name);

       $this->savePDFs($request, $pdf_url);

       return redirect()->back()->with('pdf_url', $pdf_url);
    }

    public function savePDFs(Request $request, $pdf_url)
   	{
       $pdf = new Upload();
       $pdf->pdf_name = $request->file('pdf_name')->getClientOriginalName();
       $pdf->pdf_url = $pdf_url;

       $pdf->save();
   	}
}
