<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTIK - Web Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            padding-top: 56px;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .jumbotron {
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
            color: white;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 3s ease-out, transform 3s ease-out;
        }
        .jumbotron.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .card {
            transition: transform 0.2s;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-icon {
            font-size: 50px;
            color: #17a2b8;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .card-body {
            text-align: center;
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }

        #loader {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            background-color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
        }

        #loader img {
            width: 50px; /* Sesuaikan ukuran gambar */
            height: 50px; /* Sesuaikan ukuran gambar */
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="index.php">FTIK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="struktur_organisasi.php">Struktur Organisasi</a></li>
                <li class="nav-item"><a class="nav-link" href="akademik.php">Akademik</a></li>
                <li class="nav-item"><a class="nav-link" href="prestasi.php">Prestasi</a></li>
                <li class="nav-item"><a class="nav-link" href="galeri.php">Galeri</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="loader">
    <img src="images/loading.png" alt="Loading...">
</div>

<div id="content" class="container mt-4">