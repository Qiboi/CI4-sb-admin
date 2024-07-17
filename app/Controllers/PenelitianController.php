<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Penelitian;

class PenelitianController extends BaseController
{
    protected $penelitian;

    function __construct()
    {
        $this->penelitian = new Penelitian();
    }

    public function index()
    {
        $title = 'Penelitian DTTPS';
        $pen = $this->penelitian->findAll();

        return view('penelitian/index', compact('title', 'pen'));
    }

    public function create()
    {
        $title = 'Tambah Data Penelitian DTTPS';

        return view('penelitian/create', compact('title'));
    }

    public function edit($id)
    {
        $title = 'Edit Data Penelitian DTTPS';

        $pen = $this->penelitian->find($id);      

        return view('penelitian/edit', compact('title', 'pen'));
    }

    public function store()
    {
        if (!$this->validate([
            'dosen_penelitian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'mahasiswa_penelitian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'judul_penelitian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tahun_penelitian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            
 
        ])) {            
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }        
        $this->penelitian->insert([
            'dosen_penelitian' => $this->request->getVar('dosen_penelitian'),
            'mahasiswa_penelitian' => $this->request->getVar('mahasiswa_penelitian'),
            'judul_penelitian' => $this->request->getVar('judul_penelitian'),
            'tahun_penelitian' => $this->request->getVar('tahun_penelitian'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Penelitian DTTPS Berhasil');
        return redirect()->to('/penelitian');
    }

    public function update($id)
    {
        if (!$this->validate([
            'dosen_penelitian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'mahasiswa_penelitian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'judul_penelitian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tahun_penelitian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            
 
        ])) {            
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }        
        $this->penelitian->update($id, [
            'dosen_penelitian' => $this->request->getVar('dosen_penelitian'),
            'mahasiswa_penelitian' => $this->request->getVar('mahasiswa_penelitian'),
            'judul_penelitian' => $this->request->getVar('judul_penelitian'),
            'tahun_penelitian' => $this->request->getVar('tahun_penelitian'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Penelitian DTTPS Berhasil');
        return redirect()->to('/penelitian');
    }

    function delete($id)
    {
        $dataPenelitian = $this->penelitian->find($id);
        if (empty($dataPenelitian)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Penelitian DTTPS Tidak ditemukan !');
        }
        $this->penelitian->delete($id);
        session()->setFlashdata('message', 'Delete Data Penelitian DTTPS Berhasil');
        return redirect()->to('/penelitian');
    }
}
