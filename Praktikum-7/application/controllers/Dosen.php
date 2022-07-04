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
        $this->load->model('DosenModel', 'dsn1');
        $dsn1 = new DosenModel();
        $dsn1->nidn = "0011";
        $dsn1->nama = "Sirojul Munir, S.Si, M.Kom";
        $dsn1->gender = "L";
        $dsn1->pendidikan = "S2";

        $this->load->model('DosenModel', 'dsn2');
        $dsn2 = new DosenModel();
        $dsn2->nidn = "0012";
        $dsn2->nama = "Nurul Janah, S.IIP., M. Hum";
        $dsn2->gender = "P";
        $dsn2->pendidikan = "S2";

        $this->load->model('DosenModel', 'dsn3');
        $dsn3 = new DosenModel();
        $dsn3->nidn = "0013";
        $dsn3->nama = "Drs. Sapto Waluyo, M.Sc.";
        $dsn3->gender = "P";
        $dsn3->pendidikan = "S3";

        $data = array(
            'title' => "Dosen",
            'list_dosen' => [$dsn1, $dsn2, $dsn3]
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index');
        $this->load->view('layout/footer');
    }
}
