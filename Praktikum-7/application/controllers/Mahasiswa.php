<?php
class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('MahasiswaModel', 'mhs1');
        $mhs1 = new MahasiswaModel();
        $mhs1->nim = "01101";
        $mhs1->nama = "Widiyawati";
        $mhs1->gender = "P";
        $mhs1->ipk = 3.9;

        $this->load->model('MahasiswaModel', 'mhs2');
        $mhs2 = new MahasiswaModel();
        $mhs2->nim = "01102";
        $mhs2->nama = "Farhana Zahrah";
        $mhs2->gender = "P";
        $mhs2->ipk = 3.2;

        $this->load->model('MahasiswaModel', 'mhs3');
        $mhs3 = new MahasiswaModel();
        $mhs3->nim = "01103";
        $mhs3->nama = "Alif Wijaya";
        $mhs3->gender = "L";
        $mhs3->ipk = 2.9;

        $data = array(
            'title' => "Mahasiswa",
            'list_mhs' => [$mhs1, $mhs2, $mhs3]
        );


        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index');
        $this->load->view('layout/footer');
    }
}
