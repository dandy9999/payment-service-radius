<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
      <a class="navbar-brand" href="<?= BASEURL; ?>">Hotspot Dandot IT Solution</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="<?= BASEURL; ?>/transaksi">Beli Paket</a>
          <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About</a>
          <a class="nav-item nav-link" href="http://wifi.hotspot.local/">Login Wifi</a>
        </div>
      </div>
  </div>
</nav>