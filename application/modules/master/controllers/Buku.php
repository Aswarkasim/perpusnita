<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('master/Buku_model');
    }


    public function index()
    {
        $tombol  = [
            'add'     => 'master/buku/add',
            'edit'    => 'master/buku/edit/',
            'delete'  => 'master/buku/delete/'
        ];


        $buku = $this->Crud_model->listing('tbl_buku', 'date_created', 'DESC');
        $data = [

            'buku' => $buku,
            'tombol'   => $tombol,
            'content' => 'master/buku/index'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    public function detail($kd_buku)
    {

        $buku = $this->Buku_model->listingBuku($kd_buku)->row();
        $data = [
            'buku' => $buku,
            'content' => 'master/buku/detail'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function add()
    {
        $penerbit = $this->Crud_model->listing('tbl_penerbit');
        $kategori = $this->Crud_model->listing('tbl_kategori');

        $required = '%s tidak boleh kosong';
        $valid = $this->form_validation;
        $valid->set_rules('judul_buku', 'Judul Buku', 'required', ['required' => $required]);
        $valid->set_rules('kd_buku', 'Kode Buku', 'required', ['required' => $required]);
        $valid->set_rules('penulis', 'Penulis', 'required', ['required' => $required]);
        $valid->set_rules('sinopsis', 'Sinopsis', 'required', ['required' => $required]);
        $valid->set_rules('bahasa', 'Bahasa', 'required', ['required' => $required]);
        if ($valid->run()) {
            echo $this->input->post('cover');
            if (!empty($_FILES['cover']['name'])) {
                $config['upload_path']   = './assets/uploads/images/buku/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['max_size']      = '24000'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('cover')) {
                    $data = [
                        'penerbit' => $penerbit,
                        'kategori' => $kategori,
                        'error'     => $this->upload->display_errors(),
                        'content'   => 'master/buku/add'
                    ];
                    $this->load->view('admin/layout/wrapper', $data, FALSE);
                } else {
                    $upload_data = ['uploads' => $this->upload->data()];

                    $i = $this->input;
                    $data = [
                        'kd_buku'    => $i->post('kd_buku'),
                        'judul_buku'    => $i->post('judul_buku'),
                        'isbn'    => $i->post('isbn'),
                        'penulis'    => $i->post('penulis'),
                        'tahun_terbit'    => $i->post('tahun_terbit'),
                        'jumlah_halaman'    => $i->post('jumlah_halaman'),
                        'bahasa'    => $i->post('bahasa'),
                        'jumlah'    => $i->post('jumlah'),
                        'kd_kategori'    => $i->post('kd_kategori'),
                        'kd_penerbit'    => $i->post('kd_penerbit'),
                        'sinopsis'    => $i->post('sinopsis'),
                        'cover'          => $upload_data['uploads']['file_name']
                    ];
                    $this->Crud_model->add('tbl_buku', $data);
                    $this->session->set_flashdata('msg', 'Buku ditambahkan');
                    redirect('master/buku');
                }
            }
        }
        $data = [
            'penerbit' => $penerbit,
            'kategori' => $kategori,
            'content'   => 'master/buku/add'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    function edit($kd_buku)
    {
        $buku = $this->Crud_model->listingOne('tbl_buku', 'kd_buku', $kd_buku);
        $penerbit = $this->Crud_model->listing('tbl_penerbit');
        $kategori = $this->Crud_model->listing('tbl_kategori');

        $required = '%s tidak boleh kosong';
        $valid = $this->form_validation;
        $valid->set_rules('judul_buku', 'Judul Buku', 'required', ['required' => $required]);
        $valid->set_rules('kd_buku', 'Kode Buku', 'required', ['required' => $required]);
        $valid->set_rules('penulis', 'Penulis', 'required', ['required' => $required]);
        $valid->set_rules('sinopsis', 'Sinopsis', 'required', ['required' => $required]);
        $valid->set_rules('bahasa', 'Bahasa', 'required', ['required' => $required]);
        if ($valid->run()) {
            echo $this->input->post('cover');
            if (!empty($_FILES['cover']['name'])) {
                $config['upload_path']   = './assets/uploads/images/buku/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['max_size']      = '24000'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('cover')) {
                    $data = [
                        'penerbit' => $penerbit,
                        'kategori' => $kategori,
                        'buku' => $buku,
                        'error'     => $this->upload->display_errors(),
                        'content'   => 'master/buku/edit'
                    ];
                    $this->load->view('admin/layout/wrapper', $data, FALSE);
                } else {
                    if ($buku->foto != '') {
                        unlink('assets/uploads/images/buku/' . $buku->cover);
                    }
                    $upload_data = ['uploads' => $this->upload->data()];

                    $i = $this->input;
                    $data = [
                        'kd_buku'    => $i->post('kd_buku'),
                        'judul_buku'    => $i->post('judul_buku'),
                        'isbn'    => $i->post('isbn'),
                        'penulis'    => $i->post('penulis'),
                        'tahun_terbit'    => $i->post('tahun_terbit'),
                        'jumlah_halaman'    => $i->post('jumlah_halaman'),
                        'bahasa'    => $i->post('bahasa'),
                        'jumlah'    => $i->post('jumlah'),
                        'kd_kategori'    => $i->post('kd_kategori'),
                        'kd_penerbit'    => $i->post('kd_penerbit'),
                        'sinopsis'    => $i->post('sinopsis'),
                        'cover'          => $upload_data['uploads']['file_name']
                    ];
                    $this->Crud_model->edit('tbl_buku', 'kd_buku', $kd_buku, $data);
                    $this->session->set_flashdata('msg', 'Buku ditambahkan');
                    redirect('master/buku');
                }
            } else {
                $i = $this->input;
                $data = [
                    'kd_buku'    => $i->post('kd_buku'),
                    'judul_buku'    => $i->post('judul_buku'),
                    'isbn'    => $i->post('isbn'),
                    'penulis'    => $i->post('penulis'),
                    'tahun_terbit'    => $i->post('tahun_terbit'),
                    'jumlah_halaman'    => $i->post('jumlah_halaman'),
                    'bahasa'    => $i->post('bahasa'),
                    'jumlah'    => $i->post('jumlah'),
                    'kd_kategori'    => $i->post('kd_kategori'),
                    'kd_penerbit'    => $i->post('kd_penerbit'),
                    'sinopsis'    => $i->post('sinopsis'),
                ];
                $this->Crud_model->edit('tbl_buku', 'kd_buku', $kd_buku, $data);
                $this->session->set_flashdata('msg', 'Buku ditambahkan');
                redirect('master/buku');
            }
        }
        $data = [
            'penerbit' => $penerbit,
            'buku' => $buku,
            'kategori' => $kategori,
            'content'   => 'master/buku/edit'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function delete($kd_buku)
    {
        $buku = $this->Crud_model->listingOne('tbl_buku', 'kd_buku', $kd_buku);
        if ($buku->cover != '') {
            unlink('assets/uploads/images/buku/' . $buku->cover);
        }
        $this->Crud_model->delete('tbl_buku', 'kd_buku', $kd_buku);
        $this->session->set_flashdata('msg', 'data telah dihapus');
        redirect('master/buku');
    }
}
