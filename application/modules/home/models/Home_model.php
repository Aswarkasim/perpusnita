<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

    function listBuku($table, $kd_kategori, $limit, $offset)
    {
        $query = $this->db->select('*')
            ->from($table)
            ->limit($limit)
            ->offset($offset)
            ->where('kd_kategori', $kd_kategori)
            ->get();
        return $query->result();
    }

    function detailBuku($kd_buku)
    {

        $this->db->select('tbl_buku.*, tbl_penerbit.nm_penerbit, tbl_kategori.nm_kategori')
            ->from('tbl_buku')
            ->join('tbl_penerbit', 'tbl_penerbit.kd_penerbit = tbl_buku.kd_penerbit', 'left')
            ->join('tbl_kategori', 'tbl_kategori.kd_kategori = tbl_buku.kd_kategori', 'left')
            ->where('kd_buku', $kd_buku);
        return $this->db->get()->row();
    }


    public function listParentKategori($limit = null, $offset = null)
    {
        $this->db->select('*')
            ->from('tbl_kategori')
            ->where('is_parent', '')
            ->limit($limit)
            ->offset($offset);
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
}
