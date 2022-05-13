<?php
class BMIPasien extends BMI
{
    public $id;
    public $bmi;
    public $tanggal;
    public $pasien;

    function __construct($nama, $gender, $bb, $tb, $tanggal)
    {
        parent::__construct($nama, $gender, $bb, $tb);
        $this->tanggal = $tanggal;
    }
}
?>