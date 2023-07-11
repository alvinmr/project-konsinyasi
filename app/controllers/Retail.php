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
        $data['judul'] = 'Retail';
        $data['retail'] = $this->model('Retail_model')->all();
        $this->view('templates/header', $data);
        $this->view('retail/index', $data);
        $this->view('templates/footer');
    }
}