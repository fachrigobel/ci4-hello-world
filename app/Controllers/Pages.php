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
        $jumlahPenduduk = count($this->penduduk->findAll());
        $pendudukPria = $this->penduduk->where('gender', 'male')->findAll();
        $pendudukWanita = $this->penduduk->where('gender', 'female')->findAll();

        $keyword = $this->request->getVar('keyword');
        $currentPage = $this->request->getVar('page_penduduk') ? $this->request->getVar('page_penduduk') : 1;
        if ($keyword) {
            $this->penduduk = $this->penduduk->search($keyword);
        }



        $data = [
            'title' => 'Home | Kelola Data Penduduk',
            'dataPenduduk'      => $this->penduduk->paginate(5, 'penduduk'),
            'pager'             => $this->penduduk->pager,
            'currentPage'       => $currentPage,
            'jumlahPenduduk'    => $jumlahPenduduk,
            'pendudukPria'      => count($pendudukPria),
            'pendudukWanita'    => count($pendudukWanita)
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
