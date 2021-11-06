<!DOCTYPE html>
<html  lang="en">
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
<link rel="stylesheet" href=" <?= BASEURL; ?>/css/bootstrap.css">
    <title>Halaman <?= $data['judul']; ?></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/about/page">Pages</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
</div>
</nav>