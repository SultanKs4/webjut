<!-- Jobsheet 4 Praktikum Bagian 1 Langkah 6 -->
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Mahaiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <p class="card-text"><label for=""><b>Email:</b></label> <?= $mahasiswa['email']; ?></p>
                    <p class="card-text"><label for=""><b>NIM:</b></label> <?= $mahasiswa['nim']; ?></p>
                    <!-- // Jobsheet 4 Tugas -->
                    <p class="card-text"><label for=""><b>Jenis Kelamin:</b></label> <?= $mahasiswa['jenis_kelamin']; ?>
                    </p>
                    <p class="card-text"><label for=""><b>Telepon:</b></label> <?= $mahasiswa['telepon']; ?></p>
                    <p class="card-text"><label for=""><b>Alamat:</b></label> <?= $mahasiswa['alamat']; ?></p>
                    <p class="card-text"><label for=""><b>Jurusan:</b></label> <?= $mahasiswa['jurusan']; ?></p>
                    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>