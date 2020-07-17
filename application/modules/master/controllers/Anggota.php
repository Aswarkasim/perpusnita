<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in_admin();
    }


    public function index()
    {
        $tombol  = [
            'add'     => 'master/anggota/add',
            'edit'    => 'master/anggota/edit/',
            'delete'  => 'master/anggota/delete/',
            'is_active'  => 'master/anggota/is_active/'
        ];

        $anggota = $this->Crud_model->listing('tbl_anggota', 'date_created', 'DESC');
        $data = [

            'anggota' => $anggota,
            'tombol'   => $tombol,
            'content' => 'master/anggota/index'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function is_active($kd_anggota, $is)
    {
        $data = [
            'is_active' => $is
        ];
        $this->Crud_model->edit('tbl_anggota', 'kd_anggota', $kd_anggota, $data);
        $this->session->set_flashdata('msg', 'Akun anggota telah diaktifkan');
        redirect('master/anggota', 'refresh');
    }
    public function detail($kd_anggota)
    {

        $anggota = $this->Crud_model->listingOne('tbl_anggota', 'kd_anggota', $kd_anggota);
        $data = [
            'anggota' => $anggota,
            'content' => 'master/anggota/detail'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function add()
    {
        $required = '%s tidak boleh kosong';
        $valid = $this->form_validation;
        $valid->set_rules('nm_anggota', 'Nama Anggota', 'required', ['required' => $required]);
        $valid->set_rules('tempat_lahir', 'Tempat Lahir', 'required', ['required' => $required]);
        $valid->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', ['required' => $required]);
        $valid->set_rules('agama', 'Agama', 'required', ['required' => $required]);
        $valid->set_rules('kelamin', 'Jenis Kelamin', 'required', ['required' => $required]);
        $valid->set_rules('alamat', 'Alamat', 'required', ['required' => $required]);
        $valid->set_rules('no_telepon', 'NO. Telepon', 'required', ['required' => $required]);
        if ($valid->run()) {
            echo $this->input->post('foto');
            if (!empty($_FILES['foto']['name'])) {
                $config['upload_path']   = './assets/uploads/images/anggota/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['max_size']      = '24000'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('foto')) {
                    $data = [
                        'error'     => $this->upload->display_errors(),
                        'content'   => 'master/anggota/add'
                    ];
                    $this->load->view('admin/layout/wrapper', $data, FALSE);
                } else {
                    $upload_data = ['uploads' => $this->upload->data()];

                    $i = $this->input;
                    $data = [
                        'kd_anggota'    => 'AG' . random_string('numeric', '15'),
                        'nm_anggota'    => $i->post('nm_anggota'),
                        'tempat_lahir'  => $i->post('tempat_lahir'),
                        'tanggal_lahir' => $i->post('tanggal_lahir'),
                        'agama'         => $i->post('agama'),
                        'alamat'         => $i->post('alamat'),
                        'kelamin'       => $i->post('kelamin'),
                        'no_telepon'    => $i->post('no_telepon'),
                        'foto'          => $upload_data['uploads']['file_name']
                    ];
                    $this->Crud_model->add('tbl_anggota', $data);
                    $this->session->set_flashdata('msg', 'Anggota ditambahkan');
                    redirect('master/anggota');
                }
            }
        }
        $data = [
            'content'   => 'master/anggota/add'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    function edit($kd_anggota)
    {
        $anggota =  $this->Crud_model->listingOne('tbl_anggota', 'kd_anggota', $kd_anggota);
        $required = '%s tidak boleh kosong';
        $valid = $this->form_validation;
        $valid->set_rules('nm_anggota', 'Nama Anggota', 'required', ['required' => $required]);
        $valid->set_rules('tempat_lahir', 'Tempat Lahir', 'required', ['required' => $required]);
        $valid->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', ['required' => $required]);
        $valid->set_rules('agama', 'Agama', 'required', ['required' => $required]);
        $valid->set_rules('kelamin', 'Jenis Kelamin', 'required', ['required' => $required]);
        $valid->set_rules('alamat', 'Alamat', 'required', ['required' => $required]);
        $valid->set_rules('no_telepon', 'NO. Telepon', 'required', ['required' => $required]);
        if ($valid->run()) {
            echo $this->input->post('foto');
            if (!empty($_FILES['foto']['name'])) {
                $config['upload_path']   = './assets/uploads/images/anggota/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['max_size']      = '24000'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('foto')) {
                    $data = [
                        'anggota'       => $anggota,
                        'error'         => $this->upload->display_errors(),
                        'content'       => 'master/anggota/edit'
                    ];
                    $this->load->view('admin/layout/wrapper', $data, FALSE);
                } else {
                    if ($anggota->foto != '') {
                        unlink('assets/uploads/images/anggota/' . $anggota->foto);
                    }
                    $upload_data = ['uploads' => $this->upload->data()];

                    $i = $this->input;
                    $data = [
                        'kd_anggota'    => 'AG' . random_string('numeric', '15'),
                        'nm_anggota'    => $i->post('nm_anggota'),
                        'tempat_lahir'  => $i->post('tempat_lahir'),
                        'tanggal_lahir' => $i->post('tanggal_lahir'),
                        'agama'         => $i->post('agama'),
                        'alamat'         => $i->post('alamat'),
                        'kelamin'       => $i->post('kelamin'),
                        'no_telepon'    => $i->post('no_telepon'),
                        'foto'          => $upload_data['uploads']['file_name']
                    ];
                    $this->Crud_model->edit('tbl_anggota', 'kd_anggota', $kd_anggota, $data);
                    $this->session->set_flashdata('msg', 'Anggota ditambahkan');
                    redirect('master/anggota');
                }
            } else {
                $i = $this->input;
                $data = [
                    'kd_anggota'    => 'AG' . random_string('numeric', '15'),
                    'nm_anggota'    => $i->post('nm_anggota'),
                    'tempat_lahir'  => $i->post('tempat_lahir'),
                    'tanggal_lahir' => $i->post('tanggal_lahir'),
                    'agama'         => $i->post('agama'),
                    'alamat'         => $i->post('alamat'),
                    'kelamin'       => $i->post('kelamin'),
                    'no_telepon'    => $i->post('no_telepon')
                ];
                $this->Crud_model->edit('tbl_anggota', 'kd_anggota', $kd_anggota, $data);
                $this->session->set_flashdata('msg', 'Anggota ditambahkan');
                redirect('master/anggota');
            }
        }
        $data = [
            'anggota'       => $anggota,
            'content'       => 'master/anggota/edit'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function delete($kd_anggota)
    {
        $anggota = $this->Crud_model->listingOne('tbl_anggota', 'kd_anggota', $kd_anggota);
        if ($anggota->foto != '') {
            unlink('assets/uploads/images/anggota/' . $anggota->foto);
        }
        $this->Crud_model->delete('tbl_anggota', 'kd_anggota', $kd_anggota);
        $this->session->set_flashdata('msg', 'data telah dihapus');
        redirect('master/anggota');
    }

    function exportExcel()
    {


        $this->load->library("excel");

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Date Created", "Kode Anggota", "Nama Anggota", "Jenis Kelamin", "Agama", "Tempat Lahir", "Tanggal Lahir", "Alamat", "No Telepon", "Status Pinjam");

        $column = 0;

        foreach ($table_columns as $field) {

            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

            $column++;
        }


        $data = $this->Crud_model->listing('tbl_anggota', 'date_created', 'DESC');


        $excel_row = 2;

        foreach ($data as $row) {

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->date_created);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->kd_anggota);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->nm_anggota);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->kelamin);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->agama);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->tempat_lahir);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->tanggal_lahir);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->alamat);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->no_telepon);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->status_pinjam);

            $excel_row++;
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

        header('Content-Type: application/vnd.ms-excel');

        header('Content-Disposition: attachment;filename="DataAnggota.xls"');

        ob_end_clean();
        ob_start();
        $object_writer->save('php://output');
    }

    function cetak()
    {
        $anggota = $this->Crud_model->listing('tbl_anggota');
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $data = [

            'anggota' => $anggota,
            'konfigurasi' => $konfigurasi,
        ];
        $this->load->view('master/anggota/cetak', $data, FALSE);
    }
}
