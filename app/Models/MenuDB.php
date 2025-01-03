<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuDB extends Model
{
    protected $table = 'tabel_menu';
    protected $primaryKey = 'id_menu';
    protected $allowedFields = ['nama', 'email', 'password', 'role'];

    // Fungsi untuk mendapatkan data user berdasarkan email

    public function data_menu($id_menu)
    {
        return $this->find($id_menu);
    }

    public function update_data($data, $id_menu)
    {
        $query = $this->db->table($this->table)->update(
            $data,
            array('id_menu' => $id_menu)
        );
        return $query;
    }

    public function delete_data($id_menu)
    {
        $query = $this->db->table($this->table)->delete(array('id_menu' => $id_menu));
        return $query;
    }
}
