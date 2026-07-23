<?php

namespace App\Http\Controllers;

use App\Mail\PendaftaranKonfirmasiMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PendaftaranEmailController extends Controller
{
    public function kirimKonfirmasi(Request $request)
    {
        $data = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'unit' => ['nullable', 'string', 'max:255'],
            'pengajuan_id' => ['nullable', 'string', 'max:50'],
        ]);

        Mail::to($data['email'], $data['nama'])
            ->send(new PendaftaranKonfirmasiMail(
                nama: $data['nama'],
                email: $data['email'],
                unit: $data['unit'] ?? null,
                pengajuanId: $data['pengajuan_id'] ?? null,
            ));

        return response()->json([
            'message' => 'Email konfirmasi pendaftaran berhasil dikirim.',
        ]);
    }
}
