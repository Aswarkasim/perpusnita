<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

    function listBuku($table, $limit, $offset)
    {
        $query = $this->db->select('*')
            ->from($table)
            ->limit($limit)
            ->offset($offset)
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
}
