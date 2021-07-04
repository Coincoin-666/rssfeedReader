<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/style.css">
    <title>RSS Feed Reader</title>
</head>

<body class="container">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand fs-3 text-decoration-underline" href="accueil">JeuxActuRSS<i class="fas fa-rss ms-3"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNav" aria-controls="mobileNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-chevron-circle-down fs-3 text-dark"></i>
            </button>
            <div class="collapse navbar-collapse text-end" id="mobileNav">
                <ul class="navbar-nav ms-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="accueil">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="parametres">Paramètres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hot" name="userChoice[]">Hot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ps4" name="userChoice[]">PS4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ps5" name="userChoice[]">PS5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="xboxOne" name="userChoice[]">XBoxOne</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="xbox_seriesX" name="userChoice[]">XBoxSeriesX</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navigation -->