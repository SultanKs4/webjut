<!-- Jobsheet 2 Praktikum Bagian 2 Langkah 4-->
<div class="container">
    <b class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
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
                            <label for="nama">Nama</label>
                            <input id="nama" class="form-control" type="text" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input id="nim" class="form-control" type="number" name="nim">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input id="email" class="form-control" type="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-content" id="jurusan" name="jurusan">
                                <option selected>--------</option>
                                <option value="Kimia">Kimia</option>
                                <option value="Informatika">Informatika</option>
                                <option value="Mesin">Mesin</option>
                            </select>
                        </div>
                        <button class="btn btn-primary float-right" type="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </b>
</div>