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
        $ekstensiValid = ['pdf'];

        // upload
        $namaFile = $data['name'];
        $tmpName = $data['tmp_name'];
        $ekstensiFile = explode('.', $namaFile);
        $ekstensiFile = strtolower(end($ekstensiFile));

        // cek apakah tidak ada file yang diupload
        if ($data['error'] === 4) {
            Flasher::setFlash('Gagal', 'Tidak ada file yang diupload', 'danger');
            header('Location: ' . BASEURL . '/laporanPenjualan');
            exit;
        }

        // check apakah file sebelumnya sudah ada
        $cek = $this->model('Retail_model')->find($_SESSION['id']);
        if ($cek['laporan_penjualan'] != null) {
            unlink('laporan_penjualan/' . $cek['laporan_penjualan']);
        }

        // cek ekstensi file
        if (!in_array($ekstensiFile, $ekstensiValid)) {
            Flasher::setFlash('Gagal', 'File yang diupload bukan pdf', 'danger');
            header('Location: ' . BASEURL . '/laporanPenjualan');
            exit;
        }

        // generate nama file baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiFile;

        // pindahkan file ke folder
        move_uploaded_file($tmpName, 'laporan_penjualan/' . $namaFileBaru);
    
        $this->model('Retail_model')->tambahLaporan($namaFileBaru);
        Flasher::setFlash('Berhasil', 'Laporan berhasil ditambahkan', 'success');
        header('Location: ' . BASEURL . '/laporanPenjualan');
    }
}
