<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mDashboard');
    }

    public function index()
    {
        $data = array(
            'status' => $this->mDashboard->rangking()
        );
        $this->load->view('Layout/head');
        $this->load->view('Layout/sidebar');
        $this->load->view('vDashboard', $data);
        $this->load->view('Layout/footer');
    }
}

/* End of file cDashboard.php */
