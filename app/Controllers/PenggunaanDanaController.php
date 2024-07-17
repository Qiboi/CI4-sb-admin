<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PenggunaanDana;

class PenggunaanDanaController extends BaseController
{
    protected $penggunaandana;

    function __construct()
    {
        $this->penggunaandana = new PenggunaanDana();
    }

    public function index()
    {
        $title = 'Penggunaan Dana';
        $penggunaan = $this->penggunaandana->findAll();

        $biaya = $this->penggunaandana->select('biaya_penggunaan')->findAll();    
        $count = 0;
        foreach ($biaya as $b){
            $count += $b->biaya_penggunaan;
        }    

        return view('penggunaandana/index', compact('title', 'penggunaan', 'count'));
    }

    public function create()
    {
        $title = 'Tambah Data Penggunaan Dana';

        return view('penggunaandana/create', compact('title'));
    }

    public function edit($id)
    {
        $title = 'Edit Data Penggunaan Dana';

        $penggunaan = $this->penggunaandana->find($id);

        return view('penggunaandana/edit', compact('title', 'penggunaan'));
    }

    public function store()
    {
        if (!$this->validate([
            'jenis_penggunaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'biaya_penggunaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->penggunaandana->insert([
            'jenis_penggunaan' => $this->request->getVar('jenis_penggunaan'),
            'biaya_penggunaan' => $this->request->getVar('biaya_penggunaan'),            
        ]);
        session()->setFlashdata('message', 'Tambah Data Penggunaan Dana Berhasil');
        return redirect()->to('/penggunaandana');
    }

    public function update($id)
    {
        if (!$this->validate([
            'jenis_penggunaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'biaya_penggunaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->penggunaandana->update($id, [
            'jenis_penggunaan' => $this->request->getVar('jenis_penggunaan'),
            'biaya_penggunaan' => $this->request->getVar('biaya_penggunaan'),            
        ]);
        session()->setFlashdata('message', 'Tambah Data Penggunaan Dana Berhasil');
        return redirect()->to('/penggunaandana');
    }

    function delete($id)
    {
        $dataPenggunaan = $this->penggunaandana->find($id);
        if (empty($dataPenggunaan)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Penggunaan Dana Tidak ditemukan !');
        }
        $this->penggunaandana->delete($id);
        session()->setFlashdata('message', 'Delete Data Penggunaan Dana Berhasil');
        return redirect()->to('/penggunaandana');
    }
}
