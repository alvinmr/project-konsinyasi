<?php 

class Distributor extends Controller {
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
        $this->view('distributor/header', $data);
        $this->view('distributor/index', $data);
        $this->view('distributor/footer');
    }
}