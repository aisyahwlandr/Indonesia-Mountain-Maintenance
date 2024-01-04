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
    <title>Berita</title>
</head>

<body style="background-color: #D0E7D2" ;>
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
                    <div class="sign"><svg viewBox="0 0 512 512">
                            <path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"></path>
                        </svg></div>
                    <a class="text" href="login.php" style="text-decoration: none;">Login Admin</a>
                </button>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="py-3">BERITA</h2>
        <div class="card-container" data-aos="zoom-in">
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
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>