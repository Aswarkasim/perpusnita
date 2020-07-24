<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('Home_model', 'HM');
    }


    public function index()
    {
        $this->load->library('pagination');

        $config['base_url']     = base_url('home/buku/index/');
        $config['total_rows']   = count($this->Crud_model->listing('tbl_buku'));
        $config['per_page']     = 12;

        $from = $this->uri->segment(4);
        $this->pagination->initialize($config);
        $buku = $this->HM->listBuku('tbl_buku', $config['per_page'], $from);

        $data = [
            'buku'    => $buku,
            'pagination'    => $this->pagination->create_links(),
            'content' => 'home/buku/index'
        ];
        $this->load->view('layout/wrapper', $data);
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function detail($kd_buku)
    {
        $buku = $this->HM->detailBuku($kd_buku);
        $data = [
            'buku'    => $buku,
            'content' => 'home/buku/detail'
        ];
        $this->load->view('layout/wrapper', $data);
    }
}
