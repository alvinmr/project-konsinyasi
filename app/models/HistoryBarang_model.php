<?php 

class HistoryBarang_model {
    private $table = 'transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function all()
    {
        // get transaksi
        $query = "SELECT * FROM $this->table";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    function create($data) {
        // TODO: insert data to req_barang table
        // $query = "INSERT INTO $this->table (nama_barang, harga_satuan, stok, total_harga) VALUES (:nama_barang, :harga_satuan, :stok, :total_harga)";
        // $this->db->query($query);
        // $this->db->bind('nama_barang', $data['nama_barang']);
        // $this->db->bind('harga_satuan', $data['harga_satuan']);
        // $this->db->bind('stok', $data['stok']);
        // $this->db->bind('total_harga', $data['total_harga']);
        // $this->db->execute();
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

}