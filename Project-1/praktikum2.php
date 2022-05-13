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
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-8">
            <h1>Belanja Online</h1>
            <hr>
            <div class="col-md-8 ">
              <form method="POST" action="form_belanja.php">
                <div class="form-group row">
                  <label class="col-4 col-form-label">Customer</label>
                  <div class="col-8">
                    <input name="customer" placeholder="Nama Customer" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-4">Pilih Produk</label>
                  <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="tv">
                      <label for="radio_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="kulkas">
                      <label for="radio_1" class="custom-control-label">KULKAS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="mesin_cuci">
                      <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="text2" class="col-4 col-form-label">Jumlah</label>
                  <div class="col-8">
                    <input id="text2" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                  </div>
                </div>
            </div>
            <div class="form-group row">
              <div class="offset-7 col-5">
                <button name="proses" type="submit" class="btn btn-success">Simpan</button>
              </div>
            </div>
            </form>

          </div>
          <div class="col-md-4">
            <div class="card" style="width: 26.5rem;">
              <div class="card-header bg-primary text-white">
                Daftar Harga
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">TV : 4.200.000</li>
                <li class="list-group-item">Kulkas : 3.100.000</li>
                <li class="list-group-item">MESIN CUCI : 3.800.000</li>
              </ul>
              <div class="card-footer bg-primary text-white">
                Harga Dapat Berubah Setiap Saat
              </div>
            </div>
          </div>
        </div>
        <div class="m-4">
          <?php
           
            $customer = $_POST['customer'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];

            if ($produk == 'tv') {
                $harga = $jumlah * 4200000;
            } elseif ($produk == 'kulkas') {
                $harga = $jumlah * 3100000;
            } elseif ($produk == 'mesin_cuci') {
                $harga = $jumlah * 3800000;
            } 
            
            echo '<br/>Nama Customer : ' .$customer;
            echo '<br/>Produk Pilihan : ' .$produk;
            echo '<br/>Jumlah Beli : ' .$jumlah;
            echo '<br/>Total Belanja : ' .$harga;
        ?>

        </div>
      </div>
    </div>
  </div>

  </div>
          <!-- /.card-footer -->
          <div class="card-footer">
            <footer class="text-muted">Develop By @<a href="#">Widiyawati</a> &copy;2022</footer>
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->

</div>



<?php

include_once 'footer.php';

?>