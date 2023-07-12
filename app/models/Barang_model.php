<?php 

class Barang_model {
    private $table = 'barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function all()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    function create($data) {
        $query = "INSERT INTO barang (nama_barang, harga_satuan, stok, total_harga) VALUES (:nama_barang, :harga_satuan, :stok, :total_harga)";
        $this->db->query($query);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('harga_satuan', $data['harga_satuan']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('total_harga', $data['total_harga']);
        $this->db->execute();
    }

    // find id
    function find($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_barang = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    function update($data) {
        $query = "UPDATE barang SET nama_barang = :nama_barang, harga_satuan = :harga_satuan, stok = :stok, total_harga = :total_harga WHERE id_barang = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('harga_satuan', $data['harga_satuan']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('total_harga', $data['total_harga']);
        $this->db->execute();
    }

    function delete($id) {
        $query = "DELETE FROM barang WHERE id_barang = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
    }

}