<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mMetodeSAW extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('hasil_saw', $data);
    }
    public function select()
    {
        $this->db->select('*');
        $this->db->from('hasil_saw');
        $this->db->join('admin', 'hasil_saw.id_admin = admin.id_admin', 'left');
        $this->db->join('kependudukan', 'hasil_saw.id_penduduk = kependudukan.id_penduduk', 'left');
        return $this->db->get()->result();
    }
}

/* End of file mMetodeSAW.php */
