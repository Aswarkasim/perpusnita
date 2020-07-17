<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $data = [
            'data'    => $konfigurasi,
            'content' => 'home/home/beranda'
        ];
        $this->load->view('layout/wrapper', $data);
    }
    public function sejarah()
    {
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $data = [
            'data'    => $konfigurasi,
            'content' => 'home/home/sejarah'
        ];
        $this->load->view('layout/wrapper', $data);
    }
    public function visi()
    {
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $data = [
            'data'    => $konfigurasi,
            'content' => 'home/home/visi'
        ];
        $this->load->view('layout/wrapper', $data);
    }
    public function panduan()
    {
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $data = [
            'data'    => $konfigurasi,
            'content' => 'home/home/panduan'
        ];
        $this->load->view('layout/wrapper', $data);
    }
}
