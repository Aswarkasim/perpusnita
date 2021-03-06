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
            'kd_anggota',
            'Kode Anggota',
            'required',
            array('required' => '%s harus diisi')
        );
        $valid->set_rules(
            'password',
            'Password',
            'required|min_length[6]|max_length[10]',
            array(
                'required'     => 'Password harus diisi',
                'min_length'  => 'Password minimal 6 karakter',
                'max_length' => '%s maksimal 8 karakter'
            )
        );

        if ($valid->run() === FALSE) {
            $data = array(
                'content'   => 'user/auth/login'
            );
            $this->load->view('layout/wrapper', $data);
        } else {

            $i          = $this->input;
            $kd_anggota      = $i->post('kd_anggota');
            $password   = $i->post('password');
            $cek_login  = $this->UM->login($kd_anggota, $password);
            //print_r($email); die;

            if (!empty($cek_login) == 1) {

                if ($cek_login->is_active == 1) {
                    $s = $this->session;
                    $s->set_userdata('kd_anggota', $cek_login->kd_anggota);
                    $s->set_userdata('username', $cek_login->username);
                    $s->set_userdata('nm_anggota', $cek_login->nm_anggota);

                    redirect(base_url('home'), 'refresh');
                } else {
                    $data = array(
                        'error'     => 'Akun anda belum aktif. Silakan hubungi admin perpustakaan untuk mengaktifkan',
                        'content'   => 'user/auth/login'
                    );
                    $this->load->view('layout/wrapper', $data);
                }
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
        $is_username = '%s ' . post('username') . ' telah ada, silakan masukkan username yang lain';
        $is_email = '%s ' . post('email') . ' telah ada, silakan masukkan %s yang lain';
        $valid = $this->form_validation;
        $valid->set_rules('kd_anggota', 'NIS', 'required|is_unique[tbl_anggota.kd_anggota]|max_length[7]', ['max_length' => 'NIS Maksimal 7 karakter', 'required' => $required, 'is_unique' => 'NIS Telah terdaftar']);
        $valid->set_rules('nm_anggota', 'Nama Lengkap', 'required', array('required' => $required));
        $valid->set_rules('jurusan', 'Jurusan', 'required', array('required' => $required));
        $valid->set_rules('kelas', 'Kelas', 'required', array('required' => $required));
        $valid->set_rules('tanggal_lahir', 'Tanggal lahir', 'required', array('required' => $required));
        // $valid->set_rules('username', 'Username', 'required|is_unique[tbl_anggota.username]', array('required' => $required, 'is_unique' => $is_username));
        $valid->set_rules('password', 'Password', 'required|min_length[6]|max_length[10]', array('required' => $required, 'is_unique' => $is_email, 'min_length' => '% minimal 6 karakter', 'max_length' => '%s maksimal 8 karakter'));
        $valid->set_rules('re_password', 'Konfirmasi Password', 'required|matches[password]', array('required' => $required, 'matches' => '%s password yang anda masukkan tidak sama'));

        if ($valid->run() === FALSE) {
            $data = [
                'content' => 'user/auth/register'
            ];
            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = [
                'kd_anggota'        => $i->post('kd_anggota'),
                // 'username'          => $i->post('username'),
                'nm_anggota'        => $i->post('nm_anggota'),
                'agama'             => $i->post('agama'),
                'kelamin'           => $i->post('kelamin'),
                'tempat_lahir'      => $i->post('tempat_lahir'),
                'jurusan'      => $i->post('jurusan'),
                'kelas'      => $i->post('tempat_lahir'),
                'tanggal_lahir'     => $i->post('tanggal_lahir'),
                'alamat'            => $i->post('alamat'),
                'jurusan'         => $i->post('jurusan'),
                'kelas'         => $i->post('kelas'),
                'no_telepon'        => $i->post('no_telepon'),
                'password'          => sha1($i->post('password')),
                'is_active'         =>  0,
            ];
            $this->Crud_model->add('tbl_anggota', $data);
            $this->session->set_flashdata('msg', 'Registrasi selesai. silakan hubungi admin untuk mengaktifkan akun');
            redirect('user/auth', 'refersh');
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
