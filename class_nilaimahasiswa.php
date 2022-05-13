<?php

include_once 'header.php';
include_once 'sidebar.php';

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
         <!-- Main content -->
    <section class="content">


<?php
    class nilaiMahasiswa{
        var $matakuliah;
        var $nama;
        var $nilai; 
        var $nim;
        var $grade;
        
        function __construct($nim, $nama, $nilai, $matakuliah)
        {
            $this->nim = $nim;
            $this->nilai = $nilai;
            $this->matakuliah = $matakuliah;
            $this->nama = $nama;
        }

        public function grade(){
            if ($this->nilai >= 0 && $this->nilai <= 35) {
                $this->grade = "E";
            } elseif ($this->nilai > 35 && $this->nilai <= 55) {
                $this->grade = "D";
            } elseif ($this->nilai > 55 && $this->nilai <= 69) {
                $this->grade = "C";
            } elseif ($this->nilai > 69 && $this->nilai <= 84) {
                $this->grade = "B";
            } elseif ($this->nilai > 84 && $this->nilai <= 100) {
                $this->grade = "A";
            } else {
                $this->grade = "Invalid Input!!";
            }

            return $this->grade;
        }

        public function kelulusan(){
            if ($this->nilai < 56 && $this->nilai >= 0){
                return "Tidak Lulus!!";
            } elseif ($this->nilai > 56 && $this->nilai <= 100) {
                return "Lulus!!";
            } else {
                return "Invalid!!";
            }
        }

        public function hasil(){
            echo "Nama : " . $this->nama;
            echo "<br/>NIM : " . $this->nim;
            echo "<br/>Mata Kuliah : " . $this->matakuliah;
            echo "<br/>Nilai : " . $this->nilai;
        }
    }
?>



    <!-- /.content -->
    </div>
<!-- /.content-wrapper -->



<!-- /.content -->
</div>
<!-- /.content-wrapper -->

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


<?php

include_once 'footer.php';

?>