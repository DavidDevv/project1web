<?php include 'header.php'; ?>
    <div class="jumbotron jumbotron-fluid text-center" id="welcome">
        <div class="container">
            <h1 class="display-4">Selamat Datang di FTIK</h1>
            <p class="lead">Website resmi Fakultas Teknologi Informasi dan Komunikasi. GLOBAL INSTITUTE</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h5 class="card-title">Profil</h5>
                    <p class="card-text">Informasi lengkap tentang FTIK.</p>
                    <a href="profil.php" class="btn btn-primary">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h5 class="card-title">Struktur Organisasi</h5>
                    <p class="card-text">Struktur organisasi FTIK.</p>
                    <a href="struktur_organisasi.php" class="btn btn-primary">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h5 class="card-title">Akademik</h5>
                    <p class="card-text">Informasi akademik FTIK.</p>
                    <a href="akademik.php" class="btn btn-primary">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
        var loader = document.getElementById('loader');
        var content = document.getElementById('content');
        setTimeout(function() {
            loader.style.display = 'none';
            content.style.display = 'block';
        }, 1000); // Menambahkan jeda untuk memastikan loader terlihat
    };
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("welcome").classList.add("visible");
        });
    </script>
    <?php include 'footer.php'; ?>