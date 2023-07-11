<?php 

class HistoryBarang extends Controller {
    public function __construct()
    {
        if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }
    }
    public function index()
    {
        $data['judul'] = 'History Barang';
        $data['req_barang'] = $this->model('HistoryBarang_model')->all();
        $this->view('templates/header', $data);
        $this->view('history-barang/index', $data);
        $this->view('templates/footer');
    }
}