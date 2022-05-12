<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKependudukan extends CI_Controller
{

    public function index()
    {
        $this->load->view('Layout/head');
        $this->load->view('Layout/sidebar');
        $this->load->view('Kependudukan/penduduk');
        $this->load->view('Layout/footer');
    }
}

/* End of file cKependudukan.php */
