-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 01:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'adminimm', 'PBW1234');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(3) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `terbit` date NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `terbit`, `photo`) VALUES
(1, 'Keindahan Puncak Gunung Merbabu, Dapat Ditempuh Melalui 5 Jalur Pendakian', 'Berapa Lama Mendaki Gunung Merbabu?\r\n                            Dilansir dari laman Visit Jawa Tengah, ada lima jalur pendakian resmi yang dapat ditempuh untuk mendaki Gunung Merbabu. Yaitu Selo-Boyolali, Suwanting-Magelang, Wekas-Magelang, Cuntel-Semarang, dan Thekelan-Semarang.\r\n                            <br>\r\n                            <br>\r\n                            Masing-masing jalur tersebut memiliki tantangan dan lanskap yang berbeda-beda. Yuk simak jalur pendakian Gunung Merbabu berikut.\r\n                            <br>\r\n                            <br>\r\n                            Jalur Pendakian Selo<br>\r\n                            Jalur ini termasuk jalur terfavorit bagi para pendaki, terutama pendaki pemula karena paling mudah diakses dan pemandangan yang indah. Basecamp jalur ini pun berada dekat dengan jalan raya.\r\n                            <br>\r\n                            <br>\r\n                            Perjalanan dari Basecamp, Detikers akan melewati Pos 1 - Pos 2 - Pos 3 - Sabana 1 - Sabana 2 hingga akhirnya tiba di puncak. Tantangan terbesar jalur ini adalah sumber air yang terbatas serta tanjakan batu yang cukup panjang.\r\n                            Daya tarik jalur ini adalah pemandangan gunung Merapi yang tampak dari sabana 1 dan 2. Keduanya menjadi tempat camping favorit untuk mendapatkan momen indah sunset atau sunrise. Untuk mencapai puncak perlu melanjutkan perjalanan selama 6 jam dari Sabana 2.\r\n                            <br>\r\n                            <br>\r\n                            Jalur Pendakian Wekas<br>\r\n                            Dari basecamp, Detikers dapat langsung menuju pos II karena pos I sudah tidak digunakan lagi. Jalur Wekas menjadi jalur yang cukup populer karena jarak tempuh yang lebih singkat dan memiliki banyak sumber air.\r\n                            Namun, jalur ini termasuk yang paling banyak tanjakan dan paling sedikit pos peristirahatan. Untuk sampai di puncak, Detikers harus menempuh perjalanan sekitar 8,5 jam.\r\n                            <br>\r\n                            <br>\r\n                            Jalur Pendakian Suwanting<br>\r\n                            Pendakian Suwanting cukup menantang. Jalur pendakian ini didominasi oleh tanjakan panjang dengan medan tanah berpasir yang cukup licin untuk dilalui.\r\n                            Sepanjang perjalanan dari pos 1 hingga pos 2 banyak pepohonan yang membuat perjalanan tidak terasa terlalu panas meskipun menanjak. Pejalanan dengan jaur Suwanting ini memerlukan waktu sekitar 7 jam hingga sampai ke Puncak Kenteng Songo.\r\n                            <br>\r\n                            <br>\r\n                            Jalur Pendakian Cuntel<br>\r\n                            Lama pendakian dari jalur ini sekitar 9 jam karena harus melewati sejumlah pos dengan medan yang cukup sulit. Dari pos 3 Detikers sudah bisa melihat puncak Gunung Sumbing dan Sindoro.\r\n                            Jalur Pendakian Thekelan<br>\r\n                            Perjalanan yang diperlukan untuk tiba di puncak dari basecamp adalah sekitar 8,5 jam dengan medan terjal. Untungnya, tersedia banyak tempat camping yang bisa dipilih hingga pos Watu Gubug.\r\n                            <br>\r\n                            <br>\r\n                            Wajib Daftar Online Sebelum Mendaki Gunung Merbabu!!!<br>\r\n                            Balai Taman Nasional Gunung Merbabu (BTNGMb) menerapkan sistem pendaftaran online bagi pendaki yang ingin muncak di Merbabu. Pendaki bisa klik situs pendaftaran online untuk registrasi dan menentukan jadwal pendakian.\r\n                            <br>\r\n                            <br>\r\n                            Pendaki yang sudah melakukan registrasi akan memperoleh ID, yang bisa dgunakan untuk booking online selanjutnya. Setelah registrasi, pendaki bisa melanjutkan tahap booking online dengan memilih jalur dan tanggal mendaki Merbabu.\r\n                            <br>\r\n                            <br>\r\n                            Calon pendaki tentunya bisa mempertimbangkan jalur pendakian dengan mengecek kuotanya lebih dulu. Setelah memilih jalur dan jadwal yang tepat, pendaki bisa melanjutkan ke tahap Hitung Biaya Tiket, Konfirmasi, hingga Lanjut ke Pembayaran.\r\n                            <br>\r\n                            <br>\r\n                            Harga Tiket Masuk Gunung Merbabu<br>\r\n                            Untuk perjalanan mendaki, Detikers akan dikenakan biaya administrasi atau simaksi di setiap basecamp. Dengan rincian biaya sebagai berikut:\r\n                            <br>\r\n                            Tiket Masuk Perorangan WNI Weekdays Rp5.000 dan Weekend Rp7.500\r\n                            <br>\r\n                            Tiket Masuk Rombongan WNI Weekdays Rp3.000 dan Weekend Rp4.500\r\n                            <br>\r\n                            Tiket Masuk Perorangan WNA Weekdays Rp150.000 dan Weekend Rp225.000\r\n                            <br>\r\n                            Tiket Masuk Rombongan WNA Weekdays Rp100.000 dan Weekend Rp150.000\r\n                            <br>\r\n                            Trekking, Hiking, Camping Perorangan Rp5.000 dan Rombongan Rp2.500\r\n                            <br>\r\n                            SIMAKSI Rp10.000\r\n                            <br>\r\n                            Pendakian Rp15.000\r\n                            <br>\r\n                            Asuransi Rp1.000.\r\n                            <br>\r\n                            <br>\r\n                            Jam Operasional Gunung Merbabu\r\n                            Gunung Merbabu ini bisa Detikers kunjungi selama 24 jam. Pilihlah hari dengan cuaca yang aman dan tepat untuk melakukan pendakian ya, Detikers.\r\n                            <br>\r\n                            <br>\r\n                            Tips Berkunjung ke Gunung Merbabu\r\n                            Berikut beberapa tips yang dapat Detikers jadikan sebagai referensi saat hendak berlibur, yaitu:\r\n                            <br>\r\n                            <br>\r\n                            Pastikan badan dalam kondisi prima sebelum pendakian.\r\n                            Bawalah kamera untuk mendapatkan foto terbaik.\r\n                            Waktu terbaik untuk berkunjung ke Gunung Merbabu adalah ketika libur panjang.\r\n                            Datanglah bersama orang-orang tercinta untuk sensasi liburan yang lebih berkesan.\r\n                            Gunakan jasa agen wisata untuk liburan yang praktis.\r\n                            Fasilitas Gunung Merbabu\r\n                            Meskipun masih berupa alam bebas, Gunung Merbabu merupakan objek wisata yang ramai dan menyediakan beberapa fasilitas antara lain:\r\n                            <br>\r\n                            <br>\r\n                            Area parkir\r\n                            Tempat ibadah (Musholla)\r\n                            Kamar mandi/MCK\r\n                            Tempat istirahat\r\n                            Daya Tarik Gunung Merbabu\r\n                            Masyarakat yang Ramah Tamah\r\n                            Penduduk di sekitar Gunung Merbabu sangat ramah. Mereka siap sedia membantu Detikers yang ingin mendaki gunung.\r\n                            <br>\r\n                            <br>\r\n                            Memiliki Cerita Mistis di Dalamnya\r\n                            Menurut cerita masyarakat, beberapa tempat adalah pintu gerbang istana gaib yang merupakan tempat untuk bertapa.\r\n                            <br>\r\n                            <br>\r\n                            Pemandangan yang Indah\r\n                            Saat sampai di puncak, Detikers akan disuguhkan dengan pemandangan sunrise yang cantik dan indah. Tak hanya itu, saat menuruni puncak, Detikers dan rombongan akan disuguhi udara segar dan hamparan padang rumput yang membentang.', '2023-06-25', 'image/merbabu1.jpg'),
(2, 'Pesona Keindahan Gunung Andong, Memiliki Jalur Hiking yang Cocok bagi Pendaki Pemula', 'Gunung Andong terletak di Desa Ngablak dan Tlogorjo, Grabag, Kabupaten Magelang, Jawa Tengah.\r\n                            Gunung Andong termasuk perisai gunung yang mengelilingi Kabupaten Magelang. Meski Gunung Andong masih memiliki aktivitas magma vulkanik aktif, gunung ini aman didaki bagi semua umur.\r\n                            Sejak tahun 2012, banyak wisatwan yang melakukan pendakian di gunung ini. Banyak pendaki dari golongan anak muda yang penasaran dan memiliki ketertarikan di bidang pendakian.\r\n                            Gunung Andong sendiri memiliki ketinggian 1726 mdpl. Selain itu Gunung Andong menawarkan pesona lanskap yang indah.\r\n                            Bagi pendaki pemula, Gunung Andong dapat dijadikan pilihan untuk mendaki. Selain jalurnya yang mudah diakses, jarak tempuhnya hanya sekitar 1,5-2 jam.\r\n                            Untuk menunju puncak Gunung Andong, pendaki dapat memilih beberapa basecamp titik memulai pendakian yaitu via Sawit, via Pendem, via Gugik dan Via Temu yang berada di Kecamatan Ngablak, Magelang.\r\n                            <br>\r\n                            <br>\r\n                            <b>Rekomendasi jalur yang sering dilalui yaitu via Sawit</b> \r\n                            <br>\r\n                            Perjalanan dimulai dari Desa Sawit saat menuju pos 1 terdapat jalan setapak diantara hutan pinus. Menuju pos 2 agak menanjak dan menuju pos 3 terdapat anak tangga buatan dari batu khas Gunung Andong dan terdapat mata air jernih di tepi jalan.\r\n                            Fakta unik dari Gunung Andong, terdapat empat puncak yaitu Puncak Makam, Jiwa, Andong dan Alap-Alap.\r\n                            Puncak tertinggi yaitu Puncak Andong yang  terdapat makam keramat Joko Pekik.\r\n                            Bagi pendaki yang ingin mendirikan tenda dapat dilakukan di Puncak Jiwa sebagai camping ground dan tempat istirhat sambil menunggu matahari terbit.\r\n                            Gunung Andong juga dijuluki sebagai \'Golden Sunrise\' karena menyajikan keindahan alam matahari terbit.\r\n                            Selain itu Garis merah cakrawala, terdapat lautan awan di antara lembah dan jajaran gunung-gunung.\r\n                            Kawasan Gunung Andong dapat melihat keindahan panorama Gunung Merapi, Merbabu, Sindoro, Sumbing, Prau, Ungaran dan Telomoyo.\r\n                            Kawasan Gunung Andong dikenal sebagai ekowisata karena selain bentangan alam yang indah. Terdapat komoditas pertanian unggulan di Andong.\r\n                            Pada sektor pertanian terdapat komoditas unggulan jenis kubis, cabai, wortel dan masih banyak lagi.\r\n                            Kawasan Gunung Andong juga terdapat wisata Bumi Perkemahan Hutan Pinus yang berada di Mangli Girirejo.\r\n                            Untuk mendaki ke Gunung Andong hanya dikenakan tarif sebesar Rp 10.000,- dan kas di Dusun Sawit sebesar Rp 2.000,- serta terdapat biaya parkir bagi yang membawa kendaraan pribadi.', '2023-10-05', 'image/andong.jpg'),
(3, 'Savana Bromo Hijau Lagi, Patuhi 15 Larangan di Gunung Bromo Ini', 'Sabana atau padang rumput di Gunung Bromo, Jawa Timur, sudah menghijau lagi. Sebelumnya, sabana Bromo sempat menghitam akibat kebakaran yang melanda pada Bulan September 2023. Kini, wisatawan bisa menyaksikan lagi hijaunya sabana Bromo, tepatnya di kaldera sisi selatan atau pintu masuk via Jemplang (Lumajang dan Malang).\r\n                            Beberapa spot terbaik untuk menyaksikan hijaunya Sabana Bromo, antara lain adalah di Pertigaan Jemplang, Bukit Teletubbies, Bantengan, dan Watu Gede.\r\n                            Adapun hijaunya kembali sabana Bromo jadi kabar baik bagi wisatawan. Namun, wisatawan tentunya harus ikut menjaganya.\r\n                            15 larangan di Gunung Bromo Guna menjaga kelestarian alam Gunung Bromo, bisa dengan tidak melakukan larangan yang ditetapkan pengelola. Berikut 15 larangan di Gunung Bromo:\r\n                            <br>\r\n                            <br>\r\n                            1.	Mengambil memetik memotong tumbuhan dan atau bagian-bagiannya serta benda-benda lainnya\r\n                            <br> \r\n                            2.	Menangkap melukai dan atau membunuh satwa yang ada dalam Kawasan\r\n                            <br> \r\n                            3.	Membawa binatang ke dalam maupun keluar kawasan \r\n                            <br> \r\n                            4.	Membawa minuman keras atau beralkohol \r\n                            <br> \r\n                            5.	Membawa obat-obatan terlarang seperti putau, heroin, ganja dan sejenisnya. \r\n                            <br> \r\n                            6.	Membawa alat musik dan alat bunyi-bunyian lainnya. \r\n                            <br> \r\n                            7.	Membawa alat elektronik seperti radio komunikasi (Handy Talky) radio tape dll, kecuali jam tangan\r\n                            <br>  \r\n                            8.	Membawa senjata api senapan angin bahan peledak dan senjata tajam lainnnya.\r\n                            <br>  \r\n                            9.	Membawa alat-alat yang lazim digunakan untuk berburu seperti senjata api senapan, panah dll. \r\n                            <br> \r\n                            10.	Membawa bahan detergen dan bahan pencemaran lainnya yang membahayakan bagi lingkungan. \r\n                            <br> \r\n                            11.	Membawa berbagai jenis cat termasuk cat semprot dan jenis pewarna lainnya. \r\n                            <br> \r\n                            12.	Melakukan vandalisme perusakan fasilitas wisata dan tempel menempel pada kawasan. \r\n                            <br> \r\n                            13.	Membuang sampah dalam kawasan dan tidak membawa turun kembali sampah bawaannya.\r\n                            <br>  \r\n                            14.	Membuat api unggun dan atau perapian di dalam kawasan yang dapat menimbulkan kebakaran hutan. \r\n                            <br> \r\n                            15.	Melakukan perbuatan asusila', '2023-10-24', 'image/bromohijau.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `asaldaerah` varchar(50) NOT NULL,
  `jeniskelamin` char(1) NOT NULL,
  `nokerabat` varchar(50) NOT NULL,
  `namagunung` varchar(50) NOT NULL,
  `tglnaik` date NOT NULL,
  `tglturun` date NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `nama`, `asaldaerah`, `jeniskelamin`, `nokerabat`, `namagunung`, `tglnaik`, `tglturun`, `photo`) VALUES
(1, 'Aisyah Wulandari', 'Cisauk', 'P', '0813456789', 'Rinjani', '2023-12-01', '2023-12-02', 'image/ava3.jpg'),
(2, 'Danu Dwi Cahyo', 'Legok', 'L', '081987654', 'Slamet', '2023-11-25', '2023-11-26', 'image/ava4.jpg'),
(5, 'Farhan Wirdiyan', 'Legok', 'L', '0813567893', 'Salak', '2023-11-18', '2023-11-19', 'image/ava5.jpg'),
(12, 'Rezi Dwi Pradana', 'Pasar Kemis', 'L', '082875912', 'Lawu', '2023-12-07', '2023-11-08', 'image/ava6.jpg'),
(14, 'M. Rizqi Aryobimo', 'Kelapa Dua', 'L', '0815683647', 'Ijen', '2023-12-04', '2023-12-05', 'image/ava7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
