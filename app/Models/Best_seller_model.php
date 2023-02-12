<?php

namespace App\Models;

use CodeIgniter\Model;

class Best_seller_model extends Model
{
    protected $table = 'best_seller';
    protected $primaryKey = 'id_best_seller';
    protected $useTimestamps = false;
    protected $allowedFields = ['id_madu'];

    public function bestSeller()
    {
        $this->select('id_madu, count(*) as jumlah');
        $this->groupBy('id_madu');
        $this->orderBy('jumlah', 'desc');
        $this->limit(1);

        return $this->find();
    }
}
