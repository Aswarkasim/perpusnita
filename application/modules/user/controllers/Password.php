<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Password extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }


    public function index()
    {
        $kd_anggota = $this->session->userdata('kd_anggota');
        $user = $this->Crud_model->listingOne('tbl_anggota', 'kd_anggota', $kd_anggota);
        // print_r($user);
        // die;

        $valid = $this->form_validation;

        $valid->set_rules('password_lama', 'Password Lama', 'required');
        $valid->set_rules('password', 'Password', 'required');
        $valid->set_rules('re_password', 'Password', 'required|matches[password]');

        if ($valid->run() === FALSE) {
            $data = [
                'user'    => $user,
                'content'   => 'user/profil/password'
            ];
            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;

            $pass = sha1($i->post('password_lama'));

            if ($pass != $user->password) {
                $data = [
                    'error'     => 'Password lama yang dimasukkan tidak sama',
                    'content'   => 'user/profil/password'
                ];
                $this->load->view('layout/wrapper', $data, FALSE);
            } else {

                $data = [
                    'password'      => sha1($i->post('password'))
                ];
                $this->Crud_model->edit('tbl_anggota', 'kd_anggota', $kd_anggota, $data);
                $this->load->view('layout/wrapper', $data, FALSE);
                $this->session->set_flashdata('msg', 'Password diubah');
                redirect('user/password', 'refresh');
            }
        }
    }
}

/* End of file Password.php */
