<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        is_logged_in_admin();
    }


    public function index()
    {
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $valid = $this->form_validation;
        $valid->set_rules('nama_aplikasi', 'Nama Aplikasi', 'required', array('required' => '%s tidak boleh kosong'));

        if ($valid->run() === FALSE) {
            $data = [
                'title'     => 'konfigurasi ',
                'back'      => 'barang/konfigurasi',
                'konfigurasi'    => $konfigurasi,
                'content'   => 'admin/konfigurasi/edit'
            ];
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = [
                'nama_aplikasi'   => $i->post('nama_aplikasi'),
                'nama_pimpinan'   => $i->post('nama_pimpinan'),
                'kontak_person'   => $i->post('kontak_person'),
                'provinsi'   => $i->post('provinsi'),
                'kabupaten'   => $i->post('kabupaten'),
                'kecamatan'   => $i->post('kecamatan'),
                'alamat'   => $i->post('alamat')
            ];
            $this->Crud_model->edit('tbl_konfigurasi', 'id_konfigurasi', '1', $data);
            $this->session->set_flashdata('msg', 'Konfigurasi diubah');
            redirect('admin/konfigurasi');
        }
    }

    public function sejarah()
    {
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $valid = $this->form_validation;
        $valid->set_rules('sejarah', 'Text', 'required', array('required' => '%s tidak boleh kosong'));

        if ($valid->run() === FALSE) {
            $data = [
                'title'         => 'konfigurasi ',
                'data'       => $konfigurasi->sejarah,
                'content'       => 'admin/konfigurasi/sejarah'
            ];
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = [
                'sejarah'   => $i->post('sejarah')
            ];
            $this->Crud_model->edit('tbl_konfigurasi', 'id_konfigurasi', '1', $data);
            $this->session->set_flashdata('msg', 'Konfigurasi diubah');
            redirect('admin/konfigurasi/sejarah');
        }
    }

    public function visimisi()
    {
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $valid = $this->form_validation;
        $valid->set_rules('visimisi', 'Text Visi Misi', 'required', array('required' => '%s tidak boleh kosong'));

        if ($valid->run() === FALSE) {
            $data = [
                'title'         => 'konfigurasi ',
                'data'          => $konfigurasi->visimisi,
                'content'       => 'admin/konfigurasi/visimisi'
            ];
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = [
                'visimisi'   => $i->post('visimisi')
            ];
            $this->Crud_model->edit('tbl_konfigurasi', 'id_konfigurasi', '1', $data);
            $this->session->set_flashdata('msg', 'Konfigurasi diubah');
            redirect('admin/konfigurasi/visimisi');
        }
    }

    public function panduan()
    {
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $valid = $this->form_validation;
        $valid->set_rules('panduan', 'Text Panduan', 'required', array('required' => '%s tidak boleh kosong'));

        if ($valid->run() === FALSE) {
            $data = [
                'title'         => 'konfigurasi ',
                'data'          => $konfigurasi->panduan,
                'content'       => 'admin/konfigurasi/panduan'
            ];
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = [
                'panduan'   => $i->post('panduan')
            ];
            $this->Crud_model->edit('tbl_konfigurasi', 'id_konfigurasi', '1', $data);
            $this->session->set_flashdata('msg', 'Konfigurasi diubah');
            redirect('admin/konfigurasi/panduan');
        }
    }

    public function banner()
    {
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $required = '%s tidak boleh kosong';
        $valid = $this->form_validation;
        $valid->set_rules('bantuan', 'Topik', 'required', ['required' => $required]);
        if ($valid->run()) {
            if (!empty($_FILES['banner']['name'])) {
                $config['upload_path']   = './assets/uploads/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['max_size']      = '2048'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('banner')) {
                    $data = [
                        'konfigurasi' => $konfigurasi,
                        'error'     => $this->upload->display_errors(),
                        'content'   => 'admin/konfigurasi/banner'
                    ];
                    $this->load->view('admin/layout/wrapper', $data, FALSE);
                } else {
                    if ($konfigurasi->banner != "") {
                        unlink('assets/uploads/' . $konfigurasi->banner);
                    }
                    $upload_data = ['uploads' => $this->upload->data()];

                    $data = [

                        'banner'            => $upload_data['uploads']['file_name']
                    ];
                    $this->Crud_model->edit('tbl_konfigurasi', 'id_konfigurasi', '1', $data);
                    $this->session->set_flashdata('msg', 'Banner diubah');
                    redirect('admin/konfigurasi/banner/');
                }
            }
        }
        $data = [
            'konfigurasi'   => $konfigurasi,
            'content'       => 'admin/konfigurasi/banner'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}
