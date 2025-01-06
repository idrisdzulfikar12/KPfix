<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengaduan extends CI_Model {
    public function lists() {
        return $this->db->get('pengaduan')->result();
    }
}
?>