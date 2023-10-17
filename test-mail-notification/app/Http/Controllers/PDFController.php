<?php

namespace App\Http\Controllers;
use App\Models\User;
// use Barryvdh\DomPDF\PDF;

use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $users = User::get();

        $data = [
            'title' => 'Welcome to skit.com',
            'date' => date('m/d/Y'),
            'users' => $users
        ];

        $pdf = PDF::loadView('pdf.myPDF', $data);

        return $pdf->download('skit.pdf');
    }
}
