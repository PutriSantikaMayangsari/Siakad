<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Absen;

class AbsenController extends BaseController
{
    public function index()
    {
        $absenModel = new Absen();
        $absen = $absenModel->findAll();

        $data = [
            'title' => 'Data Absen Mahasiswa',
            'absen' => $absen
        ];

        return view('absen/listabsen', $data);
    }

    public function createabsen()
    {
        $data = [
            'title' => 'Tambah Absen'
        ];

        return view('absen/createabsen', $data);
    }

    public function storeabsen()
    {
        if (!$this->validate([
            'npm' => 'required',
            'nama' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',

        ])) {
            return redirect()->to('/createabsen');
        }
        $absenModel = new Absen();
        $data = [
            'npm' =>  $this->request->getPost('npm'),
            'nama' =>  $this->request->getPost('nama'),
            'tanggal' =>  $this->request->getPost('tanggal'),
            'keterangan' =>  $this->request->getPost('keterangan'),
        ];
        $absenModel->save($data);

        return redirect()->to('/absen');
    }
    public function deleteabsen($id)
    {
        $absenModel = new Absen();
        $absenModel->delete($id);
        return redirect()->to('/absen');
    }

    public function editabsen($id)
    {
        $absenModel = new Absen();
        $absen = $absenModel->find($id);

        $data = [
            'title' => 'Edit absen',
            'absen' => $absen
        ];

        return view('absen/editabsen', $data);
    }

    public function updateabsen($id)
    {
        if (!$this->validate([
            'npm' => 'required',
            'nama' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
        ])) {
            return redirect()->to('/editabsen' . $id);
        }
        $absenModel = new Absen();
        $data = [
            'npm' =>  $this->request->getPost('npm'),
            'nama' =>  $this->request->getPost('nama'),
            'tanggal' =>  $this->request->getPost('tanggal'),
            'keterangan' =>  $this->request->getPost('keterangan'),
        ];
        $absenModel->update($id, $data);

        return redirect()->to('/absen');
    }
}
