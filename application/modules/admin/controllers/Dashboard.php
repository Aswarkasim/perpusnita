<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in_admin();
    }


    public function index()
    {
        $id_user = $this->session->userdata('id_user');
        $user = $this->Crud_model->listingOne('tbl_user', 'id_user', $id_user);

        $buku = $this->Crud_model->listing('tbl_buku');
        $penerbit = $this->Crud_model->listing('tbl_penerbit');
        $kategori = $this->Crud_model->listing('tbl_kategori');
        $anggota = $this->Crud_model->listing('tbl_anggota');

        $peminjaman = $this->Crud_model->listingOneAll('tbl_peminjaman', 'status_kembali', 'Belum');
        $hilang = $this->Crud_model->listingOneAll('tbl_peminjaman', 'status_kembali', 'Hilang');



        $data = [
            'title'     => 'Dashboard',
            'user'      => $user,
            'buku'      => $buku,
            'penerbit'      => $penerbit,
            'kategori'      => $kategori,
            'anggota'      => $anggota,
            'peminjaman'      => $peminjaman,
            'hilang'      => $hilang,
            'content'   => 'admin/dashboard/index'
        ];

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}

/* End of file Dashboard.php */
