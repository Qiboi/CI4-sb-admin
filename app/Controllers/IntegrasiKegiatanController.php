<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\IntegrasiKegiatan;

class IntegrasiKegiatanController extends BaseController
{
    protected $integrasikegiatan;

    function __construct()
    {
        $this->integrasikegiatan = new IntegrasiKegiatan();
    }

    public function index()
    {
        $title = 'Integrasi Kegiatan Penelitian';
        $integrasi = $this->integrasikegiatan->findAll();

        return view('integrasikegiatan/index', compact('title', 'integrasi'));
    }

    public function create()
    {
        $title = 'Tambah Data Integrasi Kegiatan Penelitian';

        return view('integrasikegiatan/create', compact('title'));
    }

    public function edit($id)
    {
        $title = 'Edit Data Integrasi Kegiatan Penelitian';

        $integrasi = $this->integrasikegiatan->find($id);        

        return view('integrasikegiatan/edit', compact('title', 'integrasi'));
    }

    public function store()
    {
        if (!$this->validate([
            'judul_integrasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'dosen_integrasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'matkul_integrasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tahun_integrasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->integrasikegiatan->insert([
            'judul_integrasi' => $this->request->getVar('judul_integrasi'),
            'dosen_integrasi' => $this->request->getVar('dosen_integrasi'),
            'matkul_integrasi' => $this->request->getVar('matkul_integrasi'),
            'tahun_integrasi' => $this->request->getVar('tahun_integrasi'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Integrasi Kegiatan Penelitian Berhasil');
        return redirect()->to('/integrasikegiatan');
    }

    public function update($id)
    {
        if (!$this->validate([
            'judul_integrasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'dosen_integrasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'matkul_integrasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tahun_integrasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->integrasikegiatan->update($id, [
            'judul_integrasi' => $this->request->getVar('judul_integrasi'),
            'dosen_integrasi' => $this->request->getVar('dosen_integrasi'),
            'matkul_integrasi' => $this->request->getVar('matkul_integrasi'),
            'tahun_integrasi' => $this->request->getVar('tahun_integrasi'),
        ]);
        session()->setFlashdata('message', 'Edit Data Integrasi Kegiatan Penelitian Berhasil');
        return redirect()->to('/integrasikegiatan');
    }

    function delete($id)
    {
        $dataIntegrasi = $this->integrasikegiatan->find($id);
        if (empty($dataIntegrasi)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Integrasi Kegiatan Penelitian Tidak ditemukan !');
        }
        $this->integrasikegiatan->delete($id);
        session()->setFlashdata('message', 'Delete Data Integrasi Kegiatan Penelitian Berhasil');
        return redirect()->to('/integrasikegiatan');
    }
}
