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
<h2 class="my-4">Prestasi</h2>

<div class="card mb-4 shadow-sm">
    <div class="card-header">
        <h3>Prestasi Mahasiswa</h3>
    </div>
    <div class="card-body">
        <p>Prestasi yang telah diraih oleh FTIK antara lain...</p>
    </div>
</div>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">© 2024 FTIK. All rights reserved.</span>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="bootstrap.bundle.min"></script>
</body>
</html>




