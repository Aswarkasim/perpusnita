<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data = [
            'content' => 'home/home/beranda'
        ];
        $this->load->view('layout/wrapper', $data);
    }
    public function sejarah()
    {
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $data = [
            'data'    => $konfigurasi->sejarah,
            'content' => 'home/home/sejarah'
        ];
        $this->load->view('layout/wrapper', $data);
    }
    public function visi()
    {
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $data = [
            'data'    => $konfigurasi->visimisi,
            'content' => 'home/home/visi'
        ];
        $this->load->view('layout/wrapper', $data);
    }
    public function panduan()
    {
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $data = [
            'data'    => $konfigurasi->panduan,
            'content' => 'home/home/panduan'
        ];
        $this->load->view('layout/wrapper', $data);
    }
}
