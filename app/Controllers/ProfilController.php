<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Profil;

class ProfilController extends BaseController
{
    public function index()
    {
        $profilModel = new Profil();
        $profil = $profilModel->findAll();

        $data = [
            'title' => 'Profil Mahasiswa',
            'profil' => $profil
        ];

        return view('profil/listdata', $data);
    }

    public function createdata()
    {
        $data = [
            'title' => 'Create profil'
        ];

        return view('profil/createdata', $data);
    }

    public function storedata()
    {
        if (!$this->validate([
            'npm' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
            'jalur' => 'required',
            'jk' => 'required',
            'tlahir' => 'required',
            'tmptlahir' => 'required',
            'goldar' => 'required',
            'ayah' => 'required',
            'ibu' => 'required',
            'penghasilanayah' => 'required',
            'penghasilanibu' => 'required',
            'pendidikan' => 'required',
            'alamat' => 'required',
            'kewarganegaraan' => 'required',
            'kode' => 'required',
            'status' => 'required'
        ])) {
            return redirect()->to('/createdata');
        }
        $profilModel = new Profil();
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'prodi' => $this->request->getPost('prodi'),
            'jalur' => $this->request->getPost('jalur'),
            'jk' => $this->request->getPost('jk'),
            'tlahir' => $this->request->getPost('tlahir'),
            'tmptlahir' => $this->request->getPost('tmptlahir'),
            'goldar' => $this->request->getPost('goldar'),
            'ayah' => $this->request->getPost('ayah'),
            'ibu' => $this->request->getPost('ibu'),
            'penghasilanayah' => $this->request->getPost('penghasilanayah'),
            'penghasilanibu' => $this->request->getPost('penghasilanibu'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'alamat' => $this->request->getPost('alamat'),
            'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
            'kode' => $this->request->getPost('kode'),
            'status' => $this->request->getPost('status')
        ];
        $profilModel->save($data);

        return redirect()->to('/profil');
    }

    public function deletedata($id)
    {
        $profilModel = new Profil();
        $profilModel->delete($id);
        return redirect()->to('/profil');
    }

    public function updatedata($id)
    {
        if (!$this->validate([
            'npm' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
            'jalur' => 'required',
            'jk' => 'required',
            'tlahir' => 'required',
            'tmptlahir' => 'required',
            'goldar' => 'required',
            'ayah' => 'required',
            'ibu' => 'required',
            'penghasilanayah' => 'required',
            'penghasilanibu' => 'required',
            'pendidikan' => 'required',
            'alamat' => 'required',
            'kewarganegaraan' => 'required',
            'kode' => 'required',
            'status' => 'required'
        ])) {
            return redirect()->to('/profil/editdata' . $id);
        }
        $profilModel = new Profil();
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'prodi' => $this->request->getPost('prodi'),
            'jalur' => $this->request->getPost('jalur'),
            'jk' => $this->request->getPost('jk'),
            'tlahir' => $this->request->getPost('tlahir'),
            'tmptlahir' => $this->request->getPost('tmptlahir'),
            'goldar' => $this->request->getPost('goldar'),
            'ayah' => $this->request->getPost('ayah'),
            'ibu' => $this->request->getPost('ibu'),
            'penghasilanayah' => $this->request->getPost('penghasilanayah'),
            'penghasilanibu' => $this->request->getPost('penghasilanibu'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'alamat' => $this->request->getPost('alamat'),
            'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
            'kode' => $this->request->getPost('kode'),
            'status' => $this->request->getPost('status')
        ];
        $profilModel->update($id, $data);

        return redirect()->to('/profil');
    }
}
