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
    <style>
    .badge {
        margin-left: 3px;
    }
    </style>

    <!-- <title>Hello, world!</title> -->
    <title>Movie Search</title>
    <!-- <title><?= $title ?></title> -->
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
                    <a class="nav-link" href="<?= base_url(); ?>movie">Search Movie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>">About</a>
                </li>
            </ul>
        </div>
    </nav>