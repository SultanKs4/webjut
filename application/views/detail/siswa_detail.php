<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1 class="text-center">Halo, <?= $this->session->userdata('user'); ?></h1>
            <div class="card">
                <div class="card-header">
                    Detail Data Mahaiswa
                </div>
                <div class="card-body">
                    <p class="card-text"><label for=""><b>Nama:</b></label> <?= $mahasiswa['nama']; ?></p>
                    <p class="card-text"><label for=""><b>Email:</b></label> <?= $mahasiswa['email']; ?></p>
                    <p class="card-text"><label for=""><b>NIM:</b></label> <?= $mahasiswa['nim']; ?></p>
                    <p class="card-text"><label for=""><b>Jenis Kelamin:</b></label> <?= $mahasiswa['jenis_kelamin']; ?>
                    </p>
                    <p class="card-text"><label for=""><b>Telepon:</b></label> <?= $mahasiswa['telepon']; ?></p>
                    <p class="card-text"><label for=""><b>Alamat:</b></label> <?= $mahasiswa['alamat']; ?></p>
                    <p class="card-text"><label for=""><b>Jurusan:</b></label> <?= $mahasiswa['jurusan']; ?></p>
                    <a href="<?= base_url(); ?>detail" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>