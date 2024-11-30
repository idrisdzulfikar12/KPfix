<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_home');
    }

    public function index()
    {
        $data = array(
                    'title' => 'Web Dinas',
                    'isi' => 'v_home'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);      
    }

    public function sambutan()
    {
        $data = array(
                    'title' => 'Sambutan Kepala Dinas',
                    'isi' => 'v_sambutan'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function struktur()
    {
        $data = array(
                    'title' => 'Struktur',
                    'isi' => 'v_struktur'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function sekretariat()
    {
        $data = array(
                    'title' => 'Sekretariat',
                    'isi' => 'v_sekretariat'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function bidang_pemberdayaan_perempuan()
    {
        $data = array(
                    'title' => 'Bidang Pemberdayaan Perempuan dan Pengarustamaan Gender',
                    'isi' => 'v_bidang_pemberdayaan_perempuan'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function bidang_pemenuhan()
    {
        $data = array(
                    'title' => 'Bidang Pemenuhan Hak Anak',
                    'isi' => 'v_bidang_pemenuhan'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function bidang_perlindungan()
    {
        $data = array(
                    'title' => 'Bidang Perlindungan Perempuan dan Anak',
                    'isi' => 'v_bidang_perlindungan'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function bidang_pemberdayaan_manusia()
    {
        $data = array(
                    'title' => 'Bidang Pemberdayaan Manusia dan Data Informasi',
                    'isi' => 'v_bidang_pemberdayaan_manusia'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function seruni()
    {
        $data = array(
                    'title' => 'Seruni',
                    'isi' => 'v_seruni'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function form_pengaduan()
    {
        $data = array(
                    'title' => 'Form Pengaduan',
                    'isi' => 'v_form_pengaduan'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function sop()
    {
        $data = array(
                    'title' => 'Standar Operasional Prosedur',
                    'isi' => 'v_sop'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function berita()
    {
        $data = array(
                    'title' => 'Berita',
                    'isi' => 'v_berita'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function artikel()
    {
        $data = array(
                    'title' => 'Artikel',
                    'isi' => 'v_artikel'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function book()
    {
        $data = array(
                    'title' => 'E-Book',
                    'isi' => 'v_book'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function galeri()
    {
        $data = array(
                    'title' => 'Galeri',
                    'galeri' => $this->m_home->galeri(),
                    'isi' => 'v_galeri'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function detail_galeri($id_galeri)
    {
        $data = array(
                    'title' => 'Detail Galeri',
                    'galeri' => $this->m_home->detail_galeri($id_galeri),
                    'nama_galeri' => $this->m_home->nama_galeri($id_galeri),
                    'isi' => 'v_detail_galeri'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function glosary()
    {
        $data = array(
                    'title' => 'Glosary',
                    'isi' => 'v_glosary'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }

    public function dok()
    {
        $data = array(
                    'title' => 'Dokumen Perencanaan',
                    'isi' => 'v_dok'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);   
    }
}