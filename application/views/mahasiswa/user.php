<!-- Jobsheet 5 Bagian 1 Langkah 20 -->
<!-- <h1>ini halaman user</h1> -->

<!-- Jobsheet 5 Bagian 1 Langkah 29 -->
<!-- <h1>Hello, <?php // $this->session->userdata('level'); 
                ?>!</h1> -->

<!-- Jobsheet 5 Bagian 1 Langkah 23 -->
<!-- <a href="<?php // base_url() . 'login/logout'; 
                ?>">Logout</a> -->

<!-- Jobsheet 6 Praktikum Bagian 1 Langkah 5 -->

<div class="container-fluid" style="margin-top: 20px;">
    <div class="col-md-12">
        <h1 style="text-align: center; margin-top: 30px;">Data Mahasiswa</h1>
    </div>
    <table class="table table-striped table-bordered" id="list_mhs">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $mhs) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $mhs->nama; ?></td>
                <td><?= $mhs->email; ?></td>
                <td><?= $mhs->jurusan; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>