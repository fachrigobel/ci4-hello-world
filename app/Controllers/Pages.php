<?php

namespace App\Controllers;

use App\Models\PendudukModel;

class Pages extends BaseController
{
    protected $penduduk;

    public function __construct()
    {
        $this->penduduk = new PendudukModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $this->penduduk = $this->penduduk->search($keyword);
        }

        $data = [
            'title' => 'Home | Kelola Data Penduduk',
            'dataPenduduk' => $this->penduduk->findAll()
        ];
        return view('home', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Data | Kelola Data Penduduk'
        ];
        return view('add', $data);
    }

    public function detail($id)
    {

        $penduduk = $this->penduduk->find($id);
        $nama = $penduduk['first_name'] . ' ' . $penduduk['last_name'];
        $data = [
            'title' => "$nama | Kelola Data Penduduk",
            'penduduk' => $penduduk
        ];
        return view('detail', $data);
    }
}
