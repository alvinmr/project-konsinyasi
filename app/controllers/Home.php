<?php 

class Home extends Controller {
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
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }

    function dummy() {
        $this->view('dummy/index');
    }
}