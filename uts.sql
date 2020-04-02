-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 05:38 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `email_employee` varchar(255) NOT NULL,
  `role` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`email_employee`, `role`, `password`) VALUES
('admin@sen.com', 1, '09bbbf7fa66c28f77f08ee877a4d9cd0'),
('admin@yahoo.com', 1, '21232f297a57a5a743894a0e4a801fc3'),
('kasir@sen.com', 3, '09bbbf7fa66c28f77f08ee877a4d9cd0'),
('kasir@yahoo.com', 3, 'c7911af3adbd12a035b289556d96470a'),
('manajer@sen.com', 2, '09bbbf7fa66c28f77f08ee877a4d9cd0'),
('manajer@yahoo.com', 2, '69b731ea8f289cf16a192ce78a37b4f0');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `synopsis` varchar(1000) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `release_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `poster`, `title`, `synopsis`, `duration`, `genre`, `release_date`) VALUES
(1, 'test.jpg', 'Nilai PemwebKu', 'Bobby Chrismanto telah 			            belajar deng...', '3h 2m', 'thriller', '2020-02-03'),
(2, 'mariposa.jpg', 'Mariposa', 'Mariposa (Kupu-kupu) seperti kamu, aku mengejar tapi kamu menghindar. Begitulah gambaran sosok IQBAL GUANNA bagi NATASHA KAY LOOVY atau ACHA. Acha bertekad ingin mendapatkan hati Iqbal, seorang cowok cakep, pintar dan dikenal berhati dingin. Sahabat Acha, AMANDA, berusaha mencegah niat Acha untuk mendekati Iqbal. Amanda takut Acha akan terluka dan sakit hati.\r\n\r\nSekali pun lugu dan polos, tekad Acha sangat kuat. Acha mendekati Iqbal dengan berbagai cara. Acha yakin, jika pun hati Iqbal sekeras batu, Acha adalah air yang menetesinya setiap waktu, hingga batu itu akan pecah dan menerima dirinya.', '3h 2m', 'Drama, Romance', '2020-05-07'),
(3, 'baaghi3.jpg', 'Baaghi 3', 'Melanjutkan film pertama dan kedua, seri ketiga akan mengisahkan aksi balas dendam Ronny (Tiger Shroff) atas perlakuan teroris terhadap saudaranya Vikram (Riteish Deshmukh). Aksi Ronny kali ini sangat berbahaya karena Ia tidak hanya melawan sekelompok teroris, tapi satu negara.', '2h 2m', 'Action', '2020-05-08'),
(4, 'onward.jpg', 'Onward', 'Alkisah di dunia fantasi dimana mahluk gaib tinggal di sana. Dua peri remaja, Ian Lightfoot (Tom Holland) dan Barley Lightfoot (Chris Pratt) memulai sebuah pencarian ke tempat-tempat magis untuk menemukan sebuah jawaban.\r\n\r\nPetualangan mereka bertujuan untuk bisa berjumpa dengan sang ayah walau cuma sehari.\r\nSelain itu keduanya juga akan mencari jawaban atas keresahan warga. Apakah masih ada kekuatan magis di dunia mereka.', '2h 4m', 'Comedy, Adventure', '2020-06-05'),
(5, 'teman_tapi_menikah2.jpg', 'Teman Tapi Menikah 2', 'Belum puas menikmati momen sebagai pasangan baru, Ayu tiba-tiba hamil. Kepribadiannya berubah total. Dari yang tadinya semangat nemenin Ditto ke mana-mana, ia jadi mager dan parahnya, super sensitif! Ditto pun harus menahan diri dan pura-pura tidak cemburu dengan perhatian yang Ayu berikan ke si janin. Pertengkaran yang sering terjadi membuat Ayu dan Ditto harus memilih mana yang mau dipertahankan; pernikahan mereka atau si bayi?', '2h 3m', 'Romance', '2020-06-05'),
(6, 'sonic.jpg', 'Sonic the Hedgehog', 'Setelah menemukan landak kecil berwarna biru dan berlari sangat cepat, Tom Wachowski (James Marsden) seorang perwira polisi kota kecil harus membantunya mengalahkan Dr. Ivo Robotnik (Jim Carrey) yang ingin melakukan percobaan kepada landak tersebut.', '2h 2m', 'Action, Adventure', '2020-06-04'),
(7, 'lineofduty.jpg', 'Line of Duty', 'Setelah menemukan landak kecil berwarna biru dan berlari sangat cepat, Tom Wachowski (James Marsden) seorang perwira polisi kota kecil harus membantunya mengalahkan Dr. Ivo Robotnik (Jim Carrey) yang ingin melakukan percobaan kepada landak tersebut.', '2h 0m', 'Action, Thriller', '2020-04-20'),
(8, 'stepup.jpg', 'Step Up Year of the Dance', 'Melanjutkan kisah sukses di Las Vegas kru LMNTrix kembali menunjukkan apa yang mereka miliki selama ini. Babak baru, pertarungan baru untuk loyalitas, cinta dan keluarga. Pertunjukkan yang akan membawa karir yang dinantikan bagi seluruh tim.', '3h 2m', 'Musical', '2020-10-04'),
(9, 'bloodshot_.png', 'Bloodshot', 'Ray Garrison/Bloodshot (Vin Diesel) adalah seorang prajurit yang dihidupkan kembali oleh sebuah nanoteknologi. Karena teknologi ini ia memiliki kemampuan baru yang luar biasa. Namun masa lalu Ray tiba-tiba muncul dan membuatnya penasaran dengan jati dirinya. Dengan kemampuan barunya itu, ia berjuang mendapatkan kebenaran tentang kehidupannya.', '2h 2m', 'Action, Fantasy, Adventure', '2020-07-06'),
(10, 'buku_harianku.jpg', 'Buku Harianku', 'KILA (Kila Putri Alam) adalah anak yang selalu mencurahkan isi hatinya di di buku hariannya. Setelah mamanya, RISKA (Widi Mulia), mengganti rencana liburan mereka, Kila kemudian dititipkan ke kakeknya, PRAPTO (Slamet Rahardjo). Kakek Prapto adalah ayah dari papa Kila, ARYA (Dwi Sasono), yang tinggal di Sukabumi. Di sana, Kila bertemu lagi dengan teman lamanya, RINTIK (Widuri Puteri), seorang penyandang disabilitas. Kedua anak yang begitu berbeda ini pun terlibat dalam sebuah petualang', '5h 5m', 'Drama, Comedy, Romance', '2020-10-10'),
(11, 'bloodshot.jpg', 'Bloodshot (IMAX 2D)', 'Ray Garrison/Bloodshot (Vin Diesel) adalah seorang prajurit yang dihidupkan kembali oleh sebuah nanoteknologi. Karena teknologi ini ia memiliki kemampuan baru yang luar biasa.\r\n\r\nNamun masa lalu Ray tiba-tiba muncul dan membuatnya penasaran dengan jati dirinya. Dengan kemampuan barunya itu, ia berjuang mendapatkan kebenaran tentang kehidupannya.', '3h 2m', 'Action, Drama, Fantasy', '2020-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(255) NOT NULL,
  `nama_role` varchar(255) NOT NULL,
  `deskripsi_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `nama_role`, `deskripsi_role`) VALUES
(1, 'admin', 'bisa CRUD'),
(2, 'manajer', 'bisa Read dan Delete'),
(3, 'kasir', 'hanya bias READ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`email_employee`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
