<?php

class Transaksi_model
{
    private $table = 'radcheck';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAccount()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAccountById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataAccount($data)
    {
        $query = "INSERT INTO radcheck VALUES (0, :username, :attribute, :op, :value)";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('attribute', "Cleartext-Password");
        $this->db->bind('op', ":=");
        $this->db->bind('value', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataAccount($id)
    {
        $query = "DELETE FROM radcheck WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataAccount()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM radcheck WHERE username LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
