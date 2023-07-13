<?php 

class Retail extends Controller {
    public function __construct()
    {
        if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }
    }
    public function index()
    {
        $data['judul'] = 'Home';
        $data['barang'] = $this->model('Barang_model')->all();
        $data['retail'] = $this->model('Retail_model')->all();
        $data['req_barang'] = $this->model('ReqBarang_model')->all();
        $data['log_produsen'] = $this->model('LogProdusen_model')->all();
        $data['history_barang'] = $this->model('HistoryBarang_model')->find($_SESSION['nama']);
        $this->view('retail/header', $data);
        $this->view('retail/index', $data);
        $this->view('retail/footer');
    }
}