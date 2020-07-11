<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
       $this->load->model('Admin_model','AM');
        
    }
    

    public function index()
    {
        $peminjaman = $this->AM->listPeminjaman();
        $data = [
            'add'      => 'admin/peminjaman/add',
            'edit'      => 'admin/peminjaman/edit/',
            'delete'      => 'admin/peminjaman/delete/',
            'pinjam'      => 'admin/peminjaman/pinjam/',
            'peminjaman'      => $peminjaman,
            'content'   => 'admin/peminjaman/index'
        ];

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }



    function pinjam(){
        $kd_anggota = $this->input->post('kd_anggota');
        $anggota  = $this->Crud_model->listingOne('tbl_anggota','kd_anggota',$kd_anggota);
        $buku = $this->Crud_model->listing('tbl_buku');
        $data = [
            'anggota'   => $anggota,
            'buku'      => $buku,
            'content'   => 'admin/peminjaman/add_detail'
        ];

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function  simpan(){
        $i = $this->input;

        $data = [
            'kd_anggota'        => $i->post('kd_anggota'),
            'id_user'           => $i->post('id_user'),
            'kd_buku'           => $i->post('kd_buku'),
            'tanggal_pinjam'    => $i->post('tgl_pinjam'),
            'tanggal_kembali'   => $i->post('tgl_kembali'),
            'keterangan'        =>$i->post('keterangan')

        ];
        $this->Crud_model->add('tbl_peminjaman', $data);
        $this->session->set_flashdata('msg', 'Data disimpan');
        redirect('admin/peminjaman/pinjam','refresh');
        
    }

}

