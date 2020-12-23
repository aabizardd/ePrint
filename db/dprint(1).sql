-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2020 pada 11.11
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dprint`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap_admin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `nama_lengkap_admin`, `alamat`, `jenis_kelamin`, `status`, `umur`, `gambar`) VALUES
(1, 'aa1', 'Abizard', '', '', '', 0, 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `idbarang` int(11) NOT NULL,
  `nama` text NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` text NOT NULL,
  `foto` text NOT NULL,
  `owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idbarang`, `nama`, `keterangan`, `harga`, `stok`, `kategori`, `foto`, `owner`) VALUES
(5, 'Kaos S', 'Ready print kaos ukuran S', 70000, 50, 'Baju', 'kaos-polos-katun-pria-lengan-pendek-o-neck-size-l-85606-or-t-shirt-black-112.jpg', 0),
(7, 'kemeja', 'ukuran xs', 2, 3, 'Baju', 'kaos-polos-katun-pria-lengan-pendek-o-neck-size-l-85606-or-t-shirt-black-117.jpg', 10),
(8, 'Celana', 'Celana Junkies', 50000, 123, 'Celana', 'celana-tartan-pants-pria-ditz-greysacel.jpg', 11),
(9, 'Kaozz', 'coba nihh', 11000, 121313, 'Baju', '10741851.png', 11),
(10, 'qwe', '213', 2222, 33, 'Pin', 'celana-tartan-pants-pria-ditz-greysacel1.jpg', 10),
(12, 'teslagi', 'tesdoang', 1, 33, 'Kertas', 'download8.jpg', 11),
(13, 'baju', 'bajubaju', 123, 131, 'Baju', 'kaos-polos-katun-pria-lengan-pendek-o-neck-size-l-85606-or-t-shirt-black-114.jpg', 11),
(14, 'baju', 'ukuran m', 1500, 500, 'Baju', 'kaos-polos-katun-pria-lengan-pendek-o-neck-size-l-85606-or-t-shirt-black-116.jpg', 12),
(15, 'zaza', 'kiki', 123, 345, 'Baju', 'download9.jpg', 10),
(16, 'maliq', 'n dessentials', 1000, 200, 'Kertas', 'celana-tartan-pants-pria-ditz-greysacel3.jpg', 11),
(17, 'coba katakan', 'album', 10000, 400, 'Sticker', 'kaos-polos-katun-pria-lengan-pendek-o-neck-size-l-85606-or-t-shirt-black-118.jpg', 12),
(18, 'blue paint', 'biru biru ', 100, 10, 'Pin', 'photo-1561211919-1947abbbb35b.jpg', 12),
(19, 'aurora', 'maliq lagu', 1000, 500, 'Sticker', 'download_(2).jpg', 12),
(20, 'Queen album', 'queen', 1000, 40, 'Topi', 'download_(1).jpg', 10),
(21, 'Barang gue', 'punya gue', 10000, 12, 'Pin', 'MOCKUP_PIN_ILITHO.jpg', 7),
(22, 'cobates', 'tes', 100, 10, 'Baju', 'photo-1561211919-1947abbbb35b1.jpg', 12),
(23, 'teslagi', 'tes', 1000, 500, 'Baju', 'bilal-o-2W0AZVlVm3U-unsplash.jpg', 12),
(24, 'lololo', 'tezz', 111, 22, 'Kertas', 'WhatsApp_Image_2020-03-05_at_13_26_53.jpeg', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap_konsumen` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `username`, `nama_lengkap_konsumen`, `alamat`, `jenis_kelamin`, `status`, `umur`, `gambar`, `tanggal_lahir`) VALUES
(2, 'abizard', 'zard', 'Bogor', 'Laki-laki', '', 0, 'default.png', '1999-07-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `idpesanan` int(11) NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `jumlahbarang` int(11) NOT NULL,
  `hargabarang` int(11) NOT NULL,
  `totalharga` int(11) NOT NULL,
  `kategoribarang` varchar(100) NOT NULL,
  `keteranganbarang` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `namakonsumen` varchar(100) NOT NULL,
  `idbarang` varchar(10) NOT NULL,
  `statuspemesanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`idpesanan`, `namabarang`, `jumlahbarang`, `hargabarang`, `totalharga`, `kategoribarang`, `keteranganbarang`, `alamat`, `namakonsumen`, `idbarang`, `statuspemesanan`) VALUES
(3, 'Kaos L', 4, 70000, 280000, 'Baju', 'Ready print kaos ukuran L', '', 'agung', '5', 'Pending'),
(4, 'Kaos L', 5, 70000, 350000, 'Baju', 'Ready print kaos ukuran L', 'banten', 'abizard', '5', 'Finish'),
(7, 'Kaos L', 10, 70000, 700000, 'Baju', 'Ready print kaos ukuran L', 'banten', 'abizard', '5', 'Proses'),
(9, 'Queen album', 5, 1000, 5000, 'Topi', 'queen', 'Cimahi', 'abizard', '20', 'Pending'),
(10, 'Barang gue', 2, 10000, 20000, 'Pin', 'punya gue', 'Bandung', 'abizard', '21', 'Proses'),
(11, 'Barang gue', 5, 10000, 50000, 'Pin', 'punya gue', 'Bogor', 'abizard', '21', 'Diterima'),
(12, 'Barang gue', 3, 10000, 30000, 'Pin', 'punya gue', 'Bogor', 'abizard', '21', 'Ditolak'),
(13, 'Barang gue', 1, 10000, 10000, 'Pin', 'punya gue', 'Bogor', 'abizard', '21', 'Ditolak'),
(14, 'teslagi', 2, 1000, 2000, 'Baju', 'tes', 'Bogor', 'abizard', '23', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `role_id`, `username`, `email`, `password`, `created_at`, `status`) VALUES
(5, 1, 'abizard', 'me@gmail.com', '$2y$10$YPzRET6lfn/qDpysBjyjiO3jq1vZJgpeGuGpnJdnddx9UKjqYOtDC', '21-04-2020, 09:32:21', 1),
(7, 2, 'aa', 'adzin@gmail.com', '$2y$10$3Gx5dHIMp1j87LPxkyG99u9tKgF/lWLs.xJGrFWFD1T7FIvvHHu42', '21-04-2020, 09:46:28', 1),
(8, 2, 'a1', 'm.abizard1123@gmail.com', '$2y$10$F/6sj0fjzrlBk1XW8fMvJOXXAQKe5jzgBz7Bi/1Hlh.NeUFJCK.Pa', '21-04-2020, 09:47:40', 1),
(9, 3, 'aa1', 'adzin@gmail.com', '$2y$10$tqNHp.bQWZsOQgyCQzRMk.TBiBxBXCtLhZH4XfsvRPyL32FDMr6xe', '21-04-2020, 09:50:54', 1),
(10, 2, 'fau', 'fau@gmail.com', '$2y$10$yTtkH8ye.k4mQI/egFsb1.yTeCt9ZA2REtPR.7gWQ16Uu2NiFxlZO', '22-04-2020, 13:55:45', 1),
(11, 2, 'ver', 'a@gmail.com', '$2y$10$I1iVIr9lb4DFwNDWV7BDEuH0P2ohMv7m9HUI3IYVG3A0sHyvQppW.', '22-04-2020, 14:43:27', 1),
(12, 2, 'kyn', 'kyn@gmail.com', '$2y$10$.glXJ6om04bZJVjplvimVupkJsqy7Mpk4FBVxT0KkjoAbUqmVyHnu', '22-04-2020, 15:31:22', 1),
(15, 2, 'ab', 'adzin@gmail.com', '$2y$10$eJAYmgeAxeBc7FW.ITGg4.gIm1LLMSWcVYzQZwPlLkboVSh6.E3fm', '26-04-2020, 09:33:21', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap_vendor` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vendor`
--

INSERT INTO `vendor` (`id_vendor`, `username`, `nama_lengkap_vendor`, `alamat`, `jenis_kelamin`, `status`, `umur`, `gambar`) VALUES
(1, 'aa', 'Fauziyah', 'bandung', '', '', 0, 'default.png'),
(2, 'a1', 'Vera', 'bogor', '', '', 0, 'default.png'),
(3, 'fau', 'Fauz', 'bojongsoang', '', '', 0, 'default.png'),
(4, 'ver', 'Vera AP', 'Bdgggg', 'Perempuan', '', 0, 'default.png'),
(5, 'kyn', 'Kynul', 'Bandoeng', 'Perempuan', '', 0, 'default.png'),
(7, 'ab', '', '', '', '', 0, 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idpesanan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idpesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
