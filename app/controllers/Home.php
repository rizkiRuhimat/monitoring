<?php

class Home extends Controller
{

    public function index()
    {
        // data untuk header dan nama halaman
        $data['title'] = 'Home';

        // mengambil data dari model
        $data['traffic'] = $this->model('Home_model')->getTraffic();

        // memanggil view dan menampilkan data
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');

        // var_dump($data['a']);
        // die;
    }
}
