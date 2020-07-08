<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function index()
    {
        $kd_anggota = $this->session->userdata('kd_anggota');
        $data = $this->Crud_model->listingOne('tbl_anggota', 'kd_anggota', $kd_anggota);
        $data = [
            'profil'    => $data,
            'content' => 'user/profil/index'
        ];
        $this->load->view('layout/wrapper', $data);
    }

    public function edit()
    {

        $kd_anggota = $this->session->userdata('kd_anggota');
        $profil = $this->Crud_model->listingOne('tbl_anggota', 'kd_anggota', $kd_anggota);
        $i = $this->input;
        $valid = $this->form_validation;
        $valid->set_rules('nm_anggota', 'Nama Lengkap', 'required', ['required' => '%s tidak boleh kosong']);
        $valid->set_rules('agama', 'Agama', 'required', ['required' => '%s tidak boleh kosong']);
        $valid->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', ['required' => '%s tidak boleh kosong']);
        $valid->set_rules('no_telepon', 'Nomor HP', 'required', ['required' => '%s tidak boleh kosong']);


        if ($valid->run()) {
            if (!empty($_FILES['foto']['name'])) {
                $config['upload_path']   = './assets/uploads/images/anggota/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['max_size']      = '24000'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('foto')) {
                    $data = [
                        'profil'      => $profil,
                        'error'     => $this->upload->display_errors(),
                        'content'   => 'user/profil/edit'
                    ];
                    $this->load->view('layout/wrapper', $data, FALSE);
                } else {
                    if ($profil->foto != "") {
                        unlink('assets/uploads/anggota/' . $profil->foto);
                    }

                    $upload_data = ['uploads' => $this->upload->data()];

                    $data = [
                        'kd_anggota'       => $kd_anggota,
                        'nm_anggota'        => $i->post('nm_anggota'),
                        'agama'             => $i->post('agama'),
                        'kelamin'           => $i->post('kelamin'),
                        'tempat_lahir'      => $i->post('tempat_lahir'),
                        'tanggal_lahir'     => $i->post('tanggal_lahir'),
                        'alamat'            => $i->post('alamat'),
                        'no_telepon'        => $i->post('no_telepon'),
                        'foto'              => $upload_data['uploads']['file_name']
                    ];
                    $this->Crud_model->edit('tbl_anggota', 'kd_anggota', $kd_anggota, $data);
                    $this->session->set_flashdata('msg', 'Profil diubah');
                    redirect('user/profil');
                }
            } else {
                $data = [
                    'kd_anggota'       => $kd_anggota,
                    'nm_anggota'        => $i->post('nm_anggota'),
                    'agama'             => $i->post('agama'),
                    'kelamin'           => $i->post('kelamin'),
                    'tempat_lahir'      => $i->post('tempat_lahir'),
                    'tanggal_lahir'     => $i->post('tanggal_lahir'),
                    'alamat'            => $i->post('alamat'),
                    'no_telepon'        => $i->post('no_telepon')
                ];
                $this->Crud_model->edit('tbl_anggota', 'kd_anggota', $kd_anggota, $data);
                $this->session->set_flashdata('msg', 'Profil diubah');
                redirect('user/profil');
            }
        }
        $data = [
            'profil'      => $profil,
            'content'   => 'user/profil/edit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
