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
        $data = [
            'content' => 'home/home/sejarah'
        ];
        $this->load->view('layout/wrapper', $data);
    }
    public function visi()
    {
        $data = [
            'content' => 'home/home/visi'
        ];
        $this->load->view('layout/wrapper', $data);
    }
    public function panduan()
    {
        $data = [
            'content' => 'home/home/panduan'
        ];
        $this->load->view('layout/wrapper', $data);
    }
}
