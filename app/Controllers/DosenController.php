<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Dosen;

class DosenController extends BaseController
{
    public function index()
    {
        $dosenModel = new Dosen();
        $dosen = $dosenModel->findAll();

        $data = [
            'title' => ' Data Dosen',
            'dosen' => $dosen
        ];

        return view('dosen/listdosen', $data);
    }

    public function createdosen()
    {
        $data = [
            'title' => 'Create Dosen'
        ];

        return view('dosen/createdosen', $data);
    }

    public function storedosen()
    {
        if (!$this->validate([
            'nip' => 'required|numeric',
            'nama' => 'required|string',
            'prodi' => 'required',
            'deskripsi' => 'required'
        ])) {
            return redirect()->to('/createdosen');
        }
        $dosenModel = new Dosen();
        $data = [
            'nip' => $this->request->getPost('nip'),
            'nama' => $this->request->getPost('nama'),
            'prodi' => $this->request->getPost('prodi'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];
        $dosenModel->save($data);

        return redirect()->to('/dosen');
    }

    public function deletedosen($id)
    {
        $dosenModel = new Dosen();
        $dosenModel->delete($id);
        return redirect()->to('/dosen');
    }

    public function editdosen($id)
    {
        $dosenModel = new Dosen();
        $dosen = $dosenModel->find($id);

        $data = [
            'title' => 'Edit Dosen',
            'dosen' => $dosen
        ];

        return view('dosen/editdosen', $data);
    }

    public function updatedosen($id)
    {
        if (!$this->validate([
            'nip' => 'required|numeric',
            'nama' => 'required|string',
            'prodi' => 'required',
            'deskripsi' => 'required',
        ])) {
            return redirect()->to('/editdosen' . $id);
        }
        $dosenModel = new Dosen();
        $data = [
            'nip' => $this->request->getVar('nip'),
            'nama' => $this->request->getVar('nama'),
            'prodi' => $this->request->getVar('prodi'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ];
        $dosenModel->update($id, $data);

        return redirect()->to('/dosen');
    }
}
