<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cardberita.css" rel="stylesheet">
    <link href="css/btnlogin.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Home</title>
    <style>
        /* video */
        .video-container {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            overflow: hidden;
        }

        .video-container iframe {
            width: 45%;
            height: 35vh;
            border-radius: 15px;
        }

        @media (max-width: 767px) {
            .video-container iframe {
                height: 60vw;
            }
        }

        /* icon carousel */
        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%231D9183' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%231D9183' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
        }

        /* card pengumuman */
        .custom-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .custom-card:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body style="background-color: #D0E7D2">
    <nav class="navbar navbar-expand-lg px-4 sticky-top" style="background-color: #186F65;">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-white" href="index.php">Indonesia Mountain Maintenance</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" ia-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php#announcement">Pengumuman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="gunung.php">Gunung</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="berita.php">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="pengunjung.php">Pengunjung</a>
                    </li>
                </ul>
                <button class="btn-login-custom">
                    <div class="sign">
                        <svg viewBox="0 0 512 512">
                            <path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"></path>
                        </svg>
                    </div>
                    <a class="text" href="login.php" style="text-decoration: none;">Login Admin</a>
                </button>
            </div>
        </div>
    </nav>

    <div class="cover" style="background-image:url(image/gunung.jpg);
    background-size: cover;
    width: 100%;
    height: 100vh;">
        <div class="container">
            <div class="p-5 text-center bg-transparent">
                <h2 class="text-body-emphasis my-4">PANJATLAH GUNUNG AGAR ANDA BISA MELIHAT DUNIA <br>BUKAN AGAR DUNIA
                    BISA MELIHAT ANDA</h2>
                <p class="lead">Setiap gunung adalah panggilan untuk petualangan yang baru</p>
            </div>
        </div>
    </div>

    <div class="video-container">
        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <center>
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/v8vbVUvhMO0" title="Gunung Bromo | Cinematic Drone Video" frameborder="0" allowfullscreen></iframe>
                    </center>
                </div>
                <div class="carousel-item">
                    <center>
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/RioTySOvqto" title="Gunung Bromo | Cinematic Drone Video" frameborder="0" allowfullscreen></iframe>
                    </center>
                </div>
                <div class="carousel-item">
                    <center>
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/ThiyIgOCBFg" title="Gunung Bromo | Cinematic Drone Video" frameborder="0" allowfullscreen></iframe>
                    </center>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="container">
        <h2 id="announcement">PENGUMUMAN</h2>
        <div class="row">
            <div class="col-md-4 g-4" data-aos="flip-up">
                <div class="card custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Persiapan Pendakian:</h5>
                        <p class="card-text" align="justify">1. Daftar: Pendaki harus mendaftar sebelum tanggal pendakian di situs web resmi atau kantor pusat kami.<br>
                            2. Peralatan: Pastikan bawa peralatan pendakian lengkap, termasuk keselamatan, pakaian hangat, tenda berkualitas, dan makanan tahan lama.<br>
                            3. Izin: Periksa dan bawa izin pendakian yang diperlukan untuk perjalanan Anda.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 g-4" data-aos="flip-up" data-aos-duration="1000">
                <div class="card custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Penting untuk Diperhatikan:</h5>
                        <p class="card-text" align="justify">1. Cuaca di daerah pegunungan dapat berubah dengan cepat. Pastikan Anda siap dengan perlengkapan cuaca yang sesuai.<br>
                            2. Jika Anda merasa tidak sehat atau memiliki kondisi medis tertentu, pertimbangkan kembali keputusan Anda untuk mendaki gunung.<br>
                            3. Selalu patuhi arahan dari petugas pendakian dan petugas konservasi alam.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 g-4" data-aos="flip-up" data-aos-duration="2000">
                <div class="card custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Peraturan Penting:</h5>
                        <p class="card-text" align="justify">1. Pengelolaan Sampah: Selalu membawa kantong sampah dan membawa sampah Anda kembali ke bawah gunung. Jaga kebersihan lingkungan.<br>
                            2. Penggunaan Api: Larangan merokok atau membuat api kecuali di area yang disediakan.<br>
                            3. Konservasi Alam: Hargai kehidupan liar dan jangan mengganggu flora dan fauna setempat.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="container">
        <h2 class="py-3">BERITA TERKINI</h2>
        <div class="card-container" data-aos="zoom-in" data-aos-duration="2500">
            <?php
            $hasil = mysqli_query($db, "SELECT * FROM berita");

            while ($row = mysqli_fetch_object($hasil)) {
            ?>
                <div class="card-edit">
                    <div class="card-details">
                        <img src="<?php echo $row->photo ?>" style="width:100%; height: 200px;" class="card-img-top" alt="...">
                        <a class="text-title" style="text-decoration:none;" align="justify" href="page.php?id=<?= $row->id ?>"><?php echo $row->judul ?></a>
                        <small class="text-body-secondary"><?php echo $row->terbit ?></small>
                        <p class="text-body" align="justify"><?php $row->deskripsi;
                                                                $limitedcontent = substr($row->deskripsi, 0, 300);
                                                                echo $limitedcontent . '...';
                                                                ?></p>
                    </div>
                    <a class="card-button text-center" style="text-decoration: none;" href="page.php?id=<?= $row->id ?>">Baca Selengkapnya</a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>


    <div class="container" style="background-color: #D0E7D2;">
        <footer class="py-4 my-4">
            <ul class="nav justify-content-center border-bottom border-dark pb-3 mb-3">
                <li class="nav-item" style="margin: 10px;">
                    <a href="#" target="_blank" class="nav-link px-2" style="color: #186F65; text-decoration: none; font-weight: bold; font-size: 1.2em;">
                        <i class="bi bi-envelope"></i> EMail
                    </a>
                </li>
                <li class="nav-item" style="margin: 10px;">
                    <a href="https://www.instagram.com/" target="_blank" class="nav-link px-2" style="color: #186F65; text-decoration: none; font-weight: bold; font-size: 1.2em;">
                        <i class="bi bi-instagram"></i> Instagram
                    </a>
                </li>
                <li class="nav-item" style="margin: 10px;">
                    <a href="https://www.facebook.com/" target="_blank" class="nav-link px-2" style="color: #186F65; text-decoration: none; font-weight: bold; font-size: 1.2em;">
                        <i class="bi bi-facebook"></i> Facebook
                    </a>
                </li>
                <li class="nav-item" style="margin: 10px;">
                    <a href="https://www.twitter.com/" target="_blank" class="nav-link px-2" style="color: #186F65; text-decoration: none; font-weight: bold; font-size: 1.2em;">
                        <i class="bi bi-twitter"></i> Twitter
                    </a>
                </li>
            </ul>
            <p class="text-center" style="color: #fff; background-color: #186F65; padding: 10px; border-radius: 10px; margin: 10px;">
                &copy; 2023 Indonesia Mountain Maintenance
            </p>
        </footer>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        // Activate the carousel
        var myCarousel = new bootstrap.Carousel(document.getElementById('imageCarousel'), {
            interval: 2000, // Adjust the interval as needed (in milliseconds)
            wrap: true // Set to false if you don't want it to loop
        });
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>