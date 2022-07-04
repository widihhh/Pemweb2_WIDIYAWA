<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('Dosen_model', 'dsn1');
        $this->dsn1->nidn = "0011";
        $this->dsn1->nama = "Sirojul Munir, S.Si, M.Kom";
        $this->dsn1->gender = "L";
        $this->dsn1->pendidikan = "S2";

        $this->load->model('Dosen_model', 'dsn2');
        $this->dsn2->nidn = "0012";
        $this->dsn2->nama = "Nurul Janah, S.IIP., M. Hum";
        $this->dsn2->gender = "P";
        $this->dsn2->pendidikan = "S2";

        $this->load->model('Dosen_model', 'dsn3');
        $this->dsn3->nidn = "0013";
        $this->dsn3->nama = "Drs. Sapto Waluyo, M.Sc.";
        $this->dsn3->gender = "P";
        $this->dsn3->pendidikan = "S3";

        $this->load->model('Dosen_model', 'dsn4');
        $this->dsn4->nama = $this->input->post('nama');
        $this->dsn4->nidn = $this->input->post('nidn');
        $this->dsn4->gender = $this->input->post('gender');
        $this->dsn4->pendidikan = $this->input->post('pendidikan');

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3, $this->dsn4];
        $data = array(
            "title" => "Dosen",
            "list_dsn" => $list_dsn,        
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index');
        $this->load->view('layout/footer');
    }
}
