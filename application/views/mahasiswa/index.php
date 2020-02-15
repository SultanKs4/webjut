<!-- Praktikum 3 Nomor 20 -->
<!--  Jobsheet 2 Praktikum Bagian 1 Langkah 12 -->
<!-- <?php
        // var_dump($mahasiswa);
        ?> -->
<div class="container">
    <div class="row mt-3">
        <div class="col-md6">
            <!-- Jobsheet 2 Praktikum Bagian 2 Langkah 1 buat button -->
            <!-- Jobsheet 2 Praktikum Bagian 2 Langkah 6 isi href button -->
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h2>Daftar Mahasiswa</h2>
            <ul class="list-group">

                <!-- Jobsheet 1 -->
                <!--                 <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac constectur ac</li>
                <li class="list-group-item">Versitibulum at eros</li> -->

                <!-- Jobsheet 2 -->
                <?php foreach ($mahasiswa as $mhs) : ?>
                <li class="list-group-item"><?= $mhs['nama']; ?> </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>