<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Glosary extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('m_glosary');
    }

    public function index()
    {
        $data = array(
            'title' => 'Glosary',
            'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
            'glosary' => $this->m_glosary->lists(),
            'isi' => 'admin/v_glosary'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);

    }

    public function add()
    {
        $data = array(
                    'judul_glosary' => $this->input->post('judul_glosary'),
                    'materi_glosary' => $this->input->post('materi_glosary')
                );
        $this->m_glosary->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
        redirect('glosary');
    }

    public function edit($id_glosary)
    {
        $data = array(
                    'id_glosary' => $id_glosary,
                    'judul_glosary' => $this->input->post('judul_glosary'),
                    'materi_glosary' => $this->input->post('materi_glosary')
                );
        $this->m_glosary->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
        redirect('glosary');
    }

    public function delete($id_glosary)
    {
        $data = array(
                    'id_glosary' => $id_glosary
                );
        $this->m_glosary->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('glosary');
    }
}