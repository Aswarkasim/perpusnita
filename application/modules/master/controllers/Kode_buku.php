<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kode_buku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in_admin();
    }


    public function index()
    {
        $tombol  = [
            'add'     => 'master/kode_buku/add',
            'edit'    => 'master/kode_buku/edit/',
            'delete'  => 'master/kode_buku/delete/'
        ];

        $kode_buku = $this->Crud_model->listing('tbl_kode_buku');
        $data = [

            'kode_buku' => $kode_buku,
            'tombol'   => $tombol,
            'content' => 'master/kode_buku/index'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function add()
    {

        $i = $this->input;
        $data = [
            'kode_buku'   => $i->post('kode_buku')
        ];
        $this->Crud_model->add('tbl_kode_buku', $data);
        $this->session->set_flashdata('msg', 'kode berhasil ditambah');
        redirect('master/kode_buku');
    }
    function edit($kode_buku)
    {
        $i = $this->input;
        $data = [
            'kode_buku'   => $i->post('kode_buku')
        ];
        $this->Crud_model->edit('tbl_kode_buku', 'kode_buku', $kode_buku, $data);
        $this->session->set_flashdata('msg', 'kode berhasil diedit');
        redirect('master/kode_buku');
    }

    function delete($kode_buku)
    {
        $this->Crud_model->delete('tbl_kode_buku', 'kode_buku', $kode_buku);
        $this->session->set_flashdata('msg', 'data telah dihapus');
        redirect('master/kode_buku');
    }

    function exportExcel()
    {


        $this->load->library("excel");

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Date Created", "Kode Kode", "Nama Kode");

        $column = 0;

        foreach ($table_columns as $field) {

            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

            $column++;
        }


        $data = $this->Crud_model->listing('tbl_kode_buku');


        $excel_row = 2;

        foreach ($data as $row) {

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->date_created);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->kode_buku);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->nm_kode);

            $excel_row++;
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

        header('Content-Type: application/vnd.ms-excel');

        header('Content-Disposition: attachment;filename="DataKode.xls"');

        ob_end_clean();
        ob_start();
        $object_writer->save('php://output');
    }


    function cetak()
    {
        $kode_buku = $this->Crud_model->listing('tbl_kode_buku');
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $data = [

            'kode' => $kode_buku,
            'konfigurasi' => $konfigurasi,
        ];
        $this->load->view('master/kode_buku/cetak', $data, FALSE);
    }
}
