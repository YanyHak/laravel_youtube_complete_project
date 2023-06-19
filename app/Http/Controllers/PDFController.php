<?php

namespace App\Http\Controllers;


use App\Models\Project;
use Illuminate\Http\Request;
use PDF;
class PDFController extends Controller
{
   public function pdfView(){
    //show how the page is
        $projects = Project::all();
        return view('PDF.pdf_view', compact('projects'));


    }
    public function pdfGeneration()
    {
        //convert
        $projects = Project::all();

        $pdf = PDF::loadView('PDF.pdf_convert', compact('projects'));

        return $pdf->download('myPDF.pdf');
    }
}
