<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function dashboard()
    {
        $data = [
            'judul' => 'Daftar Komik'
        ];

        return view('pemerintahan/dashboard', $data);
    }

    public function tanggapan()
    {
        $data = [
            'judul' => 'Daftar Komik'
        ];

        return view('pemerintahan/tanggapan', $data);
    }

    public function verifikasi()
    {
        $data = [
            'judul' => 'Daftar Komik'
        ];

        return view('pemerintahan/verifikasi', $data);
    }
    //--------------------------------------------------------------------

}
