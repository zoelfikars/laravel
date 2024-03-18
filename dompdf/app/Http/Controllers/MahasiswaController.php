<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;


class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa')->with('mahasiswa', $mahasiswa);
    }

    // public function generatePDF(Request $request)
    // {
    //     $mahasiswa = Mahasiswa::all();
    //     $pdf = PDF::loadView('pdf.mahasiswa_pdf', ['mahasiswa' => $mahasiswa]);
    //     return $pdf->stream('datamahasiswa.pdf');
    // }

    public function generatePDF(Request $request)
    {
        $mahasiswa = Mahasiswa::all();
        $dompdf = new Dompdf();
        $html = view('pdf.mahasiswa_pdf', ['mahasiswa' => $mahasiswa])->render();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->stream();
    }
}
