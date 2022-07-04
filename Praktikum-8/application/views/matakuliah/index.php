<div class="content-wrapper">
    <section id="matakuliah">
        <div class="container-fluid">
            <div class="row my-4">
            <div class="col">
                    <h2 align="center" class="display-4">Data Matakuliah</h2>
                </div>
            </div>
            <form action="<?= base_url(); ?>Matakuliah" method="post">
                    <h3 class="text-lg-center">Form Matakuliah</h3>
                    <div class="input-group flex-nowrap d-flex flex-column" style="gap: 5px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Nama Matakuliah</span>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Mata Kuliah" aria-label="Username" aria-describedby="addon-wrapping" required pattern="[A-Za-z ]{0,}" title="Hanya Huruf">
                        </div>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">Kode</span>
                            <input type="text" name="kode" class="form-control" placeholder="Kode Mata Kuliah" aria-label="Username" aria-describedby="addon-wrapping" required pattern="[A-Z0-9]{5,7}" title="Kode Terdiri dari 2-4 Huruf dan 3 digit angka">
                        </div>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">SKS</span>
                            <input type="text" name="sks" class="form-control" placeholder="Jumlah SKS" aria-label="Username" aria-describedby="addon-wrapping" required pattern="[0-9]{1,2}" title="Jumlah SKS terdiri dari 1-2 digit angka">
                        </div>
                        <input class="btn btn-primary w-25 mx-auto" type="submit" value="Submit">
                    </div>
                </form>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Matakuliah<th>
                                <th scope="col">SKS</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($list_mk as $mk) {
                        ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $mk->kode ?></td>
                                <td><?= $mk->nama ?></td>
                                <td><?= $mk->sks ?></td>
                            </tr>
                        <?php
                            $nomor++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>