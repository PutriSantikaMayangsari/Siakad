<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mentoring;

class MentoringController extends BaseController
{
    public function index()
    {
        $mentoringModel = new Mentoring();
        $mentoring = $mentoringModel->findAll();

        $data = [
            'title' => 'Home',
            'jadwal' => $mentoring
        ];

        return view('home/home', $data);
    }
}
