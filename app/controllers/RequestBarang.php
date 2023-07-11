<?php 

class RequestBarang extends Controller {
    public function __construct()
    {
        if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }
    }
    public function index()
    {
        $data['judul'] = 'Request Barang';
        if($_SESSION['role'] == 'distributor'){
            $data['req_barang'] = $this->model('ReqBarang_model')->all();
            $this->view('templates/header', $data);
            $this->view('req-barang/distributor', $data);
            $this->view('templates/footer');
        }else{
            $data['req_barang'] = $this->model('ReqBarang_model')->findByRetail($_SESSION['id']);
            $data['barang'] = $this->model('Barang_model')->all();
            $this->view('templates/header', $data);
            $this->view('req-barang/retail', $data);
            $this->view('templates/footer');
        }
    }

    public function terima($id)
    {
        $data['id'] = $id;
        $this->model('ReqBarang_model')->terima($data);
        Flasher::setFlash('Request Barang', 'Diterima', 'success');
        header('Location: ' . BASEURL . '/requestBarang');
        exit;
    }

    public function tolak($id)
    {
        $data['id'] = $id;
        $this->model('ReqBarang_model')->tolak($data);
        Flasher::setFlash('Request Barang', 'Ditolak', 'danger');
        header('Location: ' . BASEURL . '/requestBarang');
        exit;
    }

    public function tambah()
    {
        $data = [
            'id_barang' => $_POST['id_barang'],
            'jumlah_barang' => $_POST['jumlah_barang'],
            'harga' => $_POST['harga'],
            'total_harga' => $_POST['total_harga'],
        ];
        $this->model('ReqBarang_model')->create($data);
        Flasher::setFlash('Request Barang', 'Berhasil Ditambahkan', 'success');
        header('Location: ' . BASEURL . '/requestBarang');
    }

    public function hapus($id)
    {
        $data['id'] = $id;
        $this->model('ReqBarang_model')->delete($data);
        Flasher::setFlash('Request Barang', 'Berhasil Dihapus', 'danger');
        header('Location: ' . BASEURL . '/requestBarang');
    }
}