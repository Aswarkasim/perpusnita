<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Buku_model extends CI_Model
{
    public function listingBuku($kd_buku = null)
    {
        $this->db->select('tbl_buku.*,
                            tbl_kategori.nm_kategori,
                            tbl_penerbit.nm_penerbit')
            ->from('tbl_buku')
            ->join('tbl_penerbit', 'tbl_penerbit.kd_penerbit = tbl_buku.kd_penerbit', 'LEFT')
            ->join('tbl_kategori', 'tbl_kategori.kd_kategori = tbl_buku.kd_kategori', 'LEFT')
            ->where('kd_buku', $kd_buku);
        return $this->db->get();
    }

    public function listingBukuIndex()
    {
        $this->db->select('tbl_buku.*,
                            tbl_kategori.nm_kategori,
                            tbl_penerbit.nm_penerbit')
            ->from('tbl_buku')
            ->join('tbl_penerbit', 'tbl_penerbit.kd_penerbit = tbl_buku.kd_penerbit', 'LEFT')
            ->join('tbl_kategori', 'tbl_kategori.kd_kategori = tbl_buku.kd_kategori', 'LEFT');
        return $this->db->get()->result();
    }
}
