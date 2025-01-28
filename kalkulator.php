<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculator Umur PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        crossorigin="anonymous" />
    <style>
    /* Global Styling */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f9f9f9;
    }

    header {
        background: linear-gradient(90deg, #ff7e5f, #feb47b);
        color: white;
        padding: 20px 0;
        text-align: center;
    }

    header img {
        height: 50px;
    }

    header span {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .form-control {
        padding-left: 2.5rem;
    }

    .form-control::placeholder {
        font-style: italic;
        color: #aaa;
    }

    .input-group-text {
        background-color: #ff7e5f;
        color: white;
    }

    .result-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        text-align: center;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 10px auto;
        /* Centrally align cards */
    }

    .result-card img {
        height: 60px;
        margin-bottom: 10px;
    }

    .result-row {
        display: flex;
        justify-content: center;
        /* Centers the result row */
        flex-wrap: wrap;
    }

    footer {
        background: linear-gradient(90deg, rgb(64, 64, 65), rgb(207, 207, 207));
        color: white;
        padding: 20px 0;
        text-align: center;
    }
    </style>
</head>

<body>
    <header>
        <span>Mari Hitung Berapa Usia Kamu!</span>
    </header>

    <main class="container py-4">
        <!-- Form Section -->
        <div class="p-4 bg-light border rounded">
            <form action="" method="POST">
                <div class="row mb-3">
                    <label for="tanggal_lahir" class="col-sm-4 col-form-label text-end">
                        <i class="fas fa-birthday-cake"></i> Tanggal Lahir
                    </label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                            </span>
                            <input type="datetime-local" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
                                placeholder="Pilih tanggal lahir" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal_today" class="col-sm-4 col-form-label text-end">
                        <i class="fas fa-calendar-day"></i> Tanggal Hari Ini
                    </label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="far fa-clock"></i>
                            </span>
                            <input type="datetime-local" name="tanggal_today" id="tanggal_today" class="form-control"
                                placeholder="Pilih tanggal sekarang" />
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="submit">
                        <i class="fas fa-calculator"></i> Menghitung!
                    </button>
                </div>
            </form>
        </div>

        <!-- Result Section -->
        <?php 
        if(isset($_POST['submit'])){
            $lahir = new DateTime($_POST['tanggal_lahir']);
            $today = new DateTime($_POST['tanggal_today']);
            $res = date_diff($lahir, $today);
        ?>
        <div class="result-row my-4">
            <div class="result-card">
                <i class="fas fa-calendar-alt text-primary fa-2x"></i>
                <p class="mt-2"><?php echo $res->y; ?> Tahun</p>
            </div>
            <div class="result-card">
                <i class="fas fa-calendar-check text-success fa-2x"></i>
                <p class="mt-2"><?php echo $res->m; ?> Bulan</p>
            </div>
            <div class="result-card">
                <i class="fas fa-calendar-day text-warning fa-2x"></i>
                <p class="mt-2"><?php echo $res->d; ?> Hari</p>
            </div>
            <div class="result-card">
                <i class="fas fa-clock text-info fa-2x"></i>
                <p class="mt-2"><?php echo $res->h; ?> Jam</p>
            </div>
            <div class="result-card">
                <i class="fas fa-hourglass-half text-danger fa-2x"></i>
                <p class="mt-2"><?php echo $res->i; ?> Menit</p>
            </div>
        </div>
        <?php } ?>
    </main>
    <!-- Tambahkan di bawah form atau hasil -->
    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali ke Halaman Utama
        </a>
    </div>

    <br>


    <footer>
        Copyright &copy; Yuliana - <?= date("Y") ?>
    </footer>
</body>

</html>