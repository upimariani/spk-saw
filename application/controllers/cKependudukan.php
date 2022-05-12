<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKependudukan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mKependudukan');
    }


    public function index()
    {
        $data = array(
            'penduduk' => $this->mKependudukan->select()
        );
        $this->load->view('Layout/head');
        $this->load->view('Layout/sidebar');
        $this->load->view('Kependudukan/penduduk', $data);
        $this->load->view('Layout/footer');
    }
    public function create()
    {
        $this->form_validation->set_rules('no_kk', 'No Kartu Keluarga', 'required|min_length[16]|max_length[16]');
        $this->form_validation->set_rules('nama', 'Nama Kepala Keluarga', 'required');
        $this->form_validation->set_rules('nama_istri', 'Nama Istri', 'required');
        $this->form_validation->set_rules('jml', 'Jumlah Anak', 'required');
        $this->form_validation->set_rules('rt', 'RT', 'required');
        $this->form_validation->set_rules('rw', 'RW', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Layout/head');
            $this->load->view('Layout/sidebar');
            $this->load->view('Kependudukan/create');
            $this->load->view('Layout/footer');
        } else {
            $data = array(
                'no_kk' => $this->input->post('no_kk'),
                'nama_kk' => $this->input->post('nama'),
                'nama_ibu' => $this->input->post('nama_istri'),
                'jumlah_anak' => $this->input->post('jml'),
                'rt' => $this->input->post('rt'),
                'rw' => $this->input->post('rw'),
                'alamat' => $this->input->post('alamat')
            );
            $this->mKependudukan->insert($data);
            $this->session->set_flashdata('success', 'Data Kependudukan Berhasil Ditambahkan!');
            redirect('cKependudukan');
        }
    }
    public function update($id)
    {
        $this->form_validation->set_rules('no_kk', 'No Kartu Keluarga', 'required|min_length[16]|max_length[16]');
        $this->form_validation->set_rules('nama', 'Nama Kepala Keluarga', 'required');
        $this->form_validation->set_rules('nama_istri', 'Nama Istri', 'required');
        $this->form_validation->set_rules('jml', 'Jumlah Anak', 'required');
        $this->form_validation->set_rules('rt', 'RT', 'required');
        $this->form_validation->set_rules('rw', 'RW', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'penduduk' => $this->mKependudukan->edit($id)
            );
            $this->load->view('Layout/head');
            $this->load->view('Layout/sidebar');
            $this->load->view('Kependudukan/update', $data);
            $this->load->view('Layout/footer');
        } else {
            $data = array(
                'no_kk' => $this->input->post('no_kk'),
                'nama_kk' => $this->input->post('nama'),
                'nama_ibu' => $this->input->post('nama_istri'),
                'jumlah_anak' => $this->input->post('jml'),
                'rt' => $this->input->post('rt'),
                'rw' => $this->input->post('rw'),
                'alamat' => $this->input->post('alamat')
            );
            $this->mKependudukan->update($id, $data);
            $this->session->set_flashdata('success', 'Data Kependudukan Berhasil Diperbaharui!');
            redirect('cKependudukan');
        }
    }
    public function delete($id)
    {
        $this->mKependudukan->delete($id);
        $this->session->set_flashdata('success', 'Data Kependudukan Berhasil Dihapus!');
        redirect('cKependudukan');
    }
}

/* End of file cKependudukan.php */
