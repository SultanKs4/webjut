<!-- Jobsheet 5 Tugas-->
<div class="container-fluid mt-2">
    <h1>Hello, <?= $this->session->userdata('user'); ?>!</h1>
    <a href="<?= base_url(); ?>detail/mahasiswa/<?= $this->session->userdata('user_id'); ?>"
        class="btn btn-primary">Detail</a>
    <a href="<?= base_url() . 'login/logout'; ?>" class="btn btn-danger">Logout</a>
</div>