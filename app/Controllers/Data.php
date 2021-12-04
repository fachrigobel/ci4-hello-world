<?php

namespace App\Controllers;

use App\Models\PendudukModel;

class Data extends BaseController
{
    protected $penduduk;

    public function __construct()
    {
        $this->penduduk = new PendudukModel();
    }

    public function add()
    {
        $data = [
            'first_name' => $this->request->getPost('first-name'),
            'last_name' => $this->request->getPost('last-name')
        ];

        $this->penduduk->save($data);

        return redirect()->to('/');
    }

    public function delete()
    {
        $id = $this->request->getPost('id');
        $this->penduduk->delete($id);

        return redirect()->to('/');
    }

    public function update()
    {
        $id = $this->request->getPost('id');
        $data = [
            'first_name' => $this->request->getPost('first-name'),
            'last_name' => $this->request->getPost('last-name')
        ];

        $this->penduduk->update($id, $data);

        return redirect()->to("/detail/$id");
    }
}
