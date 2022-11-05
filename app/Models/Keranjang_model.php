<?php

namespace App\Models;

use CodeIgniter\Model;

class Keranjang_model extends Model
{
    protected $table = 'keranjang';
    protected $primaryKey = 'id_keranjang';
    protected $useTimestamps = false;
    protected $allowedFields = ['id_user', 'id_madu', 'jumlah', 'total'];

    public function getKeranjang($id_user)
    {
        $this->select('*');
        $this->join('users', 'keranjang.id_user = users.id_user', 'left');
        $this->join('product', 'keranjang.id_madu = product.id_madu', 'left');
        $this->where(['keranjang.id_user' => $id_user]);

        return $this->findAll();
    }
}
