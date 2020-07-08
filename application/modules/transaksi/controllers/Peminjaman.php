<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('transaksi/Peminjaman_model', 'PM');
    }


    public function index()
    {
        $tombol  = [
            'add'     => 'master/buku/add',
            'edit'    => 'master/buku/edit/',
            'delete'  => 'master/buku/delete/'
        ];

        $peminjaman =  $this->PM->list();

        $data = [
            'tombol'  => $tombol,
            'peminjaman'  => $peminjaman,
            'content' => 'transaksi/peminjaman/index'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}
