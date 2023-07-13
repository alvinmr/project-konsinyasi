<?php

class Transaksi_model
{
    private $table = 'transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function all()
    {
        // select all data retail and get relation on transaksi_detal table in one to many relationship
        $this->db->query("SELECT * FROM {$this->table} 
        JOIN retail ON transaksi.id_retail = retail.id_retail 
        ");
        $transaksis = $this->db->resultSet();

        foreach ($transaksis as &$transaksi) {
            $this->db->query('SELECT * FROM transaksi_detail 
            JOIN barang ON transaksi_detail.id_barang = barang.id_barang
            WHERE id_transaksi = :id_transaksi');
            $this->db->bind(':id_transaksi', $transaksi['id_transaksi']);
            $transaksi_detail = $this->db->resultSet();

            $transaksi['transaksi_detail'] = $transaksi_detail;
        }
        return $transaksis;
    }

    // create transaksi and transaksi_detail
    function create()
    {
        // get total_harga from all barang 
        $total_harga = 0;
        $barang_kirim = 0;
        foreach ($_POST['id_barang'] as $key => $id_barang) {
            $this->db->query('SELECT harga_satuan FROM barang WHERE id_barang = :id_barang');
            $this->db->bind(':id_barang', $id_barang);
            $harga_satuan = $this->db->single();
            $total_harga += $harga_satuan['harga_satuan'] * $_POST['jumlah_barang'][$key];
            $barang_kirim += $_POST['jumlah_barang'][$key];
        }
        $this->db->query('INSERT INTO transaksi (id_retail, tgl_kirim, total_harga, status, barang_kirim) VALUES (:id_retail, :tgl_kirim, :total_harga, :status, :barang_kirim)');
        $this->db->bind(':id_retail', $_POST['id_retail']);
        $this->db->bind(':tgl_kirim', $_POST['tgl_kirim']);
        $this->db->bind(':total_harga', $total_harga);
        $this->db->bind(':status', $_POST['status']);
        $this->db->bind(':barang_kirim', $barang_kirim);
        $this->db->execute();
        $id_transaksi = $this->db->lastInsertId();

        $id_barangs = $_POST['id_barang'];

        for ($i = 0; $i < count($id_barangs); $i++) {
            $this->db->query('SELECT nama_barang,harga_satuan FROM barang WHERE id_barang = :id_barang');
            $this->db->bind(':id_barang', $id_barangs[$i]);
            $barang[$i] = $this->db->single();
            $this->db->query('INSERT INTO transaksi_detail (id_transaksi, id_barang, nama_barang, total_harga, jumlah_barang) VALUES (:id_transaksi, :id_barang, :nama_barang, :total_harga, :jumlah_barang)');
            $this->db->bind(':id_transaksi', $id_transaksi);
            $this->db->bind(':id_barang', $id_barangs[$i]);
            $this->db->bind(':nama_barang', $barang[$i]['nama_barang']);
            $this->db->bind(':total_harga', $barang[$i]['harga_satuan'] * $_POST['jumlah_barang'][$i]);
            $this->db->bind(':jumlah_barang', $_POST['jumlah_barang'][$i]);
            $this->db->execute();
        }

        return $this->db->rowCount();
    }
}
