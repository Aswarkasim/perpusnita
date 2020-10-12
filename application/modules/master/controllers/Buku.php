<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in_admin();
        $this->load->model('master/Buku_model', 'BM');
    }


    public function index()
    {
        $tombol  = [
            'add'     => 'master/buku/add',
            'edit'    => 'master/buku/edit/',
            'delete'  => 'master/buku/delete/'
        ];


        $buku = $this->Crud_model->listing('tbl_buku', 'date_created', 'DESC');

        $kategori = $this->BM->listParentKategori();
        $data = [
            'buku' => $buku,
            'kategori' => $kategori,
            'tombol'   => $tombol,
            'content' => 'master/buku/index'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }


    public function listBuku($kd_kategori)
    {
        $tombol  = [
            'add'     => 'master/buku/add',
            'edit'    => 'master/buku/edit/',
            'delete'  => 'master/buku/delete/'
        ];

        $katDetail = $this->Crud_model->listingOne('tbl_kategori', 'kd_kategori', $kd_kategori);

        $buku = $this->Crud_model->listingOneAll('tbl_buku', 'kd_kategori', $kd_kategori);

        $kategori = $this->BM->listParentKategori();
        $data = [
            'buku' => $buku,
            'kategori' => $kategori,
            'tombol'   => $tombol,
            'katDetail'   => $katDetail,
            'content' => 'master/buku/list'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function listChild($kd_kategori)
    {
        $tombol  = [
            'add'     => 'master/buku/add',
            'edit'    => 'master/buku/edit/',
            'delete'  => 'master/buku/delete/'
        ];

        $katDetail = $this->Crud_model->listingOne('tbl_kategori', 'kd_kategori', $kd_kategori);

        // $buku = $this->Crud_model->listingOneAll('tbl_buku', 'kd_kategori', $kd_kategori);

        $kategori = $this->BM->listChildKategori($kd_kategori);
        $data = [
            'kategori' => $kategori,
            'tombol'   => $tombol,
            'katDetail'   => $katDetail,
            'content' => 'master/buku/listChild'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }


    public function detail($kd_buku)
    {

        $buku = $this->BM->listingBuku($kd_buku)->row();
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
        $jenis = $this->Crud_model->listing('tbl_jenis');



        $required = '%s tidak boleh kosong';
        $valid = $this->form_validation;
        $valid->set_rules('judul_buku', 'Judul Buku', 'required', ['required' => $required]);
        $valid->set_rules('kd_buku', 'Kode Buku', 'is_unique[tbl_buku.kd_buku]', ['required' => $required, 'is_unique' => '%s telah digunakan']);
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
                        'jenis' => $jenis,
                        'error'     => $this->upload->display_errors(),
                        'content'   => 'master/buku/add'
                    ];
                    $this->load->view('admin/layout/wrapper', $data, FALSE);
                } else {
                    $upload_data = ['uploads' => $this->upload->data()];

                    $i = $this->input;
                    $data = [
                        'kd_buku'    => str_replace(' ', '', $i->post('kd_buku')),
                        'judul_buku'    => $i->post('judul_buku'),
                        'isbn'    => $i->post('isbn'),
                        'penulis'    => $i->post('penulis'),
                        'kd_jenis'      => $i->post('kd_jenis'),
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
            'jenis' => $jenis,
            'content'   => 'master/buku/add'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    function edit($kd_buku)
    {
        $buku = $this->Crud_model->listingOne('tbl_buku', 'kd_buku', $kd_buku);
        $penerbit = $this->Crud_model->listing('tbl_penerbit');
        $kategori = $this->Crud_model->listing('tbl_kategori');
        $jenis = $this->Crud_model->listing('tbl_jenis');

        $required = '%s tidak boleh kosong';
        $valid = $this->form_validation;
        $valid->set_rules('judul_buku', 'Judul Buku', 'required', ['required' => $required]);
        // $valid->set_rules('kd_buku', 'Kode Buku', 'required', ['required' => $required]);
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
                        'jenis' => $jenis,
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
                        'kd_jenis'      => $i->post('kd_jenis'),
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
                    redirect('master/buku/edit/' . $kd_buku);
                }
            } else {
                $i = $this->input;
                $data = [
                    'kd_buku'    => $i->post('kd_buku'),
                    'judul_buku'    => $i->post('judul_buku'),
                    'isbn'    => $i->post('isbn'),
                    'penulis'    => $i->post('penulis'),
                    'kd_jenis'      => $i->post('kd_jenis'),
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
                redirect('master/buku/edit/' . $kd_buku);
            }
        }
        $data = [
            'penerbit' => $penerbit,
            'buku' => $buku,
            'jenis' => $jenis,
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

    function exportExcel()
    {


        $this->load->library("excel");

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Date Created", "Kode Buku", "Judul Buku", "ISBN", "Penulis", "Penerbit", "Tahun Terbit", "Kategori", "Jumlah", "Bahasa");

        $column = 0;

        foreach ($table_columns as $field) {

            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

            $column++;
        }


        $data = $this->BM->listingBukuIndex();


        $excel_row = 2;

        foreach ($data as $row) {

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->date_created);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->kd_buku);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->judul_buku);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->isbn);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->penulis);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->nm_penerbit);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->tahun_terbit);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->nm_kategori);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->jumlah);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->bahasa);

            $excel_row++;
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

        header('Content-Type: application/vnd.ms-excel');

        header('Content-Disposition: attachment;filename="DataBuku.xls"');

        ob_end_clean();
        ob_start();
        $object_writer->save('php://output');
    }


    function cetak()
    {
        $buku = $this->Crud_model->listing('tbl_buku');
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $data = [

            'buku' => $buku,
            'konfigurasi' => $konfigurasi,
        ];
        $this->load->view('master/buku/cetak', $data, FALSE);
    }
}
