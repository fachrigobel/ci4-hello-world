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
        $data = [
            'dataPenduduk' => $this->penduduk->findAll()
        ];
        return view('home', $data);
    }

    public function add()
    {
        return view('add');
    }

    public function detail($id)
    {


        $data = [
            'penduduk' => $this->penduduk->find($id)
        ];
        return view('detail', $data);
    }
}
