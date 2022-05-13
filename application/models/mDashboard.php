<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mDashboard extends CI_Model
{
    //rangking status ekonomi
    public function rangking()
    {
        $data['kurang_mampu'] = $this->db->query("SELECT * FROM hasil_saw JOIN admin ON hasil_saw.id_admin=admin.id_admin JOIN kependudukan ON hasil_saw.id_penduduk = kependudukan.id_penduduk GROUP BY hasil ASC LIMIT 3")->result();
        $data['mampu'] = $this->db->query("SELECT * FROM hasil_saw JOIN admin ON hasil_saw.id_admin=admin.id_admin JOIN kependudukan ON hasil_saw.id_penduduk = kependudukan.id_penduduk GROUP BY hasil DESC LIMIT 3")->result();
        return $data;
    }
}

/* End of file mDashboard.php */
