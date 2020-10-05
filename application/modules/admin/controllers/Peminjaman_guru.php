<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman_guru extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        is_logged_in_admin();

        $this->load->model('Admin_model', 'AM');
    }


    public function index()
    {
        $peminjaman_guru = $this->AM->listPeminjamanGuru();

        $data = [
            'add'      => 'admin/peminjaman_guru/add',
            'edit'      => 'admin/peminjaman_guru/edit/',
            'delete'      => 'admin/peminjaman_guru/delete/',
            'pinjam'      => 'admin/peminjaman_guru/cek_kd/',
            'peminjaman_guru'      => $peminjaman_guru,
            'content'   => 'admin/peminjaman_guru/index'
        ];

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $buku = $this->AM->listBuku();

        $valid = $this->form_validation;

        $valid->set_rules('nama_guru', 'Nama Peminjam', 'required');
        $valid->set_rules('tgl_pinjam', 'Tanggal Pinjam', 'required');
        $valid->set_rules('jumlah', 'Jumlah', 'required');
        $valid->set_rules('tgl_kembali', 'Tanggal Harus Kembali', 'required');

        if ($valid->run() === FALSE) {
            $data = [
                'buku'      => $buku,
                'content'  => 'admin/peminjaman_guru/add'
            ];
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;

            $data = [
                'nama_guru'        => $i->post('nama_guru'),
                'kd_buku'           => $i->post('kd_buku'),
                'id_user'           => $i->post('id_user'),
                'tanggal_pinjam'    => $i->post('tgl_pinjam'),
                'tanggal_harus_kembali'   => $i->post('tgl_kembali'),
                'jumlah'        => $i->post('jumlah'),
                'keterangan'        => $i->post('keterangan')

            ];

            $buku = $this->Crud_model->listingOne('tbl_buku', 'kd_buku', $data['kd_buku']);
            $dataJumlah = [
                'jumlah' => $buku->jumlah - $data['jumlah']
            ];
            $this->Crud_model->add('tbl_peminjaman_guru', $data);
            $this->Crud_model->edit('tbl_buku', 'kd_buku', $data['kd_buku'], $dataJumlah);
            $this->session->set_flashdata('msg', 'Data disimpan');
            redirect('admin/peminjaman_guru/add', 'refresh');
        }
    }


    function edit($kd_peminjaman_guru)
    {
        $buku = $this->AM->listBuku();
        $pinjam = $this->Crud_model->listingOne('tbl_peminjaman_guru', 'kd_peminjaman_guru', $kd_peminjaman_guru);

        $valid = $this->form_validation;

        $valid->set_rules('nama_guru', 'Nama Peminjam', 'required');
        $valid->set_rules('tgl_pinjam', 'Tanggal Pinjam', 'required');
        $valid->set_rules('jumlah', 'Jumlah', 'required');
        $valid->set_rules('tgl_kembali', 'Tanggal Harus Kembali', 'required');

        if ($valid->run() === FALSE) {
            $data = [
                'buku'      => $buku,
                'pinjam'      => $pinjam,
                'content'  => 'admin/peminjaman_guru/edit'
            ];
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;

            $data = [
                'kd_peminjaman_guru'        => $kd_peminjaman_guru,
                'nama_guru'          => $i->post('nama_guru'),
                'kd_buku'               => $i->post('kd_buku'),
                'id_user'           => $i->post('id_user'),
                'tanggal_pinjam'    => $i->post('tgl_pinjam'),
                'tanggal_harus_kembali'   => $i->post('tgl_kembali'),
                'jumlah'        => $i->post('jumlah'),
                'keterangan'        => $i->post('keterangan')

            ];

            $buku = $this->Crud_model->listingOne('tbl_buku', 'kd_buku', $data['kd_buku']);

            $resetJumlah = [
                'jumlah' => $buku->jumlah + $pinjam->jumlah
            ];
            $this->Crud_model->edit('tbl_buku', 'kd_buku', $data['kd_buku'], $resetJumlah);

            $buku = $this->Crud_model->listingOne('tbl_buku', 'kd_buku', $data['kd_buku']);
            $dataJumlah = [
                'jumlah' => $buku->jumlah - $data['jumlah']
            ];
            $this->Crud_model->edit('tbl_peminjaman_guru', 'kd_peminjaman_guru', $kd_peminjaman_guru, $data);
            $this->Crud_model->edit('tbl_buku', 'kd_buku', $data['kd_buku'], $dataJumlah);
            $this->session->set_flashdata('msg', 'Data diedit');
            redirect('admin/peminjaman_guru/edit/' . $kd_peminjaman_guru, 'refresh');
        }
    }

    public function hilang()
    {
        $peminjaman_guru = $this->AM->listHilang();
        $data = [
            'add'      => 'admin/peminjaman_guru/add',
            'edit'      => 'admin/peminjaman_guru/edit/',
            'delete'      => 'admin/peminjaman_guru/delete/',
            'pinjam'      => 'admin/peminjaman_guru/cek_kd/',
            'peminjaman_guru'      => $peminjaman_guru,
            'content'   => 'admin/peminjaman_guru/hilang'
        ];

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function cek_kd()
    {
        $kd_anggota = $this->input->post('kd_anggota');
        $data = $this->Crud_model->listingOne('tbl_anggota', 'kd_anggota', $kd_anggota);
        if ($data) {
            redirect('admin/peminjaman_guru/pinjam/' . $kd_anggota, 'refresh');
        } else {
            $this->session->set_flashdata('msg_er', 'Data tidak ditemukan');
            redirect('admin/peminjaman_guru/index');
        }
    }

    function pinjam($kd_anggota)
    {
        $anggota  = $this->Crud_model->listingOne('tbl_anggota', 'kd_anggota', $kd_anggota);
        $buku = $this->AM->listBuku();
        $peminjaman_guru = $this->AM->listPeminjamanAnggota($kd_anggota);
        $data = [
            'status'       => 'admin/peminjaman_guru/status/',
            'add'       => 'admin/peminjaman_guru/add',
            'edit'      => 'admin/peminjaman_guru/edit/',
            'delete'    => 'admin/peminjaman_guru/delete/',
            'anggota'   => $anggota,
            'buku'      => $buku,
            'peminjaman_guru' => $peminjaman_guru,
            'content'   => 'admin/peminjaman_guru/add_detail'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }



    public function status()
    {
        $kd_pinjam = $this->uri->segment(4);
        $kd_anggota = $this->uri->segment(5);
        $status = $this->uri->segment(6);
        $kd_buku = $this->uri->segment(7);


        $data = [
            'tanggal_kembali' => date('ymd'),
            'status_kembali' => $status
        ];
        $buku = $this->Crud_model->listingOne('tbl_buku', 'kd_buku', $kd_buku);

        if (($status == 'Kembali') || $status == 'Terlambat') {
            $jumlahBuku =  $buku->jumlah + 1;
        } else if ($status == 'Hilang') {
            $jumlahBuku = $buku->jumlah - 1;
            $dataPinjam = [
                'status_pinjam' => 'Pinjam'
            ];
            $this->Crud_model->edit('tbl_anggota', 'kd_anggota', $kd_anggota, $dataPinjam);
        }
        $dataJumlah = [
            'jumlah' => $jumlahBuku
        ];



        $this->Crud_model->edit('tbl_buku', 'kd_buku', $kd_buku, $dataJumlah);
        $this->Crud_model->edit('tbl_peminjaman_guru', 'kd_peminjaman_guru', $kd_pinjam, $data);

        $cek_pinjam = $this->AM->cekPinjam($kd_anggota);

        if (empty($cek_pinjam)) {
            $dataPinjam = [
                'status_pinjam' => 'Bebas'
            ];
            $this->Crud_model->edit('tbl_anggota', 'kd_anggota', $kd_anggota, $dataPinjam);
        }

        $this->session->set_flashdata('msg', 'Buku dikembalikan');
        redirect('admin/peminjaman_guru/pinjam/' . $kd_anggota, 'refresh');
    }

    function delete($id_peminjaman_guru)
    {
        $this->Crud_model->delete('tbl_peminjaman_guru', 'kd_peminjaman_guru', $id_peminjaman_guru);
        $this->session->set_flashdata('msg', 'data dihapus');
        redirect('admin/peminjaman_guru/', 'refresh');
    }

    function laporan()
    {
        $valid = $this->form_validation;

        $valid->set_rules('bantu', 'Nama User', 'required');

        if ($valid->run() === FALSE) {
            $data = [
                'content'   => 'admin/peminjaman_guru/laporan'
            ];
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $transaksi = $i->post('transaksi');
            $dari = $i->post('dari');
            $sampai = $i->post('sampai');

            if (isset($_POST['cetak'])) {
                $this->cetak($transaksi, $dari, $sampai);
            } else if (isset($_POST['excel'])) {
                $this->exportExcel($transaksi, $dari, $sampai);
            };
        }
    }

    private function exportExcel($transaksi, $dari, $sampai)
    {
        $this->load->library("excel");

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Date Created", "Nama Anggota", "Judul Buku", "Tanggal Peminjaman", "Tanggal Harus Kembali", "Tanggal Kembali", "Status Kembali");

        $column = 0;

        foreach ($table_columns as $field) {

            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

            $column++;
        }


        $data = $this->AM->cetakListPeminjaman($transaksi, $dari, $sampai);


        $excel_row = 2;

        foreach ($data as $row) {

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->date_created);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->nama_anggota);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->judul_buku);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->tangga_peminjaman_guru);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->tanggal_harus_kembali);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->tanggal_kembali);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->status_kembali);

            $excel_row++;
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

        header('Content-Type: application/vnd.ms-excel');

        header('Content-Disposition: attachment;filename="DataBuku.xls"');

        ob_end_clean();
        ob_start();
        $object_writer->save('php://output');
    }


    function cetak($transaksi, $dari, $sampai)
    {
        $peminjaman_guru = $this->AM->cetakListPeminjaman($transaksi, $dari, $sampai);
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $title = '';
        if ($transaksi == 'Kembali') {
            $title = 'Pengembalian';
        } else {
            $title = 'Peminjaman';
        }
        $data = [
            'title'     => $title,
            'peminjaman_guru' => $peminjaman_guru,
            'konfigurasi' => $konfigurasi,
        ];
        $this->load->view('admin/peminjaman_guru/cetak', $data, FALSE);
    }
}
