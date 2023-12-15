<?php

class Vendor_model
{
    private $table = 'g_vendor_copy';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getVendor()
    {
        $this->db->query('SELECT id,vendor_name,case trim(status) when 0 then "In Active" else "Active" end as status FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getDetail($id)
    {
        $this->db->query('SELECT id,vendor_name,case trim(status) when 0 then "In Active" else "Active" end as status FROM `' . $this->table . '` WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahVendor($data)
    {
        // isi NULL untuk autoincrement pada table
        $query  =   "INSERT INTO {$this->table} SET
        `vendor_name`   =   :vendor,
        `status`        =   :status
        ";

        $this->db->query($query);

        $this->db->bind('vendor', $data['vendor']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusVendor($id)
    {
        $query  =   "DELETE FROM {$this->table} where id= :id;";
        // var_dump($query);
        // die;
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        // return $query;
        return $this->db->rowCount();
    }

    public function updateData($data)
    {
        $query  =   "UPDATE {$this->table} SET
                        `vendor_name`   =   :vendor,
                        `status`        =   :status
                        where `id`= :id ";

        $this->db->query($query);
        $this->db->bind('vendor', $data['vendor']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    function ubahDataVendor($data)
    {
        // var_dump($data);
        // die;
        $query  =   "UPDATE {$this->table} SET
                            `vendor_name`   = :vndr_name,
                            `status`        = :status
                        WHERE id= :id";

        $this->db->query($query);
        $this->db->bind('vendor', $data['vendor']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    function cariVendor()
    {

        $keyword    =   $_POST['keyword'];
        $query      =   "SELECT * FROM {$this->table} WHERE `name_vendor` like :keyword  or id like :keyword or status like :keyword";

        $this->db->query($query);

        $this->db->bind("keyword", "%$keyword%");

        return $this->db->resultSet();
    }
}
