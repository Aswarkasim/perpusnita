<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    function listPeminjaman()
    {
        $this->db->select('tbl_peminjaman.*, 
                            tbl_buku.judul_buku, 
                            tbl_buku.kd_buku, 
                            tbl_anggota.nm_anggota')
            ->from('tbl_peminjaman')
            ->join('tbl_buku', 'tbl_buku.kd_buku = tbl_peminjaman.kd_buku', 'left')
            ->join('tbl_anggota', 'tbl_anggota.kd_anggota = tbl_peminjaman.kd_anggota', 'left');
        return $this->db->get()->result();
    }



    function listPeminjamanAnggota($kd_anggota)
    {
        $this->db->select('tbl_peminjaman.*, 
                            tbl_buku.judul_buku, 
                            tbl_buku.kd_buku, 
                            tbl_anggota.nm_anggota')
            ->from('tbl_peminjaman')
            ->join('tbl_buku', 'tbl_buku.kd_buku = tbl_peminjaman.kd_buku', 'left')
            ->join('tbl_anggota', 'tbl_anggota.kd_anggota = tbl_peminjaman.kd_anggota', 'left')
            ->where('tbl_peminjaman.kd_anggota', $kd_anggota);
        return $this->db->get()->result();
    }


    function listBuku()
    {
        $this->db->select('*')
            ->from('tbl_buku')
            ->where('jumlah>', '0');
        return $this->db->get()->result();
    }

    function cekPinjam($kd_anggota)
    {
        $this->db->select('*')
            ->from('tbl_peminjaman')
            ->where('kd_anggota', $kd_anggota)
            ->where('status_kembali !=', 'Kembali');
        return $this->db->get()->result();
    }

    function cetakListPeminjaman($transaksi = null, $dari = null, $sampai = null)
    {
        $this->db->select('tbl_peminjaman.*, 
                            tbl_buku.*, 
                            tbl_anggota.*')
            ->from('tbl_peminjaman')
            ->join('tbl_buku', 'tbl_buku.kd_buku = tbl_peminjaman.kd_buku', 'left')
            ->join('tbl_anggota', 'tbl_anggota.kd_anggota = tbl_peminjaman.kd_anggota', 'left')
            ->where('tbl_peminjaman.status_kembali', $transaksi)
            ->where('tbl_peminjaman.date_created >=', $dari)
            ->where('tbl_peminjaman.date_created <=', $sampai);
        return $this->db->get()->result();
    }
}

/* End of file ModelName.php */
