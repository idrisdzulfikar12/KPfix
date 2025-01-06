<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kunjungan extends CI_Model {

    public function save_permohonan($data) {
        // Insert data ke dalam tabel kunjungan
        $this->db->insert('jadwal_kunjungan', $data);
    }

    public function lists() {
        return $this->db->get('jadwal_kunjungan')->result();
    }
}
?>
