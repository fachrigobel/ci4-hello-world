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
        if ($this->request->getFile('photo-profile')->isValid()) {
            $photoProfile = $this->request->getFile('photo-profile');
            $profileName = $photoProfile->getRandomName();
            $photoProfile->move('img', $profileName);
        } else {
            $profileName = 'default.png';
        }
        $data = [
            'first_name' => $this->request->getVar('first-name'),
            'last_name' => $this->request->getVar('last-name'),
            'photo_profile' => $profileName
        ];

        $this->penduduk->save($data);

        return redirect()->to('/');
    }

    public function delete()
    {
        $id = $this->request->getVar('id');
        $penduduk = $this->penduduk->find($id);

        if ($penduduk['photo_profile'] != 'default.png') {
            unlink('img/' . $penduduk['photo_profile']);
        }
        $this->penduduk->delete($id);

        return redirect()->to('/');
    }

    public function update()
    {
        $id = $this->request->getVar('id');
        $data = [
            'first_name' => $this->request->getVar('first-name'),
            'last_name' => $this->request->getVar('last-name')
        ];

        $this->penduduk->update($id, $data);

        return redirect()->to("/detail/$id");
    }
}
