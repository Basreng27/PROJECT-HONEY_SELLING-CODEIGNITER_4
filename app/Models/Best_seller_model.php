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
        $this->select('best_seller.id_madu, count(*) as jumlah, product.image, product.harga, product.isi_khasiat, product.deskripsi');
        $this->groupBy('best_seller.id_madu');
        $this->orderBy('jumlah', 'desc');
        $this->join('product', 'best_seller.id_madu = product.id_madu', 'left');
        $this->limit(3);

        return $this->findAll();
    }
}
