<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Penerbit extends CI_Controller
{

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
                'nm_penerbit'   => $i->post('nm_penerbit'),
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
}
