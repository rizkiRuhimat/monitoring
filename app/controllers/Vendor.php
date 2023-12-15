<?php

class Vendor extends Controller
{

    public function index()
    {
        // data untuk header dan nama halaman
        $data['title'] = 'Daftar Vendor';

        // mengambil data dari model Vendor_model.php di folder models
        $data['vendor'] = $this->model('Vendor_model')->getVendor();
        // $data['vendor'] = $this->model('Vendor_model')->getVendor();
        // memanggil view dan menampilkan data
        $this->view('templates/header', $data);
        $this->view('vendor/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        // data untuk header dan nama halaman
        $data['title'] = 'Detail Vendor';

        // mengambil data dari model Vendor_model.php
        $data['vendor'] = $this->model('Vendor_model')->getDetail($id);
        // $data['vendor'] = $this->model('Vendor_model')->getVendor();

        // memanggil view dan menampilkan data
        $this->view('templates/header', $data);
        $this->view('vendor/detail', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        // data untuk header dan nama halaman
        $data['title'] = 'Edit Vendor Alert';

        // mengambil data dari model Vendor_model.php
        $data['vendor'] = $this->model('Vendor_model')->getDetail($id);
        $data['listvendor'] = $this->model('Vendor_model')->getVendor();

        // memanggil view dan menampilkan data
        $this->view('templates/header', $data);
        $this->view('vendor/edit', $data);
        $this->view('templates/footer');
    }

    public function getAdd()
    {
        $this->model('Vendor_model')->tambahVendor($_POST);
    }

    public function add()
    {
        // data untuk header dan nama halaman
        $data['title'] = 'Tambah Vendor';

        // mengambil data dari model Vendor_model.php di folder models
        $data['vendor'] = $this->model('Vendor_model')->getVendor();
        // memanggil view dan menampilkan data
        $this->view('templates/header', $data);
        $this->view('vendor/add', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Vendor_model')->tambahVendor($_POST) > 0) {

            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . 'vendor/');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . 'vendor/');
            exit;
        }
    }

    public function hapus($id)
    {
        var_dump($_POST);
        if ($this->model('Vendor_model')->hapusVendor($id) > 0) {

            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . 'vendor/');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . 'vendor/');
            exit;
        }
    }

    public function getUpdate()
    {
        $this->model('Vendor_model')->updateData($_POST);
    }

    public function update()
    {
        if ($this->model('Vendor_model')->updateData($_POST) > 0) {
            $data['vendor'] = $this->model('Vendor_model')->getDetail($_POST['id']);
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . 'vendor/');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . 'vendor/');
            exit;
        }
    }

    public function cari()
    {
        $data['title'] = 'Daftar Vendor';

        // mengambil data dari model Vendor_model.php di folder models
        $data['vendor'] = $this->model('Vendor_model')->cariVendor();

        // memanggil view dan menampilkan data
        $this->view('templates/header', $data);
        $this->view('vendor/index', $data);
        $this->view('templates/footer');
    }
}
