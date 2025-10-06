<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Layananpublik extends BaseController
{
     // halaman utama PTSP
    public function index()
    {
        return view('layananpublik/index');
    }

    public function ptsp()
    {
        return view('layananpublik/ptsp/ptsp');
    }

    public function jenislayanan()
    {
        return view('layananpublik/ptsp/jenislayanan');
    }

    public function standarpelayanan()
    {
        return view('layananpublik/ptsp/standarpelayanan');
    }

    public function maklumatpelayanan()
    {
        
        return view('layananpublik/ptsp/maklumatpelayanan', );
    }

    public function kompensasipelayanan()
    {
        
        return view('layananpublik/ptsp/kompensasipelayanan', );
    }


    // halaman utama Layanan Disabilitas
    public function penyandangdisabilitas()
    {
        $data = [
            'title' => 'Prosedur Pelayanan bagi Penyandang Disabilitas',
            'prosedur' => [
                'Pemohon datang ke meja informasi.',
                'Petugas memberikan formulir permohonan layanan.',
                'Pemohon mengisi formulir sesuai kebutuhan.',
                'Petugas membantu bila pemohon membutuhkan bantuan khusus.',
                'Proses selesai, pemohon menerima bukti layanan.'
            ]
        ];
        return view('layananpublik/layanandisabilitas/penyandangdisabilitas', $data);

    }

    public function saranaprasaranadisabilitas()
    {
        return view('layananpublik/layanandisabilitas/saranaprasaranadisabilitas');
    }


}
