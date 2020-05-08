<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class pdfController extends Controller
{
    public function exportHistory(){
        $data = Vehicle::all();
        // Send data to the view using loadView function of PDF facade
        $pdf = \PDF::loadView('layouts.pdf-download.tracking-history', $data);
        // If you want to store the generated pdf to the server then you can use the store function
        $pdf->save(storage_path().'_filename.pdf');
        // Finally, you can download the file using download function
        return $pdf->download('tracking-history.pdf');
    }    
}
