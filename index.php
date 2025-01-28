<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Umur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <style>
    /* Hero Section Styling */
    .hero-section {
        background: linear-gradient(to right, #ff7e5f, #feb47b);
        color: white;
        padding: 50px 20px;
        text-align: center;
    }

    /* Features Section Styling */
    .features-section,
    .developer-section {
        padding: 50px 20px;
    }

    .feature-card {
        border: none;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .feature-card:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .feature-card i {
        transition: color 0.3s, transform 0.3s;
    }

    .feature-card:hover i {
        color: #ff7e5f;
        transform: rotate(10deg);
    }

    /* Footer Styling */
    .footer {
        background: #343a40;
        color: white;
        text-align: center;
        padding: 20px 10px;
    }

    /* Carousel Custom Styling */
    .carousel-inner img {
        max-height: 300px;
        /* Sesuaikan tinggi maksimal gambar */
        object-fit: cover;
        /* Menghindari gambar terdistorsi */
    }

    .carousel-caption {
        font-size: 0.9rem;
        /* Perkecil ukuran teks */
        padding: 10px;
        /* Sesuaikan padding */
    }

    .carousel-indicators button {
        width: 8px;
        /* Perkecil indikator */
        height: 8px;
    }
    </style>
</head>

<body>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Kalkulator Umur Online</h1>
            <p>Hitung umur Anda dengan cepat dan mudah!</p>
            <form class="mt-4 d-flex justify-content-center">
                <input type="date" class="form-control w-50" placeholder="Masukkan tanggal lahir Anda">
                <button class="btn btn-light ms-2">Hitung</button>
            </form>
            <a href="kalkulator.php" class="btn btn-warning mt-4">Coba Sekarang</a>
        </div>
    </section>

    <!-- Carousel Section -->
    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/kalkulator3.png" class="d-block w-100" alt="Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hitung Umur Anda dengan Akurat</h5>
                    <p>Gunakan sistem kalkulator umur kami sekarang!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="container text-center">
            <h2 class="mb-5">Fitur Unggulan</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card feature-card p-4">
                        <i class="bi bi-stopwatch fs-1 text-warning"></i>
                        <h5 class="mt-3">Penghitungan Cepat</h5>
                        <p>Hasil kalkulasi instan hanya dalam hitungan detik.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card p-4">
                        <i class="bi bi-shield-lock-fill fs-1 text-success"></i>
                        <h5 class="mt-3">Privasi Terjamin</h5>
                        <p>Data Anda aman dan tidak akan disimpan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card p-4">
                        <i class="bi bi-phone fs-1 text-primary"></i>
                        <h5 class="mt-3">Responsif</h5>
                        <p>Dapat digunakan di perangkat apa saja, kapan saja.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Developer Section -->
    <section class="developer-section bg-light">
        <div class="container text-center">
            <h2 class="mb-5">Tentang Pengembang</h2>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <img src="img/yuli.enc" width="60%" alt="Developer" class="img-fluid rounded-circle mb-3">
                    <h5>Yuliyana</h5>
                    <p>Pengembang sistem kalkulator umur dengan pengalaman di bidang pengembangan web dan aplikasi.</p>
                    <div class="d-flex justify-content-center">
                        <a href="https://github.com/yuliyana08/kalkulator-umur.git"
                            class="btn btn-outline-dark btn-sm mx-1">GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Kalkulator Umur | Yuliyana.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>