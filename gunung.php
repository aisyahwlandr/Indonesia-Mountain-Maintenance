<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/btnlogin.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Gunung</title>
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



    <div class="container pt-4">
        <h2 id="gunungind">Gunung Indonesia</h2>
        <div class="row d-flex">
            <div class="col-md-4" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="250" data-aos-offset="0">
                <iframe class="container-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26436.02296160743!2d116.4367061843457!3d-8.411252057485726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc2d800216cccf%3A0x3c03cdbf11d30a1e!2sMount%20Rinjani!5e1!3m2!1sen!2sid!4v1697183737671!5m2!1sen!2sid" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="250" data-aos-offset="0">
                    <h4 align="justify">Gunung Rinjani</h4>
                    <h6>Lokasi : Lombok, Nusa Tenggara Barat</h6>
                    <p align="justify">Gunung ini adalah gunung tertinggi kedua di Indonesia di luar Papua, dengan ketinggian sekitar 3.726 meter di atas permukaan laut. Gunung Rinjani terkenal karena danau kalderanya yang besar, Danau Segara Anak, serta pemandangan alam yang menakjubkan.
                    </p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0">
                <iframe class="container-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20634.278716312117!2d112.91717597595793!3d-8.108435413964369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd63e89e1d817bb%3A0x9c14d4ed3c488f54!2sGn.%20Semeru!5e1!3m2!1sid!2sid!4v1697185133609!5m2!1sid!2sid" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="250" data-aos-offset="0">
                    <h4 align="justify">Gunung Semeru</h4>
                    <h6>Lokasi : Kab.Malang dan Lumajang, Jawa Timur</h6>
                    <p align="justify">Gunung ini merupakan gunung tertinggi di Pulau Jawa dan juga gunung tertinggi ketujuh di Indonesia dengan ketinggian sekitar 3.676 meter di atas permukaan laut.
                    </p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="750" data-aos-offset="0">
                <iframe class="container-fluid" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d16258.951143682656!2d112.9473045!3d-7.9427485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd637aaab794a41%3A0xada40d36ecd2a5dd!2sGn.%20Bromo!5e1!3m2!1sid!2sid!4v1697185003718!5m2!1sid!2sid" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="250" data-aos-offset="0">
                    <h4 align="justify">Gunung Bromo</h4>
                    <h6>Lokasi : Probolinggo dan Pasuruan, Jawa Timur</h6>
                    <p align="justify">Gunung Bromo memiliki ketinggian sekitar 2392 mdpl. Memiliki kawah yang menjadi objek utama yang sering dikunjungi oleh wisatawan asing maupun lokal. Gunung Bromo juga di kenal dengan sunrise dan sunsetnya.
                    </p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="1000" data-aos-offset="0">
                <iframe class="container-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8693.341410878773!2d109.21037993433606!3d-7.242148560692201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ff3184df71285%3A0x79839e3468a02f5b!2sGn.%20Slamet!5e1!3m2!1sid!2sid!4v1697184884698!5m2!1sid!2sid" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="250" data-aos-offset="0">
                    <h4 align="justify">Gunung Slamet</h4>
                    <h6>Lokasi : Provinsi Jawa Tengah</h6>
                    <p align="justify">Gunung Slamet adalah gunung berapi yang terletak di Pulau Jawa, Indonesia. Gunung ini merupakan salah satu gunung tertinggi di Pulau Jawa dengan ketinggian sekitar 3.428 meter di atas permukaan laut.
                    </p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="1250" data-aos-offset="0">
                <iframe class="container-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60356.81090430093!2d111.64528682486895!3d-7.84498863410538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd61eff4caffdc7%3A0x25772a56d121c37!2sGunung%20Prau!5e1!3m2!1sen!2sid!4v1697185210573!5m2!1sen!2sid" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="250" data-aos-offset="0">
                    <h4 align="justify">Gunung Prau</h4>
                    <h6>Lokasi : Dieng, Jawa Tengah</h6>
                    <p align="justify">Gunung ini memiliki ketinggian puncak 2.590 mdpl. Prau terkenal karena pemandangan alamnya yang menakjubkan, terutama saat matahari terbit. Gunung ini juga dikenal sebagai "Bukit Teletubbies" karena bentuknya yang unik.
                    </p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="1500" data-aos-offset="0">
                <iframe class="container-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16277.657142092134!2d110.43454975128176!3d-7.455425375631912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a7b455e544767%3A0xf7af0c6e80ad2dde!2sGn.%20Merbabu!5e1!3m2!1sid!2sid!4v1697185312608!5m2!1sid!2sid" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="250" data-aos-offset="0">
                    <h4 align="justify">Gunung Merbabu</h4>
                    <h6>Lokasi : Probolinggo dan Pasuruan, Jawa Timur</h6>
                    <p align="justify">Gunung ini memiliki ketinggian sekitar 3.145 meter di atas permukaan laut. Gunung Merbabu juga terletak dekat dengan Gunung Merapi, yang seringkali terlihat di seberang lembahnya.
                    </p>
                </div>
            </div>
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