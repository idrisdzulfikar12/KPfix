<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_sop');
    }

    public function index()
    {
        $data = array(
            'title' => 'Standar Operasional Prosedur',
            'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
            'sop' => $this->m_sop->lists(),
            'isi' => 'admin/sop/v_lists'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);

    }

    public function add()
    {
        $this->form_validation->set_rules('judul_sop', 'Judul SOP', 'required');
        
        if($this->form_validation->run() == TRUE){
            $config['upload_path'] = './file/';
            $config['allowed_types'] = 'doc|docx|ppt|pptx|pdf|txt';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);
            
                if(!$this->upload->do_upload('file'))
                {
                    $data = array(
                        'title' => 'Add Standar Operasional Prosedur',
                        'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
                        'error' => $this->upload->display_errors(),
                        'isi' => 'admin/sop/v_add'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
                }
                else
                {
                    $upload_data                = array('uploads' => $this->upload->data());
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './file/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                        'judul_sop' => $this->input->post('judul_sop'),
                        'file' => $upload_data['uploads']['file_name']
                    );
                    $this->m_sop->add($data);
                    $this->session->set_flashdata('pesan','Berhasil Ditambahkan');
                    redirect('sop');
                }
        }
        $data = array(
            'title' => 'Add Standar Operasional Prosedur',
            'title2' => 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak',
            'isi' => 'admin/sop/v_add'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

}

/* End of file Controllername.php */
