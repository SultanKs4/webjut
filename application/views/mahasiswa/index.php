<!-- Praktikum 3 Nomor 20 -->
<!--  Jobsheet 2 Praktikum Bagian 1 Langkah 12 -->
<!-- <?php
        // var_dump($mahasiswa);
        ?> -->
<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- Jobsheet 3 Praktikum Bagian 1 Langkah 6 -->
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mahasiswa <strong> berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- Jobsheet 2 Praktikum Bagian 2 Langkah 1 buat button -->
            <!-- Jobsheet 2 Praktikum Bagian 2 Langkah 6 isi href button -->
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
    <!-- Jobsheet 4 Praktikum Bagian 2 Langkah 2 & 3 -->
    <div class="row mt-3">
        <div class="col-md-6">
            <form method="post" action="">
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="Cari Data Mahasiswa">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h2>Daftar Mahasiswa</h2>
            <!-- Jobsheet 4 Praktikum Bagian 2 Langkah 8 -->
            <?php if (empty($mahasiswa)) : ?>
            <div class="alert alert-danger" role="alert">
                Data Mahasiswa tidak ditemukan
            </div>
            <?php endif; ?>

            <!-- Jobsheet 1 -->
            <!-- <ul class="list-group"> -->
            <!--                 <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac constectur ac</li>
                <li class="list-group-item">Versitibulum at eros</li> -->

            <!-- Jobsheet 2 -->
            <table class="table table-light">
                <thead class="thead-light">
                    <!--                     <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                        <th>Action</th>
                    </tr> -->
                </thead>
                <tbody>
                    <?php foreach ($mahasiswa as $mhs) : ?>
                    <tr>
                        <td>
                            <?= $mhs['nama']; ?>
                        </td>
                        <!-- <td>
                            <?= $mhs['nim']; ?>
                        </td>
                        <td>
                            <?= $mhs['email']; ?>
                        </td>
                        <td>
                            <?= $mhs['jurusan']; ?>
                        </td> -->
                        <td>
                            <!-- Jobsheet 3 Bagian Praktikum 2 Langkah 1 - 6 -->
                            <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>"
                                class="badge badge-danger float-right"
                                onclick="return confirm('Yakin Data ini akan dihpus?');">Hapus</a>
                            <!-- Jobsheet 4 Praktikum Bagian 1 Langkah 7 A -->
                            <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id']; ?>"
                                class="badge badge-success float-right mr-1">Edit</a>
                            <!-- Jobsheet 4 Praktikum Bagian 1 Langkah 1 -->
                            <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>"
                                class="badge badge-primary float-right mr-1">Detail</a>
                            <!-- Jobsheet 4 Praktikum Bagian 1 Langkah 3 (Menambahkan class mr-1) -->

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- </ul> -->
        </div>
    </div>
</div>