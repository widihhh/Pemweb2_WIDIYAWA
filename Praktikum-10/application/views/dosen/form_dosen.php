    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="card-body utama font-weight-bold text-center border m-2">
                <div class="col-lg-6 input-data mx-auto border-success p-3 rounded-lg" style="border: 3px dashed;">
                    <form action="<?= base_url('dosen/create'); ?>" method="post">
                        <h3 class="text-lg-center">Form Data Dosen</h3>
                        <div class="input-group flex-nowrap d-flex flex-column" style="gap: 5px;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">NIDN</span>
                                <input type="text" name="nidn" pattern="[0-9]{4}" title="Harus 4 digit!!" class="form-control" placeholder="Nomer Induk Dosen Nasional" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Nama</span>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Gender</span>
                                <select name="gender" id="gender" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" required>
                                    <option value="" selected disabled>-- Pilih Gender --</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Tempat Lahir</span>
                                <input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Tanggal Lahir</span>
                                <input type="date" name="tgl_lahir" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" required>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Pendidikan Terakhir</span>
                                <select name="pendidikan_akhir" id="pendidikan_akhir" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" required>
                                    <option value="" selected disabled>-- Pilih Pendidikan Terakhir --</option>
                                    <option value="SMA">SMA</option>
                                    <option value="DIII">DIII</option>
                                    <option value="DIV">DIV</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Program Studi</span>
                                <select name="prodi_kode" id="prodi_kode" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" required>
                                    <option value="" disabled selected>-- Pilih Program Studi --</option>
                                    <?php foreach ($prodi as $p) : ?>
                                        <option value="<?= $p->kode; ?>"><?= $p->nama; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <input class="btn btn-success w-25 mx-auto" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
                <div class="mt-3 d-flex align-content-start">
                    <a href="<?= base_url(); ?>dosen/index" class="btn btn-secondary" style="font-size: 15px;"><i class="bi bi-box-arrow-in-left"></i><strong class="ml-2">Back</strong></a>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->