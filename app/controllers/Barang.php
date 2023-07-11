<?php 

class Barang extends Controller {
    public function __construct()
    {
        if(!isset($_SESSION['email'])){
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }
    }
    public function index()
    {
        $data['judul'] = 'Barang';
        $data['barang'] = $this->model('Barang_model')->all();
        $this->view('templates/header', $data);
        $this->view('barang/index', $data);
        $this->view('templates/footer');
    }

    function tambah() {
        $data = [
            'nama_barang' => $_POST['nama_barang'],
            'harga_satuan' => $_POST['harga_satuan'],
            'stok' => $_POST['stok'],
            'total_harga' => $_POST['total_harga']
        ];
        $this->model('Barang_model')->create($data);
        // set flash message
        Flasher::setFlash('Sukses', 'Data berhasil ditambahkan', 'success');
        header('location: ' . BASEURL . '/barang');
        
        $this->view('templates/header');
    }

    function update() {
        $id = explode('/', $_GET['url'])[2];
        $data = [
            'nama_barang' => $_POST['nama_barang'],
            'harga_satuan' => $_POST['harga_satuan'],
            'stok' => $_POST['stok'],
            'total_harga' => $_POST['total_harga'],
            'id' => $id
        ];
        $this->model('Barang_model')->update($data);
        Flasher::setFlash('Sukses', 'Data berhasil diupdate', 'success');
        header('location: ' . BASEURL . '/barang');
        
        $this->view('templates/header');
    }

    function hapus() {
        $id = explode('/', $_GET['url'])[2];
        $this->model('Barang_model')->delete($id);
        Flasher::setFlash('Sukses', 'Data berhasil dihapus', 'success');
        header('location: ' . BASEURL . '/barang');
        
        $this->view('templates/header');
    }
}