<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Kurikulum;

class KurikulumController extends BaseController
{
    protected $kurikulum;

    function __construct()
    {
        $this->kurikulum = new Kurikulum();
    }

    public function index()
    {
        $title = 'Kurikulum';
        $kur = $this->kurikulum->findAll();

        return view('kurikulum/index', compact('title', 'kur'));
    }

    public function create()
    {
        $title = 'Tambah Data Kurikulum';

        return view('kurikulum/create', compact('title'));
    }

    public function edit($id)
    {
        $title = 'Edit Data Kurikulum';

        $kur = $this->kurikulum->find($id);  

        return view('kurikulum/edit', compact('title', 'kur'));
    }

    public function store()
    {
        if (!$this->validate([
            'semester' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kode_matkul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama_matkul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'sks' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'konversi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'unit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->kurikulum->insert([
            'semester' => $this->request->getVar('semester'),
            'kode_matkul' => $this->request->getVar('kode_matkul'),
            'nama_matkul' => $this->request->getVar('nama_matkul'),
            'sks' => $this->request->getVar('sks'),
            'konversi' => $this->request->getVar('konversi'),
            'unit' => $this->request->getVar('unit'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Kurikulum Berhasil');
        return redirect()->to('/kurikulum');
    }

    public function update($id)
    {
        if (!$this->validate([
            'semester' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kode_matkul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama_matkul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'sks' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'konversi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'unit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->kurikulum->update($id, [
            'semester' => $this->request->getVar('semester'),
            'kode_matkul' => $this->request->getVar('kode_matkul'),
            'nama_matkul' => $this->request->getVar('nama_matkul'),
            'sks' => $this->request->getVar('sks'),
            'konversi' => $this->request->getVar('konversi'),
            'unit' => $this->request->getVar('unit'),
        ]);
        session()->setFlashdata('message', 'Edit Data Kurikulum Berhasil');
        return redirect()->to('/kurikulum');
    }

    function delete($id)
    {
        $dataKurikulum = $this->kurikulum->find($id);
        if (empty($dataKurikulum)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Kurikulum Tidak ditemukan !');
        }
        $this->kurikulum->delete($id);
        session()->setFlashdata('message', 'Delete Data Kurikulum Berhasil');
        return redirect()->to('/kurikulum');
    }
}
