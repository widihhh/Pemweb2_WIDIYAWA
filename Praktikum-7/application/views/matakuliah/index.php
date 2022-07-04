<div class="content-wrapper">
    <section id="matakuliah">
        <div class="container-fluid">
            <div class="row my-4">
            <div class="col">
                    <h2 align="center" class="display-4">Data Matakuliah</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Matakuliah</th>
                                <th scope="col">Nama SKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($list_matkul as $matkul) : ?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $matkul->kode ?></td>
                                    <td><?= $matkul->nama ?></td>
                                    <td><?= $matkul->sks ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>