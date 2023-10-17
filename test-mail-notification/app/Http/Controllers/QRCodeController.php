<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class QRCodeController extends Controller
{
    public function generateQRCode()
    {
        // Default values for email and phone,text

        $email = 'example@example.com';
        $phone = '123456789';

        $vCardData = "BEGIN:VCARD\n"
                   . "VERSION:3.0\n"
                   . "EMAIL:$email\n"
                   . "TEL:$phone\n"
                   . "END:VCARD";

        $data = "$vCardData\n";

        $qrCode = QrCode::size(250)->generate($data);
        return view('qr.qrCode', compact('qrCode'));

    }

}
