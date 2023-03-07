<?php

namespace App\Controllers;
use App\Models\artikelModel;
class artikel extends BaseController
{
    public function index()
    {
        $artikelModel = new artikelModel;
        $data['data']=$artikelModel->findAll();
        return view('views', $data);
    }
    function add(){
        return view('add');
    }
    function save(){
        $artikelModel = new artikelModel();
        $artikelModel->insert([
            "nama" => $this->request->getPost('nama'),
            "content" => $this->request->getPost('content'),
        ]);
        return redirect('/');
    }
}