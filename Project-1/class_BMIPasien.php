<?php

include_once 'header.php';
include_once 'sidebar.php';

?>


<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>My Project</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Project 1 Widiyawati</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
             <!-- Main content -->
    <section class="content">


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

</div>
          <!-- /.card-footer -->
          <div class="card-footer">
            <footer class="text-muted">Develop By @<a href="#">Widiyawati</a> &copy;2022</footer>
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

  </div>
</div>


<?php

include_once 'footer.php';

?>