<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{

    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('User_model', 'UM');
        
    }
    
    public function index()
    {
        $kd_anggota = $this->session->userdata('kd_anggota');
        
        $buku = $this->UM->listBukuPinjam($kd_anggota);
        $data = [
            'buku'    => $buku,
            'content' => 'user/peminjaman/index'
        ];
        $this->load->view('layout/wrapper', $data);
    }

    public function detail($kd_buku)
    {
        $kd_anggota = $this->session->userdata('kd_anggota');
        
        $buku = $this->UM->detailBukuPinjam($kd_buku);
        $data = [
            'buku'    => $buku,
            'content' => 'user/peminjaman/detail'
        ];
        $this->load->view('layout/wrapper', $data);
    }
}
