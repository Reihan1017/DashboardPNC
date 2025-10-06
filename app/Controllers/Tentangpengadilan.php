<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Tentangpengadilan extends BaseController
{
    public function index()
    {
        return view('tentangpengadilan/index');
    }

    public function pengantarketua()
    {
        return view('tentangpengadilan/pengantarketua');
    }

    public function visimisi()
    {
        return view('tentangpengadilan/profil/visimisi');
    }

    public function profil()
    {
        // halaman utama profil pengadilan
        return view('tentangpengadilan/profil/index');
    }

    public function sejarah()
    {
        $data = [
            'title' => 'Sejarah PNC'
        ];
        
        return view('tentangpengadilan/profil/sejarah', $data);
    }

    public function wilayah()
    {
        return view('tentangpengadilan/profil/wilayah');
    }

    public function struktur()
    {
        return view('tentangpengadilan/profil/struktur');
    }

    public function hakimdanpegawai()
    {
        // halaman utama profil hakim dan pegawai
        return view('tentangpengadilan/hakimdanpegawai/index');
    }

    public function hakim()
    {
        return view('tentangpengadilan/hakimdanpegawai/profilhakim');
    }

    public function kepaniteraan()
    {
        return view('tentangpengadilan/hakimdanpegawai/profilkepaniteraan');
    }

    public function kesekretariatan()
    {
        return view('tentangpengadilan/hakimdanpegawai/profilkesekretariatan');
    }

    public function pppk()
    {
        return view('tentangpengadilan/hakimdanpegawai/profilpppk');
    }

    public function profilperubahan()
    {
        // halaman utama Role Model dan Agen Perubahan
        return view('tentangpengadilan/profilperubahan/profilperubahan');
    }

    public function perubahan()
    {
        return view('tentangpengadilan/profilperubahan/perubahan');
    }

    public function rolemodel()
    {
        return view('tentangpengadilan/profilperubahan/rolemodel');
    }

    public function slidekepaniteraan()
    {
        // halaman utama Role Model dan Agen Perubahan
        return view('tentangpengadilan/kepaniteraan/slidekepaniteraan');
    }

    public function kepaniteraanperdata()
    {
        return view('tentangpengadilan/kepaniteraan/kepaniteraanperdata');
    }

    public function kepaniteraanhukum()
    {
        return view('tentangpengadilan/kepaniteraan/kepaniteraanhukum');
    }

    public function kepaniteraanpidana()
    {
        return view('tentangpengadilan/kepaniteraan/kepaniteraanpidana');
    }

    public function pengelolaan()
    {
        // halaman utama Sistem Pengelolaan Pengadilan 
        return view('tentangpengadilan/sistempengelolaanpn/pengelolaan');
    }

    public function elearning()
    {
        return view('tentangpengadilan/sistempengelolaanpn/elearning');
    }

    public function jdihpnciamis()
    {
        return view('tentangpengadilan/sistempengelolaanpn/jdihpnciamis');
    }

    public function kebijakan()
    {
        return view('tentangpengadilan/sistempengelolaanpn/kebijakan');
    }

    public function kodeetikhakim()
    {
        return view('tentangpengadilan/sistempengelolaanpn/kodeetikhakim');
    }

    public function rencanakerja()
    {
        return view('tentangpengadilan/sistempengelolaanpn/rencanakerja');
    }

    public function rencanastrategis()
    {
        return view('tentangpengadilan/sistempengelolaanpn/rencanastrategis');
    }
}
