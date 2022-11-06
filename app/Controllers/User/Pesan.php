<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\Pesan_model;
use App\Models\Users_model;

class Pesan extends BaseController
{
    protected $PesanModel;
    protected $UsersModel;

    public function __construct()
    {
        $this->PesanModel = new Pesan_model();
        $this->UsersModel = new Users_model();
    }

    public function getUser()
    {
        $data['data'] = $this->UsersModel->getAllUser(session()->get('id_user'));
        $data['last_msg'] = array();
        // $this->load->helper('url');
        if (!is_array($data['data'])) {
            echo "<p class='text-center' style='color: black'>No user available.</p>";
        } else {
            $count = count($data['data']);
            for ($i = 0; $i < $count; $i++) {
                $id_user = $data['data'][$i]['id_user'];
                $msg = $this->PesanModel->getLastMessage($id_user);

                for ($j = 0; $j < count($msg); $j++) {
                    $time = explode(" ", $msg[0]['waktu']); //00:00:00.0000
                    $time = explode(".", $time[1]); //00:00:00
                    $time = explode(":", $time[0]); //00 00 00
                    if ((int)$time[0] == 12) {
                        $time = $time[0] . ":" . $time[1] . " PM";
                    } elseif ((int)$time[0] > 12) {
                        $time = ($time[0] - 12) . ":" . $time[1] . " PM";
                    } else {
                        $time = $time[0] . ":" . $time[1] . " AM";
                    }

                    array_push($data['last_msg'], array(
                        'pesan' => $msg[0]['pesan'],
                        'id_pengirim' => $msg[0]['id_pengirim'],
                        'id_penerima' => $msg[0]['id_penerima'],
                        'waktu' => $time //00:00
                    ));
                }
            }
            return view('Pages/User/chat', $data);
        }
    }

    public function userDetail()
    {
        $detail = $this->UsersModel->find(session()->get('id_user'));
        print_r(json_encode($detail));
    }
}
