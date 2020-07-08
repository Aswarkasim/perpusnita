<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman_model extends CI_Model
{
    public function list()
    {
        $this->db->select('tbl_peminjaman.*, 
                           tbl_buku.judul_buku,
                           tbl_anggota.nm_anggota')
            ->from('tbl_peminjaman')
            ->join('tbl_buku', 'tbl_buku.kd_buku = tbl_peminjaman.kd_buku', 'left')
            ->join('tbl_anggota', 'tbl_anggota.kd_anggota = tbl_peminjaman.kd_anggota', 'left');
        return $this->db->get()->result();
    }
}
