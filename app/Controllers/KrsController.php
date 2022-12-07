<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Krs;

class KrsController extends BaseController
{
    public function index()
    {
        $krsModel = new Krs();
        $krs = $krsModel->findAll();

        $data = [
            'title' => 'Kartu Rencana Studi',
            'krs' => $krs
        ];

        return view('krs/listkrs', $data);
    }

    public function createkrs()
    {
        $data = [
            'title' => 'Tambah KRS'
        ];

        return view('krs/createkrs', $data);
    }

    public function storekrs()
    {
        if (!$this->validate([
            'kode' => 'required',
            'matkul' => 'required',
            'sks' => 'required',
            'smt' => 'required',
            'kelas' => 'required',
            'ruang' => 'required',
            'dosen' => 'required',

        ])) {
            return redirect()->to('/createkrs');
        }
        $krsModel = new Krs();
        $data = [
            'kode' =>  $this->request->getPost('kode'),
            'matkul' =>  $this->request->getPost('matkul'),
            'sks' =>  $this->request->getPost('sks'),
            'smt' =>  $this->request->getPost('smt'),
            'kelas' =>  $this->request->getPost('kelas'),
            'ruang' =>  $this->request->getPost('ruang'),
            'dosen' =>  $this->request->getPost('dosen'),
        ];
        $krsModel->save($data);

        return redirect()->to('/krs');
    }

    public function deletekrs($id)
    {
        $krsModel = new Krs();
        $krsModel->delete($id);
        return redirect()->to('/krs');
    }

    public function editkrs($id)
    {
        $krsModel = new Krs();
        $krs = $krsModel->find($id);

        $data = [
            'title' => 'Edit Krs',
            'krs' => $krs
        ];

        return view('krs/editkrs', $data);
    }

    public function updatekrs($id)
    {
        if (!$this->validate([
            'kode' => 'required',
            'matkul' => 'required',
            'sks' => 'required',
            'smt' => 'required',
            'kelas' => 'required',
            'ruang' => 'required',
            'dosen' => 'required',
        ])) {
            return redirect()->to('/editkrs' . $id);
        }
        $krsModel = new Krs();
        $data = [
            'kode' =>  $this->request->getPost('kode'),
            'matkul' =>  $this->request->getPost('matkul'),
            'sks' =>  $this->request->getPost('sks'),
            'smt' =>  $this->request->getPost('smt'),
            'kelas' =>  $this->request->getPost('kelas'),
            'ruang' =>  $this->request->getPost('ruang'),
            'dosen' =>  $this->request->getPost('dosen'),
        ];
        $krsModel->update($id, $data);

        return redirect()->to('/krs');
    }
}
