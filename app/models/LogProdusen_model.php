<?php

class LogProdusen_model
{
    private $table = 'produsen';
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

    function create($data)
    {
        $query = "INSERT INTO $this->table 
        (
            nama_produsen, 
            alamat, 
            email, 
            no_telp,
            nama_barang,
            barang_diminta,
            harga_satuan,
            total_harga
        ) 
        VALUES (
            :nama_produsen, 
            :alamat, 
            :email, 
            :no_telp,
            :nama_barang,
            :barang_diminta,
            :harga_satuan,
            :total_harga
        )";
        $this->db->query($query);
        $this->db->bind('nama_produsen', $data['nama_produsen']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('barang_diminta', $data['barang_diminta']);
        $this->db->bind('harga_satuan', $data['harga_satuan']);
        $this->db->bind('total_harga', $data['total_harga']);
        $this->db->execute();
    }

    function update($data)
    {
        $query = "UPDATE $this->table SET 
        nama_produsen = :nama_produsen, 
        alamat = :alamat, 
        email = :email, 
        no_telp = :no_telp,
        nama_barang = :nama_barang,
        barang_diminta = :barang_diminta,
        harga_satuan = :harga_satuan,
        total_harga = :total_harga
        WHERE id_produsen = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama_produsen', $data['nama_produsen']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('barang_diminta', $data['barang_diminta']);
        $this->db->bind('harga_satuan', $data['harga_satuan']);
        $this->db->bind('total_harga', $data['total_harga']);
        $this->db->execute();
    }

    function delete($id)
    {
        $query = "DELETE FROM $this->table WHERE id_produsen = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
    }
}
