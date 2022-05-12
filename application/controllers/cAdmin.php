<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAdmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mAdmin');
    }


    public function index()
    {
        $data = array(
            'admin' => $this->mAdmin->select()
        );
        $this->load->view('Layout/head');
        $this->load->view('Layout/sidebar');
        $this->load->view('Admin/admin', $data);
        $this->load->view('Layout/footer');
    }
    public function create()
    {
        $this->form_validation->set_rules('nama', 'Nama Admin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_tlpon', 'No Telepon', 'required|min_length[11]|max_length[13]');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Layout/head');
            $this->load->view('Layout/sidebar');
            $this->load->view('Admin/create');
            $this->load->view('Layout/footer');
        } else {
            $data = array(
                'nama_admin' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_tlpon'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $this->mAdmin->insert($data);
            $this->session->set_flashdata('success', 'Data Admin Berhasil Ditambahkan!');
            redirect('cAdmin');
        }
    }
    public function update($id)
    {
        $this->form_validation->set_rules('nama', 'Nama Admin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_tlpon', 'No Telepon', 'required|min_length[11]|max_length[13]');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'admin' => $this->mAdmin->edit($id)
            );
            $this->load->view('Layout/head');
            $this->load->view('Layout/sidebar');
            $this->load->view('Admin/update', $data);
            $this->load->view('Layout/footer');
        } else {
            $data = array(
                'nama_admin' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_tlpon'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $this->mAdmin->update($id, $data);
            $this->session->set_flashdata('success', 'Data Admin Berhasil Diperbaharui!');
            redirect('cAdmin');
        }
    }
    public function delete($id)
    {
        $this->mAdmin->delete($id);
        $this->session->set_flashdata('success', 'Data Admin Berhasil Dihapus!');
        redirect('cAdmin');
    }
}

/* End of file cAdmin.php */
