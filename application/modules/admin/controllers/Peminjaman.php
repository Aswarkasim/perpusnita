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
            'pinjam'      => 'admin/peminjaman/cek_kd/',
            'peminjaman'      => $peminjaman,
            'content'   => 'admin/peminjaman/index'
        ];

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function cek_kd(){
        $kd_anggota = $this->input->post('kd_anggota');
        
        redirect('admin/peminjaman/pinjam/'.$kd_anggota,'refresh');
        
    }

    function pinjam($kd_anggota){
        $anggota  = $this->Crud_model->listingOne('tbl_anggota','kd_anggota',$kd_anggota);
        $buku = $this->Crud_model->listing('tbl_buku');
        $peminjaman = $this->AM->listPeminjamanAnggota($kd_anggota);
        $data = [
            'status'       => 'admin/peminjaman/status/',
            'add'       => 'admin/peminjaman/add',
            'edit'      => 'admin/peminjaman/edit/',
            'delete'    => 'admin/peminjaman/delete/',
            'anggota'   => $anggota,
            'buku'      => $buku,
            'peminjaman'=> $peminjaman,
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
        redirect('admin/peminjaman/pinjam/'.$data['kd_anggota'],'refresh');
        
    }

    public function status(){
        $kd_pinjam = $this->uri->segment(4);
        $kd_anggota = $this->uri->segment(5);
        $status = $this->uri->segment(6);


        $data = [
            'tanggal_kembali'=> date('ymd'),
            'status_kembali' => $status
        ];
        $this->Crud_model->edit('tbl_peminjaman', 'kd_peminjaman', $kd_pinjam, $data);
        $this->session->set_flashdata('msg', 'Buku dikembalikan');
        redirect('admin/peminjaman/pinjam/'.$kd_anggota,'refresh');
    }

}

