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
    <title>Kalkulator BMI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
   
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h1 align="center">Body Mass Index Calculator</h1>
                <form method="POST" name="formbmi" class="bg-white rounded-3 p-3 shadow-lg" action="class_BMIPasien.php">
                    <div class="mx-auto mb-3 w-50 overflow-hidden text-white">
                        <div class="card-body text-center bg-info rounded-lg">
                            <label class="">Jenis Kelamin</label>
                            <div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="gender" id="gender_0" type="radio" required="required" class="custom-control-input gender" value="L">
                                    <label for="gender_0" class="custom-control-label">Pria</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="gender" id="gender_1" type="radio" required="required" class="custom-control-input gender" value="P">
                                    <label for="gender_1" class="custom-control-label">Wanita</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-around gap-5">
                        <label class="form-label">Nama Pasien</label>
                        <input id="nama" name="nama" type="text" class="form-control w-auto" placeholder="Masukan Nama Lengkap" required="required">
                    </div>
                    <div class="mb-3 d-flex justify-content-around gap-5">
                        <label class="form-label">Berat Badan</label>
                        <input name="bb" id="bb" type="text" class="form-control w-auto" placeholder="Masukan Berat Badan" required="required">
                    </div>
                    <div class="mb-3 d-flex justify-content-around gap-5">
                        <label class="form-label">Tinggi Badan</label>
                        <input name="tb" id="tb" type="text" class="form-control w-auto" placeholder="Masukan Tinggi Badan" required="required">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-info d-block mx-auto w-100">Calculate</button>
                    </div>
                </form>
            </div>
        </div>
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