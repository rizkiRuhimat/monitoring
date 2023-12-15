<?php

class Konfig extends Controller
{

    public function index()
    {
        // data untuk header dan nama halaman
        $data['title'] = 'Daftar Konfig Alert';

        // mengambil data dari model Konfig_model.php di folder models
        $data['konfig'] = $this->model('Konfig_model')->getConfig();
        // $data['vendor'] = $this->model('Konfig_model')->getVendor();
        // memanggil view dan menampilkan data
        $this->view('templates/header', $data);
        $this->view('konfig/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        // data untuk header dan nama halaman
        $data['title'] = 'Detail Konfig Alert';

        // mengambil data dari model Konfig_model.php
        $data['konfig'] = $this->model('Konfig_model')->getDetail($id);
        $data['vendor'] = $this->model('Konfig_model')->getVendor();

        // memanggil view dan menampilkan data
        $this->view('templates/header', $data);
        $this->view('konfig/detail', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        // data untuk header dan nama halaman
        $data['title'] = 'Edit Konfig Alert';

        // mengambil data dari model Konfig_model.php
        $data['konfig'] = $this->model('Konfig_model')->getDetail($id);
        $data['vendor'] = $this->model('Konfig_model')->getVendor();

        // memanggil view dan menampilkan data
        $this->view('templates/header', $data);
        $this->view('konfig/edit', $data);
        $this->view('templates/footer');
    }

    public function getAdd()
    {
        $this->model('Konfig_model')->tambahConfig($_POST);
    }

    public function add()
    {
        // data untuk header dan nama halaman
        $data['title'] = 'Tambah Konfig Alert';

        // mengambil data dari model Konfig_model.php di folder models
        $data['vendor'] = $this->model('Konfig_model')->getVendor();
        // memanggil view dan menampilkan data
        $this->view('templates/header', $data);
        $this->view('konfig/add', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Konfig_model')->tambahConfig($_POST) > 0) {

            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . 'konfig/');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . 'konfig/');
            exit;
        }
    }

    public function hapus($id)
    {
        var_dump($_POST);
        if ($this->model('Konfig_model')->hapusConfig($id) > 0) {

            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . 'konfig/');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . 'konfig/');
            exit;
        }
    }

    public function getUbah()
    {

        // echo json_encode($this->model('Konfig_model')->getDetail($_POST['id']));
        echo json_encode($this->model('Konfig_model')->getDetail($_POST));
    }

    public function ubah()
    {
        if ($this->model('Konfig_model')->ubahDataConfig($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . 'konfig/');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . 'konfig/');
            exit;
        }
    }
    public function getUpdate()
    {
        $this->model('Konfig_model')->updateData($_POST);
    }

    public function update()
    {
        if ($this->model('Konfig_model')->updateData($_POST) > 0) {
            $data['konfig'] = $this->model('Konfig_model')->getDetail($_POST['id']);
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . 'konfig/');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . 'konfig/');
            exit;
        }
    }

    public function cari()
    {
        $data['title'] = 'Daftar Konfig Alert';

        // mengambil data dari model Konfig_model.php di folder models
        $data['konfig'] = $this->model('Konfig_model')->cariConfig();

        // memanggil view dan menampilkan data
        $this->view('templates/header', $data);
        $this->view('konfig/index', $data);
        $this->view('templates/footer');
    }
}
