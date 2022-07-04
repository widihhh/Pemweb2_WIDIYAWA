<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('mahasiswa_model', 'mhs1');
        $this->mhs1->id = 1;
        $this->mhs1->nim = '010001';
        $this->mhs1->nama = 'Widiyawati';
        $this->mhs1->gender = 'P';
        $this->mhs1->ipk = 3.9;

        $this->load->model('mahasiswa_model', 'mhs2');
        $this->mhs2->id = 2;
        $this->mhs2->nim = '020001';
        $this->mhs2->nama = 'Farhana Zahra';
        $this->mhs2->gender = 'P';
        $this->mhs2->ipk = 3.2;

        $this->load->model('mahasiswa_model', 'mhs3');
        $this->mhs3->id = 3;
        $this->mhs3->nim = $this->input->post('nim');
        $this->mhs3->nama = $this->input->post('nama');
        $this->mhs3->gender = $this->input->post('gender');
        $this->mhs3->ipk = $this->input->post('ipk'); 

        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        $data = array(
            "title" => "Mahasiswa",
            "list_mhs" => $list_mhs,
        );
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');        
        $this->load->view('mahasiswa/index');
        $this->load->view('layout/footer');
    }
}
