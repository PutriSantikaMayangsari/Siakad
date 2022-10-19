<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Jadwal;

class JadwalController extends BaseController
{
    public function index()
    {
        $jadwalModel = new Jadwal();
        $jadwal = $jadwalModel->findAll();

        $data = [
            'title' => 'Jadwal Perkuliahan',
            'jadwal' => $jadwal
        ];

        return view('jadwal/listjadwal', $data);
    }

    public function createjadwal()
    {
        $data = [
            'title' => 'Create Jadwal'
        ];

        return view('jadwal/createjadwal', $data);
    }

    public function storejadwal()
    {
        if (!$this->validate([
            'waktu' => 'required|string',
            'jenis' => 'required|string',
            'matkul' => 'required',
            'ruang' => 'required'
        ])) {
            return redirect()->to('/createjadwal');
        }
        $jadwalModel = new Jadwal();
        $data = [
            'waktu' => $this->request->getPost('waktu'),
            'jenis' => $this->request->getPost('jenis'),
            'matkul' => $this->request->getPost('matkul'),
            'ruang' => $this->request->getPost('ruang'),
        ];
        $jadwalModel->save($data);

        return redirect()->to('/jadwal');
    }

    public function deletejadwal($id)
    {
        $jadwalModel = new Jadwal();
        $jadwalModel->delete($id);
        return redirect()->to('/jadwal');
    }

    public function updatejadwal($id)
    {
        if (!$this->validate([
            'waktu' => 'required|numeric',
            'jenis' => 'required|string',
            'matkul' => 'required',
            'ruang' => 'required',
        ])) {
            return redirect()->to('/jadwal/editjadwal' . $id);
        }
        $jadwalModel = new Jadwal();
        $data = [
            'waktu' => $this->request->getVar('waktu'),
            'jenis' => $this->request->getVar('jenis'),
            'matkul' => $this->request->getVar('matkul'),
            'ruang' => $this->request->getVar('ruang'),
        ];
        $jadwalModel->update($id, $data);

        return redirect()->to('/jadwal');
    }
}
