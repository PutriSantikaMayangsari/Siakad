<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Nilai;

class NilaiController extends BaseController
{
    public function index()
    {
        $nilaiModel = new Nilai();
        $nilai = $nilaiModel->findAll();

        $data = [
            'title' => 'Data Nilai Mahasiswa',
            'nilai' => $nilai
        ];

        return view('nilai/listnilai', $data);
    }

    public function createnilai()
    {
        $data = [
            'title' => 'Create Nilai Mahasiswa'
        ];

        return view('nilai/createnilai', $data);
    }

    public function storenilai()
    {
        if (!$this->validate([
            'npm' => 'required|numeric',
            'nama' => 'required|string',
            'kode' => 'required',
            'matkul' => 'required',
            'sks' => 'required',
            'nilaimutu' => 'required',
            'nilai' => 'required'
        ])) {
            return redirect()->to('/createnilai');
        }
        $nilaiModel = new Nilai();
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'kode' => $this->request->getPost('kode'),
            'matkul' => $this->request->getPost('matkul'),
            'sks' => $this->request->getPost('sks'),
            'nilaimutu' => $this->request->getPost('nilaimutu'),
            'nilai' => $this->request->getPost('nilai'),
        ];
        $nilaiModel->save($data);

        return redirect()->to('/nilai');
    }

    public function deletenilai($id)
    {
        $nilaiModel = new Nilai();
        $nilaiModel->delete($id);
        return redirect()->to('/nilai');
    }

    public function editnilai($id)
    {
        $nilaiModel = new Nilai();
        $nilai = $nilaiModel->find($id);

        $data = [
            'title' => 'Edit Nilai Mahasiswa',
            'nilai' => $nilai
        ];

        return view('nilai/editnilai', $data);
    }

    public function updatenilai($id)
    {
        if (!$this->validate([
            'npm' => 'required|numeric',
            'nama' => 'required|string',
            'kode' => 'required',
            'matkul' => 'required',
            'sks' => 'required',
            'nilaimutu' => 'required',
            'nilai' => 'required',
        ])) {
            return redirect()->to('/editnilai' . $id);
        }
        $nilaiModel = new Nilai();
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'kode' => $this->request->getPost('kode'),
            'matkul' => $this->request->getPost('matkul'),
            'sks' => $this->request->getPost('sks'),
            'nilaimutu' => $this->request->getPost('nilaimutu'),
            'nilai' => $this->request->getPost('nilai'),
        ];
        $nilaiModel->update($id, $data);

        return redirect()->to('/nilai');
    }
}
