<?php

namespace App\Controllers;

class Profil extends BaseController
{

    public function index()
    {
        $data = [

            'aktif' => $this->uri->getSegment(1)
            // return $this->orderBy('id', 'desc')->findAll();
        ];
        return view('profil', $data);
    }

    public function kategori($kategori)
    {
        if ($kategori != '') {
            $profil = $this->profilModel->where('id', $kategori);
        } else {
            $profil = $this->profilModel;
        }


        $data = [
            'judul' => 'JDIH - Kabupaten Kulon Progo',
            'profil' => $profil->orderBy('id', 'desc')->findAll(),
            // return $this->orderBy('id', 'desc')->findAll();
        ];
        return view('profil/profil', $data);
    }

    public function tampil()
    {
        if (!session()->has('username')) {
            return redirect()->to('/login');
        }
        $data = [
            'judul' => 'JDIH - Kabupaten Kulon Progo',
            'profil' => $this->profilModel->findAll(),
            'username' => session()->get('username'),
            'aktif' => $this->uri->getSegment(1)
            // return $this->orderBy('id', 'desc')->findAll();
        ];
        return view('profil/tampil', $data);
    }

    public function edit_profil($id)
    {
        if (!session()->has('username')) {
            return redirect()->to('/login');
        }
        //  $artikel = $this->beritaModel->findAll();
        $data = [
            'judul' => 'JDIH - Kabupaten Kulon Progo',
            'validation' => \Config\Services::validation(),
            'profil' => $this->profilModel->edit($id),
            'username' => session()->get('username'),
            'aktif' => $this->uri->getSegment(1)
        ];
        return view('profil/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} belum diisi'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/produk_hukum/add')->withInput()->with('validation', $validation);
            return redirect()->to('/profil/edit/' . $id)->withInput();
        }
        $this->profilModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'konten' => $this->request->getVar('konten')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/profil/tampil');
    }

    //--------------------------------------------------------------------

}
