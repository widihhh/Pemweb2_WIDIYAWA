<?php
require_once 'class_account-bank.php';

$nama = $_POST['nama'];
$no_rekening = $_POST['norek'];
$saldo = $_POST['saldo'];

$akun_baru1 = new AccountBank("C001", "Ahmad", number_format(600000, 2, ",", "."));
$akun_baru2 = new AccountBank("C002", "Budi", number_format(500000, 2, ",", "."));
$akun_baru3 = new AccountBank("C003", "Nelan", number_format(1000000, 2, ",", "."));
$akun_baru4 = new AccountBank($no_rekening, $nama, number_format($saldo, 2, ",", "."));

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
    <div class="container">
        <div class="row">
            <div class="col mt-1">
                <h3>Form Pembukaan Rekening</h3>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-7">
                <form method="POST" action="#">
                    <div class="form-group row">
                        <label class="col-4 col-form-label" for="nama">Nama Pemilik</label>
                        <div class="col-6">
                            <input id="nama" name="nama" pattern="[A-Za-z ]{1,}" title="Hanya Huruf" placeholder="Nama Pemilik" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="norek" class="col-4 col-form-label">Nomor Rekening</label>
                        <div class="col-6">
                            <input pattern="[A-Z0-9]{4}" title="1 Huruf Kapital dan 3 Digit Angka" id="norek" name="norek" placeholder="Nomor Rekening" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="saldo" class="col-4 col-form-label">Saldo Awal</label>
                        <div class="col-6">
                            <input id="saldo" name="saldo" pattern="[0-9]{1,}" title="Hanya Angka" placeholder="Jumlah Saldo" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-6">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                <table class="table table-hover">
                    <thead class="text-center">
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
                                <tr class="text-center">
                                    <td><?= $no ?></td>
                                    <td><?= $obj->nomor ?></td>
                                    <td><?= $obj->customer ?></td>
                                    <td><?= 'Rp ' . $obj->saldo ?></td>
                                </tr>
                        <?php
                                $no++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>