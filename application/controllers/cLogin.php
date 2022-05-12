<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLogin');
    }


    public function index()
    {
        $this->form_validation->set_rules('username', 'Username Admin', 'required');
        $this->form_validation->set_rules('password', 'Password Admin', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('vlogin');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $data = $this->mLogin->login($username, $password);
            if ($data) {
                $id = $data->id_admin;
                $this->session->set_userdata('id', $id);
                $this->session->set_flashdata('success', 'Selamat Datang Admin!');
                redirect('cDashboard');
            } else {
                $this->session->set_flashdata('error', 'Username dan Password Anda Salah!');
                redirect('');
            }
        }
    }
    public function logout()
    {

        $this->session->unset_userdata('id');
        $this->session->set_flashdata('success', 'Anda Berhasil Logout!');
        redirect('');
    }
}

/* End of file cLogin.php */
