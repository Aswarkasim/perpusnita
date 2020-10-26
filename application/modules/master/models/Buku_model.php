<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Buku_model extends CI_Model
{
    public function listingBuku($kd_buku = null)
    {
        $this->db->select('tbl_buku.*,
                            tbl_kategori.nm_kategori,
                            tbl_jenis.nm_jenis,
                            tbl_penerbit.nm_penerbit')
            ->from('tbl_buku')
            ->join('tbl_penerbit', 'tbl_penerbit.kd_penerbit = tbl_buku.kd_penerbit', 'LEFT')
            ->join('tbl_jenis', 'tbl_jenis.kd_jenis = tbl_buku.kd_jenis', 'LEFT')
            ->join('tbl_kategori', 'tbl_kategori.kd_kategori = tbl_buku.kd_kategori', 'LEFT')
            ->where('kd_buku', $kd_buku);
        return $this->db->get();
    }

    public function listingBukuIndex()
    {
        $this->db->select('tbl_buku.*,
                            tbl_kategori.nm_kategori,
                            tbl_jenis.nm_jenis,
                            tbl_penerbit.nm_penerbit')
            ->from('tbl_buku')
            ->join('tbl_penerbit', 'tbl_penerbit.kd_penerbit = tbl_buku.kd_penerbit', 'LEFT')
            ->join('tbl_jenis', 'tbl_jenis.kd_jenis = tbl_buku.kd_jenis', 'LEFT')
            ->join('tbl_kategori', 'tbl_kategori.kd_kategori = tbl_buku.kd_kategori', 'LEFT');
        return $this->db->get()->result();
    }

    public function listParentKategori()
    {
        $this->db->select('*')
            ->from('tbl_kategori')
            ->where('is_parent', '');
        return $this->db->get()->result();
    }


    public function listChildKategori($kd_kategori)
    {
        $this->db->select('*')
            ->from('tbl_kategori')
            ->where('is_parent', $kd_kategori);
        return $this->db->get()->result();
    }


    public function parentListBuku()
    {
        $this->db->select('tbl_buku.*,
                            tbl_kategori.nm_kategori,
                            tbl_jenis.nm_jenis,
                            tbl_penerbit.nm_penerbit')
            ->from('tbl_buku')
            ->join('tbl_penerbit', 'tbl_penerbit.kd_penerbit = tbl_buku.kd_penerbit', 'LEFT')
            ->join('tbl_jenis', 'tbl_jenis.kd_jenis = tbl_buku.kd_jenis', 'LEFT')
            ->join('tbl_kategori', 'tbl_kategori.kd_kategori = tbl_buku.kd_kategori', 'LEFT');
        return $this->db->get()->result();
    }

    function cariBuku($key)
    {

        $this->db->select('*')
            ->from('tbl_buku')
            ->like('judul_buku', $key);
        return $this->db->get()->result();
    }
}
