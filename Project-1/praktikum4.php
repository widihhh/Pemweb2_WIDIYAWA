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



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai Siswa</title>
    <script>
        function hapus() {
            document.getElementById('cetak').innerHTML = "<p>Nama : <br/>NIM: <br/>Mata Kuliah: <br/>Nilai: <br/>Hasil Ujian: <br/>Grade: </p>"
        }
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="#">WEB02</a>
                    <div class="collapse navbar-collapse napbar" id="bs-example-navbar-collapse-1">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Review PHP</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider">
                                    </div> <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">PHP5 OOP</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider">
                                    </div> <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline cari">
                            <input class="form-control mr-sm-2" type="text" />
                            <button class="btn btn-primary my-2 my-sm-0" type="submit">
                                Search
                            </button>
                        </form>
                    </div>
                </nav>
                <h3 class="text-left judul">
                    Form Nilai Ujian
                </h3>
                <hr />
                <form method="POST" class="isian" action="#">
                    <div class="form-group row">
                        <label for="nama" class="col-5 col-form-label">Nama</label>
                        <div class="col-7">
                            <input id="nama" name="nama" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nim" class="col-5 col-form-label">NIM</label>
                        <div class="col-7">
                            <input id="nim" name="nim" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-5 col-form-label">Mata Kuliah</label>
                        <div class="col-7">
                            <select id="matkul" name="matkul" class="custom-select" required="required">
                                <option value="Select">Select</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                                <option value="Statistika dan Probabilitas">Statistika dan Probabilitas</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai" class="col-5 col-form-label">Nilai</label>
                        <div class="col-7">
                            <input id="nilai" name="nilai" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-5 col-7 tombol">
                            <button name="submit" type="submit" class="btn btn-success">Submit</button>
                            <button name="reset" type="reset" class="btn btn-warning hapus" onclick="hapus()">Reset</button>
                        </div>
                    </div>
                </form>
                <hr>
                <p id="cetak">
                    <?php
                    require_once "class_siswa.php";

                    $mahasiswa1 = new nilaiMahasiswa($_POST['nim'], $_POST['nama'], $_POST['nilai'], $_POST['matkul']);
                    $mahasiswa1->hasil();
                    
                    echo "<br/>Hasil Ujian : " . $mahasiswa1->grade();
                    echo "<br/>Grade : " . $mahasiswa1->kelulusan();

                    ?>
                </p>
                <hr>
            </div>
        </div>
    </div>
</body>

</html>

</div>
          <!-- /.card-body -->
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