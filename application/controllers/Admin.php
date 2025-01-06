<?php

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_kunjungan');
        $this->load->model('M_pengaduan');
    }

    public function index()
    {
        $data = array(
                    'title' => 'Dashboard',
                    'title2' => 'Dinas Pemadam Kebakaran',
                    'isi' => 'admin/v_home'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function jadwal_kunjungan ()
    {
        $data = array(
            'title' => 'Jadwal Kunjungan',
            'title2' => 'Dinas Pemadam Kebakaran',
            'list_pengajuan' => $this->M_kunjungan->lists(),
            'isi' => 'admin/jadwal_kunjungan/v_content'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function pengaduan()
    {
        $data = array(
            'title' => 'Pengaduan Masyarakat',
            'title2' => 'Dinas Pemadam Kebakaran',
            'list_pengaduan' => $this->M_pengaduan->lists(),
            'isi' => 'admin/pengaduan/v_content'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }
}