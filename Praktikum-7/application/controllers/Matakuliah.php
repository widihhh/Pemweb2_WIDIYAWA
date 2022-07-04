<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model("MatakuliahModel", 'matkul1');
        $matkul1 = new MataKuliahModel();
        $matkul1->nama = "Pemrograman Web 2";
        $matkul1->sks = 3;
        $matkul1->kode = "001";

        $this->load->model("MatakuliahModel", 'matkul2');
        $matkul2 = new MataKuliahModel();
        $matkul2->nama = "Basis Data";
        $matkul2->sks = 4;
        $matkul2->kode = "002";

        $this->load->model("MatakuliahModel", 'matkul3');
        $matkul3 = new MataKuliahModel();
        $matkul3->nama = "UI/UX Designer";
        $matkul3->sks = 3;
        $matkul3->kode = "003";

        $data = array(
            'title' => "Matakuliah",
            'list_matkul' => [$matkul1, $matkul2, $matkul3],
        );
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/index');
        $this->load->view('layout/footer');
    }
}
