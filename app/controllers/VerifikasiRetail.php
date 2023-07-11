<?php 

class VerifikasiRetail extends Controller {
    public function __construct()
    {
        if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }
    }
    public function index()
    {
        $data['judul'] = 'Verifikasi Retail';
        $data['retail'] = $this->model('Retail_model')->all();
        $this->view('templates/header', $data);
        $this->view('verif-retail/index', $data);
        $this->view('templates/footer');
    }

    public function terima($id)
    {
        $data['id'] = $id;
        $this->model('Retail_model')->terima($data);
        Flasher::setFlash('Verifikasi Retail', 'Diterima', 'success');
        header('Location: ' . BASEURL . '/verifikasiRetail');
        exit;
    }

    public function tolak($id)
    {
        $data['id'] = $id;
        $this->model('Retail_model')->tolak($data);
        Flasher::setFlash('Verifikasi Retail', 'Ditolak', 'danger');
        header('Location: ' . BASEURL . '/verifikasiRetail');
        exit;
    }
}