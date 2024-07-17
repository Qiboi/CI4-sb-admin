<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LuaranPenelitian;

class LuaranPenelitianController extends BaseController
{
    protected $luaranpenelitian;

    function __construct()
    {
        $this->luaranpenelitian = new LuaranPenelitian();
    }

    public function index()
    {
        $title = 'Luaran Penelitian';
        $luaran = $this->luaranpenelitian->findAll();

        return view('luaranpenelitian/index', compact('title', 'luaran'));
    }

    public function create()
    {
        $title = 'Tambah Data Luaran Penelitian';

        return view('luaranpenelitian/create', compact('title'));
    }

    public function edit($id)
    {
        $title = 'Edit Data Luaran Penelitian';

        $luaran = $this->luaranpenelitian->find($id);        

        return view('luaranpenelitian/edit', compact('title', 'luaran'));
    }

    public function store()
    {
        if (!$this->validate([
            'nama_luaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tahun_luaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'keterangan_luaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->luaranpenelitian->insert([
            'nama_luaran' => $this->request->getVar('nama_luaran'),
            'tahun_luaran' => $this->request->getVar('tahun_luaran'),
            'keterangan_luaran' => $this->request->getVar('keterangan_luaran'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Luaran Penelitian Berhasil');
        return redirect()->to('/luaranpenelitian');
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama_luaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tahun_luaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'keterangan_luaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->luaranpenelitian->update($id, [
            'nama_luaran' => $this->request->getVar('nama_luaran'),
            'tahun_luaran' => $this->request->getVar('tahun_luaran'),
            'keterangan_luaran' => $this->request->getVar('keterangan_luaran'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Luaran Penelitian Berhasil');
        return redirect()->to('/luaranpenelitian');
    }

    function delete($id)
    {
        $dataLuaran = $this->luaranpenelitian->find($id);
        if (empty($dataLuaran)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Luaran Penelitian Tidak ditemukan !');
        }
        $this->luaranpenelitian->delete($id);
        session()->setFlashdata('message', 'Delete Data Luaran Penelitian Berhasil');
        return redirect()->to('/luaranpenelitian');
    }
}
