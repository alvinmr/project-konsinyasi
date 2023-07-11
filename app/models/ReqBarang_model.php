<?php 

class ReqBarang_model {
    private $table = 'req_barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function all()
    {
        // get all req_barang data where has relation with barang table and retail table
        $this->db->query('SELECT req_barang.*, 
        barang.nama_barang, 
        barang.harga_satuan, 
        barang.stok,
        retail.nama_retail FROM ' . $this->table . ' 
        INNER JOIN barang 
        ON req_barang.id_barang = barang.id_barang 
        INNER JOIN retail 
        ON req_barang.id_retail = retail.id_retail');
        return $this->db->resultSet();
    }

    function create($data) {
        $query = "INSERT INTO $this->table 
        (id_retail, id_barang, jumlah_barang, harga, total_harga) 
        VALUES (:id_retail, :id_barang, :jumlah_barang, :harga, :total_harga)";
        $this->db->query($query);
        $this->db->bind('id_retail', $_SESSION['id']);
        $this->db->bind('id_barang', $data['id_barang']);
        $this->db->bind('jumlah_barang', $data['jumlah_barang']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('total_harga', $data['total_harga']);
        $this->db->execute();
    }

    function terima($data) {
        $query = "UPDATE $this->table SET is_accepted = 1 WHERE id_req_barang = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
    }

    function tolak($data) {
        $query = "UPDATE $this->table SET is_accepted = 2 WHERE id_req_barang = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
    }

    function findByRetail($id) {
        $query = 'SELECT req_barang.*, 
        barang.nama_barang, 
        barang.harga_satuan, 
        barang.stok,
        retail.nama_retail FROM ' . $this->table . ' 
        INNER JOIN barang ON req_barang.id_barang = barang.id_barang 
        INNER JOIN retail 
        ON req_barang.id_retail = retail.id_retail 
        WHERE req_barang.id_retail = :id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    // delete
    function delete($data) {
        $query = "DELETE FROM $this->table WHERE id_req_barang = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
    }

}