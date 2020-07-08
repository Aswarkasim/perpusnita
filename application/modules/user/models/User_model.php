<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function login($username, $password)
    {
        $this->db->select('*')
            ->from('tbl_anggota')
            ->where(array(
                'username'      => $username,
                'password'   => sha1($password)
            ));
        $query = $this->db->get();
        return $query->row();
    }
}
