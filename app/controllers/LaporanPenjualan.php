<?php

class LaporanPenjualan extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }
    }
    public function index()
    {
        $data['judul'] = 'Laporan Penjualan';
        if ($_SESSION['role'] == 'distributor') {
            $data['retail'] = $this->model('Retail_model')->all();
            $this->view('templates/header', $data);
            $this->view('laporan-penjualan/distributor', $data);
            $this->view('templates/footer');
        }else{
            $data['retail'] = $this->model('Retail_model')->find($_SESSION['id']);
            $this->view('templates/header', $data);
            $this->view('laporan-penjualan/retail', $data);
            $this->view('templates/footer');
        }
    }

    public function tambah()
    {
        $data = $_FILES['file_laporan'];
        $ekstensiValid = ['pdf', 'doc', 'docx'];

        // upload
        $namaFile = $data['name'];
        $tmpName = $data['tmp_name'];
        $ekstensiFile = explode('.', $namaFile);
        $ekstensiFile = strtolower(end($ekstensiFile));

        // cek apakah tidak ada file yang diupload
        if ($data['error'] === 4) {
            Flasher::setFlash('Gagal', 'Tidak ada file yang diupload', 'error');
            header('Location: ' . BASEURL . '/retail');
            exit;
        }

        // cek ekstensi file
        if (!in_array($ekstensiFile, $ekstensiValid)) {
            Flasher::setFlash('Gagal', 'File yang diupload bukan pdf', 'error');
            header('Location: ' . BASEURL . '/retail');
            exit;
        }

        // pindahkan file ke folder
        move_uploaded_file($tmpName, 'laporan_penjualan/' . $namaFile);
    
        $this->model('Retail_model')->uploadLaporan($namaFile);
        Flasher::setFlash('Berhasil', 'Laporan berhasil ditambahkan', 'success');
        header('Location: ' . BASEURL . '/retail');
    }
}
