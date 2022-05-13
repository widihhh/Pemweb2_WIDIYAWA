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

<html>
    <head>
        <title>Form Nilai</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div class="container">
            <h1>Form Nilai Siswa</h1>
            <hr>
            <form class="form-horizontal" method="POST" action="nilai_siswa.php">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="select" name="matkul" class="custom-select">
                        <option value="DDP">Dasar Dasar Pemrograman</option>
                        <option value="BDI">Basis Data I</option>
                        <option value="WEB1">Pemrograman Web</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                    <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                    </div>
                </div>
            </form>
            <?php 
                require_once ('libfungsi.php');

                $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                $nama_siswa = isset($_POST['nama']) ? $_POST['nama'] : '';
                $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
                $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
                $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
                $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

                if(!empty($proses)){
                    echo 'Proses: '.$proses;
                    echo '<br/>Nama: '.$nama_siswa;
                    echo '<br/>Mata Kuliah: '.$mata_kuliah;
                    echo '<br/>Nilai UTS: '.$nilai_uts;
                    echo '<br/>Nilai UAS: '.$nilai_uas;
                    echo '<br/>Nilai Tugas Praktikum: '.$nilai_tugas;

                    $persen_uts = (30 / 100) * $nilai_uts;
                    $persen_uas = (35 / 100) * $nilai_uas;
                    $persen_tugas = (35 / 100) * $nilai_tugas;
                    $total_persen_kelulusan = $persen_uts + $persen_uas + $persen_tugas;

                    $hasil_ujian = kelulusan($total_persen_kelulusan);
                    echo '<br/>
                    Kelulusan: <b>'.$hasil_ujian.'</b>';

                    $grade = grade($total_persen_kelulusan);
                    echo '<br/>
                    Grade: <b>'.$grade.'</b>';

                    $predikat = predikat($grade);
                    echo '<br/>
                    Predikat: <b>'.$predikat.'</b>';
                }
            ?>
        </div>
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