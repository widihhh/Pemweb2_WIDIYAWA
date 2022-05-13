<?php
require_once 'class_BMI.php';
require_once 'class_pasien.php';
require_once 'class_pasien2.php';


$psn1 = new BMIPasien("Ahmad", "L", 69.8, 169, date("d-m-Y"));
$psn2 = new BMIPasien("Rina", "P", 55.3, 165, date("d-m-Y"));
$psn3 = new BMIPasien("Lutfi", "L", 45.2, 171, date("d-m-Y"));
$psn4 = new BMIPasien($_POST['nama'], $_POST['gender'], $_POST['bb'], $_POST['tb'], date("d-m-Y"));

$ar_pasien = [$psn1, $psn2, $psn3, $psn4];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kalkulator BMI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  
</head>

<body>
    <h1 align="center">BMI Anda adalah <?= $psn4->nilaiBMI() ?></h1>
    <table class="table table-striped table-hover">
        <thead class="text-center">
            <th>Nomor</th>
            <th>Tanggal Periksa</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Gender Pasien</th>
            <th>Berat (kg)</th>
            <th>Tinggi (cm)</th>
            <th>Nilai BMI</th>
            <th>Status BMI</th>
        </thead>
        <tbody style="text-align: center;">
            <?php $nomer = 1; ?>
            <?php foreach ($ar_pasien as $obj) : ?>
                <tr>
                    <td><?= $nomer ?></td>
                    <td><?= $obj->tanggal ?></td>
                    <td><?= "P00" . $nomer++ ?></td>
                    <td><?= $obj->nama ?></td>
                    <td><?= $obj->gender ?></td>
                    <td><?= $obj->berat ?></td>
                    <td><?= $obj->tinggi ?></td>
                    <td><?= $obj->nilaiBMI() ?></td>
                    <td><?= $obj->statusBMI() ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>
