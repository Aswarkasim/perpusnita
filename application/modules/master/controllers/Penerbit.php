<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Penerbit extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        is_logged_in_admin();
    }


    public function index()
    {
        $tombol  = [
            'add'     => 'master/penerbit/add',
            'edit'    => 'master/penerbit/edit/',
            'delete'  => 'master/penerbit/delete/'
        ];

        $penerbit = $this->Crud_model->listing('tbl_penerbit');
        $data = [

            'penerbit' => $penerbit,
            'tombol'   => $tombol,
            'content' => 'master/penerbit/index'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $valid = $this->form_validation;
        $valid->set_rules('kd_penerbit', 'Kode Kaategori', 'macthes[tbl_penerbit.kd_penerbit]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));
        $valid->set_rules('nm_penerbit', 'Nama Kaategori', 'macthes[tbl_penerbit.nm_penerbit]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));


        if ($valid->run() === TRUE) {
            $this->index();
        } else {
            $i = $this->input;
            $data = [
                'nm_penerbit'   => str_replace(' ', '', $i->post('kd_penerbit')),
                'kd_penerbit'   => $i->post('kd_penerbit')
            ];
            $this->Crud_model->add('tbl_penerbit', $data);
            $this->session->set_flashdata('msg', 'penerbit berhasil ditambah');
            redirect('master/penerbit');
        }
    }
    function edit($kd_penerbit)
    {
        $valid = $this->form_validation;
        // $valid->set_rules('kd_penerbit', 'Kode Kaategori', 'macthes[tbl_penerbit.kd_penerbit]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));
        // $valid->set_rules('nm_penerbit', 'Nama Kaategori', 'macthes[tbl_penerbit.nm_penerbit]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));


        if ($valid->run() === TRUE) {
            $this->index();
        } else {
            $i = $this->input;
            $data = [
                'nm_penerbit'   => $i->post('nm_penerbit'),
                'kd_penerbit'   => $i->post('kd_penerbit')
            ];
            $this->Crud_model->edit('tbl_penerbit', 'kd_penerbit', $kd_penerbit, $data);
            $this->session->set_flashdata('msg', 'penerbit berhasil diedit');
            redirect('master/penerbit');
        }
    }

    function delete($kd_penerbit)
    {
        $this->Crud_model->delete('tbl_penerbit', 'kd_penerbit', $kd_penerbit);
        $this->session->set_flashdata('msg', 'data telah dihapus');
        redirect('master/penerbit');
    }

    function exportExcel()
    {


        $this->load->library("excel");

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Date Created", "Kode Penerbit", "Nama Penerbit");

        $column = 0;

        foreach ($table_columns as $field) {

            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

            $column++;
        }


        $data = $this->Crud_model->listing('tbl_penerbit');


        $excel_row = 2;

        foreach ($data as $row) {

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->date_created);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->kd_penerbit);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->nm_penerbit);

            $excel_row++;
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

        header('Content-Type: application/vnd.ms-excel');

        header('Content-Disposition: attachment;filename="DataPenerbit.xls"');

        ob_end_clean();
        ob_start();
        $object_writer->save('php://output');
    }


    function cetak()
    {
        $penerbit = $this->Crud_model->listing('tbl_penerbit');
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $data = [

            'penerbit' => $penerbit,
            'konfigurasi' => $konfigurasi,
        ];
        $this->load->view('master/penerbit/cetak', $data, FALSE);
    }
}
