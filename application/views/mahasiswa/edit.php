<!-- Jobsheet 4 Praktikum Bagian 1 Langkah 7 D -->
<div class="container">
    <b class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Mahasiswa
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif ?>
                    <form method="post" action="">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input id="nama" class="form-control" type="text" name="nama"
                                value="<?= $mahasiswa['nama']; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="nim">NIM</label>
                            <input id="nim" class="form-control" type="number" name="nim"
                                value="<?= $mahasiswa['nim']; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="email">email</label>
                            <input id="email" class="form-control" type="email" name="email"
                                value="<?= $mahasiswa['email']; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-content" id="jurusan" name="jurusan">
                                <!-- Jobsheet 4 Praktikum Bagian 1 Langkah 7 F -->
                                <?php foreach ($jurusan as $key) :  ?>
                                <?php if ($key == $mahasiswa['jurusan']) : ?>
                                <option value="<?= $key ?>" selected><?= $key ?></option>
                                <?php else : ?>
                                <option value="<?= $key ?>"><?= $key ?></option>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button class="btn btn-primary float-right" type="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </b>
</div>