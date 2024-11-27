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
}