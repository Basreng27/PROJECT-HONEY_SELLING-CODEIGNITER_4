<?php

namespace App\Models;

use CodeIgniter\Model;

class Rating_model extends Model
{
    protected $table = 'rating';
    protected $primaryKey = 'id_rating';
    protected $useTimestamps = false;
    protected $allowedFields = ['id_madu', 'id_user', 'rating'];

    public function getRating($id_madu, $id_user)
    {
        return $this->where(['id_madu' => $id_madu, 'id_user' => $id_user])->first();
    }

    public function sumRating($id_madu)
    {
        $this->select('SUM(rating) AS rating');
        $this->where(['id_madu' => $id_madu]);

        return $this->first();
    }

    public function countRating($id_madu)
    {
        return $this->where(['id_madu' => $id_madu])->countAllResults();
    }

    public function sumRatingS($id_madu, $id_user)
    {
        $this->select('SUM(rating) AS rating');
        $this->where(['id_madu' => $id_madu, 'id_user' => $id_user]);

        return $this->first();
    }

    public function countRatingS($id_madu, $id_user)
    {
        return $this->where(['id_madu' => $id_madu, 'id_user' => $id_user])->countAllResults();
    }
}
