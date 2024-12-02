<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function sop()
    {
        $this->db->select('*');
        $this->db->from('tbl_sop');
        $this->db->order_by('id_sop', 'desc');
        return $this->db->get()->result();
    }

    public function glosary()
    {
        $this->db->select('*');
        $this->db->from('tbl_glosary');
        $this->db->order_by('id_glosary', 'desc');
        return $this->db->get()->result();
    }

    public function galeri()
    {
        $this->db->select('tbl_galeri.*,count(tbl_foto.id_galeri) as jml_foto');
        $this->db->from('tbl_galeri');
        $this->db->join('tbl_foto', 'tbl_foto.id_galeri = tbl_galeri.id_galeri', 'left');
        $this->db->group_by('tbl_galeri.id_galeri');
        $this->db->order_by('tbl_galeri.id_galeri', 'desc');
        return $this->db->get()->result();
    }

    public function detail_galeri($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('tbl_foto');
        $this->db->where('id_galeri', $id_galeri);
        $this->db->order_by('id_foto', 'desc');
        return $this->db->get()->result();
    }

    public function nama_galeri($id_galeri)
    {
        $this->db->select('*');
        $this->db->from('tbl_galeri');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get()->row();
    }

    public function book()
    {
        $this->db->select('*');
        $this->db->from('tbl_book');
        $this->db->order_by('id_book', 'desc');
        return $this->db->get()->result();
    }

    public function dok()
    {
        $this->db->select('*');
        $this->db->from('tbl_dok_rencana');
        $this->db->order_by('id_dok', 'desc');
        return $this->db->get()->result();
    }
}