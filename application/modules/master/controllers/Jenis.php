<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Jenis extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in_admin();
    }


    public function index()
    {
        $tombol  = [
            'add'     => 'master/jenis/add',
            'edit'    => 'master/jenis/edit/',
            'delete'  => 'master/jenis/delete/'
        ];

        $jenis = $this->Crud_model->listing('tbl_jenis');
        $data = [

            'jenis' => $jenis,
            'tombol'   => $tombol,
            'content' => 'master/jenis/index'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $valid = $this->form_validation;
        $valid->set_rules('kd_jenis', 'Kode Kaategori', 'macthes[tbl_jenis.kd_jenis]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));
        $valid->set_rules('nm_jenis', 'Nama Kaategori', 'macthes[tbl_jenis.nm_jenis]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));


        if ($valid->run() === TRUE) {
            $this->index();
        } else {
            $i = $this->input;
            $data = [
                'nm_jenis'   => $i->post('nm_jenis'),
                'kd_jenis'   => $i->post('kd_jenis')
            ];
            $this->Crud_model->add('tbl_jenis', $data);
            $this->session->set_flashdata('msg', 'jenis berhasil ditambah');
            redirect('master/jenis');
        }
    }
    function edit($kd_jenis)
    {
        $valid = $this->form_validation;
        // $valid->set_rules('kd_jenis', 'Kode Kaategori', 'macthes[tbl_jenis.kd_jenis]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));
        // $valid->set_rules('nm_jenis', 'Nama Kaategori', 'macthes[tbl_jenis.nm_jenis]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));


        if ($valid->run() === TRUE) {
            $this->index();
        } else {
            $i = $this->input;
            $data = [
                'nm_jenis'   => $i->post('nm_jenis'),
                'kd_jenis'   => $i->post('kd_jenis')
            ];
            $this->Crud_model->edit('tbl_jenis', 'kd_jenis', $kd_jenis, $data);
            $this->session->set_flashdata('msg', 'jenis berhasil diedit');
            redirect('master/jenis');
        }
    }

    function delete($kd_jenis)
    {
        $this->Crud_model->delete('tbl_jenis', 'kd_jenis', $kd_jenis);
        $this->session->set_flashdata('msg', 'data telah dihapus');
        redirect('master/jenis');
    }

    function exportExcel()
    {


        $this->load->library("excel");

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Date Created", "Kode Jenis", "Nama Jenis");

        $column = 0;

        foreach ($table_columns as $field) {

            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

            $column++;
        }


        $data = $this->Crud_model->listing('tbl_jenis');


        $excel_row = 2;

        foreach ($data as $row) {

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->date_created);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->kd_jenis);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->nm_jenis);

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
        $jenis = $this->Crud_model->listing('tbl_jenis');
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $data = [

            'jenis' => $jenis,
            'konfigurasi' => $konfigurasi,
        ];
        $this->load->view('master/jenis/cetak', $data, FALSE);
    }
}
