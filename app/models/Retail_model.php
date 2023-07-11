<?php 

class Retail_model {
    private $table = 'retail';
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

    // find by id
    public function find($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_retail=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    // create
    public function create($data)
    {
        $query = "INSERT INTO retail 
        (nama_retail, email, password, alamat, no_telp, ktp, siu) 
        VALUES (:nama_retail, :email, :password, :alamat, :no_telp, :ktp, :siu)";
        $this->db->query($query);
        $this->db->bind('nama_retail', $data['nama_retail']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('ktp', $data['ktp']);
        $this->db->bind('siu', $data['siu']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // find by email
    public function findByEmail($email)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email=:email');
        $this->db->bind('email', $email);
        return $this->db->single();
    }

    // tambah data laporan
    public function tambahLaporan($name)
    {
        $query = "UPDATE retail SET laporan_penjualan=:laporan_penjualan WHERE id_retail=:id_retail";
        $this->db->query($query);
        $this->db->bind('id_retail', $_SESSION['id']);
        $this->db->bind('laporan_penjualan', $name);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // terima
    public function terima($data)
    {
        $query = "UPDATE retail SET is_verified=:is_verified WHERE id_retail=:id_retail";
        $this->db->query($query);
        $this->db->bind('id_retail', $data['id']);
        $this->db->bind('is_verified', 1);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // tolak
    public function tolak($data)
    {
        $query = "UPDATE retail SET is_verified=:is_verified WHERE id_retail=:id_retail";
        $this->db->query($query);
        $this->db->bind('id_retail', $data['id']);
        $this->db->bind('is_verified', 2);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
}