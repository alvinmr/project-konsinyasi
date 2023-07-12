<?php 

class LogProdusen extends Controller {
    public function __construct()
    {
        if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }
    }
    public function index()
    {
        $data['judul'] = 'Log Produsen';
        $data['log_produsen'] = $this->model('LogProdusen_model')->all();
        $this->view('templates/header', $data);
        $this->view('log-produsen/index', $data);
        $this->view('templates/footer');
    }

    // tambah
    function tambah() {
        $data = [
            'nama_produsen' => $_POST['nama_produsen'],
            'alamat' => $_POST['alamat'],
            'email' => $_POST['email'],
            'no_telp' => $_POST['no_telp'],
            'nama_barang' => $_POST['nama_barang'],
            'barang_diminta' => $_POST['barang_diminta'],
            'harga_satuan' => $_POST['harga_satuan'],
            'total_harga' => $_POST['total_harga']
        ];
        $this->model('LogProdusen_model')->create($data);
        // set flash message
        Flasher::setFlash('Sukses', 'Data berhasil ditambahkan', 'success');
        header('location: ' . BASEURL . '/distributor');
        
        $this->view('templates/header');
    }

    // update
    function update() {
        $id = explode('/', $_GET['url'])[2];
        $data = [
            'nama_produsen' => $_POST['nama_produsen'],
            'alamat' => $_POST['alamat'],
            'email' => $_POST['email'],
            'no_telp' => $_POST['no_telp'],
            'nama_barang' => $_POST['nama_barang'],
            'barang_diminta' => $_POST['barang_diminta'],
            'harga_satuan' => $_POST['harga_satuan'],
            'total_harga' => $_POST['total_harga'],
            'id' => $id
        ];
        $this->model('LogProdusen_model')->update($data);
        Flasher::setFlash('Sukses', 'Data berhasil diupdate', 'success');
        header('location: ' . BASEURL . '/distributor');
        
        $this->view('templates/header');
    }

    // hapus
    function hapus() {
        $id = explode('/', $_GET['url'])[2];
        $this->model('LogProdusen_model')->delete($id);
        Flasher::setFlash('Sukses', 'Data berhasil dihapus', 'success');
        header('location: ' . BASEURL . '/distributor');
        
        $this->view('templates/header');
    }
}