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
    <div class="row mt-3">
        <div class="col-md-12">
            <h2>Daftar Mahasiswa</h2>

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
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mahasiswa as $mhs) : ?>
                    <tr>
                        <td>
                            <?= $mhs['nama']; ?>
                        </td>
                        <td>
                            <?= $mhs['nim']; ?>
                        </td>
                        <td>
                            <?= $mhs['email']; ?>
                        </td>
                        <td>
                            <?= $mhs['jurusan']; ?>
                        </td>
                        <td>
                            <!-- Jobsheet 3 Bagian Praktikum 2 Langkah 1 - 6 -->
                            <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>"
                                class="badge badge-danger float-right"
                                onclick="return confirm('Yakin Data ini akan dihapus?');">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- </ul> -->
        </div>
    </div>
</div>