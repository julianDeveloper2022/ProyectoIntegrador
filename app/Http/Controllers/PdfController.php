<?php

namespace App\Http\Controllers;
use pdf;
use App\Models\Persona;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    //


public function imprimirpersonas(Request $request)
{
    $personas=Persona::orderBy('id','ASC')->get();
    $pdf = \PDF::loadView('Pdf.personasPDF',['personas' => $personas ]);
    $pdf->setPaper('carta', 'A4');return $pdf->stream();
}
}