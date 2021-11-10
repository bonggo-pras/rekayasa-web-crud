<?php

namespace App\Controllers;

use App\Models\MakananModel;

class Makanan extends BaseController
{
    public function index()
    {
        $model = new MakananModel();
        $data['title']     = 'Data Makanan';
        $data['getMakanan'] = $model->getMakanan();
        echo view('layout/header_view', $data);
        echo view('pages/makanan_view', $data);
        echo view('layout/footer_view', $data);
    }
}
