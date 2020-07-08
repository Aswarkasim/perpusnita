<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{

    public function index()
    {
        $data = [
            'content' => 'user/buku/index'
        ];
        $this->load->view('layout/wrapper', $data);
    }
}
