<?php

namespace App\Controllers;

class Risalah extends BaseController
{


    public function index()
    {
        $slug = 1;
        $data = [
            'judul' => 'JDIH - Kabupaten Kulon Progo',
            'risalah' => $this->risalahModel->orderBy('id', 'desc')->findAll(),
            'terbaru' => $this->risalahModel->orderBy('id', 'desc')->paginate(3),
            'aktif' => $this->uri->getSegment(1)
            // return $this->orderBy('id', 'desc')->findAll();
        ];

        // echo view('front/header', $data);
        return view('risalah/risalah', $data);
        // echo view('front/footer');
    }

    public function preview($slug)
    {
        $data = [
            'url' => $this->risalahModel->getUrl($slug)
        ];

        $risalah = $this->risalahModel->where('url', $slug)->first();
        // dd($risalah);
        $id = $risalah['id'];
        $read = $risalah['hit'];
        $hits = $read + 1;

        // $read = $this->request->getVar('download');
        // $down = $read + 1;

        $this->risalahModel
            ->where('id', $id)
            ->set(['hit' => $hits])
            ->update();

        return view('risalah/preview', $data);
    }

    public function tampil()
    {
        if (!session()->has('username')) {
            return redirect()->to('/login');
        }
        $data = [
            'judul' => 'JDIH - Kabupaten Kulon Progo',
            'risalah' => $this->risalahModel->orderBy('id', 'desc')->findAll(),
            'username' => session()->get('username'),
            'aktif' => $this->uri->getSegment(1)
            // return $this->orderBy('id', 'desc')->findAll();
        ];
        return view('risalah/tampil', $data);
    }

    public function input()
    {
        if (!session()->has('username')) {
            return redirect()->to('/login');
        }
        // session();
        $data = [
            'judul' => 'JDIH - Kabupaten Kulon Progo',
            // 'kategori' => $this->kategoriModel->findAll(),
            'validation' => \Config\Services::validation(),
            'username' => session()->get('username'),
            'aktif' => $this->uri->getSegment(1)
            // return $this->orderBy('id', 'desc')->findAll();
        ];
        return view('risalah/tambah', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} risalah belum diisi'
                ]
            ],
            'risalah' => [
                'rules' => 'uploaded[risalah]|max_size[risalah,4048]|ext_in[risalah,pdf]',
                'errors' => [
                    'uploaded' => 'Pilih dokumen terlebih dahulu',
                    'max_size' => 'Ukuran file terlalu besar',
                    'ext_in' => 'Format dokumen salah'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/produk_hukum/add')->withInput()->with('validation', $validation);
            return redirect()->to('/risalah/add')->withInput();
        }

        $fileFile = $this->request->getFile('risalah');
        $fileFile->move('peraturan/risalah');
        $url = $fileFile->getName();

        $date = date('Y-m-d');
        $this->risalahModel->save([
            'judul' => $this->request->getVar('judul'),
            'keterangan' => $this->request->getVar('ket'),
            'file' => $url,
            'tanggal' => $date
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/risalah/tampil');
    }

    public function edit_risalah($id)
    {
        if (!session()->has('username')) {
            return redirect()->to('/login');
        }
        //  $artikel = $this->beritaModel->findAll();
        $data = [
            'judul' => 'JDIH - Kabupaten Kulon Progo',
            'validation' => \Config\Services::validation(),
            'risalah' => $this->risalahModel->edit($id),
            'username' => session()->get('username'),
            'aktif' => $this->uri->getSegment(1)
        ];
        return view('risalah/edit', $data);
    }

    public function update($id)
    {
        // dd($this->request->getVar());
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} risalah belum diisi'
                ]
            ]
        ])) {
            return redirect()->to('/risalah/edit_risalah/' . $id)->withInput();
        }
        $filerisalah = $this->request->getFile('risalah');

        //cek gambar, apakah tetap gambar lama
        if ($filerisalah == '') {
            $namarisalah = $this->request->getVar('risalahlama');
        } else {
            //pindah gambar
            $filerisalah->move('peraturan/risalah');

            //generate nama file
            $namarisalah = $filerisalah->getName();

            //hapus file
            unlink('peraturan/risalah/' . $this->request->getVar('risalahlama'));
        }
        // dd($this->request->getVar());
        $date = strtotime($this->request->getVar('tanggal'));
        $this->risalahModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'keterangan' => $this->request->getVar('ket'),
            'url' => $namarisalah,
            'date' => $date
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/risalah/tampil');
    }

    public function delete($id)
    {
        //cari gambar berdasarkan id
        $risalah = $this->risalahModel->find($id);
        if ($risalah['file'] != '') {
            //hapus gambar
            unlink('peraturan/risalah/' . $risalah['file']);
        }

        $this->risalahModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/risalah/tampil');
    }
    //--------------------------------------------------------------------

}
