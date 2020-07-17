<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('Admin_model', 'AM');
    }


    public function index()
    {


        $peminjaman = $this->AM->listPeminjaman();
        $data = [
            'add'      => 'admin/peminjaman/add',
            'edit'      => 'admin/peminjaman/edit/',
            'delete'      => 'admin/peminjaman/delete/',
            'pinjam'      => 'admin/peminjaman/cek_kd/',
            'peminjaman'      => $peminjaman,
            'content'   => 'admin/peminjaman/index'
        ];

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function cek_kd()
    {
        $kd_anggota = $this->input->post('kd_anggota');

        redirect('admin/peminjaman/pinjam/' . $kd_anggota, 'refresh');
    }

    function pinjam($kd_anggota)
    {
        $anggota  = $this->Crud_model->listingOne('tbl_anggota', 'kd_anggota', $kd_anggota);
        $buku = $this->AM->listBuku();
        $peminjaman = $this->AM->listPeminjamanAnggota($kd_anggota);
        $data = [
            'status'       => 'admin/peminjaman/status/',
            'add'       => 'admin/peminjaman/add',
            'edit'      => 'admin/peminjaman/edit/',
            'delete'    => 'admin/peminjaman/delete/',
            'anggota'   => $anggota,
            'buku'      => $buku,
            'peminjaman' => $peminjaman,
            'content'   => 'admin/peminjaman/add_detail'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function  simpan()
    {
        $i = $this->input;



        $data = [
            'kd_anggota'        => $i->post('kd_anggota'),
            'id_user'           => $i->post('id_user'),
            'kd_buku'           => $i->post('kd_buku'),
            'tanggal_pinjam'    => $i->post('tgl_pinjam'),
            'tanggal_kembali'   => $i->post('tgl_kembali'),
            'keterangan'        => $i->post('keterangan')

        ];


        $dataPinjam = [
            'status_pinjam' => 'Pinjam'
        ];

        $buku = $this->Crud_model->listingOne('tbl_buku', 'kd_buku', $data['kd_buku']);
        $dataJumlah = [
            'jumlah' => $buku->jumlah - 1
        ];
        $this->Crud_model->add('tbl_peminjaman', $data);
        $this->Crud_model->edit('tbl_buku', 'kd_buku', $data['kd_buku'], $dataJumlah);
        $this->Crud_model->edit('tbl_anggota', 'kd_anggota', $data['kd_anggota'], $dataPinjam);
        $this->session->set_flashdata('msg', 'Data disimpan');
        redirect('admin/peminjaman/pinjam/' . $data['kd_anggota'], 'refresh');
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

        if ($status == 'Kembali') {
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
        $this->Crud_model->edit('tbl_peminjaman', 'kd_peminjaman', $kd_pinjam, $data);

        $cek_pinjam = $this->AM->cekPinjam($kd_anggota);

        if (empty($cek_pinjam)) {
            $dataPinjam = [
                'status_pinjam' => 'Bebas'
            ];
            $this->Crud_model->edit('tbl_anggota', 'kd_anggota', $kd_anggota, $dataPinjam);
        }

        $this->session->set_flashdata('msg', 'Buku dikembalikan');
        redirect('admin/peminjaman/pinjam/' . $kd_anggota, 'refresh');
    }

    function delete($id_peminjaman, $kd_anggota)
    {
        $this->Crud_model->delete('tbl_peminjaman', 'kd_peminjaman', $id_peminjaman);
        $this->session->set_flashdata('msg', 'data dihapus');
        redirect('admin/peminjaman/pinjam/' . $kd_anggota, 'refresh');
    }

    function laporan()
    {
        $valid = $this->form_validation;

        $valid->set_rules('bantu', 'Nama User', 'required');

        if ($valid->run() === FALSE) {
            $data = [
                'content'   => 'admin/peminjaman/laporan'
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
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->tangga_peminjaman);
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
        $peminjaman = $this->AM->cetakListPeminjaman($transaksi, $dari, $sampai);
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $title = '';
        if ($transaksi == 'Kembali') {
            $title = 'Pengembalian';
        } else {
            $title = 'Peminjaman';
        }
        $data = [
            'title'     => $title,
            'peminjaman' => $peminjaman,
            'konfigurasi' => $konfigurasi,
        ];
        $this->load->view('admin/peminjaman/cetak', $data, FALSE);
    }
}
