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
        $config['total_rows']   = count($this->Crud_model->listingOneAll('tbl_kategori', 'is_parent', ''));
        $config['per_page']     = 12;

        $from = $this->uri->segment(4);
        $this->pagination->initialize($config);
        $kategori = $this->HM->listParentKategori($config['per_page'], $from);
        // $kategori = $this->Crud_model->listingOneAll('tbl_kategori', 'is_parent', '');


        $data = [
            'kategori'    => $kategori,
            'pagination'    => $this->pagination->create_links(),
            'content' => 'home/buku/index'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function listChild($kd_kategori)
    {
        $kategori = $this->Crud_model->listingOneAll('tbl_kategori', 'is_parent', $kd_kategori);
        $kat_parent = $this->Crud_model->listingOne('tbl_kategori', 'kd_kategori', $kd_kategori);
        $data = [
            'kategori'  => $kategori,
            'kat_parent'  => $kat_parent,
            'content'  => 'home/buku/listChild'
        ];
        $this->load->view('/layout/wrapper', $data, FALSE);
    }


    public function listBuku($kd_kategori)
    {
        $this->load->library('pagination');

        $config['base_url']     = base_url('home/buku/listBuku/' . $kd_kategori);
        $config['total_rows']   = count($this->Crud_model->listingOneAll('tbl_buku', 'kd_kategori', $kd_kategori));
        $config['per_page']     = 12;

        $from = $this->uri->segment(5);
        $this->pagination->initialize($config);
        $buku = $this->HM->listBuku('tbl_buku', $kd_kategori, $config['per_page'], $from);

        $kat_parent = $this->Crud_model->listingOne('tbl_kategori', 'kd_kategori', $kd_kategori);

        $data = [
            'buku'    => $buku,
            'kat_parent'  => $kat_parent,
            'pagination'    => $this->pagination->create_links(),
            'content' => 'home/buku/listBuku'
        ];
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
