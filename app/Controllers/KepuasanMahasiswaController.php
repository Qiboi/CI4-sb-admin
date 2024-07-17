<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\KepuasanMahasiswa;

class KepuasanMahasiswaController extends BaseController
{
    protected $kepuasanmahasiswa;

    function __construct()
    {
        $this->kepuasanmahasiswa = new KepuasanMahasiswa();
    }

    public function index()
    {
        $title = 'Kepuasan Mahasiswa';
        $kepuasan = $this->kepuasanmahasiswa->findAll();

        return view('kepuasanmahasiswa/index', compact('title', 'kepuasan'));
    }

    public function create()
    {
        $title = 'Tambah Data Kepuasan Mahasiswa';

        return view('kepuasanmahasiswa/create', compact('title'));
    }

    public function edit($id)
    {
        $title = 'Edit Data Kepuasan Mahasiswa';

        $kepuasan = $this->kepuasanmahasiswa->find($id);        

        return view('kepuasanmahasiswa/edit', compact('title', 'kepuasan'));
    }

    public function store()
    {
        if (!$this->validate([
            'aspek_kepuasan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'sangat_baik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'baik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'cukup' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kurang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'rencana_kepuasan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->kepuasanmahasiswa->insert([
            'aspek_kepuasan' => $this->request->getVar('aspek_kepuasan'),
            'sangat_baik' => $this->request->getVar('sangat_baik'),
            'baik' => $this->request->getVar('baik'),
            'cukup' => $this->request->getVar('cukup'),
            'kurang' => $this->request->getVar('kurang'),
            'rencana_kepuasan' => $this->request->getVar('rencana_kepuasan'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Kepuasan Mahasiswa Berhasil');
        return redirect()->to('/kepuasanmahasiswa');
    }

    public function update($id)
    {
        if (!$this->validate([
            'aspek_kepuasan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'sangat_baik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'baik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'cukup' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kurang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'rencana_kepuasan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->kepuasanmahasiswa->update($id, [
            'aspek_kepuasan' => $this->request->getVar('aspek_kepuasan'),
            'sangat_baik' => $this->request->getVar('sangat_baik'),
            'baik' => $this->request->getVar('baik'),
            'cukup' => $this->request->getVar('cukup'),
            'kurang' => $this->request->getVar('kurang'),
            'rencana_kepuasan' => $this->request->getVar('rencana_kepuasan'),
        ]);
        session()->setFlashdata('message', 'Edit Data Kepuasan Mahasiswa Berhasil');
        return redirect()->to('/kepuasanmahasiswa');
    }

    function delete($id)
    {
        $dataKepuasan = $this->kepuasanmahasiswa->find($id);
        if (empty($dataKepuasan)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Kepuasan Mahasiswa Tidak ditemukan !');
        }
        $this->kepuasanmahasiswa->delete($id);
        session()->setFlashdata('message', 'Delete Data Kepuasan Mahasiswa Berhasil');
        return redirect()->to('/kepuasanmahasiswa');
    }
}
