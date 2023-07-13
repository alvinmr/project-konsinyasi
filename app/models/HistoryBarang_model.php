<?php 

class HistoryBarang_model {
    private $table = 'history_barang';
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

    // find
    public function find($name)
    {
        $this->db->query("SELECT * FROM $this->table WHERE nama_retail = :nama_retail");
        $this->db->bind(':nama_retail', $name);
        return $this->db->resultSet();
    }

}