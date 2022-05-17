<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cMetodeSAW extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mKependudukan');
        $this->load->model('mMetodeSAW');
    }
    public function index()
    {
        $data = array(
            'hasil_saw' => $this->mMetodeSAW->select()
        );
        $this->load->view('Layout/head');
        $this->load->view('Layout/sidebar');
        $this->load->view('Perhitungan/hasilSAW', $data);
        $this->load->view('Layout/footer');
    }
    public function hitung()
    {
        $this->form_validation->set_rules('no_kk', 'No Kartu Keluarga', 'required');
        $this->form_validation->set_rules('nama_kk', 'Nama Kepala Keluarga', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jml', 'Jumlah Anak', 'required');
        $this->form_validation->set_rules('penghasilan', 'Penghasilan', 'required');
        $this->form_validation->set_rules('rumah', 'Kondisi Rumah', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'penduduk' => $this->mKependudukan->select()
            );
            $this->load->view('Layout/head');
            $this->load->view('Layout/sidebar');
            $this->load->view('Perhitungan/create', $data);
            $this->load->view('Layout/footer');
        } else {
            $cek = $this->mMetodeSAW->select();
            foreach ($cek as $key => $value) {
                $id_penduduk = $value->id_penduduk;
                var_dump($id_penduduk);
            }
            $id = $this->input->post('no_kk');

            // if ($id_penduduk == $id) {
            //     $this->session->set_flashdata('error', 'Perhitungan Sudah Dilakukan Silahkan Cek Di Informasi Hasil Perhitungan!');
            //     redirect('cMetodeSAW');
            // } else {
            //     //perhitungan dengan menggunakan metode SAW
            //     $k1 = $this->input->post('k1');
            //     $k2 = $this->input->post('k2');
            //     $k3 = $this->input->post('k3');

            //     //melakukan proses normalisasi atau penyederhanaan
            //     $kn1 = $k1 / 10;
            //     $kn2 = $k2 / 10;
            //     $kn3 = $k3 / 10;

            //     //perhitungan
            //     $hasil = 0.0;
            //     $hasil = (10 * $kn1) + (5 * $kn2) + (7.5 * $kn3);

            //     $data = array(
            //         'id_admin' => $this->session->userdata('id'),
            //         'id_penduduk' => $this->input->post('no_kk'),
            //         'penghasilan' => $this->input->post('penghasilan'),
            //         'kondisi_rumah' => $this->input->post('rumah'),
            //         'hasil' => $hasil
            //     );
            //     $this->mMetodeSAW->insert($data);
            //     $this->session->set_flashdata('success', 'Data Perhitungan Status Ekonomi Berhasil Ditambahkan!');
            //     redirect('cMetodeSAW');

        }
    }
}

/* End of file cMetodeSAW.php */
