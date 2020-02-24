<!-- Jobsheet 2 Praktikum Bagian 2 Langkah 4-->
<div class="container">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header font-weight-bold">
                Form Tambah Data Mahasiswa
            </div>
            <div class="card-body">
                <!-- Jobsheet 2 Praktikum Bagian 2 Langkah 7 H (Tambah Alert) -->
                <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <!-- Jobsheet 2 Praktikum Bagian 2 Langkah 7 F -->
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                <form method="post" action="">
                    <!-- Jobsheet 2 Praktikum Bagian 2 Langkah 7 D (Tambah atribut name) -->
                    <div class="form-group">
                        <label for="nama" class="font-weight-bold">Nama</label>
                        <input id="nama" class="form-control" type="text" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="nim" class="font-weight-bold">NIM</label>
                        <input id="nim" class="form-control" type="number" name="nim">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin" class="font-weight-bold">Jenis Kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" id="laki" value="Laki-Laki">
                        <label for="laki">Laki-Laki</label>&nbsp;
                        <input type="radio" name="jenis_kelamin" id="wanita" value="Wanita">
                        <label for="wanita">Wanita</label>
                    </div>
                    <div class="form-group">
                        <label for="telepon" class="font-weight-bold">Telepon</label>
                        <input id="telepon" class="form-control" type="tel" name="telepon">
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="font-weight-bold">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email" class="font-weight-bold">E-mail</label>
                        <input id="email" class="form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
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