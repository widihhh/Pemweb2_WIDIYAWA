<?php
    require_once "class_PersegiPanjang.php";

    $persegipanjang1 = new persegiPanjang(6, 12);
    $persegipanjang2 = new persegiPanjang(3, 7);

    echo "<br/>Luas Persegi Panjang I adalah " . $persegipanjang1->getLuas();
    echo "<br/>Luas Persegi Panjang II adalah " . $persegipanjang2->getLuas();
    echo "<br/>Keliling Persegi Panjang I adalah " . $persegipanjang1->getKeliling();
    echo "<br/>Keliling Persegi Panjang II adalah " . $persegipanjang2->getKeliling();

?>