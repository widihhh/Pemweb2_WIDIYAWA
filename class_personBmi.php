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
require_once 'daftar_accountBank.php';

$nama = $_POST['nama'];
$no_rekening = $_POST['norek'];
$saldo = $_POST['saldo'];

$akun_baru1 = new AccountBank("C001", "Ahmad", 6000000);
$akun_baru2 = new AccountBank("C002", "Budi", 5350000);
$akun_baru3 = new AccountBank("C003", "Kurniawan", 2500000);
$akun_baru4 = new AccountBank($no_rekening, $nama, $saldo);

$ar_akun = [$akun_baru1, $akun_baru2, $akun_baru3, $akun_baru4];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembukaan Rekening</title>
    <!-- Bundle CDN Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>

<body>
<table class="table table-hover">
                    <thead>
                        <th>No</th>
                        <th>Nomer Rekening</th>
                        <th>Nama</th>
                        <th>Saldo</th>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_POST['submit'])) {
                            $no = 1;
                            foreach ($ar_akun as $obj) {
                        ?>
                                <tr>
                                    <td><?=$no?></td>
                                    <td><?=$obj->nomor?></td>
                                    <td><?=$obj->customer?></td>
                                    <td><?=$obj->saldo?></td>
                                </tr>
                        <?php
                            $no++;
                            }
                        }
                        ?>
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

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

  </div>
</div>


<?php

include_once 'footer.php';

?>