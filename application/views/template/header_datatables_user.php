<!-- Praktikum 3 Nomor 10 -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Jobsheet 6 Bagian 1 Langkah 4 -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
    </script>

    <title><?= $title ?></title>
    <!-- <title>Hello, world!</title> -->
</head>

<body>
    <!-- Praktikum 3 Nomor 16 -->
    <!-- navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="#">Home <span class="sr-only">(current)</span></a>

          <a class="nav-item nav-link" href="#">Feature</a>

          <a class="nav-item nav-link" href="#">Pricing</a>

          <a class="nav-item  nav-link disabled" href="#">Disabled</a>
        </div>
    </div>
</nav> -->

    <!-- Praktikum 3 Nomor 18 -->
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">CI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <!-- Jobsheet 2 langklah 1 Bagian 16 A -->
                    <a class="nav-link" href="<?= base_url(); ?>home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>mahasiswa">Data Mahasiswa</a>
                </li>

                <!--  Jobsheet 6 Praktikum Bagian 2 langkah 7 -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>user/laporan_pdf">Cetak Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>">About</a>
                    <!-- Jobsheet 5 langklah 1 Bagian 21 -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>login/logout">Logout</a>

                    <!-- <a class="nav-item  nav-link disabled" href="#">Disabled</a> -->
                </li>
            </ul>
        </div>
    </nav>