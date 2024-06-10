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
<h2 class="my-4">Profil Fakultas Teknologi Informasi dan Komunikasi</h2>

<div class="card mb-4 shadow-sm">
    <div class="card-header">
        <h3>Prodi Teknik Informatika (TI)</h3>
    </div>
    <div class="card-body">
        <h4>Visi</h4>
        <p>Menjadi program studi unggul dalam bidang teknik informatika yang berdaya saing global pada tahun 2030.</p>
        <h4>Misi</h4>
        <ul>
            <li>Menyelenggarakan pendidikan berkualitas di bidang teknik informatika.</li>
            <li>Melakukan penelitian inovatif yang bermanfaat bagi masyarakat.</li>
            <li>Melaksanakan pengabdian kepada masyarakat yang berkelanjutan.</li>
        </ul>
        <h4>Tujuan</h4>
        <p>Mencetak lulusan yang kompeten dan siap bersaing di dunia kerja internasional.</p>
        <h4>Sasaran</h4>
        <p>Meningkatkan kualitas pendidikan, penelitian, dan pengabdian kepada masyarakat secara berkelanjutan.</p>
    </div>
</div>

<div class="card mb-4 shadow-sm">
    <div class="card-header">
        <h3>Prodi Sistem Informasi (SI)</h3>
    </div>
    <div class="card-body">
        <h4>Visi</h4>
        <p>Menjadi program studi yang unggul dalam pengembangan sistem informasi yang berdaya saing global.</p>
        <h4>Misi</h4>
        <ul>
            <li>Menyelenggarakan pendidikan berkualitas di bidang sistem informasi.</li>
            <li>Melakukan penelitian inovatif dalam pengembangan sistem informasi.</li>
            <li>Melaksanakan pengabdian kepada masyarakat yang berkelanjutan.</li>
        </ul>
        <h4>Tujuan</h4>
        <p>Mencetak lulusan yang mampu mengembangkan dan mengelola sistem informasi secara profesional.</p>
        <h4>Sasaran</h4>
        <p>Meningkatkan kualitas pendidikan, penelitian, dan pengabdian kepada masyarakat di bidang sistem informasi.</p>
    </div>
</div>

<div class="card mb-4 shadow-sm">
    <div class="card-header">
        <h3>Prodi Kajian Film, TV dan Media</h3>
    </div>
    <div class="card-body">
        <h4>Visi</h4>
        <p>Menjadi pusat unggulan dalam kajian film, televisi, dan media yang berdaya saing global pada tahun 2035.</p>
        <h4>Misi</h4>
        <ul>
            <li>Menyelenggarakan pendidikan berkualitas dalam kajian film, televisi, dan media.</li>
            <li>Melakukan penelitian kreatif dan inovatif dalam bidang film, televisi, dan media.</li>
            <li>Melaksanakan pengabdian kepada masyarakat di bidang kajian film, televisi, dan media.</li>
        </ul>
        <h4>Tujuan</h4>
        <p>Mencetak lulusan yang kompeten dalam bidang kajian film, televisi, dan media serta mampu bersaing di tingkat global.</p>
        <h4>Sasaran</h4>
        <p>Meningkatkan kualitas pendidikan, penelitian, dan pengabdian kepada masyarakat di bidang kajian film, televisi, dan media.</p>
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

