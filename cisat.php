<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Cibitung 1 - Promosi Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo cisat 2.jpeg" alt="Logo SMK Cibitung 1"> <!-- Ganti dengan path logo yang sesuai -->
                SMK Cibitung 1
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#profil">Profil Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jurusan">Jurusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeri">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Selamat Datang di SMK Cibitung 1</h1>
    </section>

    <!-- Profil Sekolah -->
    <section class="section" id="profil">
        <h2 class="text-center mb-4">Profil Sekolah</h2>
        <p class="text-center">SMK Cibitung 1 adalah lembaga pendidikan menengah kejuruan yang menyediakan berbagai program keahlian yang siap membekali siswa dengan keterampilan dan pengetahuan di bidang teknologi, bisnis, dan multimedia. Dengan fasilitas modern dan tenaga pengajar yang kompeten, kami bertujuan menghasilkan lulusan yang siap kerja dan bersaing di dunia industri.</p>
    </section>

    <!-- Promosi Jurusan -->
    <section class="section" id="jurusan">
        <h2 class="text-center mb-4">Pilih Jurusan Terbaik di SMK Cibitung 1</h2>
        <div class="row">
            <!-- Jurusan 1 -->
            <div class="col-md-3">
                <div class="card jurusan-card mb-4">
                    <img src="sija.jpeg" class="card-img-top" alt="Sistem Informasi Jaringan">
                    <div class="card-body">
                        <h5 class="card-title">Sistem Informasi Jaringan (SIJA)</h5>
                        <p class="card-text">Mempelajari sistem informasi,jaringan dan aplikasi, serta cara mengelola dan menganalisis data secara efektif.</p>
                        <a href="sija.html" class="btn btn-primary">Detail Jurusan</a>
                    </div>
                </div>
            </div>
            <!-- Jurusan 2 -->
            <div class="col-md-3">
                <div class="card jurusan-card mb-4">
                    <img src="tmi.jpeg" class="card-img-top" alt="Teknik Mekatronika">
                    <div class="card-body">
                        <h5 class="card-title">Teknik Mekanik industri (TMI)</h5>
                        <p class="card-text">Menggabungkan teknik mesin industri, dan mengelola mesin industri yaitu mesin butbut.</p>
                        <a href="tmi.html" class="btn btn-primary">Detail Jurusan</a>
                    </div>
                </div>
            </div>
            <!-- Jurusan 3 -->
            <div class="col-md-3">
                <div class="card jurusan-card mb-4">
                    <img src="bank mini.jpeg" class="card-img-top" alt="Perbankan Syariah">
                    <div class="card-body">
                        <h5 class="card-title">Perbankan Syariah (PBS)</h5>
                        <p class="card-text">Belajar tentang sistem perbankan syariah, pengelolaan keuangan, dan produk-produk perbankan.</p>
                        <a href="pbs.html" class="btn btn-primary">Detail Jurusan</a>
                    </div>
                </div>
            </div>
            <!-- Jurusan 4 -->
            <div class="col-md-3">
                <div class="card jurusan-card mb-4">
                    <img src="menlog.jpeg" class="card-img-top" alt="Manajemen Logistik">
                    <div class="card-body">
                        <h5 class="card-title">Manajemen Logistik (Menlog)</h5>
                        <p class="card-text">Mempelajari pengelolaan rantai pasokan, distribusi, dan logistik untuk mendukung operasi bisnis.</p>
                        <a href="menlog.html" class="btn btn-primary">Detail Jurusan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section class="section" id="galeri">
        <h2 class="text-center mb-4">Galeri Kegiatan</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="https://via.placeholder.com/400x300" class="img-fluid" alt="Kegiatan 1">
            </div>
            <div class="col-md-4">
                <img src="https://via.placeholder.com/400x300" class="img-fluid" alt="Kegiatan 2">
            </div>
            <div class="col-md-4">
                <img src="https://via.placeholder.com/400x300" class="img-fluid" alt="Kegiatan 3">
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section class="section" id="kontak">
        <h2 class="text-center mb-4">Kontak Kami</h2>
        <p class="text-center">Alamat: Jalan Pendidikan No.1, Cibitung, Jakarta</p>
        <p class="text-center">Telepon: (021) 1234567</p>
        <p class="text-center">Email: info@smkcibitung1.sch.id</p>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p>&copy; 2024 SMK Cibitung 1. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

