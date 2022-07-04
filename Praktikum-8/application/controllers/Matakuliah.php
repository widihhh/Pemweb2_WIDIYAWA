<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('Matakuliah_model', 'mk1');
        $this->mk1->nama = "Pemrograman Web 2";
        $this->mk1->sks = 3;
        $this->mk1->kode = "PW002";

        $this->load->model('Matakuliah_model', 'mk2');
        $this->mk2->nama = "Statistik dan Probabilitas";
        $this->mk2->sks = 3;
        $this->mk2->kode = "SP002";

        $this->load->model('Matakuliah_model', 'mk3');
        $this->mk3->nama = "Sistem Operasi";
        $this->mk3->sks = 2;
        $this->mk3->kode = "PTI001";

        $this->load->model('Matakuliah_model', 'mk4');
        $this->mk4->nama = $this->input->post('nama');
        $this->mk4->sks = $this->input->post('sks');
        $this->mk4->kode = $this->input->post('kode');

        $list_mk = [$this->mk1, $this->mk2, $this->mk3, $this->mk4];
        $data = array(
            "title" => "Mata Kuliah",
            "list_mk" => $list_mk,
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/index');
        $this->load->view('layout/footer');

    }
}
