<?php

class Home extends CI_Controller {
    public function index()
    {
        $data = array(
                    'title' => 'Web Dinas',
                    'isi' => 'v_home'
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
}