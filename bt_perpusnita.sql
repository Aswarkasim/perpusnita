-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jul 2020 pada 08.32
-- Versi Server: 10.1.32-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bt_perpusnita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `kd_anggota` varchar(20) NOT NULL,
  `nm_anggota` varchar(100) NOT NULL,
  `kelamin` enum('L','P') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status_pinjam` enum('Bebas','Pinjam') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '0',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`kd_anggota`, `nm_anggota`, `kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telepon`, `foto`, `status_pinjam`, `username`, `password`, `is_active`, `date_created`) VALUES
('M0013', 'Ahmad Azzam Al Asyraf ', 'L', 'Islam', 'Bandar Lampung', '1996-08-02', 'Jl. Bogen II/19A Way Jepara, Lampung Timur', '085643660660', '', 'Pinjam', '0', '0', 0, '2020-01-14 23:45:27'),
('AG163218924907350', 'Aswar kasim', 'L', 'Islam', 'asdsd', '2020-01-15', 'Karossa', '213213', 'ARNI_NOISE.jpeg', 'Bebas', '0', '0', 0, '2020-01-14 23:51:08'),
('AG203137685579602', 'Arnanda', 'P', 'Islam', 'Karossa', '2020-03-02', 'jl. xxxx', '43423', 'ARNANDA1.jpeg', 'Bebas', '0', '0', 0, '2020-03-31 13:39:21'),
('sdfsdfs', 'Aswar Kasim Asdsd', 'L', 'Islam', 'Pangale', '2020-04-14', 'Jl. Dg. Hayo', '223432', 'Assa_sendiri.jpg', 'Bebas', 'aswarkasim', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1, '2020-04-11 06:11:47'),
('490585272313166', 'Masri', 'L', 'Islam', 'Luwu', '2020-07-17', 'Jl. Mushab', '2352345', '', 'Bebas', 'masri', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1, '2020-07-17 01:44:49'),
('436492387018905', 'Udin', 'L', 'Islam', 'Luwu', '2020-07-31', 'Jl. Mushab', '2352345', '', 'Bebas', 'udin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1, '2020-07-17 01:46:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `kd_buku` char(6) NOT NULL,
  `judul_buku` varchar(200) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `jumlah_halaman` int(4) NOT NULL,
  `bonus` varchar(20) NOT NULL,
  `bahasa` varchar(20) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `sinopsis` text NOT NULL,
  `lokasi_rak` varchar(20) NOT NULL,
  `kd_penerbit` char(4) NOT NULL,
  `kd_kategori` char(4) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_buku`
--

INSERT INTO `tbl_buku` (`kd_buku`, `judul_buku`, `isbn`, `penulis`, `tahun_terbit`, `jumlah_halaman`, `bonus`, `bahasa`, `jumlah`, `cover`, `sinopsis`, `lokasi_rak`, `kd_penerbit`, `kd_kategori`, `date_created`) VALUES
('B00001', 'Membangun Web Interaktif dengan Adobe Dreamweaver CS5.5, PHP & MySQL  ', '9789792932546', 'Wahana Komputer', 2012, 206, '-', 'Indonesia', 0, 'bukuDefault.jpg', '<p>Adobe Dreamweaver CS5.5 merupakan aplikasi web editor paling lengkap untuk membangun sebuah aplikasi website. Dengan berbagai kemudahan serta fitur yang dimiliki membuat aplikasi ini menjadi pilihan utama bagi kebanyakan pengembang website. Dalam membangun aplikasi website, pengguna sangat dimanjakan karena tidak perlu mengetikkan kode HTML satu persatu. Sedangkan untuk menghasilkan sebuah aplikasi web interaktif dan dinamis diperlukan suatu bahasa pemrograman server side yang andal. PHP merupakan salah satu bahasa pemrograman server side andal yang digunakan oleh kebanyakan pengembang web. Jika digabungkan dengan database MySQL, keduanya mampu menghasilkan suatu aplikasi web database yang sempurna. Buku ini mengajarkan kepada Anda tentang penggunaan Adobe Dreamweaver CS5, PHP, serta MySQL untuk membangun sebuah website interaktif. Dengan pembahasan yang dilakukan secara step by step, diharapkan Anda dapat dengan mudah mencerna setiap materi yang disajikan.</p>\r\n\r\n<p>Lebih lengkap, buku ini membahas:</p>\r\n\r\n<p>&bull; Bab 1 Mengoperasikan Adobe Dreamweaver CS5.5</p>\r\n\r\n<p>&bull; Bab 2 Mengelola Website dengan Adobe Dreamweaver</p>\r\n\r\n<p>&bull; Bab 3 Menggunakan Bahasa Pemrograman PHP</p>\r\n\r\n<p>&bull; Bab 4 Membuat Website Secara Teori</p>\r\n\r\n<p>&bull; Bab 5 Membuat Website dengan PHP dan MySQL</p>\r\n', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00003', 'Semua Bisa Menjadi Programmer Java - Basic Programming', '9789792781090', 'Yuniar Supardi', 2010, 512, '-', 'Indonesia', 2, 'bukuDefault1.jpg', '<p>Buku Basic Programming Java ini merupakan buku yang dapat memandu pembaca mendalami pemrograman Java. Materi pembahasan disajikan dalam beberapa sesi. Setiap sesi dapat Anda ikuti tanpa harus berurutan. Dalam sesi awal membahas dasar dan pengantar Java. Dan sesi selanjutnya membahas beberapa editor bahasa pemrograman Java yang populer, seperti NetBeans, Jcreator, Gel hingga Notepad, serta instruksi algoritma (pencabangan, pengulangan, array dan lain-lain). Selain itu, Anda juga akan mengetahui desain database dengan ERD dan Normalisasi, serta perbedaannya. Topik yang dibahas dalam buku mencakup: - Mengenal Java - Komponen Program Java - Program Pencabangan dan Pengulangan - Variabel Array, Angka (Number) dan Karakter - String dan Konversi Data - PBO, Sistem I/O dan Stream - JFrame dan Layout Manager - Event, GUI di Java - Desain Database</p>\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00004', 'Pemrograman Dasar Visual Basic 2013', '9786020249711', 'Rully Yulian', 2014, 264, '-', 'Indonesia', 0, 'bukuDefault2.jpg', '<p>Merupakan salah satu sumber pembelajaran pemrograman Visual Basic 2013 yang disusun dengan menitikberatkan pada praktik secara langsung dengan penjelasan teori yang singkat, jelas, dan disertai gambar. Para pembaca diharapkan dapat lebih memahami konsep</p>\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00005', 'Visual Basic 2013 untuk Pemula ', '9786020230788', 'Jubilee Enterprise ', 2014, 160, '-', 'Indonesia', 10, 'bukuDefault3.jpg', '<p>Jika Anda ingin belajar pemrograman yang gampang, maka mulailah dengan Visual Basic. Yang Anda butuhkan hanyalah MS Windows 7 atau 8, dan MS Visual Studio 2013 yang dapat di-download dengan mudah dari situs Microsoft. Setelah itu, beli dan baca buku ini. Dengan pembahasan yang sangat mudah dimengerti oleh orang awam sekalipun, Anda akan diajarkan bagaimana cara membuat aplikasi berbasis desktop secara cepat dan mudah menggunakan Visual Basic. Anda akan mengenal berbagai kontrol, properti, function, procedure, dan unsur-unsur lainnya dalam Visual Basic untuk pembuatan aplikasi, seperti penghitung luas dan keliling persegi empat, picture viewer, menggerakkan gambar menggunakan anak-anak panah, penghitung deposito, simulator kredit pemilikan mobil, dan sebagainya. Membahas dengan gaya bahasa yang sangat sederhana namun praktis sehingga para pelajar yang baru ingin mengenal dunia pemrograman pun bisa mengikuti dengan baik. Di akhir bab, Anda akan mempelajari cara memublikasikan aplikasi sehingga bisa diklik dari tombol Start dan mengenal berbagai tip dan trik Visual Basic, seperti menciptakan jendela aplikasi yang transparan hingga mengetahui situs online gratis untuk pembuatan ikon.</p>\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00006', 'Professional Graphic Design With Coreldraw Edisi Revisi + Cd', '9786020248950', 'Suparno Sastra M', 2014, 144, 'CD', 'Indonesia', 0, 'bukuDefault4.jpg', '<p>Merupakan buku yang berisi tutorial dan latihan praktis aplikasi CorelDraw untuk membuat berbagai desain proyek kreatif bagi keperluan personal dan bisnis, maupun company. Pembaca dapat menemukan berbagai cara untuk membuat bentuk-bentuk desain proyek kreatif di bidang desain grafis, publishing, advertising, properti, akademik, entertain maupun bidang lain, di mana pembahasannya disajikan langkah demi langkah (step by step) yang dilengkapi ilustrasi dan gambar visual untuk mempermudah pembaca dalam mengaplikasikan buku ini. Sebagai program pengolah desain grafis yang familier dan paling diminati di kalangan desainer grafis, CorelDRAW dapat dieksplorasi melalui tool-tool maupun efek yang bisa menghasilkan berbagai bentuk desain yang inovatif dan ekspresif dengan komposisi warna yang sangat menarik. Selain itu juga dilengkapi dengan fasilitas pendukung yang sangat memudahkan bagi para desainer grafis dalam membuat objek-objek unik dan kreatif. Setelah menggunakan buku ini, pembaca dapat membuat sendiri bentuk-bentuk kreasi desain grafis, lengkap dengan efek-efek spesial secara profesional untuk keperluan segala bidang. Materi yang dibahas dalam buku mencakup: - Clothing Part 1: Desain T-Shirt - Desain Kalender Meja - Clothing Part 2: Desain Jaket - Baliho Real Estate - Seni Corat-coret: Graffiti - Desain Kartu Ultah - Desain Baliho Ruko - Desain Poster Konser - Logo Production House - Desain Company Profile - Desain Brosur Perumahan</p>\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00007', 'Membuat Website Mudah dan Praktis dengan Weebly ', '9786020246987', 'Fathurrahman , S.Pd', 2014, 132, '-', 'Indonesia', 10, 'bukuDefault9.jpg', '<p>Saat ini mungkin sudah banyak buku yang mengulas secara detail tentang pembuatan website, baik menggunakan photoshop, dreamweaver, hingga software yang menyediakan fasilitas untuk membangun sebuah website. Tetapi pada kenyataannya, buku-buku tersebut hanya bisa dimengerti oleh orang yang memang sudah mengerti tentang dasar pembuatan web atau orang yang sekolah di bidang pembuatan website. Dalam buku ini, Anda akan dituntun secara step by step dalam membangun website tanpa perlu mengerti bahasa pemrograman seperti HTML, PHP, Javascript, dan lainnya. Anda hanya perlu menggunakan tools yang disediakan dengan cara yang mudah dan praktis tanpa harus melakukan edit programming dalam tiap tahap membangun website milik Anda, dan tentunya dengan hasil tampilan layaknya website profesional. Lebih jauh, pembahasan dalam buku mencakup: - Pengenalan awal weebly - Tutorial registrasi weebly - Menentukan tema, judul, dan deskripsi website - Penyusunan pages dan menu bar website - Tutorial desain halaman website - Publishing dan penggunaan hyperlink website - Pembelian domain dari weebly - Mendaftarkan website ke search engine</p>\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00008', 'Menyelesaikan Website 12 Juta secara Profesional ', '9786020226071', 'Agus Saputra, Feni Agustin, CV ASFA Solution ', 2013, 200, '-', 'Indonesia', 10, 'bukuDefault5.jpg', '<p>Rasanya tidak ada perusahaan yang tidak menginginkan website company profile. Hampir semua perusahaan memiliki web tersebut, karena dengan sebuah website company profile, dapat mewakili perusahaan untuk mempromosikan, mempresentasikan, mem-branding-kan, bahkan meningkatkan citra perusahaan kepada masyarakat. Dengan website itu juga, perusahaan mendapatkan daya saing dengan perusahaan lain. Website yang baik mencirikan seberapa besar perusahaan tersebut. Buku ini merupakan salah satu kompilasi project bernilai 12 Juta Rupiah atau setara $1,200 yang berhasil diselesaikan penulis selama menjabat sebagai pemimpin di ASFA Solution (Perusahaan Software Development berbasis di Cirebon). Pada buku ini dibahas mengenai perancangan dasar, dari mulai Alur Perancangan dan Database, DFD, DFD Level, Flowchart, ERD, Relasi Antartabel, hingga pada implementasi Website. Sehingga dari segi perancangan tersebut menghasilkan suatu Exclusive Project berbasis Website. Penasaran?.. Beli saja bukunya ..</p>\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00009', 'Bikin Website Dengan Aplikasi-aplikasi Gratis + CD  ', '9789798773655', 'Mulyana Sandi', 2014, 112, 'CD', 'Indonesia', 10, 'bukuDefault6.jpg', '<p>Banyak cara dalam membuat sebuah web mulai dari mengenal bahasa pemograman, mengenal server hingga bagaimana meng-upload-nya. Berbeda dengan buku-buku yang lain, buku ini akan membahas secara singkat dan jelas bikin website sehingga Anda akan mudah memahami serta menguasai pembuatan web dari nol hingga jadi. Dengan disertainya CD pada buku ini, Anda akan semakin mudah untuk langsung bikin website dan mengimplementasikan serta mempublikasikannya secara online. Pembahasan dalam buku ini: - Penggunaan Aplikasi Gratis - Web Server dengan XAMPP - Pemrograman PHP - Content Management System (CMS) - Domain dan Hosting</p>\r\n', 'Rak Buku', 'P003', 'K002', '2020-01-15 02:41:08'),
('B00010', 'Cara Mudah dan Praktis Bekerja dengan AutoCAD + CD', '9786020240008', 'Suparno Sastra M', 2014, 300, 'CD', 'Indonesia', 10, 'bukuDefault7.jpg', '<p>Alternatif mendasar untuk memenuhi tuntutan kebutuhan penggunaan CAD (Computer Aided Design) dalam proses pembuatan desain yang berkualitas adalah tersedianya perangkat keras yang canggih dan resource yang andal. Target yang selalu digunakan oleh perusahaan adalah menjadi yang pertama dan terbaik pada sebuah ajang kompetisi desain, serta unggul dalam persaingan (competitive advantage). Untuk itu dalam sebuah perusahaan rekayasa engineering serta studio desain visual maupun yang lain, pastinya tidak pernah bisa lepas dari adanya tuntutan seperti hal tersebut di atas. Buku ini dapat digunakan oleh semua pemakai komputer grafis, animator, desainer web, Grafik - CAD maupun desainer manufaktur dalam semua bidang teknik serta praktisi profesional yang bergerak dalam bidang teknik, industri, rancang bangun, dan pemodelan desain visual. Juga bisa digunakan oleh semua mahasiswa jurusan teknik maupun pelajar. Setelah membaca buku ini, Anda akan memiliki skill dan pengetahuan praktis serta aplikatif tentang cara membuat model desain teknik dalam segala bidang maupun bekerja lintas software menggunakan software AutoCAD berbagai release (All release relevention). Materi yang dibahas dalam buku mencakup: - Aplikasi Fitur-Fitur Workshop - Aplikasi Perangkat Gambar dan Edit - Jenis Eksekusi Perintah AutoCAD - Notasi Text, Dimension, dan Inquiry - Perangkat Kendali Tampilan dan Utility - Bekerja dengan Gambar Block - Teknik Pencetakan Gambar - Setting UCS dan Pra-Desain 3D - Menggambar Objek Solid 3D dan Surface - 3D Modeling untuk Berbagai Industri Manufakturing dan Rancang Bangun - Bekerja Lintas Software - Finishing, Teknik Presentasi Desain, dan Membuat Animasi Desain</p>\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00011', 'Jago Corel Draw X6 Untuk Pemula dan Orang Awam Edisi Terbaru', '9786029146479', 'Ibrahim Hanif ', 2014, 0, 'CD Tutorial ', 'Indonesia', 10, 'bukuDefault8.jpg', '<p>CorelDraw adalah aplikasi pengolah gambar atau pembuatan objek (making Image) yang sangat populer dan banyak digunakan oleh berbagai kalangan dalam berbagai bidang. Hal ini dikarenakan CorelDraw memiliki banyak sekali keunggulan dalam kualitas gambar. Buku Jago CorelDraw X6 merupakan one-stop tutorial/reference yang berisi langkah-langkah cepat dan mudah dalam menguasai CorelDraw X6. Dalam buku ini, Anda akan mendapatkan beragam langkah praktis tentang bagaimana menciptakan gambar-gambar menawan untuk berbagai keperluan. Buku ini sangat ideal baik bagi pemula (yang baru belajar CorelDraw) maupun bagi ahli/pakar yang ingin mengetahui fitur canggih apa saja yang terdapat dalam versi terbaru CorelDraw. Buku Jago Coreldraw X6 berisi: - Fasilitas Dasar CorelDraw X6 - Dasar Kreasi CorelDraw X6 - Fungsi Curve Tool dan Membuat Desain Text Sederhana - Latihan Membuat ICON Sederhana - Latihan Membuat Objek bintang dengan PolygoneTool - Latihan Membuat Objek dengan Kotak/RectangleTool (lemari Es) - Latihan Membuat Objek dengan Lingkaran. - Latihan Membuat Objek dengan Polygone - Latihan Membuat Kepingan CD/DVD - Latihan Membuat Kotak 3D - Tips Optimasi Font pada CorelDraw X6 - Tips Membuat Kalender - Tips Membuat Corel Barcode di CorelDraw X6 Semua materi disampaikan dengan bahasa sehari-hari dengan semudah, sedetail, dan sesederhana mungkin agar dapat dimengerti dan dipelajari oleh siapa saja dengan mudah. Buku ini juga berisikan CD TUTORIAL yang akan membimbing setiap orang dalam menguasai CorelDraw X6 secara step by step dan otodidak sehingga siapapun dapat dengan cepat untuk jago CorelDraw X6 yang merupakan versi teranyar. Buku ini sangat penting untuk dimiliki dan menjadi referensi terbaik dalam menguasai CorelDraw X6 dari nol hingga mahir.</p>\r\n', 'Rak Buku', '', 'K002', '2020-01-15 02:41:08'),
('B00012', '30 Menit Mahir Membuat Jaringan Komputer ', '9786029146387 ', 'Alan Nur Aditya', 2013, 0, '-', 'Indonesia', 10, 'bukuDefault10.jpg', '<p>Buku 30 MENIT MAHIR MEMBUAT JARINGAN KOMPUTER akan memandu dan membimbing semua orang untuk membuat jaringan komputer dari nol hingga jadi dalam waktu sekejap secara otodidak. Karena buku ini bersifat praktis dan tutorial yang langsung pada saasaran yang disampaikan dengan bahasa yang mudah dipahami oleh siapapun sehingga semua orang dapat mengikuti langkah-langkah pembangunan jaringan komputer yang dibutuhkan. Isi buku ini mencakup seluk beluk jaringan komputer, klasifikasi, membuat jaringan komputer LAN, membuat jaringan nirkabel/wireless, hardware, setting printer, setting jaringan, setting internet sharing hingga keamanan jaringan yang telah dibuat. Dengan adanya buku ini siapapun bisa membangun atau membuat jaringan komputer sendiri dengan murah meriah baik untuk keperluan pribadi maupun untuk usaha hingga keperluan perkantoran/organiasai/lembaga/perusahaan dalam skala besar.</p>\r\n', 'Rak Buku', '', 'K002', '2020-01-15 02:41:08'),
('B00013', 'Seri 30 Menit: Menguasai Adobe Fireworks CS6  ', '9789792940206 ', 'Elcom ', 2014, 224, '-', 'Indonesia', 10, 'Beriga.jpg', '<p>Perkembangan teknologi internet sangatlah pesat yang ditunjukkan dengan perkembangan web sebagai sebuah kebutuhan. Tampilan-tampilan web saat ini menunjukkan peningkatan yang cukup signifikan dengan desain yang sungguh variatif, menarik, dan terkesan asyik untuk dilihat. Salah satu penentu dalam menghasilkan sebuah desain web yang baik adalah software desainnya. Adobe Fireworks merupakan salah satu aplikasi paling populer yang digunakan untuk mendesain website. Fireworks memberikan fasilitas desain secara visual serta memberikan berbagai teknologi desain yang mumpuni untuk menghasilkan sebuah desain web yang menarik. Software Fireworks ini telah digunakan oleh jutaan desainer web untuk menghasilkan karya-karya desain web bernilai tinggi. Dalam perkembangannya, Adobe Fireworks telah mencapai versinya yang terbaru atau lebih dikenal dengan Adobe Fireworks CS5. Fitur-fitur yang dimiliki semakin lengkap dan andal sehingga membuat pengguna Fireworks CS6 makin dapat berkreasi dan berinovasi dengan bebas dalam mendesain web. Fitur baru pada Adobe Dreamweaver CS6 ini di antaranya adalah Extract CSS Object Properties, Export Slices as CSS Sprite, Creating jQuery Mobile Themes, Performance Improvements, Set Opacity Separately for Fill and Stroke, Color Selection Improvement, Set Angle for Gradient or Pattern Fills, New fw.png Filename Extension, Miscellaneous Enhancements, dan API Enhancements. Semua fitur andal di atas akan dibahas ringkas dalam buku 30 Menit Menguasai Adobe Fireworks CS6 ini. Buku ini ditulis dengan bahasa yang ringan, to the point, dan disusun berdasarkan kebutuhan pemakai sehingga mudah dipahami dan dipraktikkan.</p>\r\n', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00014', 'Mobile Web Development With Adobe Dreamweaver CS6  ', '0601011400332', 'Wahana Komputer', 2013, 200, '-', 'Indonesia', 10, '', 'Perkembangan dunia gadget pada zaman sekarang ini cukup pesat. Hal tersebut juga didukung oleh teknologi internet yang semakin dimanfaatkan oleh banyak orang. Untuk mendukung mobilitas dan gaya hidup gadget pengguna, maka dibuatlah sebuah aplikasi web berbasis mobile. Dengan menggunakan aplikasi mobile web, pengguna akan secara leluasa dan mudah untuk mengakses situs-situs tertentu tanpa keterbatasan. Perangkat yang digunakan adalah perangkat mobile yang memiliki ukuran yang kecil. Tool yang cukup powerful dalam membuat sebuah aplikasi berbasis mobile web adalah Adobe Dreamweaver CS6. Pada buku ini akan dibahas mengenai bagaimana membuat mobile web dengan menggunakan Dreamweaver CS6.\r\n\r\nLebih lengkap, buku ini akan membahas:\r\n\r\n• Bab 1 : Pengenalan Dreamweaver CS6\r\n• Bab 2 : Membuat Mobile Website\r\n• Bab 3 : Kustomisasi Mobile Web dengan Dreamweaver CS6\r\n• Bab 4 : Merancang Tema dengan ThemeRoller\r\n• Bab 5 : Menggunakan JQuery Mobile\r\n• Bab 6 : Gradient dengan CSS3\r\n• Bab 7 : Transisi dengan CSS3', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00015', 'Mudah Membuat Aplikasi Sms Gateway dengan Codeigniter ', '9786020242729', 'Wahana Komputer', 2014, 172, '-', 'Indonesia', 10, 'Kaos_tangan.jpg', '<p>Di era persaingan yang semakin ketat sekarang ini, pelayanan dan support merupakan modal utama untuk menarik dan menjaga loyalitas konsumen. Kehadiran software SMS gateway merupakan solusi praktis yang bisa digunakan sebagai media promosi sekaligus customer support. Fitur SMS Gateway yang akan dibahas di sini meliputi pengiriman massal yang memungkinkan Anda mengirim sms ke banyak penerima hanya dengan sekali klik, backup dan restore database, SMS gateway reminder yang secara otomatis mengirimkan pesan ke penerima pada momen-momen istimewa, hingga auto-respon yang mampu membalas pesan secara otomatis. Selengkapnya, buku ini akan membahas: - Sekilas SMS Gateway dan Codeigniter - PHP Object Oriented Programming - Pemrograman Codeigniter - Instalasi Gammu - Coding Cek Pulsa - Coding Phonebook - Coding Kotak Masuk - Coding Kirim SMS - Coding SMS Terkirim</p>\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00016', 'Shortcourse Series: Microsoft Excel 2013  ', '9789792940510', 'Wahana Komputer', 2013, 246, '-', 'Indonesia', 10, '', 'Microsoft Excel 2013 adalah Versi terbaru dari apliksai Spreadsheet yang teritegrasi dalam satu paket Microsoft Office 2013. Aplikasi ini hadir dengan berbagai perbaikan dan peningkatan kemampuan dibandingkan versi sebelumnya, yaitu Excel 2010. Salah satu fiturbaru yang disematkan di dalam Excel 2013 adalah diintegrasikannya Microsoft SkyDrive yang memungkinkan anda menyimpan dokumen anda secara cloud atau online, sehingga anda bisa mengakses dokumen anda dimana saja, kapan saja, dan membagikannya dengan siapa saja.\r\n\r\nBuku shortCourse Microsoft Excel 2013 ini sangat tepat bagi anda yang ingin belajar menggunkan aplikasi Excel 2013 mulai dari Nol. Pada buku ini dikombinasikan teori dan praktik yang cukup seimbang dengan harapan agar Anda menjadi benar-benar bisa menguasai Excel 2013. Semua materi akan dijabarkan secara bertahap dan praktis, serta tidak ketinggalan pula gambar dan petunjuk langkah demi langkah yang siap menuntun anda mempelajari isi buku ini dari awal hingga akhir.\r\n\r\n• Sesi I Pengenalan Microsoft Excel 2013\r\n• Sesi II Mengolah Data Excel\r\n• Sesi III Mengolah Grafik dan menambah Gambar\r\n• Sesi IV Mengolah Excel lanjut\r\n• Sesi V menggunakan Fungsi Logika\r\n• Sesi VI Mencetaj Data', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00017', 'Step By Step Menjadi Programmer Android  ', '9789792935110 ', 'Wahana Komputer', 2013, 232, '-', 'Indonesia', 10, '', 'Popularitas Android yang kian meroket bukan hanya menguntungkan penggunanya, tetapi juga para developer aplikasi, mengingat sifat Android yang open source membuat semua orang dapat dengan bebas mengembangkan maupun menciptakan berbagai aplikasi dalam platform Android.\r\n\r\nNamun, bagi programmer pemula, pengembangan aplikasi dalam platform Android juga memberikan tantangan sendiri mengingat platform Android terbilang baru. Tetapi, bukan berarti Anda akan mengalami kesulitan dalam mengembangkannya.\r\n\r\nBuku Step by Step Menjadi Programmer Androidini akan membahas secara detail langkah demi langkah untuk menjadi programmer Android, mulai dari dasar-dasar pemrograman Android hingga contoh pembuatan aplikasi sederhana. Lebih lengkapnya, buku ini membahas:\r\n\r\n&#61550; Bab 1 : Memulai Pemrograman Android\r\n&#61550; Bab 2 : Mengenal Activity dan Intents\r\n&#61550; Bab 3 : User Interface\r\n&#61550; Bab 4 : Desain User Interface Menggunakan View\r\n&#61550; Bab 5 : Data Persistent ', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00018', 'Mempercantik Tampilan Web dengan 10 Efek Memukau ', '9786020210438', 'Dadan & Kerendi Developers', 2013, 224, 'CD', 'Indonesia', 10, '', 'Dahulu kala, efek flash merupakan barang mewah untuk sebuah website. Karena untuk memunculkan efek tersebut, sebuah website harus mempunyai sebuah bandwidth yang besar. Tentu itu membutuhkan tambahan biaya. Kendala lainnya, efek flash pada sebuah website dapat memperlambat waktu loading dan sering kali tidak dapat tampil secara sempurna sehingga pengunjung website merasa terganggu.\r\n\r\nTAPI SEKARANG! Seiring dengan kemajuan teknologi, efek Flash menjadi kian mudah didapat. Tidak perlu lagi menambahkan bandwidth pada hosting karena pada umumnya hosting zaman sekarang sudah menyediakan bandwidth yang mumpuni untuk menampilkan efek flash.\r\n\r\nEfek flash ini dapat diterapkan di berbagai jenis website, seperti website berbasis Joomla, WordPress, bahkan Blogger. Jadi, lebih fleksibel dalam penerapannya. Tidak perlu takut lagi waktu loading menjadi lama. Karena dengan cara yang tepat, efek flash tetap dapat tampil dengan prima.\r\n\r\nMenampilkan efek flash pada website juga ada caranya loh, tidak asal menempatkan begitu saja. Tidak jago pemrograman Flash? Tenang saja, sekarang ini telah banyak beredar puluhan bahkan ratusan efek flash siap pakai. Yang perlu Anda lakukan hanyalah menaruh efek flash itu ke dalam halaman website. Semua solusi untuk masalah di atas terkemas dalam buku yang sedang Anda pegang ini. Yah, inilah pedoman Anda untuk menciptakan halaman website yang berbeda dari yang lain.\r\n\r\nTersedia 10 Efek Flash Memukau, yang juga bisa diterapkan pada Blogger. Jadi, tampilkan sesuatu yang berbeda dalam artikel blog Anda. Dikemas dalam bahasa yang menarik dan sedikit ilustrasi ala komik, membuat proses belajar Anda menjadi mudah dan menyenangkan.', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00019', 'Jago Membuat Website Gratis & Cepat Secara Otodidak - Edisi Terbaru  ', '9786029146509', 'Senja Nilasari ', 2014, 0, 'CD Tutorial', 'Indonesia', 10, '', 'Saat ini website menjadi media yang sangat penting dengan semakin banyaknya pengakses internet. Website dapat memberikan banyak informasi yang tidak hanya berupa teks, tetapi juga bisa berupa gambar, foto, video, dan Iain-Iain. Sehingga membuat hampir semua perusahaan kecil hingga yang berskala nasional dan berkelas dunia, sekolah-sekolah dan perguruan tinggi, instansi pemerintahan bahkan perorangan menjadikan website sebagai media promosi yang paling efektif, efisien, murah, dan tepat sasaran.\r\n\r\nNamun, yang perlu diketahui bahwa hanya website yang menarik yang biasanya diminati dan menarik perhatian untuk dikunjungi oleh para pengguna internet. Oleh karena itu, sudah seharusnya website dibuat dengan sebagus dan semenarik mungkin. Dan untuk menghasilkan website yang menarik pun dapat dilakukan oleh siapa saja, termasuk orang awam atau para pemula. Bagaimana caranya?\r\n\r\nBuku "JAGO MEMBUAT WEBSITE GRATIS & CEPAT" akan membeberkan semua teknik-teknik rahasia praktisnya secara tutorial, sistematis, detail, lengkap, dan step by step dengan bahasa sederhana yang mudah dicerna dan dipahami oleh siapapun. Dan untuk mempermudah dalam pembangunan website, buku ini juga dilengkapi dengan CD TUTORIAL yang akan memandu semua orang dari awal hingga akhir, sehingga membuat website adalah hal yang benar-benar mudah.\r\n ', 'Rak Buku', 'P004', 'K002', '2020-01-15 02:41:08'),
('B00020', 'Web Designer Must Have Book ', '979794400X', 'Su Rahman', 2013, 190, '-', 'Indonesia', 10, '', 'Kurang puas dengan pilihan template untuk website Anda?\r\n\r\nIngin membuatnya sendiri, tetapi tidak mengerti coding?\r\nTenang, apapun website Anda; WordPress, Joomla, Drupal, atau Blogger, Anda bisa membuat template sendiri tanpa coding sekalipun.\r\n\r\nDengan Artisteer, sebuah tool powerful yang dapat diandalkan oleh para web designer pemula atau profesional untuk membuat template website. Siapa pun bisa karena mudah digunakan, tidak diperlukan keahlian coding sama sekali, dan bisa dilakukan dengan durasi yang singkat.\r\n\r\nNah, buku ini memberikan tuntunan bagi siapa saja untuk dapat membuat template WordPress, Joomla, Drupal, dan Blogger sendiri, tak ketinggalan juga ada pembahasan membuat website statis menggunakan Artisteer.', 'Rak Buku', 'P005', 'K002', '2020-01-15 02:41:08'),
('B00021', 'Step By Step Mendapat Uang Via Website Periklanan ', '9786020227788', 'Su Rahman', 2013, 144, 'CD', 'Indonesia', 10, '', 'Bukan rahasia lagi jika website jaringan periklanan dapat menghasilkan pundi-pundi rupiah yang tidak terbatas, bahkan penghasil terbesar raksasa bisnis online, Google. Berasal dari jaringan periklanan AdWord dan AdSense, teknik membuat website jaringan periklanan pun diburu dan menjadi laris karena memang itu adalah pengetahuan yang langka. Dengan kemajuan teknologi, siapa saja dapat mulai mengelola bisnis jaringan periklanan dengan membuat website PPC (Pay To Click), website Traffic Exhange, dan website Penyingkat URL Premium.\r\n\r\nBuku ini memberikan tuntunan langkah demi langkah untuk membangun website penghasil uang tersebut. Tidak diperlukan pengetahuan pemrograman sedikit pun, script tersedia di dalam Bonus CD yang siap digunakan untuk mendulang pundi-pundi rupiah dari internet. Plus bonus script PHP yang bisa Anda manfaatkan untuk mendapatkan penghasilan tambahan dari Internet.\r\n\r\nDengan bahasa sedehana dan aplikatif, buku ini memberikan pembahasan tentang cara membuat:\r\n\r\n* Website PPC (Pay Per Click) dengan Sistem Bank Transfer\r\n* Website Traffic Exchange dengan Sistem Bank Transfer\r\n* Website Penyingkat URL Premium dengan Sistem Bank Transfer\r\n\r\nKetiga website tersebut adalah tool sukses untuk Anda dalam menjaring rupiah dari bisnis jaringan periklanan, dilengkapi dengan tips pengelolaan bisnis, dan juga securitas website. Ditambah dengan cara backup-restore data dan file website, menambah padat ilmu yang diberikan. Buku ini menjadi terlalu murah karena mengandung manfaat dan script-script yang diburu.', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00022', 'Cara Gampang Bikin CMS PHP Tanpa Ngoding  ', '9797944220 ', 'Su Rahman', 2013, 174, 'CD', 'Indonesia', 10, '', 'Untuk membuat CMS PHP diperlukan keahlian programming website dinamis seperti ASP atau PHP. Namun, bagi yang tidak mengerti coding PHP, bisa memanfaatkan software pembuatan website, yaitu Adobe Dreamweaver CS3.\r\n\r\nBuku ini membahas teknik membuat CMS PHP untuk kebutuhan website Company Profile menggunakan Dreamweaver CS3, nantinya CMS tersebut dapat Anda gunakan untuk keperluan klien Anda.\r\n\r\nAnda akan mampu membuat website berbasis CMS dengan teknik costumize dalam waktu yang cepat. Asyiknya, semua itu dapat Anda lakukan tanpa pengetahuan pemrograman sedikit pun.', 'Rak Buku', 'P005', 'K002', '2020-01-15 02:41:08'),
('B00023', 'Killer Web Design ', '9786020204208', 'Su Rahman', 2013, 168, '-', 'Indonesia', 10, '', 'Sejak menulis buku yang bertemakan web design & internet marketing, banyak yang menghubungi saya untuk menanyakan cara membuat website untuk keperluan yang beragam. Tentu saya tidak bisa memberikan tutorialnya satu per satu, untuk itu saya merangkumnya dan menyajikannya ke dalam buku ini.\r\n\r\nBuku ini berisikan aneka teknik desain website untuk berbagai kebutuhan yang paling sering dicari oleh masyarakat. Dengan memanfaatkan buku ini Anda yang tidak mengerti bahasa pemrograman dapat mempraktikkannya.\r\n\r\nKelebihan lainnya, buku ini disusun secara sistematis dan ditujukan bagi kebutuhan orang awam dengan memanfaatkan software CMS WordPress, Joomla, dan BlogSpot. Dapatkan teknik untuk mendesain jenis website berikut ini:\r\n\r\nâ€¢Tour & travel agent dengan Calendar Reservation Form\r\n\r\nâ€¢Restoran dengan Calendar Reservation Form\r\n\r\nâ€¢Toko online & iklan baris\r\n\r\nâ€¢Company profile, website sekolah dan e-learning\r\n\r\nBuku ini adalah solusi instan bagi Anda yang ingin menguasai aneka teknik desain website profesional dalam waktu sekejab. Dengan berbekal buku ini, Anda akan menguasai dasar pembuatan website yang dapat dieksplorasi untuk kebutuhan yang lebih luas.', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00024', 'Rahasia Mudah Menguasai Photoshop ', '9789792932010 ', 'MADCOMS ', 2012, 210, 'CD', 'Indonesia', 10, '', 'Sebagai software editing foto, kemampuan Photoshop memang sudah tidak diragukan lagi. Di setiap versi barunya, raja software editing foto ini selalu menambahkan sejumlah fitur baru dan menarik yang patut untuk dicoba.\r\n\r\nBuku ini membahas berbagai fitur canggih yang dimiliki Photoshop untuk mengedit koleksi foto digital Anda. Setiap pembahasan dalam buku diulas dengan metode bahas yang simpel yang akan membantu memudahkan Anda dalam memahami cara kerja yang praktis dan efisien saat bekerja dengan Photoshop\r\n\r\nDi akhir pembahasan, penulis menyertakan beberapa contoh pengaplikasian fitur untuk memanipulasi foto digital, mulai dari mengubah foto sederhana menjadi foto bergaya glow, grunge, poster, sketsa, lukisan, hingga foto bergaya lomo.\r\n\r\nInti pembahasan yang disajikan dalam buku ini meliputi:\r\n• Menggunakan Tool Editing\r\n• Foto Hitam Putih\r\n• Mengubah Warna Foto\r\n• Dasar Editing Foto\r\n• Menyeleksi Objek Dalam Foto\r\n• Layer dan Blending Image\r\n• Filter Artistik\r\n• Memanipulasi Foto', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00025', 'Pasti Bisa !! Belajar Sendiri Microsoft Access 2013  ', '9789792942040', 'MADCOMS', 2014, 218, '-', 'Indonesia', 10, '', 'Belajar Mudah untuk Menjadi Pintar !\r\n\r\nBuku Pasti Bisa!! Belajar Sendiri Microsoft Access 2013 ini merupakan buku pendamping belajar yang mudah untuk dipelajari. Buku ini ditujukan untuk pemula yang ingin menggunakan Microsoft Access 2013 secara praktis dan dapat menguasainya dengan cepat.\r\n\r\nDengan menggunakan metode BACA COBA BISA akan menjadikan Anda terampil dalam menggunakan dan menguasai Microsoft Access 2013.\r\n\r\nBuku ini mempelajari berbagai fasilitas yang disediakan Microsoft Access 2013. Dilengkapi dengan gambar dan uraian secara rinci pada tiap pokok bahasan diharapkan dapat digunakan sebagai bahan panduan dan latihan bagi pembaca untuk lebih memahami dan menguasai program Microsoft Access 2013 dengan baik.\r\n\r\nPokok bahasan yang dimuat dalam buku ini meliputi:\r\n\r\n• Mengenal Microsoft Access 2013\r\n• Membuat dan Mengolah Tabel\r\n• Mengelola Tabel\r\n• Mengolah Data Tabel\r\n• Membuat dan Mengelola Query\r\n• Membuat dan Mengelola Form\r\n• Memodifikasi Form\r\n• Membuat Laporan\r\n• Mengolah Laporan\r\n ', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00026', 'Adobe Photoshop CS5 untuk Desain Web Profesional ', '9786020032191', 'Wahana Komputer', 2012, 192, '-', 'Indonesia', 10, '', 'Web desain adalah istilah yang sering digunakan untuk menggambarkan bagaimana tampilan isi suatu website atau situs.\r\n\r\nDesain yang baik akan berpengaruh terhadap kenyamanan dan ketertarikan pengunjung web.\r\n\r\nHal ini karena website merupakan sarana untuk membangun bisnis online yang berisi berbagai hal seperti informasi dan interaksi dengan orang lain.\r\n\r\nSalah satu program yang digunakan untuk membuat desain web adalah Adobe Photoshop.\r\n\r\nProgram berbasis bitmap ini dapat membantu dan memberikan kemudahan bagi Anda dalam membuat aneka desain web.\r\n\r\nDengan kemampuan yang dapat dikatakan mendekati sempurna, maka sangat membantu bagi para desainer web dalam menuangkan ide dan imajinasinya dalam menciptakan sebuah karya grafis secara lebih optimal.\r\n\r\nAnda dapat mengolah foto, membuat kreasi button, dan membuat teks yang menarik.\r\n\r\nBuku Adobe Photoshop CS5 untuk Desain Web Profesional ini akan membahas berbagai teknik membuat desain web dengan beberapa tema.\r\n\r\nBerbagai contoh desain web yang lebih lengkap akan diketengahkan dalam bentuk contoh-contoh latihan.', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00027', 'Tips & Trik Adobe Dreamweaver CS5.5  ', '9789792932270', 'Wahana Komputer', 2012, 244, '-', 'Indonesia', 10, '', 'Perkembangan internet yang begitu cepat menyebabkan teknologi web juga berkembang sejalan dengan pemanfaatan internet web itu sendiri. Web saat ini tidak hanya terdiri dari halaman online yang hanya menampilkan teks atau gambar dan cenderung bersifat statis, namun telah berkembang menjadi web yang dinamis dan interaktif. Faktor fungsionalitas sangat diperlukan untuk menunjang perancangan web yang baik. Untuk itu diperlukan sebuah tool pengembang web yang andal, baik dari sisi desain maupun pemrogramannya.\r\n\r\nAdobe Dreamweaver CS5.5 merupakan salah satu tool populer yang digunakan untuk mendesain sekaligus pemrograman web. Dreamweaver memberikan fasilitas untuk mengedit HTML secara visual. Aplikasi ini menyertakan banyak perangkat yang berkaitan dengan pengkodean dan fitur seperti HTML, CSS, serta JavaScript. Selain itu, aplikasi ini juga memungkinkan pengeditan JavaScript, XML, dan dokumen teks lainnya secara langsung.\r\n\r\nBuku Tip & Trik Adobe Dreamweaver CS5.5ini membahas berbagai tip dan trik untuk membangun website. Selain itu,dalam buku ini disertakan berbagai contoh yang lebih memudahkan pembaca untuk menguasai materi sehingga nantinya dapat membuat website yang interaktif.\r\n\r\nLebih lengkap, buku ini membahas:\r\n\r\n• Pendahuluan\r\n• Mengelola Layout dan Content Teks Web\r\n• Mengelola Navigasi dan Aset Web\r\n• Mempercantik Halaman Web\r\n• Mengelola Web Interaktif', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00028', 'Pintar Membuat Web dengan Joomla : Cara Mudah Buat Web dari Nol hingga Online ', '9789792913026', 'Wahana Komputer', 2012, 212, 'CD', 'Indonesia', 10, '', 'Menganalisa kebutuhan hardware dan software,\r\nmemilih ISP yang cocok, instalasi jaringan,\r\nperhitungan usaha, konfigurasi Billing\r\n\r\nTingginya kebutuhan masyarakat akan layanan internet mengakibatkan di berbagai tempat bermunculan warnet dan game center. Bahkan untuk beberapa tahun terakhir, bisnis warnet dan game center menjadi sebuah bisnis yang sangat menarik untuk dikembangkan.\r\n\r\nBuku membangun Warnet dan Game Center Sendiri ini membahas bagaimana membangun warnet dan game center yang dapat Anda lakukan sendiri. Buku ini merupakan panduan bagi calon pengusaha di bidang warnet dan game center untuk membuka usaha. Selain itu, buku ini memberikan informasi yang tepat guna dalam mengelola bisnis.\r\n\r\nBuku ini akan membahas:\r\n- kebutuhan hardware\r\n- kebutuhan software\r\n- internet service provide\r\n- Instalasi jaringan komputer\r\n- perhitungan usaha\r\n- studi kasus konfigurasi billing\r\n- tip-tip efektif', 'Rak Buku', 'P001', 'K002', '2020-01-15 02:41:08'),
('B00029', 'Buku Pintar Pemrograman Visual Basic 2010 + Cd ', '9786020246994', 'Christopher Lee', 2014, 176, '-', 'Indonesia', 10, '', 'Visual Basic 2010 adalah inkarnasi dari bahasa Visual Basic yang sangat populer dan telah dilengkapi dengan fitur serta fungsi yang setara dengan bahasa tingkat tinggi lainnya seperti C++, VB.NET, dan J#.\r\n\r\nNamun sebagai konsekuensinya, berakibat semakin bertambahnya kerumitan dalam menggunakan program Visual Basic. Dan Anda tidak dapat lagi mengandalkan online help atau belajar secara otodidak tentang bagaimana membuat sebuah program menggunakan Visual Basic 2010.\r\n\r\nBelajar Visual Basic 2010 itu seperti belajar satu bahasa baru - banyak kosakata dan tata bahasa. Visual Basic 2010 tidak sulit untuk dipelajari, tetapi Anda perlu memahami banyak sintaks, aturan, dan atributnya.\r\n\r\nBuku ini ditulis dengan tujuan untuk menjelaskan semua hal penting yang perlu diketahui untuk mengembangkan aplikasi Windows Forms dengan Visual Basic 2010. Anda tidak akan menemukan teori di sini, sebaliknya Anda akan menemukan solusi terbaik untuk masalah pemrograman yang paling menantang.\r\n\r\nDengan disertai Bonus CD yang dilengkapi latihan files, Anda akan dapat mempelajari Microsoft Visual Basic 2010 dengan lebih mudah dan efektif.', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00030', 'Membuat Aplikasi Stok Inventori dengan Visual Basic 6.0  ', '9786020024981', 'Hengky Alexander Mangkulo', 2012, 208, '-', 'Indonesia', 10, '', 'Buku ini berisi pembahasan mengenai pembuatan aplikasi sistem informasi stok inventori. Aplikasi yang dikembangkan merupakan aplikasi yang mudah untuk dipahami tetapi juga dilengkapi dengan beberapa fasilitas standar dalam pengembangan aplikasi sistem informasi.\r\n \r\nPembahasan materi meliputi pengenalan akan kontrol-kontrol, pembuatan database dengan Microsoft Access, koneksi database, pembuatan form-form master, pembuatan form-form transaksi, pembuatan laporan dengan menggunakan Crystal Report termasuk cara memfilter atau menyaring data dari form Visual Basic untuk ditampilkan pada Crystal Report dan pembuatan fasilitas-fasilitas dari aplikasi inventori yang dibuat seperti login password, pengaturan tingkatan hak akses dari user pengguna program, fasilitas untuk mengubah password dan saldo awal untuk penggunaan aplikasi pada suatu sistem yang telah berjalan sebelumnya.\r\n \r\nSemua materi dijelaskan dengan cara yang sederhana dan mudah untuk dipahami tetapi memiliki nilai manfaat yang sangat besar dalam pengembangan aplikasi sistem informasi database.\r\n\r\nDengan buku ini, diharapkan pembaca dapat mengerti pengembangan aplikasi sistem informasi dengan menggunakan Visual Basic 6.0 dengan menggunakan metode ADO. ', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00031', 'Buku Pintar Database dengan Ms Access  ', '9786020248424 ', 'Jubilee Enterprise', 2014, 176, '-', 'Indonesia', 10, '', 'Kalau Anda ingin membuat aplikasi database yang mudah, murah, cepat, dan tanpa pemrograman, maka MS Access adalah jawabannya. Di dalam buku ini, Anda akan belajar rahasia pembuatan database sebagai berikut:\r\n\r\n- Pengenalan database menggunakan MS Access\r\n- Pembuatan database baru\r\n- Kustomisasi Fields\r\n- Kustomisasi Tabel\r\n- Pembuatan Form\r\n- Penyusunan Laporan\r\n- Pembuatan Query\r\n\r\nTarget buku ini adalah membantu Anda membuat database untuk pencatatan data administratif. Cocok dibaca oleh orang kantoran, mahasiswa, petugas administrasi, atau siapa pun. Baca buku ini, pelajari, kemudian praktikkan, dijamin Anda pasti bisa!', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00032', 'Kupas Tuntas Power Point 2010  ', '9789792784671', 'Jubilee Enterprise', 2010, 0, '-', 'Indonesia', 10, '', 'MS Powerpoint 2010 merupakan generasi terbaru dari software pembuat dan pengolah slide presentasi mutakhir dan terkenal di dunia. Banyak fitur baru yang ditawarkan yang sebagian besar dikupas di dalam buku ini, seperti fungsi editing grafis hingga saat presentasi itu sendiri.\r\n\r\nPengenalan dasar-dasar dan opsi penting dalam MS Powerpoint 2010 juga dikupas tuntas. Pembahasan diawali dengan pengenalan MS Powerpoint 2010, pengaturan opsi dan preferensi, pembuatan slide presentasi, penyajian presentasi, pembuatan slide presentasi yang lebih spektakuler, publikasi dan distribusi, serta powerpoint online. Jika Anda membutuhkan referensi Powerpoint 2010 yang paling lengkap dan tuntas, buku ini dapat Anda pilih.\r\n\r\nKupas Tuntas PowerPoint 2010 cocok digunakan oleh mereka yang erat kaitannya dengan dunia presentasi, seperti sales dan marketing, pembicara seminar, trainer, businessman, hingga guru dan pengajar kursus.', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00033', 'Tip dan Trik PowerPoint 2013', '9786020223377 ', 'Jubilee Enterprise', 2013, 208, '-', 'Indonesia', 10, '', 'Apakah Anda sudah menggunakan PowerPoint 2013 untuk membuat presentasi presentasi cantik? Tahukah Anda fitur-fitur terbaru apa saja yang ada di dalam software ini? Atau, pernahkah Anda berpikir kalau software ini memiliki potensi-potensi tersembunyi? Kalau demikian, miliki buku ini untuk mengetahui tip dan trik berikut:\r\n\r\n•  Rahasia melakukan presentasi sambil membaca "contekan" seperti pembawa berita di stasiun televisi.\r\n•  Metode praktis mengubah video berwarna menjadi hitam putih dan mengubah temperatur cahaya pada foto digital.\r\n•  Mengubah bentuk video dari kotak menjadi buah hati atau bentuk lainnya sesuai selera Anda.\r\n•  Cara membuat slide praktis seperti sertifikat dan wedding photo album secara cepat dan hasilnya keren.\r\n•  Membuat slide presentasi dalam format widescreen sehingga tampak lebih futuristik dan menakjubkan.\r\n•  Tombol-tombol shortcut yang melimpah untuk membantu Anda mengerjakan tugas- tugas rutin dengan mudah.\r\n•  Memanfaatkan Eyedropper untuk memburu warna-warna gambar sehingga kreativitas Anda meningkat pesat.\r\n•  Memasang peta dari Google Maps ke dalam slide presentasi agar Anda bisa menunjukkan kepada para audience, lokasi kantor atau perusahaan Anda.\r\n\r\n\r\nDan masih banyak lagi. Yang jelas, jika Anda berpikir PowerPoint 2013 sama dengan PowerPoint versi dulu-dulu, maka Anda salah besar! Bacalah buku ini dan temukan berbagai keajaiban baru yang ditawarkan oleh PowerPoint 2013.\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00034', 'Membuat Fungsi Excel untuk Bisnis dan Perkantoran + Cd  ', '9786020248448 ', 'Yudhy Wicaksono', 2014, 204, 'CD', 'Indonesia', 10, '', 'Fungsi dalam Excel merupakan rumus siap pakai yang digunakan sebagai alat bantu dalam proses perhitungan. Excel menyediakan ratusan fungsi yang dikelompokkan ke dalam kategori tertentu. Namun karena luasnya bidang pengolahan data, tidak semua fungsi yang disediakan Excel dapat memenuhi kebutuhan penggunanya. Hal tersebut dapat dimaklumi karena kasus yang dihadapi pengguna yang satu sering kali berbeda dengan kasus yang dihadapi pengguna yang lain. Untuk mengatasi masalah tersebut, Excel menyediakan fitur Visual Basic for Application (VBA), atau biasa dikenal dengan Macro, untuk membuat fungsi Excel sendiri.\r\n\r\nBuku ini mengungkap bagaimana memanfaatkan fitur Macro untuk membuat fungsi Excel. Setelah mempelajari buku ini, Anda akan menemukan banyak pengetahuan baru penggunaan Macro untuk membuat fungsi Excel. Penulis menyajikan 20 contoh pembuatan fungsi untuk menyelesaikan permasalahan di bidang bisnis dan perkantoran, di antaranya fungsi untuk menyeleksi penerimaan karyawan, menghitung uang pesangon, menghitung gaji, menghitung upah lembur, menghitung sewa VCD, dan berbagai fungsi untuk menyelesaikan kasus bisnis dan perkantoran lainnya.\r\n\r\nPembahasan selanjutnya mengenai penggunaan Macro untuk membuat fungsi Excel siap pakai untuk Excel semua versi dalam bentuk Add-In, yang memuat 25 fungsi Excel siap pakai. Pembahasan buku yang lebih mengedepankan praktik dibandingkan teori menjadikan buku ini cocok digunakan oleh siapa saja, baik Anda yang sudah terbiasa menggunakan Excel ataupun Anda yang belum pernah menggunakan Excel sama sekali. Dengan metode membaca dan mencoba, buku ini merupakan solusi bagi Anda yang ingin belajar membuat fungsi Excel secara otodidak, tanpa perlu mengikuti bimbingan atau kursus.\r\n\r\nUntuk memudahkan pemahaman pembaca, penulis menyertakan Bonus CD berisi file latihan dan file kunci jawaban permasalahan yang dibahas.', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00035', 'Tip dan Trik Fungsi dan Formula Excel  ', '9786020248622', 'Jubilee Enterprise', 2014, 180, '-', 'Indonesia', 10, '', 'Apakah Anda terbiasa bekerja dengan fungsi dan formula Microsoft Excel? Kalau begitu, Anda pasti tertarik untuk mengembangkan ilmu Anda lebih tinggi lagi dengan mempelajari tip dan trik di dalam buku ini. Materi yang disajikan di antaranya mengupas:\r\n\r\n- Fungsi dan formula MS Excel secara umum, serta shortcut (jalan pintas) untuk efisiensi kerja, conditional formatting, dan relasi formula.\r\n\r\n- Penggunaan forecast untuk menghitung nilai investasi serta kerugian tahunan jika tak berhasil mencapai penjualan.\r\n\r\n- Menghitung statistik seperti jumlah kursi kosong, karyawan paling produktif, penyusunan peringkat, dan seterusnya.\r\n\r\n- Mencocokkan soal-soal ujian, pemberian nilai, dan penentuan kelulusan.\r\n\r\n- Memakai formula untuk penghitungan matematis bangun datar, penjumlahan matriks, dan teka-teki matematika (seperti pada tanggal berapa dua orang bertemu di perpustakaan).\r\n\r\n- Menggunakan growth, frequency, dan penghitungan harga barang kulakan jika lama tidak laku-laku.\r\n\r\n- Menggunakan watch window, camera, evaluasi formula, dan seterusnya.\r\n\r\n- Membuat billing usaha rental (warnet, karaoke, persewaan, dan sebagainya).\r\n\r\nSemua ide dan gagasan baru yang disajikan ini sebagian besar melibatkan fungsi serta formula. Apabila Anda ingin bekerja lebih cepat, efisien, dan praktis menggunakan MS Excel, buku ini bisa menjadi pilihan yang tepat.\r\n', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00036', 'Buku Pintar VLookup dan HLookup MS Excel + CD ', '9786020235752', 'Jubilee Enterprise', 2014, 172, 'CD', 'Indonesia', 10, '', 'VLookup dan HLookup adalh fungsi yang akan selalu digunakan apabila bekerja dengan tabel yang rumit serta mengandung banyak data. Oleh karena itu, banyak orang mengira jika VLookup dan HLookup termasuk fungsi yang sulit digunakan. Padahal, VLookup dan HLookup sangatlah simpel untuk dimanfaatkan.\r\n\r\nDi dalam buku ini, Anda akan mempelajari dari cara paling dasar memanfaatkan VLookup dan HLookup sampai pada pembuatan aplikasi praktis yang disajikan via video tutorial, seperti pembuatan kuitansi misalnya. Ada juga contoh praktis yang disajikan lewat tulisan langkah demi langkah tentang pemanfaatan VLookup dan HLookup untuk penyusunan administrasi sekolah dan kepegawaian.\r\n\r\nDibandingkan buku MS Excel lainnya, buku ini merupakan referensi paling mudah dipelajari dan dipahami apabila ingin mempelajari VLookup dan Hlookup, serta fungsi-fungsi lain yang menyertainya, seperti IF, ISNA, LEFT, dan sebagainya.\r\n\r\nDiharapkan, setelah membaca buku ini, wawasan Anda tentang Microsoft Excel akan bertambah banyak dan Anda pun bisa menciptakan atau mengolah tabel yang sangat kompleks.', 'Rak Buku', 'P002', 'K002', '2020-01-15 02:41:08'),
('B00037', 'Aplikasi Excel untuk Guru Edisi Revisi', '9786020247366', 'Adi Kusrianto', 2014, 250, 'CD Latihan', 'Indonesia', 10, '', 'Excel adalah program paling banyak kedua digunakan orang seluruh jagat setelah Word. Digunakan sebagai standar peralatan kerja dalam kegiatan perkantoran di semua bidang, termasuk dunia pendidikan dan ilmiah.\r\n\r\nUntuk kalangan Guru dan Pendidik, Excel adalah program yang sangat bermanfaat untuk mengelola data yang berkaitan dengan tugas-tugas di seputar kegiatan mengajar serta materi pembelajaran. Termasuk materi ajar yang akan disampaikan kepada siswa-siswanya.\r\n\r\nBuku ini ditulis dengan pendekatan bidang pendidikan maupun ilmiah. Mengingat kedua bidang tersebut senantiasa bergelimangan dengan kegiatan hitung-menghitung, menganalisis, membandingkan dan menampilkan hasil yang dikehendaki, maka Excel merupakan alat bantu hitung yang super canggih yang dengan mudah dapat dikuasai orang "awam" yang bukan ahli komputer dan teknik informatika.\r\n\r\nKalau banyak orang sudah familier menggunakan handphone, dengan bantuan buku ini akan semudah itulah mengoperasikan Excel.\r\n\r\nPembahasan dalam buku mencakup:\r\n\r\n- Bekerja pada Workbook dan Worksheet\r\n- Melakukan Kalkulasi dengan Excel\r\n- Memasukkan dan Menghitung Data Tanggal dan Waktu\r\n- Permasalahan Matematika dan Trigonometri\r\n- Mengelola Database Siswa\r\n- Mengenal dan Mengelola Tabel\r\n- Menampilkan Data dalam Grafik\r\n- Mengolah Data Teks\r\n- Mencari dan Menampilkan Data\r\n- Fungsi-Fungsi untuk melakukan Konversi\r\n- Menyisipkan Gambar ke Worksheet\r\n- Alat Bantu dalam Statistika\r\n ', 'Rak A1', 'P002', 'K002', '2020-01-15 02:41:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kd_kategori` char(4) NOT NULL,
  `nm_kategori` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kd_kategori`, `nm_kategori`) VALUES
('K001', 'Sastra dan Filsafat'),
('K002', 'Komputer dan Internet'),
('K003', 'Sejarah dan Budaya'),
('K004', 'Psikologi dan Pengembangan Diri'),
('K005', 'Ekonomi dan Manajemen'),
('K006', 'Kalkulus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konfigurasi`
--

CREATE TABLE `tbl_konfigurasi` (
  `id_konfigurasi` int(1) NOT NULL,
  `nama_aplikasi` varchar(100) NOT NULL,
  `nama_pimpinan` varchar(100) NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `kabupaten` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `kontak_person` varchar(20) NOT NULL,
  `sejarah` text NOT NULL,
  `visimisi` text NOT NULL,
  `panduan` text NOT NULL,
  `banner` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_konfigurasi`
--

INSERT INTO `tbl_konfigurasi` (`id_konfigurasi`, `nama_aplikasi`, `nama_pimpinan`, `provinsi`, `kabupaten`, `kecamatan`, `alamat`, `kontak_person`, `sejarah`, `visimisi`, `panduan`, `banner`) VALUES
(1, 'PERPUSTAKAAN SMKN 5 MAKASSAR', 'Waddah', 'Sulawesi Selatan', 'Makassar', 'Manggala', 'jl. Dg. Hayo', '085298730727', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus vitae impedit, dignissimos sed ullam quis quasi illum eveniet iusto maiores iste, minus quos animi repellat nemo minima cum aut corporis. asdasd asfascz d</p>\r\n', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus vitae impedit, dignissimos sed ullam quis quasi illum eveniet iusto maiores iste, minus quos animi repellat nemo minima cum aut corporis. asdsad</p>\r\n', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus vitae impedit, dignissimos sed ullam quis quasi illum eveniet iusto maiores iste, minus quos animi repellat nemo minima cum aut corporis. asdfsaf</p>\r\n', 'apartment-apple-business-245032.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `kd_peminjaman` int(11) NOT NULL,
  `kd_buku` varchar(15) NOT NULL,
  `kd_anggota` varchar(15) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_harus_kembali` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `keterangan` text NOT NULL,
  `status_kembali` enum('Belum','Kembali','Hilang','') NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`kd_peminjaman`, `kd_buku`, `kd_anggota`, `id_user`, `tanggal_pinjam`, `tanggal_harus_kembali`, `tanggal_kembali`, `keterangan`, `status_kembali`, `date_created`) VALUES
(2143, 'B00003', 'M0001', '1', '2020-03-31', '0000-00-00', '2020-04-23', 'loremm ipsum', 'Belum', '2020-03-31 13:53:40'),
(2147, 'B00003', 'sdfsdfs', '9', '2020-07-16', '0000-00-00', '2020-07-16', 'adakah', 'Kembali', '2020-07-16 01:11:04'),
(2148, 'B00003', 'sdfsdfs', '9', '2020-07-17', '0000-00-00', '2020-07-16', 'adakah', 'Belum', '2020-07-16 03:04:32'),
(2149, 'B00003', 'sdfsdfs', '9', '2020-07-17', '0000-00-00', '2020-07-16', 'adakah', 'Kembali', '2020-07-16 01:09:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penerbit`
--

CREATE TABLE `tbl_penerbit` (
  `kd_penerbit` char(4) NOT NULL,
  `nm_penerbit` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penerbit`
--

INSERT INTO `tbl_penerbit` (`kd_penerbit`, `nm_penerbit`) VALUES
('P001', 'ELEX MEDIA KOMPUTINDO'),
('P002', 'ANDI OFSET YOGYAKARTA'),
('P003', 'GAVA MEDIA YOGYAKARTA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` enum('Admin','User') NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `image`, `password`, `role`, `is_active`, `date_created`) VALUES
(1, 'Aswar Kasim', 'aswarkasim@gmail.com', 'default.jpg', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'User', 1, 1560694881),
(9, 'Admin', 'admin@gmail.com', '', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Admin', 0, 0),
(10, 'assa', 'assa@gmail.com', '', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Admin', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`kd_anggota`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`kd_buku`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`kd_peminjaman`);

--
-- Indexes for table `tbl_penerbit`
--
ALTER TABLE `tbl_penerbit`
  ADD PRIMARY KEY (`kd_penerbit`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  MODIFY `id_konfigurasi` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `kd_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2150;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
