<?php

namespace App\Models;

use CodeIgniter\Model;

class Pesan_model extends Model
{
    protected $table = 'pesan';
    protected $primaryKey = 'id_pesan';
    protected $useTimestamps = false;
    protected $allowedFields = ['waktu', 'id_pengirim', 'id_penerima', 'pesan'];

    public function getLastMessage($id_user)
    {
        // return $this->findAll();
        $this->select('*');
        // $session_id = $_SESSION['uniqueid'];
        $where =    "id_pengirim = '" . session()->get('id_user') . "' AND id_penerima = '$id_user' 
                        OR 
                    id_pengirim = '$id_user' AND id_penerima = '" . session()->get('id_user') . "'";
        $this->where($where);
        $this->orderBy('waktu', 'DESC');
        // $result = $this->db->get('user_messages', 1)->result_array();
        return $this->findAll();
    }
}
