<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function index()
    {
        $this->load->model('user/User_model', 'UM');

        if ($this->session->userdata('id_user')) {
            redirect('home');
        }
        $valid = $this->form_validation;

        $valid->set_rules(
            'username',
            'Username',
            'required',
            array('required' => '%s harus diisi')
        );
        $valid->set_rules(
            'password',
            'Password',
            'required|min_length[6]',
            array(
                'required'     => 'Password harus diisi',
                'min_length'  => 'Password minimal 6 karakter'
            )
        );

        if ($valid->run() === FALSE) {
            $data = array(
                'content'   => 'user/auth/login'
            );
            $this->load->view('layout/wrapper', $data);
        } else {

            $i          = $this->input;
            $username      = $i->post('username');
            $password   = $i->post('password');
            $cek_login  = $this->UM->login($username, $password);
            //print_r($email); die;

            if (!empty($cek_login) == 1) {
                $s = $this->session;
                $s->set_userdata('kd_anggota', $cek_login->kd_anggota);
                $s->set_userdata('username', $cek_login->username);
                $s->set_userdata('nm_anggota', $cek_login->nm_anggota);

                redirect(base_url('home'), 'refresh');
            } else {
                $data = array(
                    'error'     => 'Email atau password salah',
                    'content'   => 'user/auth/login'
                );
                $this->load->view('layout/wrapper', $data);
            }
        }
    }

    public function register()
    {
        $this->load->helper('string');


        $required = '%s tidak boleh kosong';
        $is_username = '%s ' . post('username') . ' telah ada, silakan masukkan %s yang lain';
        $is_email = '%s ' . post('email') . ' telah ada, silakan masukkan %s yang lain';
        $valid = $this->form_validation;
        $valid->set_rules('namalengkap', 'Nama Lengkap', 'required', array('required' => $required));
        $valid->set_rules('tanggal_lahir', 'Tanggal lahir', 'required', array('required' => $required));
        $valid->set_rules('username', 'Username', 'required|is_unique[tbl_user.username]', array('required' => $required, 'is_unique' => $is_username));
        $valid->set_rules('email', 'email', 'required|is_unique[tbl_user.email]|valid_email', array('required' => $required, 'is_unique' => $is_email, 'valid_email' => '%s yang anda  masukkan tidak valid'));
        $valid->set_rules('password', 'Password', 'required', array('required' => $required, 'is_unique' => $is_email));
        $valid->set_rules('re_password', 'Konfirmasi Password', 'required|matches[password]', array('required' => $required, 'matches' => '%s password yang anda masukkan tidak sama'));

        if ($valid->run() === FALSE) {
            $data = [
                'content' => 'user/auth/register'
            ];
            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = [
                'id_user'       => random_string('numeric', '15'),
                'namalengkap'   => $i->post('namalengkap'),
                'username'      => $i->post('username'),
                'nim'           => $i->post('nim'),
                'nohp'           => $i->post('nohp'),
                'tanggal_lahir' => $i->post('tanggal_lahir'),
                'email'         => $i->post('email'),
                'is_ptik'       => $i->post('is_ptik'),
                'password'      => sha1($i->post('password')),
                'is_active'     =>  1,
            ];
            $this->Crud_model->add('tbl_user', $data);
            $this->session->set_flashdata('msg', 'ditambah');
            redirect('home/auth', 'refersh');
        }
    }

    function logout()
    {
        // $s = $this->session;
        // $s->unset_userdata('id_user');
        // $s->unset_userdata('email');
        // $s->unset_userdata('username');
        // $s->unset_userdata('namalengkap');
        session_destroy();
        redirect(base_url('home'), 'refresh');
    }
}
