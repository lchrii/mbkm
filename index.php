<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website MBKM POLIBATAM</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="assets/css/style-animasi.css">
</head>

<body>
    <header class="bg-white shadow-sm fade-in">
        <div class="container d-flex align-items-center justify-content-between py-3">
            <div class="logo">
                <img src="assets/img/logo.png" alt="Logo Polibatam" class="img-fluid" style="height: 50px;">
            </div>
            <nav class="nav">
                <a class="nav-link text-dark fw-bold animate__animated animate__fadeInDown" href="index.php">Beranda</a>
                <a class="nav-link text-dark fw-bold animate__animated animate__fadeInDown" href="#tentang" style="animation-delay: 0.2s;">Tentang MBKM</a>
                <a href="view/login.php" class="btn btn-success animate__animated animate__fadeInDown" style="animation-delay: 0.4s;">Login</a>
            </nav>
        </div>
    </header>

    <div class="banner text-center text-white d-flex align-items-center justify-content-center" style="background: url('assets/img/latar-belakang1.jpg') no-repeat center; background-size: cover; height: 60vh;">
        <h2 class="display-4 animate__animated animate__zoomIn">Welcome to MBKM Politeknik Negeri Batam</h2>
    </div>

    <div class="logos py-5">
        <div class="container d-flex justify-content-around flex-wrap">
            <img src="assets/img/logo1.png" alt="Logo 1" class="img-fluid bounce-in" style="height: 100px;">
            <img src="assets/img/logo2.png" alt="Logo 2" class="img-fluid bounce-in" style="height: 100px; animation-delay: 0.2s;">
            <img src="assets/img/logo3.png" alt="Logo 3" class="img-fluid bounce-in" style="height: 100px; animation-delay: 0.4s;">
            <img src="assets/img/logo4.png" alt="Logo 4" class="img-fluid bounce-in" style="height: 100px; animation-delay: 0.6s;">
        </div>
    </div>

    <section id="tentang" class="about bg-primary text-white text-center py-5 fade-in">
        <div class="container">
            <h2 class="display-5 mb-4">MERDEKA BELAJAR KAMPUS MERDEKA</h2>
            <p class="fs-5">
                Merdeka Belajar Kampus Merdeka (MBKM) adalah kebijakan dari Kementerian Pendidikan,
                Kebudayaan, Riset, dan Teknologi Indonesia untuk memberikan lebih banyak kebebasan
                kepada mahasiswa dalam merancang jalur pendidikan mereka.
            </p>
            <p class="fs-5">
                Dalam MBKM, mahasiswa memiliki kesempatan untuk belajar diluar program studi atau kampus
                asalnya selama maksimal tiga semester dari total delapan semester program sarjana.
            </p>
        </div>
    </section>

    <div class="banner text-center text-white d-flex align-items-center justify-content-center" style="background: url('assets/img/latar-belakang1.jpg') no-repeat center; background-size: cover; height: 60vh;">
        <div class="container py-5">
            <div class="row" style="background-color: rgba(0, 0, 0, 0.8); color: white; border-radius: 0.75rem; padding: 1rem;">
                <div class="col-md-6 mb-4">
                    <h2 class="animate__animated animate__fadeInLeft"><span class="text-warning">Layanan</span> Informasi Publik</h2>
                    <p>Hubungi kami untuk seputar Pertanyaan Penerimaan Mahasiswa Baru (PMB), Akademik dan Informasi Publik Polibatam.</p>
                    <button class="btn btn-success animate__animated animate__pulse animate__infinite">
                        Hubungi Kami
                        <img src="assets/img/WhatsApp-icon.png" alt="WhatsApp" class="ms-2" style="height: 20px;">
                    </button>
                </div>
                <div class="col-md-6">
                    <h2 class="animate__animated animate__fadeInRight"><span class="text-warning">Layanan</span> Pengaduan</h2>
                    <p>Hubungi <i>Hotline</i> Pengaduan Kami Untuk Seputar Zona Integritas.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-primary text-white text-center py-4 fade-in">
        <div class="container">
            <p class="mb-2">Jurusan:</p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <a href="https://www.polibatam.ac.id/jurusan/manajemen-bisnis/" class="text-white text-decoration-none">Manajemen Bisnis</a>
                <a href="https://www.polibatam.ac.id/jurusan/teknik-elektro/" class="text-white text-decoration-none">Teknik Elektronika</a>
                <a href="https://www.polibatam.ac.id/jurusan/informatika/" class="text-white text-decoration-none">Teknik Informatika</a>
                <a href="https://www.polibatam.ac.id/jurusan/teknik-mesin/" class="text-white text-decoration-none">Teknik Mesin</a>
            </div>
            <p class="mt-3">&copy; 2024 - MBKM Politeknik Negeri Batam</p>
            <a href="#" class="text-white text-decoration-none">YouTube</a>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>