<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mKependudukan extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('kependudukan', $data);
    }
    public function select()
    {
        $this->db->select('*');
        $this->db->from('kependudukan');
        return $this->db->get()->result();
    }
    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('kependudukan');
        $this->db->where('id_penduduk', $id);
        return $this->db->get()->row();
    }
    public function update($id, $data)
    {
        $this->db->where('id_penduduk', $id);
        $this->db->update('kependudukan', $data);
    }
    public function delete($id)
    {
        $this->db->where('id_penduduk', $id);
        $this->db->delete('kependudukan');
    }
}

/* End of file mKependudukan.php */
