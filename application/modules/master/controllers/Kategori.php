<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function index()
    {
        $tombol  = [
            'add'     => 'master/kategori/add',
            'edit'    => 'master/kategori/edit/',
            'delete'  => 'master/kategori/delete/'
        ];

        $kategori = $this->Crud_model->listing('tbl_kategori');
        $data = [

            'kategori' => $kategori,
            'tombol'   => $tombol,
            'content' => 'master/kategori/index'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $valid = $this->form_validation;
        $valid->set_rules('kd_kategori', 'Kode Kaategori', 'macthes[tbl_kategori.kd_kategori]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));
        $valid->set_rules('nm_kategori', 'Nama Kaategori', 'macthes[tbl_kategori.nm_kategori]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));


        if ($valid->run() === TRUE) {
            $this->index();
        } else {
            $i = $this->input;
            $data = [
                'nm_kategori'   => $i->post('nm_kategori'),
                'kd_kategori'   => $i->post('kd_kategori')
            ];
            $this->Crud_model->add('tbl_kategori', $data);
            $this->session->set_flashdata('msg', 'kategori berhasil ditambah');
            redirect('master/kategori');
        }
    }
    function edit($kd_kategori)
    {
        $valid = $this->form_validation;
        // $valid->set_rules('kd_kategori', 'Kode Kaategori', 'macthes[tbl_kategori.kd_kategori]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));
        // $valid->set_rules('nm_kategori', 'Nama Kaategori', 'macthes[tbl_kategori.nm_kategori]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));


        if ($valid->run() === TRUE) {
            $this->index();
        } else {
            $i = $this->input;
            $data = [
                'nm_kategori'   => $i->post('nm_kategori'),
                'kd_kategori'   => $i->post('kd_kategori')
            ];
            $this->Crud_model->edit('tbl_kategori', 'kd_kategori', $kd_kategori, $data);
            $this->session->set_flashdata('msg', 'kategori berhasil diedit');
            redirect('master/kategori');
        }
    }

    function delete($kd_kategori)
    {
        $this->Crud_model->delete('tbl_kategori', 'kd_kategori', $kd_kategori);
        $this->session->set_flashdata('msg', 'data telah dihapus');
        redirect('master/kategori');
    }

    function exportExcel()
    {


        $this->load->library("excel");

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Date Created", "Kode Kategori", "Nama Kategori");

        $column = 0;

        foreach ($table_columns as $field) {

            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

            $column++;
        }


        $data = $this->Crud_model->listing('tbl_kategori');


        $excel_row = 2;

        foreach ($data as $row) {

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->date_created);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->kd_kategori);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->nm_kategori);

            $excel_row++;
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

        header('Content-Type: application/vnd.ms-excel');

        header('Content-Disposition: attachment;filename="DataKategori.xls"');

        ob_end_clean();
        ob_start();
        $object_writer->save('php://output');
    }


    function cetak()
    {
        $kategori = $this->Crud_model->listing('tbl_kategori');
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $data = [

            'kategori' => $kategori,
            'konfigurasi' => $konfigurasi,
        ];
        $this->load->view('master/kategori/cetak', $data, FALSE);
    }
}
