<!-- Jobsheet 4 Praktikum Bagian 1 Langkah 7 D -->
<div class="container">
    <div class="col-md-6">
        <div class="card">
            <!-- //  Jobsheet 4 Tugas -->
            <div class="card-header font-weight-bold">
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
                        <label for="nama" class="font-weight-bold">Nama</label>
                        <input id="nama" class="form-control" type="text" name="nama"
                            value="<?= $mahasiswa['nama']; ?>">
                    </div>
                    <div class=" form-group">
                        <label for="nim" class="font-weight-bold">NIM</label>
                        <input id="nim" class="form-control" type="number" name="nim" value="<?= $mahasiswa['nim']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin" class="font-weight-bold">Jenis Kelamin</label><br>
                        <?php if ($mahasiswa['jenis_kelamin'] == "Laki-Laki") : ?>
                        <input type="radio" name="jenis_kelamin" id="laki" value="Laki-Laki" checked>
                        <label for="laki">Laki-Laki</label>&nbsp;
                        <input type="radio" name="jenis_kelamin" id="wanita" value="Wanita">
                        <label for="wanita">Wanita</label>
                        <?php elseif ($mahasiswa['jenis_kelamin'] == "Wanita") : ?>
                        <input type="radio" name="jenis_kelamin" id="laki" value="Laki-Laki">
                        <label for="laki">Laki-Laki</label>&nbsp;
                        <input type="radio" name="jenis_kelamin" id="wanita" value="Wanita" checked>
                        <label for="wanita">Wanita</label>
                        <?php else : ?>
                        <input type="radio" name="jenis_kelamin" id="laki" value="Laki-Laki">
                        <label for="laki">Laki-Laki</label>&nbsp;
                        <input type="radio" name="jenis_kelamin" id="wanita" value="Wanita">
                        <label for="wanita">Wanita</label>
                        <?php endif;  ?>
                    </div>
                    <div class="form-group">
                        <label for="telepon" class="font-weight-bold">Telepon</label>
                        <input id="telepon" class="form-control" type="tel" name="telepon"
                            value="<?= $mahasiswa['telepon'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="font-weight-bold">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat"
                            rows="3"><?= $mahasiswa['alamat'] ?></textarea>
                    </div>
                    <div class=" form-group">
                        <label for="email" class="font-weight-bold">email</label>
                        <input id="email" class="form-control" type="email" name="email"
                            value="<?= $mahasiswa['email']; ?>">
                    </div>
                    <div class=" form-group">
                        <label for="jurusan" class="font-weight-bold">Jurusan</label>
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
</div>