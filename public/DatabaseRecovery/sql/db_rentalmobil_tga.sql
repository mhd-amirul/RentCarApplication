-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2022 pada 12.24
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rentalmobil_tga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatifs`
--

CREATE TABLE `alternatifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alternatifs`
--

INSERT INTO `alternatifs` (`id`, `kriteria_id`, `nama`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 1, 'Daihatsu Terios', '1', '2022-07-09 02:46:09', '2022-07-24 22:39:10'),
(2, 1, 'Daihatsu Xenia', '1', '2022-07-09 02:46:09', '2022-07-24 22:39:10'),
(3, 1, 'Honda Jazz RS', '1', '2022-07-09 02:46:09', '2022-07-24 22:39:10'),
(4, 1, 'Mitsubishi Pajero Sport', '1', '2022-07-09 02:46:09', '2022-07-24 22:39:10'),
(5, 1, 'Mitsubishi Triton', '1', '2022-07-09 02:46:09', '2022-07-24 22:39:10'),
(6, 1, 'Toyota Avanza Type E', '1', '2022-07-09 02:46:09', '2022-07-24 22:39:10'),
(7, 1, 'Toyota Avanza Type G', '1', '2022-07-09 02:46:09', '2022-07-24 22:39:10'),
(8, 1, 'Toyota Avanza Veloz', '1', '2022-07-09 02:46:09', '2022-07-24 22:39:11'),
(9, 1, 'Toyota Kijang Innova', '1', '2022-07-09 02:46:09', '2022-07-24 22:39:11'),
(10, 1, 'Toyota Rush', '1', '2022-07-09 02:46:09', '2022-07-24 22:39:11'),
(11, 2, 'dibawah 2010', '1', '2022-07-09 02:46:09', '2022-07-09 02:46:09'),
(12, 2, '2010 sampai 2012', '2', '2022-07-09 02:46:09', '2022-07-09 02:46:09'),
(13, 2, '2013 sampai 2014', '3', '2022-07-09 02:46:09', '2022-07-09 02:46:09'),
(14, 2, '2015 sampai 2016', '4', '2022-07-09 02:46:10', '2022-07-09 02:46:10'),
(15, 2, '2017 sampai 2018', '5', '2022-07-09 02:46:10', '2022-07-09 02:46:10'),
(16, 2, '2019 sampai 2020', '6', '2022-07-09 02:46:10', '2022-07-09 02:46:10'),
(17, 2, '2021 sampai 2022', '7', '2022-07-09 02:46:10', '2022-07-09 02:46:10'),
(18, 3, 'kurang baik', '1', '2022-07-09 02:46:10', '2022-07-09 02:46:10'),
(19, 3, 'cukup', '2', '2022-07-09 02:46:10', '2022-07-09 02:46:10'),
(20, 3, 'sangat baik', '3', '2022-07-09 02:46:10', '2022-07-09 02:46:10'),
(21, 4, 'kurang baik', '1', '2022-07-09 02:46:10', '2022-07-09 02:46:10'),
(22, 4, 'cukup', '2', '2022-07-09 02:46:10', '2022-07-09 02:46:10'),
(23, 4, 'sangat baik', '3', '2022-07-09 02:46:10', '2022-07-09 02:46:10'),
(24, 5, 'dibawah 5 orang', '1', '2022-07-09 02:46:10', '2022-07-09 02:46:10'),
(25, 5, '5 sampai 6 orang ', '2', '2022-07-09 02:46:10', '2022-07-09 02:46:10'),
(26, 5, '7 sampai 8 orang', '3', '2022-07-09 02:46:10', '2022-07-09 02:46:10'),
(27, 5, 'diatas 8 orang', '4', '2022-07-09 02:46:11', '2022-07-09 02:46:11'),
(28, 6, 'dibawah 1300cc', '1', '2022-07-09 02:46:11', '2022-07-09 02:46:11'),
(29, 6, '1301cc sampai 1400cc', '2', '2022-07-09 02:46:11', '2022-07-09 02:46:11'),
(30, 6, '1401cc sampai 1500cc', '3', '2022-07-09 02:46:11', '2022-07-09 02:46:11'),
(31, 6, '1501cc sampai 1600cc', '4', '2022-07-09 02:46:11', '2022-07-09 02:46:11'),
(32, 6, 'diatas 1600cc', '5', '2022-07-09 02:46:11', '2022-07-09 02:46:11'),
(33, 7, 'Pertamax Turbo', '1', '2022-07-09 02:46:11', '2022-07-09 02:46:11'),
(34, 7, 'Pertamina DEX', '2', '2022-07-09 02:46:11', '2022-07-09 02:46:11'),
(35, 7, 'Pertamax', '3', '2022-07-09 02:46:11', '2022-07-09 02:46:11'),
(36, 7, 'Pertalite', '4', '2022-07-09 02:46:11', '2022-07-09 02:46:11'),
(37, 7, 'Solar', '5', '2022-07-09 02:46:12', '2022-07-09 02:46:12'),
(38, 8, 'diatas 600rb/hari', '1', '2022-07-09 02:46:12', '2022-07-09 02:46:12'),
(39, 8, '551rb sampai 600rb/hari', '2', '2022-07-09 02:46:12', '2022-07-21 07:23:39'),
(40, 8, '501rb sampai 550rb/hari', '3', '2022-07-09 02:46:12', '2022-07-21 07:24:01'),
(41, 8, '451rb sampai 500rb/hari', '4', '2022-07-09 02:46:12', '2022-07-21 07:24:22'),
(42, 8, '401rb sampai 450rb/hari', '5', '2022-07-09 02:46:12', '2022-07-21 07:24:42'),
(43, 8, '351rb sampai 400rb/hari', '6', '2022-07-21 07:24:57', '2022-07-21 07:24:57'),
(44, 8, '300rb sampai 350rb/hari', '7', '2022-07-21 07:25:11', '2022-07-21 07:25:11'),
(45, 8, 'dibawah 300rb/hari', '8', '2022-07-21 07:25:26', '2022-07-21 07:25:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `merk_id` bigint(20) UNSIGNED NOT NULL,
  `Tahun_Produksi_id` bigint(20) UNSIGNED NOT NULL,
  `Kondisi_Fisik_id` bigint(20) UNSIGNED NOT NULL,
  `Kondisi_Mesin_id` bigint(20) UNSIGNED NOT NULL,
  `Muatan_Penumpang_id` bigint(20) UNSIGNED NOT NULL,
  `Kapasitas_Mesin_id` bigint(20) UNSIGNED NOT NULL,
  `Jenis_BBM_id` bigint(20) UNSIGNED NOT NULL,
  `Harga_Sewa_id` bigint(20) UNSIGNED NOT NULL,
  `stok` enum('standby','onused') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_polisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kata_kunci` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cars`
--

INSERT INTO `cars` (`id`, `user_id`, `shop_id`, `merk_id`, `Tahun_Produksi_id`, `Kondisi_Fisik_id`, `Kondisi_Mesin_id`, `Muatan_Penumpang_id`, `Kapasitas_Mesin_id`, `Jenis_BBM_id`, `Harga_Sewa_id`, `stok`, `no_polisi`, `deskripsi`, `kata_kunci`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 9, 17, 20, 23, 26, 32, 37, 39, 'standby', 'bl0001lh', '<div>Model : Innova Reborn<br>Tahun : 2021</div>', 'Toyota Kijang Innova, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, diatas 1600cc, Solar, 551rb sampai 600rb/hari, ', 'gambar1/W09VHH1XeDTfw2WN8eVUN32F7OzTdeOoE33FYTl7.webp', 'gambar2/eVFRYRGEYL61RV4I446SVs5JmE9dR9DbPB4FtSgg.webp', 'gambar3/LFGpfI8u4J2G6bcbUWfwDe42Q6ZJSXKMcJ48a6UL.webp', 'gambar4/9mGSrsCuT08s4M2qymXhXxTHDDOypD3Q7ES7eZVf.webp', 'gambar5/y2iLtF3LNdHiLsvKDEAcW7IKlkh6Vd3MnWe5yBUY.webp', '2022-07-09 02:57:55', '2022-07-21 08:09:03'),
(2, 2, 1, 9, 17, 20, 23, 26, 32, 37, 39, 'standby', 'bl0002lh', '<div>.</div>', 'Toyota Kijang Innova, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, diatas 1600cc, Solar, 501rb sampai 600rb/hari, ', 'gambar1/W09VHH1XeDTfw2WN8eVUN32F7OzTdeOoE33FYTl7.webp', 'gambar2/eVFRYRGEYL61RV4I446SVs5JmE9dR9DbPB4FtSgg.webp', 'gambar3/LFGpfI8u4J2G6bcbUWfwDe42Q6ZJSXKMcJ48a6UL.webp', 'gambar4/9mGSrsCuT08s4M2qymXhXxTHDDOypD3Q7ES7eZVf.webp', 'gambar5/y2iLtF3LNdHiLsvKDEAcW7IKlkh6Vd3MnWe5yBUY.webp', '2022-07-09 03:20:59', '2022-07-09 03:20:59'),
(3, 2, 1, 9, 16, 19, 22, 26, 32, 37, 39, 'standby', 'bl0003lh', '<div>.</div>', 'Toyota Kijang Innova, 2019 sampai 2020, cukup, cukup, 7 sampai 8 orang, diatas 1600cc, Solar, 551rb sampai 600rb/hari, ', 'gambar1/k68qWAyzL2Nrwyj8aBXuWAzVSxKCFu5kjwRynoiy.webp', 'gambar2/m7l0vXZD7Dn4fnOuwj9rpucBBJ7MNHqFn3q8qU5e.webp', 'gambar3/OnPTj7TAMWFs6DfRFvBPL2zu7H8n9hshsUjT2eLK.webp', 'gambar4/HHnZhXMD3a9nkiWvD8Mp5Ll7xrHH61u0HD3BHgYV.webp', 'gambar5/9oXQVkzoRsHx7NwOQP8v688Txf0OuK2bWJIbnib7.webp', '2022-07-09 03:25:58', '2022-07-21 08:13:19'),
(4, 2, 1, 9, 16, 19, 22, 26, 32, 37, 39, 'standby', 'bl0004lh', '<div>.</div>', 'Toyota Kijang Innova, 2019 sampai 2020, cukup, cukup, 7 sampai 8 orang, diatas 1600cc, Solar, 501rb sampai 600rb/hari, ', 'gambar1/k68qWAyzL2Nrwyj8aBXuWAzVSxKCFu5kjwRynoiy.webp', 'gambar2/m7l0vXZD7Dn4fnOuwj9rpucBBJ7MNHqFn3q8qU5e.webp', 'gambar3/OnPTj7TAMWFs6DfRFvBPL2zu7H8n9hshsUjT2eLK.webp', 'gambar4/HHnZhXMD3a9nkiWvD8Mp5Ll7xrHH61u0HD3BHgYV.webp', 'gambar5/9oXQVkzoRsHx7NwOQP8v688Txf0OuK2bWJIbnib7.webp', '2022-07-09 03:26:42', '2022-07-09 03:26:42'),
(5, 2, 1, 9, 16, 19, 22, 26, 32, 37, 39, 'standby', 'bl0005lh', '<div>.</div>', 'Toyota Kijang Innova, 2019 sampai 2020, cukup, cukup, 7 sampai 8 orang, diatas 1600cc, Solar, 551rb sampai 600rb/hari, ', 'gambar1/k68qWAyzL2Nrwyj8aBXuWAzVSxKCFu5kjwRynoiy.webp', 'gambar2/m7l0vXZD7Dn4fnOuwj9rpucBBJ7MNHqFn3q8qU5e.webp', 'gambar3/OnPTj7TAMWFs6DfRFvBPL2zu7H8n9hshsUjT2eLK.webp', 'gambar4/HHnZhXMD3a9nkiWvD8Mp5Ll7xrHH61u0HD3BHgYV.webp', 'gambar5/9oXQVkzoRsHx7NwOQP8v688Txf0OuK2bWJIbnib7.webp', '2022-07-09 03:27:34', '2022-07-23 01:20:56'),
(6, 2, 1, 8, 17, 19, 22, 26, 30, 36, 43, 'standby', 'bl0006lh', '<div>.</div>', 'Toyota Avanza Veloz, 2021 sampai 2022, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 351rb sampai 400rb/hari, ', 'gambar1/GyEhFouYmV7SOwWjS3eaH86SAAVyG1ruG7niHbVS.webp', 'gambar2/vcPvNnn0GHcLaK4CRw00PzDOPrYjYJVAxEkvm0sF.webp', 'gambar3/e3Lz8gi1CY59eOVN2etMHn8r2dhLHRwVwaHunFsi.webp', 'gambar4/jCFeCxy9QtPV2bs1mUAdOAwzsrJKYXU06gbfZyPj.webp', 'gambar5/vWgMAJhUteK248U9xa4KxHAXTRAB6p9oGsilIFvC.webp', '2022-07-09 03:28:42', '2022-07-21 08:22:22'),
(7, 2, 1, 8, 15, 19, 22, 26, 30, 36, 44, 'standby', 'bl0007lh', '<div>.</div>', 'Toyota Avanza Veloz, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 350rb/hari, ', 'gambar1/13VhOyQweqsaz4jtoSrFm4csoSGGIgos1NTy1z2D.webp', 'gambar2/C7CapFfzR5Np5o9BAgWtSzfCidr77jc6WKXBkRdG.webp', 'gambar3/oBEf6qfH9zUPwjJkqg4SMu8wbIEmUuAxPnHVh58v.webp', 'gambar4/7j7hG4XzQ3TKRnKGip0xiqCFqwrtYNpan7pYeBLb.webp', 'gambar5/6VAoSaafHQyOjIE0qmAhTJLzA49hv5ffiBlrWhhb.webp', '2022-07-09 03:29:22', '2022-07-23 01:18:07'),
(8, 2, 1, 8, 14, 19, 22, 26, 30, 36, 44, 'standby', 'bl0008lh', '<div>.</div>', 'Toyota Avanza Veloz, 2015 sampai 2016, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 350rb/hari, ', 'gambar1/8a93MHQXJ3Qvz0cDQzoBomDE6fAsUGS1BMcmcfvM.webp', 'gambar2/1nvdf6KP7qtYDZZ4IQUPHLOlSWwuuyOdJn1oYBKk.webp', 'gambar3/evwYQ4zKPmDklolUwkOJmG1PRqp0se4vx8yp1Ofd.webp', 'gambar4/WaOUBx8VDgMZzDCT3c9qYLIwGyw0WIHb294KxJMp.webp', 'gambar5/wy4x4XTo7NHQoe32nowrbcrYT28DPERzdeqrctJO.webp', '2022-07-09 03:30:13', '2022-07-23 01:18:52'),
(9, 2, 1, 8, 13, 19, 22, 26, 30, 36, 44, 'standby', 'bl0009lh', '<div>.</div>', 'Toyota Avanza Veloz, 2013 sampai 2014, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 350rb/hari, ', 'gambar1/SKLYJXw2U0Smr71AShG7mU9GfYMq2zRymcFciVTQ.webp', 'gambar2/j38gc3YrqE808BytsLCSnURjSWTGCq8SfRNlkTox.webp', 'gambar3/o3xxP9CstCjD7cawovNsmFt2kEGqQ8qTqetlMXuo.webp', 'gambar4/ZgZzPmuEIqMQD0dj0gvIQOkK26IGLKGl5RB4WvQl.webp', 'gambar5/9r4ZrhPRD9PYCcKbmqErVjuDAstQSaTHD6KfBOva.webp', '2022-07-09 03:31:10', '2022-07-23 01:19:52'),
(10, 2, 1, 7, 17, 20, 23, 26, 30, 36, 43, 'standby', 'bl0010lh', NULL, 'Toyota Avanza Type G, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 351rb sampai 400rb/hari, ', 'gambar1/Puw3nzRPRs849Ui0GqNYYTXMFIGYEsR09Yojm59y.webp', 'gambar2/47WmiU885TX9M3CxdEtpWcGPBe9kCn7hLDfOl3yl.webp', 'gambar3/gEKJU8JliYG3hihfHFirYiUQWiFoUv9zArVvjGhN.webp', 'gambar4/PGSaSY5aOnzslXwXybCnjAUP2YjsSlHo6AJ5rcAn.webp', 'gambar5/FVTKyjxyAOzXBe04boPmg5kqvTGKjcYNHei9qAwP.webp', '2022-07-09 03:32:31', '2022-07-23 01:04:49'),
(11, 2, 1, 7, 15, 19, 22, 26, 29, 36, 44, 'standby', 'bl0011lh', NULL, 'Toyota Avanza Type G, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 350rb/hari, ', 'gambar1/xksYlnjzKNab7ztkSNHG0VYHwHXQJvpRE2XYLGCv.webp', 'gambar2/u0diFyJuZFai7ZLgRyVrSQAVnnjXKPLetn9jXJCS.webp', 'gambar3/SvkZmIebhDTlO4iLjmR3fsEWLCy5EagZllnXHBa1.webp', 'gambar4/JD9mMR7PcClN8Qsjz0bZBUHP4fZhNDeQLQaNsrYy.webp', 'gambar5/TwPCE5mGQXeC6yGg15VXBjJt2fDFXK6t9ymij0ly.webp', '2022-07-09 03:33:31', '2022-07-23 01:12:23'),
(12, 2, 1, 7, 14, 19, 22, 26, 29, 36, 44, 'standby', 'bl0012lh', NULL, 'Toyota Avanza Type G, 2015 sampai 2016, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 350rb/hari, ', 'gambar1/2hrNsWV7vi3xBWvsjtyD7Eci8W2cs8yYWkGnoiLP.webp', 'gambar2/ZDk5ATxqCQJgINuSZj234kSmxDcMWhaOAEFU7SmV.webp', 'gambar3/RKUQwOzwPGylxrLOd8Wg95En6p7vt6Z5E3oACHDE.webp', 'gambar4/O3VHlBwgF0BORhbOzNXMOPUd6SihVNLjIiMADixx.webp', 'gambar5/RgIQhSZHOSuV0E5AZBa415nl38swQy8ZwipqLbrO.webp', '2022-07-09 03:34:19', '2022-07-23 01:15:19'),
(13, 2, 1, 7, 12, 19, 22, 26, 28, 35, 44, 'standby', 'bl0013lh', NULL, 'Toyota Avanza Type G, 2010 sampai 2012, cukup, cukup, 7 sampai 8 orang, dibawah 1300cc, Pertamax, 300rb sampai 350rb/hari, ', 'gambar1/qAmVdeYgxahynKouaOZIgVQYPz4TBK32ky2dlDhU.webp', 'gambar2/URLYjMGALlDHCwMbpAvhBNS3tkVUbSju8bdjKO7Y.webp', 'gambar3/IFzF9N1xNPStON5T6eGEaXVI1YMkPHj72mbBVW8k.webp', 'gambar4/g7DzX1jSLSslSP0Rn4zvwebEPzlUdj9ackiXesPO.webp', 'gambar5/dtYBvpcDOIc5QRZdLzoL8qROKWaciCBkfeEduZZU.webp', '2022-07-09 03:35:08', '2022-07-23 01:17:10'),
(14, 2, 1, 6, 15, 19, 22, 26, 29, 36, 44, 'standby', 'bl0014lh', NULL, 'Toyota Avanza Type E, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 350rb/hari, ', 'gambar1/1MDGMTp1CKhJwa73wsgXfKrUGlfstAuwbA6i9bfv.webp', 'gambar2/Z9I5z5Vt7AcGhJYmG6O8TZcSu0b1xlMEj4jxwEKU.webp', 'gambar3/hp7rbjp8V9YaSd5KbzFbRcoyWTVk8SZbmwe7Lh7L.webp', 'gambar4/iQNyp6CjuwHXv2iay5Xiia4qr3uKug4iSGQmdMV9.webp', 'gambar5/Fn3YlC7v9Na3rqTYzGjE4COz3PwUAVnQyFZ5OLxg.webp', '2022-07-09 03:36:01', '2022-07-23 01:03:49'),
(15, 2, 1, 6, 15, 19, 22, 26, 29, 36, 44, 'standby', 'bl0015lh', NULL, 'Toyota Avanza Type E, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/1MDGMTp1CKhJwa73wsgXfKrUGlfstAuwbA6i9bfv.webp', 'gambar2/Z9I5z5Vt7AcGhJYmG6O8TZcSu0b1xlMEj4jxwEKU.webp', 'gambar3/hp7rbjp8V9YaSd5KbzFbRcoyWTVk8SZbmwe7Lh7L.webp', 'gambar4/iQNyp6CjuwHXv2iay5Xiia4qr3uKug4iSGQmdMV9.webp', 'gambar5/Fn3YlC7v9Na3rqTYzGjE4COz3PwUAVnQyFZ5OLxg.webp', '2022-07-09 03:38:31', '2022-07-23 01:04:13'),
(16, 2, 1, 3, 17, 20, 23, 25, 30, 36, 43, 'standby', 'bl0016lh', NULL, 'Honda Jazz RS, 2021 sampai 2022, sangat baik, sangat baik, 5 sampai 6 orang , 1401cc sampai 1500cc, Pertalite, 351rb sampai 400rb/hari, ', 'gambar1/TN2CHygTOFht9AT5mHGjOQSTGPOH1vRd0easd6lV.webp', 'gambar2/YWl1C2qBQQiGT7eW5TaoAnszdfkzxId2hnUvhu3M.webp', 'gambar3/LJc9MJL6UujZ0uerKD1EV4PPflJPvIzlhF15DZ6R.webp', 'gambar4/mQe7KP0GMwkYitw7Od9ISnzkChyHXEfVr0EpM9Hw.webp', 'gambar5/gkIKa2KP37eu87Y5J3dQ6Fg2vh6JSE5KFKCebYZ6.webp', '2022-07-09 03:39:21', '2022-07-23 01:01:41'),
(17, 2, 1, 3, 17, 19, 22, 25, 30, 36, 44, 'standby', 'bl0017lh', NULL, 'Honda Jazz RS, 2021 sampai 2022, cukup, cukup, 5 sampai 6 orang , 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/TN2CHygTOFht9AT5mHGjOQSTGPOH1vRd0easd6lV.webp', 'gambar2/YWl1C2qBQQiGT7eW5TaoAnszdfkzxId2hnUvhu3M.webp', 'gambar3/LJc9MJL6UujZ0uerKD1EV4PPflJPvIzlhF15DZ6R.webp', 'gambar4/mQe7KP0GMwkYitw7Od9ISnzkChyHXEfVr0EpM9Hw.webp', 'gambar5/gkIKa2KP37eu87Y5J3dQ6Fg2vh6JSE5KFKCebYZ6.webp', '2022-07-09 03:39:53', '2022-07-23 01:02:02'),
(18, 2, 1, 3, 17, 19, 22, 25, 30, 36, 44, 'standby', 'bl0018lh', NULL, 'Honda Jazz RS, 2021 sampai 2022, cukup, cukup, 5 sampai 6 orang , 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/TN2CHygTOFht9AT5mHGjOQSTGPOH1vRd0easd6lV.webp', 'gambar2/YWl1C2qBQQiGT7eW5TaoAnszdfkzxId2hnUvhu3M.webp', 'gambar3/LJc9MJL6UujZ0uerKD1EV4PPflJPvIzlhF15DZ6R.webp', 'gambar4/mQe7KP0GMwkYitw7Od9ISnzkChyHXEfVr0EpM9Hw.webp', 'gambar5/gkIKa2KP37eu87Y5J3dQ6Fg2vh6JSE5KFKCebYZ6.webp', '2022-07-09 03:40:18', '2022-07-23 01:02:02'),
(19, 2, 1, 3, 15, 19, 22, 25, 30, 36, 44, 'standby', 'bl0019lh', NULL, 'Honda Jazz RS, 2017 sampai 2018, cukup, cukup, 5 sampai 6 orang , 1401cc sampai 1500cc, Pertalite, 300rb sampai 350rb/hari, ', 'gambar1/lmrtHR27cM1o5M8pJuwe9J3kn84oglYznnKP0Dbk.webp', 'gambar2/C1sBt9pbDxfeSrAl9ZrpRkIilhGuCmSmeGmZ2Xop.webp', 'gambar3/lqNemLa1RehW28UV32xTer7So3Yjc5xEqGY4suGO.webp', 'gambar4/7RPmyFgBWu7kbHBPTPQkG8kQ0ZtYJXjT9Xeuk69h.webp', 'gambar5/y1j9kY9OVQqynYmLN4BetogMP2Q7dw0RGLFtEgPs.webp', '2022-07-09 03:41:25', '2022-07-23 01:02:53'),
(20, 2, 1, 3, 15, 19, 22, 25, 30, 36, 44, 'standby', 'bl0020lh', NULL, 'Honda Jazz RS, 2017 sampai 2018, cukup, cukup, 5 sampai 6 orang , 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/lmrtHR27cM1o5M8pJuwe9J3kn84oglYznnKP0Dbk.webp', 'gambar2/C1sBt9pbDxfeSrAl9ZrpRkIilhGuCmSmeGmZ2Xop.webp', 'gambar3/lqNemLa1RehW28UV32xTer7So3Yjc5xEqGY4suGO.webp', 'gambar4/7RPmyFgBWu7kbHBPTPQkG8kQ0ZtYJXjT9Xeuk69h.webp', 'gambar5/y1j9kY9OVQqynYmLN4BetogMP2Q7dw0RGLFtEgPs.webp', '2022-07-09 03:42:01', '2022-07-23 01:03:14'),
(21, 3, 2, 8, 17, 20, 23, 26, 30, 36, 43, 'standby', 'bl0021pg', NULL, 'Toyota Avanza Veloz, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/GyEhFouYmV7SOwWjS3eaH86SAAVyG1ruG7niHbVS.webp', 'gambar2/vcPvNnn0GHcLaK4CRw00PzDOPrYjYJVAxEkvm0sF.webp', 'gambar3/e3Lz8gi1CY59eOVN2etMHn8r2dhLHRwVwaHunFsi.webp', 'gambar4/jCFeCxy9QtPV2bs1mUAdOAwzsrJKYXU06gbfZyPj.webp', 'gambar5/vWgMAJhUteK248U9xa4KxHAXTRAB6p9oGsilIFvC.webp', '2022-07-09 03:45:58', '2022-07-23 01:17:41'),
(22, 3, 2, 8, 15, 19, 22, 26, 30, 36, 44, 'standby', 'bl0022pg', NULL, 'Toyota Avanza Veloz, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/13VhOyQweqsaz4jtoSrFm4csoSGGIgos1NTy1z2D.webp', 'gambar2/C7CapFfzR5Np5o9BAgWtSzfCidr77jc6WKXBkRdG.webp', 'gambar3/oBEf6qfH9zUPwjJkqg4SMu8wbIEmUuAxPnHVh58v.webp', 'gambar4/7j7hG4XzQ3TKRnKGip0xiqCFqwrtYNpan7pYeBLb.webp', 'gambar5/6VAoSaafHQyOjIE0qmAhTJLzA49hv5ffiBlrWhhb.webp', '2022-07-09 03:46:29', '2022-07-23 01:18:18'),
(23, 3, 2, 8, 15, 19, 22, 26, 30, 36, 44, 'standby', 'bl0023pg', NULL, 'Toyota Avanza Veloz, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/13VhOyQweqsaz4jtoSrFm4csoSGGIgos1NTy1z2D.webp', 'gambar2/C7CapFfzR5Np5o9BAgWtSzfCidr77jc6WKXBkRdG.webp', 'gambar3/oBEf6qfH9zUPwjJkqg4SMu8wbIEmUuAxPnHVh58v.webp', 'gambar4/7j7hG4XzQ3TKRnKGip0xiqCFqwrtYNpan7pYeBLb.webp', 'gambar5/6VAoSaafHQyOjIE0qmAhTJLzA49hv5ffiBlrWhhb.webp', '2022-07-09 03:47:23', '2022-07-23 01:18:18'),
(24, 3, 2, 8, 15, 19, 22, 26, 30, 36, 44, 'standby', 'bl0024pg', NULL, 'Toyota Avanza Veloz, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/13VhOyQweqsaz4jtoSrFm4csoSGGIgos1NTy1z2D.webp', 'gambar2/C7CapFfzR5Np5o9BAgWtSzfCidr77jc6WKXBkRdG.webp', 'gambar3/oBEf6qfH9zUPwjJkqg4SMu8wbIEmUuAxPnHVh58v.webp', 'gambar4/7j7hG4XzQ3TKRnKGip0xiqCFqwrtYNpan7pYeBLb.webp', 'gambar5/6VAoSaafHQyOjIE0qmAhTJLzA49hv5ffiBlrWhhb.webp', '2022-07-09 03:48:04', '2022-07-23 01:18:18'),
(25, 3, 2, 7, 17, 20, 23, 26, 30, 36, 43, 'standby', 'bl0025pg', NULL, 'Toyota Avanza Type G, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/Puw3nzRPRs849Ui0GqNYYTXMFIGYEsR09Yojm59y.webp', 'gambar2/47WmiU885TX9M3CxdEtpWcGPBe9kCn7hLDfOl3yl.webp', 'gambar3/gEKJU8JliYG3hihfHFirYiUQWiFoUv9zArVvjGhN.webp', 'gambar4/PGSaSY5aOnzslXwXybCnjAUP2YjsSlHo6AJ5rcAn.webp', 'gambar5/FVTKyjxyAOzXBe04boPmg5kqvTGKjcYNHei9qAwP.webp', '2022-07-09 03:48:43', '2022-07-23 01:10:21'),
(26, 3, 2, 7, 14, 19, 22, 26, 29, 36, 44, 'standby', 'bl0026pg', '<div>.</div>', 'Toyota Avanza Type G, 2015 sampai 2016, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/2hrNsWV7vi3xBWvsjtyD7Eci8W2cs8yYWkGnoiLP.webp', 'gambar2/ZDk5ATxqCQJgINuSZj234kSmxDcMWhaOAEFU7SmV.webp', 'gambar3/RKUQwOzwPGylxrLOd8Wg95En6p7vt6Z5E3oACHDE.webp', 'gambar4/O3VHlBwgF0BORhbOzNXMOPUd6SihVNLjIiMADixx.webp', 'gambar5/RgIQhSZHOSuV0E5AZBa415nl38swQy8ZwipqLbrO.webp', '2022-07-09 03:49:16', '2022-07-23 01:15:31'),
(27, 3, 2, 7, 15, 19, 22, 26, 29, 36, 44, 'standby', 'bl0027pg', '<div>.</div>', 'Toyota Avanza Type G, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/xksYlnjzKNab7ztkSNHG0VYHwHXQJvpRE2XYLGCv.webp', 'gambar2/u0diFyJuZFai7ZLgRyVrSQAVnnjXKPLetn9jXJCS.webp', 'gambar3/SvkZmIebhDTlO4iLjmR3fsEWLCy5EagZllnXHBa1.webp', 'gambar4/JD9mMR7PcClN8Qsjz0bZBUHP4fZhNDeQLQaNsrYy.webp', 'gambar5/TwPCE5mGQXeC6yGg15VXBjJt2fDFXK6t9ymij0ly.webp', '2022-07-09 03:49:48', '2022-07-23 01:12:32'),
(28, 3, 2, 7, 15, 19, 22, 26, 29, 36, 44, 'standby', 'bl0028pg', NULL, 'Toyota Avanza Type G, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/xksYlnjzKNab7ztkSNHG0VYHwHXQJvpRE2XYLGCv.webp', 'gambar2/u0diFyJuZFai7ZLgRyVrSQAVnnjXKPLetn9jXJCS.webp', 'gambar3/SvkZmIebhDTlO4iLjmR3fsEWLCy5EagZllnXHBa1.webp', 'gambar4/JD9mMR7PcClN8Qsjz0bZBUHP4fZhNDeQLQaNsrYy.webp', 'gambar5/TwPCE5mGQXeC6yGg15VXBjJt2fDFXK6t9ymij0ly.webp', '2022-07-09 03:54:02', '2022-07-23 01:12:33'),
(29, 3, 2, 7, 14, 19, 22, 26, 29, 36, 44, 'standby', 'bl0029pg', NULL, 'Toyota Avanza Type G, 2015 sampai 2016, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/2hrNsWV7vi3xBWvsjtyD7Eci8W2cs8yYWkGnoiLP.webp', 'gambar2/ZDk5ATxqCQJgINuSZj234kSmxDcMWhaOAEFU7SmV.webp', 'gambar3/RKUQwOzwPGylxrLOd8Wg95En6p7vt6Z5E3oACHDE.webp', 'gambar4/O3VHlBwgF0BORhbOzNXMOPUd6SihVNLjIiMADixx.webp', 'gambar5/RgIQhSZHOSuV0E5AZBa415nl38swQy8ZwipqLbrO.webp', '2022-07-09 03:54:38', '2022-07-23 01:15:31'),
(30, 3, 2, 7, 12, 19, 22, 26, 28, 36, 44, 'standby', 'bl0030pg', NULL, 'Toyota Avanza Type G, 2010 sampai 2012, cukup, cukup, 7 sampai 8 orang, dibawah 1300cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/qAmVdeYgxahynKouaOZIgVQYPz4TBK32ky2dlDhU.webp', 'gambar2/URLYjMGALlDHCwMbpAvhBNS3tkVUbSju8bdjKO7Y.webp', 'gambar3/IFzF9N1xNPStON5T6eGEaXVI1YMkPHj72mbBVW8k.webp', 'gambar4/g7DzX1jSLSslSP0Rn4zvwebEPzlUdj9ackiXesPO.webp', 'gambar5/dtYBvpcDOIc5QRZdLzoL8qROKWaciCBkfeEduZZU.webp', '2022-07-09 03:55:14', '2022-07-23 01:17:26'),
(31, 3, 2, 7, 12, 19, 22, 26, 28, 36, 44, 'standby', 'bl0031pg', NULL, 'Toyota Avanza Type G, 2010 sampai 2012, cukup, cukup, 7 sampai 8 orang, dibawah 1300cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/qAmVdeYgxahynKouaOZIgVQYPz4TBK32ky2dlDhU.webp', 'gambar2/URLYjMGALlDHCwMbpAvhBNS3tkVUbSju8bdjKO7Y.webp', 'gambar3/IFzF9N1xNPStON5T6eGEaXVI1YMkPHj72mbBVW8k.webp', 'gambar4/g7DzX1jSLSslSP0Rn4zvwebEPzlUdj9ackiXesPO.webp', 'gambar5/dtYBvpcDOIc5QRZdLzoL8qROKWaciCBkfeEduZZU.webp', '2022-07-09 03:55:38', '2022-07-23 01:17:26'),
(32, 3, 2, 9, 17, 20, 23, 26, 32, 37, 39, 'standby', 'bl0032pg', NULL, 'Toyota Kijang Innova, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, diatas 1600cc, Solar, 501rb sampai 600rb/hari, ', 'gambar1/W09VHH1XeDTfw2WN8eVUN32F7OzTdeOoE33FYTl7.webp', 'gambar2/eVFRYRGEYL61RV4I446SVs5JmE9dR9DbPB4FtSgg.webp', 'gambar3/LFGpfI8u4J2G6bcbUWfwDe42Q6ZJSXKMcJ48a6UL.webp', 'gambar4/9mGSrsCuT08s4M2qymXhXxTHDDOypD3Q7ES7eZVf.webp', 'gambar5/y2iLtF3LNdHiLsvKDEAcW7IKlkh6Vd3MnWe5yBUY.webp', '2022-07-09 03:56:08', '2022-07-23 01:20:27'),
(33, 3, 2, 9, 17, 20, 23, 26, 32, 37, 39, 'standby', 'bl0033pg', NULL, 'Toyota Kijang Innova, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, diatas 1600cc, Solar, 501rb sampai 600rb/hari, ', 'gambar1/W09VHH1XeDTfw2WN8eVUN32F7OzTdeOoE33FYTl7.webp', 'gambar2/eVFRYRGEYL61RV4I446SVs5JmE9dR9DbPB4FtSgg.webp', 'gambar3/LFGpfI8u4J2G6bcbUWfwDe42Q6ZJSXKMcJ48a6UL.webp', 'gambar4/9mGSrsCuT08s4M2qymXhXxTHDDOypD3Q7ES7eZVf.webp', 'gambar5/y2iLtF3LNdHiLsvKDEAcW7IKlkh6Vd3MnWe5yBUY.webp', '2022-07-09 03:56:37', '2022-07-23 01:20:27'),
(34, 3, 2, 9, 16, 19, 22, 26, 32, 37, 42, 'standby', 'bl0034pg', NULL, 'Toyota Kijang Innova, 2019 sampai 2020, cukup, cukup, 7 sampai 8 orang, diatas 1600cc, Solar, 501rb sampai 600rb/hari, ', 'gambar1/k68qWAyzL2Nrwyj8aBXuWAzVSxKCFu5kjwRynoiy.webp', 'gambar2/m7l0vXZD7Dn4fnOuwj9rpucBBJ7MNHqFn3q8qU5e.webp', 'gambar3/OnPTj7TAMWFs6DfRFvBPL2zu7H8n9hshsUjT2eLK.webp', 'gambar4/HHnZhXMD3a9nkiWvD8Mp5Ll7xrHH61u0HD3BHgYV.webp', 'gambar5/9oXQVkzoRsHx7NwOQP8v688Txf0OuK2bWJIbnib7.webp', '2022-07-09 03:57:21', '2022-07-23 01:20:56'),
(35, 3, 2, 9, 16, 19, 22, 26, 32, 37, 42, 'standby', 'bl0035pg', NULL, 'Toyota Kijang Innova, 2019 sampai 2020, cukup, cukup, 7 sampai 8 orang, diatas 1600cc, Solar, 501rb sampai 600rb/hari, ', 'gambar1/k68qWAyzL2Nrwyj8aBXuWAzVSxKCFu5kjwRynoiy.webp', 'gambar2/m7l0vXZD7Dn4fnOuwj9rpucBBJ7MNHqFn3q8qU5e.webp', 'gambar3/OnPTj7TAMWFs6DfRFvBPL2zu7H8n9hshsUjT2eLK.webp', 'gambar4/HHnZhXMD3a9nkiWvD8Mp5Ll7xrHH61u0HD3BHgYV.webp', 'gambar5/9oXQVkzoRsHx7NwOQP8v688Txf0OuK2bWJIbnib7.webp', '2022-07-09 03:57:56', '2022-07-23 01:20:56'),
(36, 3, 2, 4, 15, 19, 22, 26, 32, 37, 38, 'standby', 'bl0036pg', NULL, 'Mitsubishi Pajero Sport, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, diatas 1600cc, Solar, diatas 600rb/hari, ', 'gambar1/iEsU7skyfzU5jk0axQImFNKaqPISfzB2EdDCqOeL.webp', 'gambar2/6TeySquWMJYaWSRZVrhlrBw8Do8DPCRNhmcY1wo2.webp', 'gambar3/Wad8at1L2D49yVMk3lfKmbOf3cE9cDEwssTi8JIp.webp', 'gambar4/yErPWW6GnoLFz5J8IXJMClSN6JEc9yT7ugxIp1ZX.webp', 'gambar5/hkFm6zHRd6zAZQJTKgW0pjAudB2ZE7K3BAyLgrPx.webp', '2022-07-09 03:59:20', '2022-07-23 01:05:38'),
(37, 3, 2, 4, 15, 19, 22, 26, 32, 37, 38, 'standby', 'bl0037pg', NULL, 'Mitsubishi Pajero Sport, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, diatas 1600cc, Solar, diatas 600rb/hari, ', 'gambar1/iEsU7skyfzU5jk0axQImFNKaqPISfzB2EdDCqOeL.webp', 'gambar2/6TeySquWMJYaWSRZVrhlrBw8Do8DPCRNhmcY1wo2.webp', 'gambar3/Wad8at1L2D49yVMk3lfKmbOf3cE9cDEwssTi8JIp.webp', 'gambar4/yErPWW6GnoLFz5J8IXJMClSN6JEc9yT7ugxIp1ZX.webp', 'gambar5/hkFm6zHRd6zAZQJTKgW0pjAudB2ZE7K3BAyLgrPx.webp', '2022-07-09 03:59:53', '2022-07-23 01:05:50'),
(38, 3, 2, 10, 15, 19, 22, 26, 30, 36, 43, 'standby', 'bl0038pg', NULL, 'Toyota Rush, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 351rb sampai 400rb/hari, ', 'gambar1/AiwYbz5NkSR6Z4whQ7aQzQ38y3ozjlbgNlxdcuGy.webp', 'gambar2/hDqjrNwqj5fDyOEdNigOsCnUYcgImoXl64vPlk0b.webp', 'gambar3/Z4SFi08Dt4MH4ZGEjN2XB5wLi35fAQ0Fa9SEgFxv.webp', 'gambar4/AF1wXP52TmwfYDHpQ8ol7mms6Gvg4HM2t4zsk2fZ.webp', 'gambar5/pn9ZLcReUZjhpPRLzZpWtHqwjuJs28uNTVGYpmqw.webp', '2022-07-09 04:01:34', '2022-07-23 01:21:59'),
(39, 3, 2, 10, 15, 19, 22, 26, 30, 36, 43, 'standby', 'bl0039pg', NULL, 'Toyota Rush, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/AiwYbz5NkSR6Z4whQ7aQzQ38y3ozjlbgNlxdcuGy.webp', 'gambar2/hDqjrNwqj5fDyOEdNigOsCnUYcgImoXl64vPlk0b.webp', 'gambar3/Z4SFi08Dt4MH4ZGEjN2XB5wLi35fAQ0Fa9SEgFxv.webp', 'gambar4/AF1wXP52TmwfYDHpQ8ol7mms6Gvg4HM2t4zsk2fZ.webp', 'gambar5/pn9ZLcReUZjhpPRLzZpWtHqwjuJs28uNTVGYpmqw.webp', '2022-07-09 04:02:08', '2022-07-23 01:22:09'),
(40, 3, 2, 10, 14, 19, 22, 26, 32, 36, 43, 'standby', 'bl0040pg', NULL, 'Toyota Rush, 2015 sampai 2016, cukup, cukup, 7 sampai 8 orang, diatas 1600cc, Pertalite, 351rb sampai 400rb/hari, ', 'gambar1/FFPg5RB5Qd3Fzsd7XENtapvIf463uQmbgCZFlZ8U.webp', 'gambar2/s7DDjXytLsduUCCX5J2zUZTIRfcqlzPXGmLabUAP.webp', 'gambar3/vKV18Xl8zyB7LYrTRl8bSYUQ4CQKkSRT83Q7g3Vj.webp', 'gambar4/xtWUebGBXesoQJJCTrrzDZBmKtRmFpXMj4ssuT99.webp', 'gambar5/ER5OJIOaU5bt8NHdAqIlCtWTIdGNOcUwpYfPs3cG.webp', '2022-07-09 04:02:52', '2022-07-23 01:22:43'),
(41, 3, 2, 10, 14, 19, 22, 26, 30, 36, 43, 'standby', 'bl0041pg', NULL, 'Toyota Rush, 2015 sampai 2016, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/FFPg5RB5Qd3Fzsd7XENtapvIf463uQmbgCZFlZ8U.webp', 'gambar2/s7DDjXytLsduUCCX5J2zUZTIRfcqlzPXGmLabUAP.webp', 'gambar3/vKV18Xl8zyB7LYrTRl8bSYUQ4CQKkSRT83Q7g3Vj.webp', 'gambar4/xtWUebGBXesoQJJCTrrzDZBmKtRmFpXMj4ssuT99.webp', 'gambar5/ER5OJIOaU5bt8NHdAqIlCtWTIdGNOcUwpYfPs3cG.webp', '2022-07-09 04:03:24', '2022-07-23 01:22:55'),
(42, 3, 2, 5, 17, 20, 23, 25, 32, 37, 38, 'standby', 'bl0042pg', '<div>.</div>', 'Mitsubishi Triton, 2021 sampai 2022, sangat baik, sangat baik, 5 sampai 6 orang , diatas 1600cc, Solar, diatas 600rb/hari, ', 'gambar1/PnQHgtRVKyxnWBGzehjO3Gg5AJA0SwmRxnDHgG3Z.webp', 'gambar2/hW9UDZjsQ0seGCoruTyUqfUcwf2xmT9QL0m1uXqy.webp', 'gambar3/wHgyOaeJrdy2qGBuemGU2qWwYmoaA7tZSqTHfTw2.webp', 'gambar4/kz5SRQLBWedF7TFwJjdXtyT8chEeUyY1kY7yGI6N.webp', 'gambar5/9C0oqLRbmV39r0WnUlQb7dsd77tpZozE0eWVr9GQ.webp', '2022-07-09 04:04:16', '2022-07-23 01:06:22'),
(43, 3, 2, 5, 17, 19, 22, 25, 32, 37, 38, 'standby', 'bl0043lh', '<div>.</div>', 'Mitsubishi Triton, 2021 sampai 2022, cukup, cukup, 5 sampai 6 orang , diatas 1600cc, Solar, diatas 600rb/hari, ', 'gambar1/PnQHgtRVKyxnWBGzehjO3Gg5AJA0SwmRxnDHgG3Z.webp', 'gambar2/hW9UDZjsQ0seGCoruTyUqfUcwf2xmT9QL0m1uXqy.webp', 'gambar3/wHgyOaeJrdy2qGBuemGU2qWwYmoaA7tZSqTHfTw2.webp', 'gambar4/kz5SRQLBWedF7TFwJjdXtyT8chEeUyY1kY7yGI6N.webp', 'gambar5/9C0oqLRbmV39r0WnUlQb7dsd77tpZozE0eWVr9GQ.webp', '2022-07-09 04:05:55', '2022-07-23 01:06:39'),
(44, 3, 2, 1, 17, 20, 23, 26, 30, 36, 43, 'standby', 'bl00044lh', '<div>None</div>', 'Daihatsu Terios, 2021 sampai 2022, sangat baik, sangat baik, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 351rb sampai 400rb/hari, ', 'gambar1/kPvdn9SB34z3WSzVaa9x18VG1TEpNnDD4uxI6oad.webp', 'gambar2/6MW9VwdAqWuuk94tfLN6zsaUXk0IRajXqJUibeXk.webp', 'gambar3/FND3ZHaw10qDfjrfSum1Cy4yzX9XYcch7a0FqUHw.webp', 'gambar4/UB2R6QnUEmwf6n3STdVD4dw9n0m2TrufvOFmEZ6f.webp', 'gambar5/Epe0LI2Q7iNUzPVJXiGClJBXFCJN7RHRuPRWb3uL.webp', '2022-07-09 04:09:34', '2022-07-23 00:43:43'),
(45, 3, 2, 1, 17, 19, 22, 26, 30, 36, 43, 'standby', 'bl00045lh', NULL, 'Daihatsu Terios, 2021 sampai 2022, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/kPvdn9SB34z3WSzVaa9x18VG1TEpNnDD4uxI6oad.webp', 'gambar2/6MW9VwdAqWuuk94tfLN6zsaUXk0IRajXqJUibeXk.webp', 'gambar3/FND3ZHaw10qDfjrfSum1Cy4yzX9XYcch7a0FqUHw.webp', 'gambar4/UB2R6QnUEmwf6n3STdVD4dw9n0m2TrufvOFmEZ6f.webp', 'gambar5/Epe0LI2Q7iNUzPVJXiGClJBXFCJN7RHRuPRWb3uL.webp', '2022-07-09 04:10:37', '2022-07-23 00:51:11'),
(46, 3, 2, 1, 17, 19, 22, 26, 30, 36, 43, 'standby', 'bl00046pg', NULL, 'Daihatsu Terios, 2021 sampai 2022, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/kPvdn9SB34z3WSzVaa9x18VG1TEpNnDD4uxI6oad.webp', 'gambar2/6MW9VwdAqWuuk94tfLN6zsaUXk0IRajXqJUibeXk.webp', 'gambar3/FND3ZHaw10qDfjrfSum1Cy4yzX9XYcch7a0FqUHw.webp', 'gambar4/UB2R6QnUEmwf6n3STdVD4dw9n0m2TrufvOFmEZ6f.webp', 'gambar5/Epe0LI2Q7iNUzPVJXiGClJBXFCJN7RHRuPRWb3uL.webp', '2022-07-09 04:11:10', '2022-07-23 00:51:11'),
(47, 3, 2, 1, 15, 19, 22, 26, 30, 36, 44, 'standby', 'bl00047pg', '<div>None</div>', 'Daihatsu Terios, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 350rb/hari, ', 'gambar1/yGwXJkyGRl8aG6qjfLl0H5Mll7PBhmsO10Nhgwsd.webp', 'gambar2/tOXUCZatMBL8MexA4dBUrM3H3XrMn1uc8kVJR9kd.webp', 'gambar3/P58S6CLiDUYWxAOa7oy1qIHRGFAkMV65rIMOns2d.webp', 'gambar4/xmH09MWcCE7ErRP4gUC89bugqrO0UsgDvZugK5a2.webp', 'gambar5/BZUzrxHlZ6Q4poPrJKwpF0u3KQK4Iuduw8iQj0qK.webp', '2022-07-09 04:11:53', '2022-07-23 00:53:11'),
(48, 3, 2, 1, 15, 19, 22, 26, 30, 36, 44, 'standby', 'bl00048pg', NULL, 'Daihatsu Terios, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1401cc sampai 1500cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/yGwXJkyGRl8aG6qjfLl0H5Mll7PBhmsO10Nhgwsd.webp', 'gambar2/tOXUCZatMBL8MexA4dBUrM3H3XrMn1uc8kVJR9kd.webp', 'gambar3/P58S6CLiDUYWxAOa7oy1qIHRGFAkMV65rIMOns2d.webp', 'gambar4/xmH09MWcCE7ErRP4gUC89bugqrO0UsgDvZugK5a2.webp', 'gambar5/BZUzrxHlZ6Q4poPrJKwpF0u3KQK4Iuduw8iQj0qK.webp', '2022-07-09 04:12:24', '2022-07-23 00:54:30'),
(49, 3, 2, 2, 16, 19, 22, 26, 29, 36, 44, 'standby', 'bl00049pg', NULL, 'Daihatsu Xenia, 2019 sampai 2020, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 350rb/hari, ', 'gambar1/8HbJLJ2d1fzEvT2lkSNMvCLirQNh6RxLPmhDcWJH.webp', 'gambar2/LVEb3LrOIKvWK4ldXoXz8hG7HGuPexUlmejaT4F0.webp', 'gambar3/Mf5NmPXklHhQK2cSWxZ94Uu6DvpyZcXFnFLRlFd8.webp', 'gambar4/obKxGN7rRdZIsAzNdLiRLygK1qyOlowEFgmA04WH.webp', 'gambar5/AlZEav7FpLrOYQpl1wk4NAZrO2G3DTq1ALS8vgQd.webp', '2022-07-09 04:13:04', '2022-07-23 00:57:33'),
(50, 3, 2, 2, 15, 19, 22, 26, 29, 36, 44, 'standby', 'bl00050pg', NULL, 'Daihatsu Xenia, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 350rb/hari, ', 'gambar1/Ft3Vh5oU7xVMv4n8ndNTy9tBdZjSrC0aO4kWzK5r.webp', 'gambar2/4s5XlvPI9tFqi1Zh57XhtlV9EyxMxgNyz3nIetc0.webp', 'gambar3/uvhS0TBPJ9pH0At36JhubH6aABF38Cuj4FWhqYx9.webp', 'gambar4/SAhfMiitB1lAXIpYaFbsB0UGFT6niDZwtz3IMio2.webp', 'gambar5/n0pBrdjZMgU9cUTYiL11spKRdLrHFMpvvFflSlPO.webp', '2022-07-09 04:14:06', '2022-07-23 00:58:05'),
(51, 3, 2, 2, 15, 19, 22, 26, 29, 36, 44, 'standby', 'bl00051pg', NULL, 'Daihatsu Xenia, 2017 sampai 2018, cukup, cukup, 7 sampai 8 orang, 1301cc sampai 1400cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/Ft3Vh5oU7xVMv4n8ndNTy9tBdZjSrC0aO4kWzK5r.webp', 'gambar2/4s5XlvPI9tFqi1Zh57XhtlV9EyxMxgNyz3nIetc0.webp', 'gambar3/uvhS0TBPJ9pH0At36JhubH6aABF38Cuj4FWhqYx9.webp', 'gambar4/SAhfMiitB1lAXIpYaFbsB0UGFT6niDZwtz3IMio2.webp', 'gambar5/n0pBrdjZMgU9cUTYiL11spKRdLrHFMpvvFflSlPO.webp', '2022-07-09 04:14:48', '2022-07-23 00:58:28'),
(52, 3, 2, 2, 13, 19, 22, 26, 28, 36, 44, 'standby', 'bl00052pg', NULL, 'Daihatsu Xenia, 2013 sampai 2014, cukup, cukup, 7 sampai 8 orang, dibawah 1300cc, Pertalite, 300rb sampai 350rb/hari, ', 'gambar1/kQKpmTFKz9u3ROjUTa8F8azXooedwBUgj3bSKfDR.webp', 'gambar2/wVGudSsAK3pq5qAvZm3cfK0KeCKfXMCaLnaryW5B.webp', 'gambar3/603Kq3OirQ4XEoB8oN1Ss5jJMlaOQq9GWV5AdyKS.webp', 'gambar4/EO9cVTyEhGFnHlCpAiHJWviZOyS8s7iaPVeuk1Tq.webp', 'gambar5/MuI3HTNJGRRpyBIK3frRSxlR6WLFYp3TYOt3jsV9.webp', '2022-07-09 04:15:54', '2022-07-23 00:59:03'),
(53, 3, 2, 2, 12, 19, 22, 26, 28, 36, 44, 'standby', 'bl00053pg', NULL, 'Daihatsu Xenia, 2010 sampai 2012, cukup, cukup, 7 sampai 8 orang, dibawah 1300cc, Pertalite, 300rb sampai 350rb/hari, ', 'gambar1/4kP3lXFzZcM2FWQSpa7Yt3DnZjVaZs8ODFfvZvX3.webp', 'gambar2/gEVvV8dPcSEQwEvYhqXSTHEovNI7lyyVLR4r7K2k.webp', 'gambar3/GEBVTHCIDpV0vDA0G8bMIh25jHc8pY4RYeuTn4iO.webp', 'gambar4/DHCu2ygV9JHGWsKBem0Plxhv8Wn0UkuByX97Li2s.webp', 'gambar5/0XqRNInKAJVDxgkBCCRA9V8JVXSWFdGxsbE37lVC.webp', '2022-07-09 04:17:25', '2022-07-23 00:59:45'),
(54, 3, 2, 2, 12, 19, 22, 26, 28, 36, 44, 'standby', 'bl00054pg', NULL, 'Daihatsu Xenia, 2010 sampai 2012, cukup, cukup, 7 sampai 8 orang, dibawah 1300cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/4kP3lXFzZcM2FWQSpa7Yt3DnZjVaZs8ODFfvZvX3.webp', 'gambar2/gEVvV8dPcSEQwEvYhqXSTHEovNI7lyyVLR4r7K2k.webp', 'gambar3/GEBVTHCIDpV0vDA0G8bMIh25jHc8pY4RYeuTn4iO.webp', 'gambar4/DHCu2ygV9JHGWsKBem0Plxhv8Wn0UkuByX97Li2s.webp', 'gambar5/0XqRNInKAJVDxgkBCCRA9V8JVXSWFdGxsbE37lVC.webp', '2022-07-09 04:18:06', '2022-07-23 01:00:09'),
(55, 3, 2, 2, 12, 19, 22, 26, 28, 36, 44, 'standby', 'bl00055pg', NULL, 'Daihatsu Xenia, 2010 sampai 2012, cukup, cukup, 7 sampai 8 orang, dibawah 1300cc, Pertalite, 300rb sampai 400rb/hari, ', 'gambar1/4kP3lXFzZcM2FWQSpa7Yt3DnZjVaZs8ODFfvZvX3.webp', 'gambar2/gEVvV8dPcSEQwEvYhqXSTHEovNI7lyyVLR4r7K2k.webp', 'gambar3/GEBVTHCIDpV0vDA0G8bMIh25jHc8pY4RYeuTn4iO.webp', 'gambar4/DHCu2ygV9JHGWsKBem0Plxhv8Wn0UkuByX97Li2s.webp', 'gambar5/0XqRNInKAJVDxgkBCCRA9V8JVXSWFdGxsbE37lVC.webp', '2022-07-09 04:18:27', '2022-07-23 01:00:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `nama_pinjam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_pinjam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `batas_pinjam` datetime NOT NULL,
  `sim_peminjam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp_peminjam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_peminjam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berkas_pinjam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriterias`
--

CREATE TABLE `kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` double(8,2) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kriterias`
--

INSERT INTO `kriterias` (`id`, `nama`, `bobot`, `type`, `created_at`, `updated_at`) VALUES
(1, 'merk', 0.00, '', '2022-07-09 02:46:08', '2022-07-09 02:46:08'),
(2, 'Tahun Produksi', 0.10, 'benefit', '2022-07-09 02:46:08', '2022-07-25 03:21:27'),
(3, 'Kondisi Fisik', 0.15, 'benefit', '2022-07-09 02:46:08', '2022-07-09 02:46:08'),
(4, 'Kondisi Mesin', 0.20, 'benefit', '2022-07-09 02:46:08', '2022-07-09 02:46:08'),
(5, 'Muatan Penumpang', 0.15, 'benefit', '2022-07-09 02:46:08', '2022-07-09 02:46:08'),
(6, 'Kapasitas Mesin', 0.10, 'benefit', '2022-07-09 02:46:08', '2022-07-09 02:46:08'),
(7, 'Jenis BBM', 0.10, 'benefit', '2022-07-09 02:46:08', '2022-07-09 02:46:08'),
(8, 'Harga Sewa', 0.20, 'cost', '2022-07-09 02:46:09', '2022-07-09 02:46:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `make_shops`
--

CREATE TABLE `make_shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nm_pu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_usaha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint(20) NOT NULL,
  `img_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_siu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pas_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_usaha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_12_045147_create_make_shops_table', 1),
(6, '2022_03_12_053940_create_kriterias_table', 1),
(7, '2022_03_22_131439_create_alternatifs_table', 1),
(8, '2022_03_22_132937_create_shops_table', 1),
(9, '2022_03_22_133109_create_cars_table', 1),
(10, '2022_03_22_143344_create_nilais_table', 1),
(11, '2022_05_08_073601_create_ulasans_table', 1),
(12, '2022_06_28_113438_create_histories_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilais`
--

CREATE TABLE `nilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` bigint(20) UNSIGNED NOT NULL,
  `alternatif_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilais`
--

INSERT INTO `nilais` (`id`, `car_id`, `kriteria_id`, `alternatif_id`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '9', 1, '2022-07-09 02:57:55', '2022-07-24 22:37:52'),
(2, 1, 2, '17', 7, '2022-07-09 02:57:55', '2022-07-09 02:57:55'),
(3, 1, 3, '20', 3, '2022-07-09 02:57:55', '2022-07-09 02:57:55'),
(4, 1, 4, '23', 3, '2022-07-09 02:57:55', '2022-07-09 02:57:55'),
(5, 1, 5, '26', 3, '2022-07-09 02:57:55', '2022-07-09 02:57:55'),
(6, 1, 6, '32', 5, '2022-07-09 02:57:55', '2022-07-09 02:57:55'),
(7, 1, 7, '37', 5, '2022-07-09 02:57:55', '2022-07-09 02:57:55'),
(8, 1, 8, '39', 2, '2022-07-09 02:57:55', '2022-07-09 02:57:55'),
(9, 2, 1, '9', 1, '2022-07-09 03:21:00', '2022-07-24 22:37:52'),
(10, 2, 2, '17', 7, '2022-07-09 03:21:00', '2022-07-09 03:21:00'),
(11, 2, 3, '20', 3, '2022-07-09 03:21:00', '2022-07-09 03:21:00'),
(12, 2, 4, '23', 3, '2022-07-09 03:21:00', '2022-07-09 03:21:00'),
(13, 2, 5, '26', 3, '2022-07-09 03:21:00', '2022-07-09 03:21:00'),
(14, 2, 6, '32', 5, '2022-07-09 03:21:00', '2022-07-09 03:21:00'),
(15, 2, 7, '37', 5, '2022-07-09 03:21:00', '2022-07-09 03:21:00'),
(16, 2, 8, '39', 2, '2022-07-09 03:21:00', '2022-07-09 03:21:00'),
(17, 3, 1, '9', 1, '2022-07-09 03:25:58', '2022-07-24 22:37:52'),
(18, 3, 2, '16', 6, '2022-07-09 03:25:58', '2022-07-09 03:25:58'),
(19, 3, 3, '19', 2, '2022-07-09 03:25:58', '2022-07-09 03:25:58'),
(20, 3, 4, '22', 2, '2022-07-09 03:25:59', '2022-07-09 03:25:59'),
(21, 3, 5, '26', 3, '2022-07-09 03:25:59', '2022-07-09 03:25:59'),
(22, 3, 6, '32', 5, '2022-07-09 03:25:59', '2022-07-09 03:25:59'),
(23, 3, 7, '37', 5, '2022-07-09 03:25:59', '2022-07-09 03:25:59'),
(24, 3, 8, '39', 2, '2022-07-09 03:25:59', '2022-07-09 03:25:59'),
(25, 4, 1, '9', 1, '2022-07-09 03:26:42', '2022-07-24 22:37:52'),
(26, 4, 2, '16', 6, '2022-07-09 03:26:42', '2022-07-09 03:26:42'),
(27, 4, 3, '19', 2, '2022-07-09 03:26:42', '2022-07-09 03:26:42'),
(28, 4, 4, '22', 2, '2022-07-09 03:26:42', '2022-07-09 03:26:42'),
(29, 4, 5, '26', 3, '2022-07-09 03:26:42', '2022-07-09 03:26:42'),
(30, 4, 6, '32', 5, '2022-07-09 03:26:42', '2022-07-09 03:26:42'),
(31, 4, 7, '37', 5, '2022-07-09 03:26:43', '2022-07-09 03:26:43'),
(32, 4, 8, '39', 2, '2022-07-09 03:26:43', '2022-07-09 03:26:43'),
(33, 5, 1, '9', 1, '2022-07-09 03:27:34', '2022-07-24 22:37:52'),
(34, 5, 2, '16', 6, '2022-07-09 03:27:34', '2022-07-09 03:27:34'),
(35, 5, 3, '19', 2, '2022-07-09 03:27:34', '2022-07-09 03:27:34'),
(36, 5, 4, '22', 2, '2022-07-09 03:27:34', '2022-07-09 03:27:34'),
(37, 5, 5, '26', 3, '2022-07-09 03:27:34', '2022-07-09 03:27:34'),
(38, 5, 6, '32', 5, '2022-07-09 03:27:34', '2022-07-09 03:27:34'),
(39, 5, 7, '37', 5, '2022-07-09 03:27:34', '2022-07-09 03:27:34'),
(40, 5, 8, '39', 2, '2022-07-09 03:27:34', '2022-07-09 03:27:34'),
(41, 6, 1, '8', 1, '2022-07-09 03:28:42', '2022-07-24 22:37:53'),
(42, 6, 2, '17', 7, '2022-07-09 03:28:42', '2022-07-09 03:28:42'),
(43, 6, 3, '19', 2, '2022-07-09 03:28:42', '2022-07-09 03:28:42'),
(44, 6, 4, '22', 2, '2022-07-09 03:28:42', '2022-07-09 03:28:42'),
(45, 6, 5, '26', 3, '2022-07-09 03:28:42', '2022-07-09 03:28:42'),
(46, 6, 6, '30', 3, '2022-07-09 03:28:42', '2022-07-09 03:28:42'),
(47, 6, 7, '36', 4, '2022-07-09 03:28:43', '2022-07-09 03:28:43'),
(48, 6, 8, '43', 6, '2022-07-09 03:28:43', '2022-07-21 07:31:07'),
(49, 7, 1, '8', 1, '2022-07-09 03:29:22', '2022-07-24 22:37:53'),
(50, 7, 2, '15', 5, '2022-07-09 03:29:22', '2022-07-09 03:29:22'),
(51, 7, 3, '19', 2, '2022-07-09 03:29:22', '2022-07-09 03:29:22'),
(52, 7, 4, '22', 2, '2022-07-09 03:29:22', '2022-07-09 03:29:22'),
(53, 7, 5, '26', 3, '2022-07-09 03:29:22', '2022-07-09 03:29:22'),
(54, 7, 6, '30', 3, '2022-07-09 03:29:22', '2022-07-09 03:29:22'),
(55, 7, 7, '36', 4, '2022-07-09 03:29:22', '2022-07-09 03:29:22'),
(56, 7, 8, '44', 7, '2022-07-09 03:29:22', '2022-07-21 07:31:26'),
(57, 8, 1, '8', 1, '2022-07-09 03:30:13', '2022-07-24 22:37:53'),
(58, 8, 2, '14', 4, '2022-07-09 03:30:14', '2022-07-09 03:30:14'),
(59, 8, 3, '19', 2, '2022-07-09 03:30:14', '2022-07-09 03:30:14'),
(60, 8, 4, '22', 2, '2022-07-09 03:30:14', '2022-07-09 03:30:14'),
(61, 8, 5, '26', 3, '2022-07-09 03:30:14', '2022-07-09 03:30:14'),
(62, 8, 6, '30', 3, '2022-07-09 03:30:14', '2022-07-09 03:30:14'),
(63, 8, 7, '36', 4, '2022-07-09 03:30:14', '2022-07-09 03:30:14'),
(64, 8, 8, '44', 7, '2022-07-09 03:30:14', '2022-07-23 01:18:51'),
(65, 9, 1, '8', 1, '2022-07-09 03:31:10', '2022-07-24 22:37:53'),
(66, 9, 2, '13', 3, '2022-07-09 03:31:10', '2022-07-09 03:31:10'),
(67, 9, 3, '19', 2, '2022-07-09 03:31:10', '2022-07-09 03:31:10'),
(68, 9, 4, '22', 2, '2022-07-09 03:31:10', '2022-07-09 03:31:10'),
(69, 9, 5, '26', 3, '2022-07-09 03:31:10', '2022-07-09 03:31:10'),
(70, 9, 6, '30', 3, '2022-07-09 03:31:11', '2022-07-09 03:31:11'),
(71, 9, 7, '36', 4, '2022-07-09 03:31:11', '2022-07-09 03:31:11'),
(72, 9, 8, '44', 7, '2022-07-09 03:31:11', '2022-07-23 01:19:52'),
(73, 10, 1, '7', 1, '2022-07-09 03:32:31', '2022-07-24 22:37:53'),
(74, 10, 2, '17', 7, '2022-07-09 03:32:32', '2022-07-09 03:32:32'),
(75, 10, 3, '20', 3, '2022-07-09 03:32:32', '2022-07-09 03:32:32'),
(76, 10, 4, '23', 3, '2022-07-09 03:32:32', '2022-07-09 03:32:32'),
(77, 10, 5, '26', 3, '2022-07-09 03:32:32', '2022-07-09 03:32:32'),
(78, 10, 6, '30', 3, '2022-07-09 03:32:32', '2022-07-09 03:32:32'),
(79, 10, 7, '36', 4, '2022-07-09 03:32:32', '2022-07-09 03:32:32'),
(80, 10, 8, '43', 6, '2022-07-09 03:32:32', '2022-07-23 01:04:49'),
(81, 11, 1, '7', 1, '2022-07-09 03:33:31', '2022-07-24 22:37:53'),
(82, 11, 2, '15', 5, '2022-07-09 03:33:31', '2022-07-09 03:33:31'),
(83, 11, 3, '19', 2, '2022-07-09 03:33:31', '2022-07-09 03:33:31'),
(84, 11, 4, '22', 2, '2022-07-09 03:33:31', '2022-07-09 03:33:31'),
(85, 11, 5, '26', 3, '2022-07-09 03:33:31', '2022-07-09 03:33:31'),
(86, 11, 6, '29', 2, '2022-07-09 03:33:31', '2022-07-09 03:33:31'),
(87, 11, 7, '36', 4, '2022-07-09 03:33:31', '2022-07-09 03:33:31'),
(88, 11, 8, '44', 7, '2022-07-09 03:33:32', '2022-07-23 01:12:23'),
(89, 12, 1, '7', 1, '2022-07-09 03:34:19', '2022-07-24 22:37:53'),
(90, 12, 2, '14', 4, '2022-07-09 03:34:19', '2022-07-09 03:34:19'),
(91, 12, 3, '19', 2, '2022-07-09 03:34:20', '2022-07-09 03:34:20'),
(92, 12, 4, '22', 2, '2022-07-09 03:34:20', '2022-07-09 03:34:20'),
(93, 12, 5, '26', 3, '2022-07-09 03:34:20', '2022-07-09 03:34:20'),
(94, 12, 6, '29', 2, '2022-07-09 03:34:20', '2022-07-09 03:34:20'),
(95, 12, 7, '36', 4, '2022-07-09 03:34:20', '2022-07-09 03:34:20'),
(96, 12, 8, '44', 7, '2022-07-09 03:34:20', '2022-07-23 01:15:19'),
(97, 13, 1, '7', 1, '2022-07-09 03:35:08', '2022-07-24 22:37:53'),
(98, 13, 2, '12', 2, '2022-07-09 03:35:08', '2022-07-09 03:35:08'),
(99, 13, 3, '19', 2, '2022-07-09 03:35:09', '2022-07-09 03:35:09'),
(100, 13, 4, '22', 2, '2022-07-09 03:35:09', '2022-07-09 03:35:09'),
(101, 13, 5, '26', 3, '2022-07-09 03:35:09', '2022-07-09 03:35:09'),
(102, 13, 6, '28', 1, '2022-07-09 03:35:09', '2022-07-09 03:35:09'),
(103, 13, 7, '35', 3, '2022-07-09 03:35:09', '2022-07-09 03:35:09'),
(104, 13, 8, '44', 7, '2022-07-09 03:35:09', '2022-07-23 01:17:10'),
(105, 14, 1, '6', 1, '2022-07-09 03:36:02', '2022-07-24 22:37:53'),
(106, 14, 2, '15', 5, '2022-07-09 03:36:02', '2022-07-09 03:36:02'),
(107, 14, 3, '19', 2, '2022-07-09 03:36:02', '2022-07-09 03:36:02'),
(108, 14, 4, '22', 2, '2022-07-09 03:36:02', '2022-07-09 03:36:02'),
(109, 14, 5, '26', 3, '2022-07-09 03:36:02', '2022-07-09 03:36:02'),
(110, 14, 6, '29', 2, '2022-07-09 03:36:02', '2022-07-09 03:36:02'),
(111, 14, 7, '36', 4, '2022-07-09 03:36:02', '2022-07-09 03:36:02'),
(112, 14, 8, '44', 7, '2022-07-09 03:36:02', '2022-07-23 01:03:49'),
(113, 15, 1, '6', 1, '2022-07-09 03:38:31', '2022-07-24 22:37:53'),
(114, 15, 2, '15', 5, '2022-07-09 03:38:31', '2022-07-09 03:38:31'),
(115, 15, 3, '19', 2, '2022-07-09 03:38:31', '2022-07-09 03:38:31'),
(116, 15, 4, '22', 2, '2022-07-09 03:38:31', '2022-07-09 03:38:31'),
(117, 15, 5, '26', 3, '2022-07-09 03:38:31', '2022-07-09 03:38:31'),
(118, 15, 6, '29', 2, '2022-07-09 03:38:31', '2022-07-09 03:38:31'),
(119, 15, 7, '36', 4, '2022-07-09 03:38:31', '2022-07-09 03:38:31'),
(120, 15, 8, '41', 4, '2022-07-09 03:38:31', '2022-07-09 03:38:31'),
(121, 16, 1, '3', 1, '2022-07-09 03:39:21', '2022-07-24 22:37:53'),
(122, 16, 2, '17', 7, '2022-07-09 03:39:21', '2022-07-09 03:39:21'),
(123, 16, 3, '20', 3, '2022-07-09 03:39:21', '2022-07-09 03:39:21'),
(124, 16, 4, '23', 3, '2022-07-09 03:39:21', '2022-07-09 03:39:21'),
(125, 16, 5, '25', 2, '2022-07-09 03:39:21', '2022-07-09 03:39:21'),
(126, 16, 6, '30', 3, '2022-07-09 03:39:21', '2022-07-09 03:39:21'),
(127, 16, 7, '36', 4, '2022-07-09 03:39:22', '2022-07-09 03:39:22'),
(128, 16, 8, '43', 6, '2022-07-09 03:39:22', '2022-07-23 01:01:41'),
(129, 17, 1, '3', 1, '2022-07-09 03:39:53', '2022-07-24 22:37:54'),
(130, 17, 2, '17', 7, '2022-07-09 03:39:53', '2022-07-09 03:39:53'),
(131, 17, 3, '19', 2, '2022-07-09 03:39:54', '2022-07-09 03:39:54'),
(132, 17, 4, '22', 2, '2022-07-09 03:39:54', '2022-07-09 03:39:54'),
(133, 17, 5, '25', 2, '2022-07-09 03:39:54', '2022-07-09 03:39:54'),
(134, 17, 6, '30', 3, '2022-07-09 03:39:54', '2022-07-09 03:39:54'),
(135, 17, 7, '36', 4, '2022-07-09 03:39:54', '2022-07-09 03:39:54'),
(136, 17, 8, '41', 4, '2022-07-09 03:39:54', '2022-07-09 03:39:54'),
(137, 18, 1, '3', 1, '2022-07-09 03:40:18', '2022-07-24 22:37:54'),
(138, 18, 2, '17', 7, '2022-07-09 03:40:18', '2022-07-09 03:40:18'),
(139, 18, 3, '19', 2, '2022-07-09 03:40:18', '2022-07-09 03:40:18'),
(140, 18, 4, '22', 2, '2022-07-09 03:40:18', '2022-07-09 03:40:18'),
(141, 18, 5, '25', 2, '2022-07-09 03:40:18', '2022-07-09 03:40:18'),
(142, 18, 6, '30', 3, '2022-07-09 03:40:18', '2022-07-09 03:40:18'),
(143, 18, 7, '36', 4, '2022-07-09 03:40:18', '2022-07-09 03:40:18'),
(144, 18, 8, '41', 4, '2022-07-09 03:40:18', '2022-07-09 03:40:18'),
(145, 19, 1, '3', 1, '2022-07-09 03:41:26', '2022-07-24 22:37:54'),
(146, 19, 2, '15', 5, '2022-07-09 03:41:26', '2022-07-09 03:41:26'),
(147, 19, 3, '19', 2, '2022-07-09 03:41:26', '2022-07-09 03:41:26'),
(148, 19, 4, '22', 2, '2022-07-09 03:41:26', '2022-07-09 03:41:26'),
(149, 19, 5, '25', 2, '2022-07-09 03:41:26', '2022-07-09 03:41:26'),
(150, 19, 6, '30', 3, '2022-07-09 03:41:26', '2022-07-09 03:41:26'),
(151, 19, 7, '36', 4, '2022-07-09 03:41:26', '2022-07-09 03:41:26'),
(152, 19, 8, '44', 7, '2022-07-09 03:41:26', '2022-07-23 01:02:53'),
(153, 20, 1, '3', 1, '2022-07-09 03:42:01', '2022-07-24 22:37:54'),
(154, 20, 2, '15', 5, '2022-07-09 03:42:02', '2022-07-09 03:42:02'),
(155, 20, 3, '19', 2, '2022-07-09 03:42:02', '2022-07-09 03:42:02'),
(156, 20, 4, '22', 2, '2022-07-09 03:42:02', '2022-07-09 03:42:02'),
(157, 20, 5, '25', 2, '2022-07-09 03:42:02', '2022-07-09 03:42:02'),
(158, 20, 6, '30', 3, '2022-07-09 03:42:02', '2022-07-09 03:42:02'),
(159, 20, 7, '36', 4, '2022-07-09 03:42:02', '2022-07-09 03:42:02'),
(160, 20, 8, '41', 4, '2022-07-09 03:42:02', '2022-07-09 03:42:02'),
(161, 21, 1, '8', 1, '2022-07-09 03:45:59', '2022-07-24 22:37:54'),
(162, 21, 2, '17', 7, '2022-07-09 03:45:59', '2022-07-09 03:45:59'),
(163, 21, 3, '20', 3, '2022-07-09 03:45:59', '2022-07-09 03:45:59'),
(164, 21, 4, '23', 3, '2022-07-09 03:45:59', '2022-07-09 03:45:59'),
(165, 21, 5, '26', 3, '2022-07-09 03:45:59', '2022-07-09 03:45:59'),
(166, 21, 6, '30', 3, '2022-07-09 03:45:59', '2022-07-09 03:45:59'),
(167, 21, 7, '36', 4, '2022-07-09 03:45:59', '2022-07-09 03:45:59'),
(168, 21, 8, '41', 4, '2022-07-09 03:45:59', '2022-07-09 03:45:59'),
(169, 22, 1, '8', 1, '2022-07-09 03:46:29', '2022-07-24 22:37:54'),
(170, 22, 2, '15', 5, '2022-07-09 03:46:30', '2022-07-09 03:46:30'),
(171, 22, 3, '19', 2, '2022-07-09 03:46:30', '2022-07-09 03:46:30'),
(172, 22, 4, '22', 2, '2022-07-09 03:46:30', '2022-07-09 03:46:30'),
(173, 22, 5, '26', 3, '2022-07-09 03:46:30', '2022-07-09 03:46:30'),
(174, 22, 6, '30', 3, '2022-07-09 03:46:30', '2022-07-09 03:46:30'),
(175, 22, 7, '36', 4, '2022-07-09 03:46:30', '2022-07-09 03:46:30'),
(176, 22, 8, '41', 4, '2022-07-09 03:46:30', '2022-07-09 03:46:30'),
(177, 23, 1, '8', 1, '2022-07-09 03:47:23', '2022-07-24 22:37:54'),
(178, 23, 2, '15', 5, '2022-07-09 03:47:23', '2022-07-09 03:47:23'),
(179, 23, 3, '19', 2, '2022-07-09 03:47:24', '2022-07-09 03:47:24'),
(180, 23, 4, '22', 2, '2022-07-09 03:47:24', '2022-07-09 03:47:24'),
(181, 23, 5, '26', 3, '2022-07-09 03:47:24', '2022-07-09 03:47:24'),
(182, 23, 6, '30', 3, '2022-07-09 03:47:24', '2022-07-09 03:47:24'),
(183, 23, 7, '36', 4, '2022-07-09 03:47:24', '2022-07-09 03:47:24'),
(184, 23, 8, '41', 4, '2022-07-09 03:47:24', '2022-07-09 03:47:24'),
(185, 24, 1, '8', 1, '2022-07-09 03:48:04', '2022-07-24 22:37:54'),
(186, 24, 2, '15', 5, '2022-07-09 03:48:04', '2022-07-09 03:48:04'),
(187, 24, 3, '19', 2, '2022-07-09 03:48:04', '2022-07-09 03:48:04'),
(188, 24, 4, '22', 2, '2022-07-09 03:48:04', '2022-07-09 03:48:04'),
(189, 24, 5, '26', 3, '2022-07-09 03:48:04', '2022-07-09 03:48:04'),
(190, 24, 6, '30', 3, '2022-07-09 03:48:05', '2022-07-09 03:48:05'),
(191, 24, 7, '36', 4, '2022-07-09 03:48:05', '2022-07-09 03:48:05'),
(192, 24, 8, '41', 4, '2022-07-09 03:48:05', '2022-07-09 03:48:05'),
(193, 25, 1, '7', 1, '2022-07-09 03:48:43', '2022-07-24 22:37:54'),
(194, 25, 2, '17', 7, '2022-07-09 03:48:43', '2022-07-09 03:48:43'),
(195, 25, 3, '20', 3, '2022-07-09 03:48:43', '2022-07-09 03:48:43'),
(196, 25, 4, '23', 3, '2022-07-09 03:48:44', '2022-07-09 03:48:44'),
(197, 25, 5, '26', 3, '2022-07-09 03:48:44', '2022-07-09 03:48:44'),
(198, 25, 6, '30', 3, '2022-07-09 03:48:44', '2022-07-09 03:48:44'),
(199, 25, 7, '36', 4, '2022-07-09 03:48:44', '2022-07-09 03:48:44'),
(200, 25, 8, '41', 4, '2022-07-09 03:48:44', '2022-07-09 03:48:44'),
(201, 26, 1, '7', 1, '2022-07-09 03:49:16', '2022-07-24 22:37:54'),
(202, 26, 2, '14', 4, '2022-07-09 03:49:17', '2022-07-09 03:49:17'),
(203, 26, 3, '19', 2, '2022-07-09 03:49:17', '2022-07-09 03:49:17'),
(204, 26, 4, '22', 2, '2022-07-09 03:49:17', '2022-07-09 03:49:17'),
(205, 26, 5, '26', 3, '2022-07-09 03:49:17', '2022-07-09 03:49:17'),
(206, 26, 6, '29', 2, '2022-07-09 03:49:17', '2022-07-09 03:53:12'),
(207, 26, 7, '36', 4, '2022-07-09 03:49:17', '2022-07-09 03:49:17'),
(208, 26, 8, '41', 4, '2022-07-09 03:49:17', '2022-07-09 03:49:17'),
(209, 27, 1, '7', 1, '2022-07-09 03:49:48', '2022-07-24 22:37:54'),
(210, 27, 2, '15', 5, '2022-07-09 03:49:48', '2022-07-09 03:49:48'),
(211, 27, 3, '19', 2, '2022-07-09 03:49:48', '2022-07-09 03:49:48'),
(212, 27, 4, '22', 2, '2022-07-09 03:49:48', '2022-07-09 03:49:48'),
(213, 27, 5, '26', 3, '2022-07-09 03:49:48', '2022-07-09 03:49:48'),
(214, 27, 6, '29', 2, '2022-07-09 03:49:48', '2022-07-09 03:52:25'),
(215, 27, 7, '36', 4, '2022-07-09 03:49:49', '2022-07-09 03:49:49'),
(216, 27, 8, '41', 4, '2022-07-09 03:49:49', '2022-07-09 03:49:49'),
(217, 28, 1, '7', 1, '2022-07-09 03:54:02', '2022-07-24 22:37:54'),
(218, 28, 2, '15', 5, '2022-07-09 03:54:02', '2022-07-09 03:54:02'),
(219, 28, 3, '19', 2, '2022-07-09 03:54:02', '2022-07-09 03:54:02'),
(220, 28, 4, '22', 2, '2022-07-09 03:54:02', '2022-07-09 03:54:02'),
(221, 28, 5, '26', 3, '2022-07-09 03:54:02', '2022-07-09 03:54:02'),
(222, 28, 6, '29', 2, '2022-07-09 03:54:02', '2022-07-09 03:54:02'),
(223, 28, 7, '36', 4, '2022-07-09 03:54:02', '2022-07-09 03:54:02'),
(224, 28, 8, '41', 4, '2022-07-09 03:54:03', '2022-07-09 03:54:03'),
(225, 29, 1, '7', 1, '2022-07-09 03:54:38', '2022-07-24 22:37:54'),
(226, 29, 2, '14', 4, '2022-07-09 03:54:38', '2022-07-09 03:54:38'),
(227, 29, 3, '19', 2, '2022-07-09 03:54:38', '2022-07-09 03:54:38'),
(228, 29, 4, '22', 2, '2022-07-09 03:54:39', '2022-07-09 03:54:39'),
(229, 29, 5, '26', 3, '2022-07-09 03:54:39', '2022-07-09 03:54:39'),
(230, 29, 6, '29', 2, '2022-07-09 03:54:39', '2022-07-09 03:54:39'),
(231, 29, 7, '36', 4, '2022-07-09 03:54:39', '2022-07-09 03:54:39'),
(232, 29, 8, '41', 4, '2022-07-09 03:54:39', '2022-07-09 03:54:39'),
(233, 30, 1, '7', 1, '2022-07-09 03:55:14', '2022-07-24 22:37:54'),
(234, 30, 2, '12', 2, '2022-07-09 03:55:15', '2022-07-09 03:55:15'),
(235, 30, 3, '19', 2, '2022-07-09 03:55:15', '2022-07-09 03:55:15'),
(236, 30, 4, '22', 2, '2022-07-09 03:55:15', '2022-07-09 03:55:15'),
(237, 30, 5, '26', 3, '2022-07-09 03:55:15', '2022-07-09 03:55:15'),
(238, 30, 6, '28', 1, '2022-07-09 03:55:15', '2022-07-09 03:55:15'),
(239, 30, 7, '36', 4, '2022-07-09 03:55:15', '2022-07-09 03:55:15'),
(240, 30, 8, '41', 4, '2022-07-09 03:55:15', '2022-07-09 03:55:15'),
(241, 31, 1, '7', 1, '2022-07-09 03:55:39', '2022-07-24 22:37:54'),
(242, 31, 2, '12', 2, '2022-07-09 03:55:39', '2022-07-09 03:55:39'),
(243, 31, 3, '19', 2, '2022-07-09 03:55:39', '2022-07-09 03:55:39'),
(244, 31, 4, '22', 2, '2022-07-09 03:55:39', '2022-07-09 03:55:39'),
(245, 31, 5, '26', 3, '2022-07-09 03:55:39', '2022-07-09 03:55:39'),
(246, 31, 6, '28', 1, '2022-07-09 03:55:39', '2022-07-09 03:55:39'),
(247, 31, 7, '36', 4, '2022-07-09 03:55:39', '2022-07-09 03:55:39'),
(248, 31, 8, '41', 4, '2022-07-09 03:55:39', '2022-07-09 03:55:39'),
(249, 32, 1, '9', 1, '2022-07-09 03:56:08', '2022-07-24 22:37:54'),
(250, 32, 2, '17', 7, '2022-07-09 03:56:09', '2022-07-09 03:56:09'),
(251, 32, 3, '20', 3, '2022-07-09 03:56:09', '2022-07-09 03:56:09'),
(252, 32, 4, '23', 3, '2022-07-09 03:56:09', '2022-07-09 03:56:09'),
(253, 32, 5, '26', 3, '2022-07-09 03:56:09', '2022-07-09 03:56:09'),
(254, 32, 6, '32', 5, '2022-07-09 03:56:09', '2022-07-09 03:56:09'),
(255, 32, 7, '37', 5, '2022-07-09 03:56:09', '2022-07-09 03:56:09'),
(256, 32, 8, '39', 2, '2022-07-09 03:56:09', '2022-07-09 03:56:09'),
(257, 33, 1, '9', 1, '2022-07-09 03:56:37', '2022-07-24 22:37:54'),
(258, 33, 2, '17', 7, '2022-07-09 03:56:37', '2022-07-09 03:56:37'),
(259, 33, 3, '20', 3, '2022-07-09 03:56:37', '2022-07-09 03:56:37'),
(260, 33, 4, '23', 3, '2022-07-09 03:56:37', '2022-07-09 03:56:37'),
(261, 33, 5, '26', 3, '2022-07-09 03:56:37', '2022-07-09 03:56:37'),
(262, 33, 6, '32', 5, '2022-07-09 03:56:37', '2022-07-09 03:56:37'),
(263, 33, 7, '37', 5, '2022-07-09 03:56:37', '2022-07-09 03:56:37'),
(264, 33, 8, '39', 2, '2022-07-09 03:56:37', '2022-07-09 03:56:37'),
(265, 34, 1, '9', 1, '2022-07-09 03:57:21', '2022-07-24 22:37:54'),
(266, 34, 2, '16', 6, '2022-07-09 03:57:21', '2022-07-09 03:57:21'),
(267, 34, 3, '19', 2, '2022-07-09 03:57:21', '2022-07-09 03:57:21'),
(268, 34, 4, '22', 2, '2022-07-09 03:57:21', '2022-07-09 03:57:21'),
(269, 34, 5, '26', 3, '2022-07-09 03:57:21', '2022-07-09 03:57:21'),
(270, 34, 6, '32', 5, '2022-07-09 03:57:21', '2022-07-09 03:57:21'),
(271, 34, 7, '37', 5, '2022-07-09 03:57:21', '2022-07-09 03:57:21'),
(272, 34, 8, '39', 2, '2022-07-09 03:57:21', '2022-07-09 03:57:21'),
(273, 35, 1, '9', 1, '2022-07-09 03:57:56', '2022-07-24 22:37:55'),
(274, 35, 2, '16', 6, '2022-07-09 03:57:56', '2022-07-09 03:57:56'),
(275, 35, 3, '19', 2, '2022-07-09 03:57:56', '2022-07-09 03:57:56'),
(276, 35, 4, '22', 2, '2022-07-09 03:57:56', '2022-07-09 03:57:56'),
(277, 35, 5, '26', 3, '2022-07-09 03:57:56', '2022-07-09 03:57:56'),
(278, 35, 6, '32', 5, '2022-07-09 03:57:56', '2022-07-09 03:57:56'),
(279, 35, 7, '37', 5, '2022-07-09 03:57:57', '2022-07-09 03:57:57'),
(280, 35, 8, '39', 2, '2022-07-09 03:57:57', '2022-07-09 03:57:57'),
(281, 36, 1, '4', 1, '2022-07-09 03:59:21', '2022-07-24 22:37:55'),
(282, 36, 2, '15', 5, '2022-07-09 03:59:21', '2022-07-09 03:59:21'),
(283, 36, 3, '19', 2, '2022-07-09 03:59:21', '2022-07-09 03:59:21'),
(284, 36, 4, '22', 2, '2022-07-09 03:59:21', '2022-07-09 03:59:21'),
(285, 36, 5, '26', 3, '2022-07-09 03:59:21', '2022-07-09 03:59:21'),
(286, 36, 6, '32', 5, '2022-07-09 03:59:21', '2022-07-09 03:59:21'),
(287, 36, 7, '37', 5, '2022-07-09 03:59:21', '2022-07-09 03:59:21'),
(288, 36, 8, '38', 1, '2022-07-09 03:59:21', '2022-07-23 01:05:38'),
(289, 37, 1, '4', 1, '2022-07-09 03:59:53', '2022-07-24 22:37:55'),
(290, 37, 2, '15', 5, '2022-07-09 03:59:53', '2022-07-09 03:59:53'),
(291, 37, 3, '19', 2, '2022-07-09 03:59:53', '2022-07-09 03:59:53'),
(292, 37, 4, '22', 2, '2022-07-09 03:59:53', '2022-07-09 03:59:53'),
(293, 37, 5, '26', 3, '2022-07-09 03:59:53', '2022-07-09 03:59:53'),
(294, 37, 6, '32', 5, '2022-07-09 03:59:54', '2022-07-09 03:59:54'),
(295, 37, 7, '37', 5, '2022-07-09 03:59:54', '2022-07-09 03:59:54'),
(296, 37, 8, '38', 1, '2022-07-09 03:59:54', '2022-07-09 03:59:54'),
(297, 38, 1, '10', 1, '2022-07-09 04:01:34', '2022-07-24 22:37:55'),
(298, 38, 2, '15', 5, '2022-07-09 04:01:35', '2022-07-09 04:01:35'),
(299, 38, 3, '19', 2, '2022-07-09 04:01:35', '2022-07-09 04:01:35'),
(300, 38, 4, '22', 2, '2022-07-09 04:01:35', '2022-07-09 04:01:35'),
(301, 38, 5, '26', 3, '2022-07-09 04:01:35', '2022-07-09 04:01:35'),
(302, 38, 6, '30', 3, '2022-07-09 04:01:35', '2022-07-09 04:01:35'),
(303, 38, 7, '36', 4, '2022-07-09 04:01:35', '2022-07-09 04:01:35'),
(304, 38, 8, '43', 6, '2022-07-09 04:01:35', '2022-07-23 01:21:59'),
(305, 39, 1, '10', 1, '2022-07-09 04:02:08', '2022-07-24 22:37:55'),
(306, 39, 2, '15', 5, '2022-07-09 04:02:08', '2022-07-09 04:02:08'),
(307, 39, 3, '19', 2, '2022-07-09 04:02:08', '2022-07-09 04:02:08'),
(308, 39, 4, '22', 2, '2022-07-09 04:02:08', '2022-07-09 04:02:08'),
(309, 39, 5, '26', 3, '2022-07-09 04:02:08', '2022-07-09 04:02:08'),
(310, 39, 6, '30', 3, '2022-07-09 04:02:09', '2022-07-09 04:02:09'),
(311, 39, 7, '36', 4, '2022-07-09 04:02:09', '2022-07-09 04:02:09'),
(312, 39, 8, '41', 4, '2022-07-09 04:02:09', '2022-07-09 04:02:09'),
(313, 40, 1, '10', 1, '2022-07-09 04:02:52', '2022-07-24 22:37:55'),
(314, 40, 2, '14', 4, '2022-07-09 04:02:52', '2022-07-09 04:02:52'),
(315, 40, 3, '19', 2, '2022-07-09 04:02:52', '2022-07-09 04:02:52'),
(316, 40, 4, '22', 2, '2022-07-09 04:02:52', '2022-07-09 04:02:52'),
(317, 40, 5, '26', 3, '2022-07-09 04:02:52', '2022-07-09 04:02:52'),
(318, 40, 6, '32', 5, '2022-07-09 04:02:52', '2022-07-09 04:02:52'),
(319, 40, 7, '36', 4, '2022-07-09 04:02:52', '2022-07-09 04:02:52'),
(320, 40, 8, '43', 6, '2022-07-09 04:02:52', '2022-07-23 01:22:43'),
(321, 41, 1, '10', 1, '2022-07-09 04:03:24', '2022-07-24 22:37:55'),
(322, 41, 2, '14', 4, '2022-07-09 04:03:24', '2022-07-09 04:03:24'),
(323, 41, 3, '19', 2, '2022-07-09 04:03:24', '2022-07-09 04:03:24'),
(324, 41, 4, '22', 2, '2022-07-09 04:03:24', '2022-07-09 04:03:24'),
(325, 41, 5, '26', 3, '2022-07-09 04:03:24', '2022-07-09 04:03:24'),
(326, 41, 6, '30', 3, '2022-07-09 04:03:24', '2022-07-09 04:03:24'),
(327, 41, 7, '36', 4, '2022-07-09 04:03:25', '2022-07-09 04:03:25'),
(328, 41, 8, '41', 4, '2022-07-09 04:03:25', '2022-07-09 04:03:25'),
(329, 42, 1, '5', 1, '2022-07-09 04:04:17', '2022-07-24 22:37:55'),
(330, 42, 2, '17', 7, '2022-07-09 04:04:17', '2022-07-09 04:04:17'),
(331, 42, 3, '20', 3, '2022-07-09 04:04:17', '2022-07-09 04:04:17'),
(332, 42, 4, '23', 3, '2022-07-09 04:04:17', '2022-07-09 04:04:17'),
(333, 42, 5, '25', 2, '2022-07-09 04:04:17', '2022-07-09 04:04:17'),
(334, 42, 6, '32', 5, '2022-07-09 04:04:17', '2022-07-09 04:04:17'),
(335, 42, 7, '37', 5, '2022-07-09 04:04:17', '2022-07-09 04:04:17'),
(336, 42, 8, '38', 1, '2022-07-09 04:04:17', '2022-07-09 04:06:34'),
(337, 43, 1, '5', 1, '2022-07-09 04:05:56', '2022-07-24 22:37:55'),
(338, 43, 2, '17', 7, '2022-07-09 04:05:56', '2022-07-09 04:05:56'),
(339, 43, 3, '19', 2, '2022-07-09 04:05:56', '2022-07-09 04:05:56'),
(340, 43, 4, '22', 2, '2022-07-09 04:05:56', '2022-07-09 04:05:56'),
(341, 43, 5, '25', 2, '2022-07-09 04:05:56', '2022-07-09 04:05:56'),
(342, 43, 6, '32', 5, '2022-07-09 04:05:56', '2022-07-09 04:05:56'),
(343, 43, 7, '37', 5, '2022-07-09 04:05:56', '2022-07-09 04:05:56'),
(344, 43, 8, '38', 1, '2022-07-09 04:05:56', '2022-07-09 04:05:56'),
(345, 44, 1, '1', 1, '2022-07-09 04:09:34', '2022-07-24 22:37:55'),
(346, 44, 2, '17', 7, '2022-07-09 04:09:34', '2022-07-09 04:09:34'),
(347, 44, 3, '20', 3, '2022-07-09 04:09:34', '2022-07-09 04:09:34'),
(348, 44, 4, '23', 3, '2022-07-09 04:09:34', '2022-07-09 04:09:34'),
(349, 44, 5, '26', 3, '2022-07-09 04:09:34', '2022-07-09 04:09:34'),
(350, 44, 6, '30', 3, '2022-07-09 04:09:34', '2022-07-09 04:09:34'),
(351, 44, 7, '36', 4, '2022-07-09 04:09:34', '2022-07-09 04:09:34'),
(352, 44, 8, '43', 6, '2022-07-09 04:09:34', '2022-07-23 00:43:43'),
(353, 45, 1, '1', 1, '2022-07-09 04:10:37', '2022-07-24 22:37:55'),
(354, 45, 2, '17', 7, '2022-07-09 04:10:37', '2022-07-09 04:10:37'),
(355, 45, 3, '19', 2, '2022-07-09 04:10:37', '2022-07-09 04:10:37'),
(356, 45, 4, '22', 2, '2022-07-09 04:10:37', '2022-07-09 04:10:37'),
(357, 45, 5, '26', 3, '2022-07-09 04:10:37', '2022-07-09 04:10:37'),
(358, 45, 6, '30', 3, '2022-07-09 04:10:38', '2022-07-09 04:10:38'),
(359, 45, 7, '36', 4, '2022-07-09 04:10:38', '2022-07-09 04:10:38'),
(360, 45, 8, '41', 4, '2022-07-09 04:10:38', '2022-07-09 04:10:38'),
(361, 46, 1, '1', 1, '2022-07-09 04:11:10', '2022-07-24 22:37:55'),
(362, 46, 2, '17', 7, '2022-07-09 04:11:10', '2022-07-09 04:11:10'),
(363, 46, 3, '19', 2, '2022-07-09 04:11:10', '2022-07-09 04:11:10'),
(364, 46, 4, '22', 2, '2022-07-09 04:11:10', '2022-07-09 04:11:10'),
(365, 46, 5, '26', 3, '2022-07-09 04:11:10', '2022-07-09 04:11:10'),
(366, 46, 6, '30', 3, '2022-07-09 04:11:10', '2022-07-09 04:11:10'),
(367, 46, 7, '36', 4, '2022-07-09 04:11:11', '2022-07-09 04:11:11'),
(368, 46, 8, '41', 4, '2022-07-09 04:11:11', '2022-07-09 04:11:11'),
(369, 47, 1, '1', 1, '2022-07-09 04:11:53', '2022-07-24 22:37:55'),
(370, 47, 2, '15', 5, '2022-07-09 04:11:53', '2022-07-09 04:11:53'),
(371, 47, 3, '19', 2, '2022-07-09 04:11:53', '2022-07-09 04:11:53'),
(372, 47, 4, '22', 2, '2022-07-09 04:11:53', '2022-07-09 04:11:53'),
(373, 47, 5, '26', 3, '2022-07-09 04:11:53', '2022-07-09 04:11:53'),
(374, 47, 6, '30', 3, '2022-07-09 04:11:53', '2022-07-09 04:11:53'),
(375, 47, 7, '36', 4, '2022-07-09 04:11:53', '2022-07-09 04:11:53'),
(376, 47, 8, '44', 7, '2022-07-09 04:11:53', '2022-07-23 00:53:11'),
(377, 48, 1, '1', 1, '2022-07-09 04:12:24', '2022-07-24 22:37:55'),
(378, 48, 2, '15', 5, '2022-07-09 04:12:24', '2022-07-09 04:12:24'),
(379, 48, 3, '19', 2, '2022-07-09 04:12:24', '2022-07-09 04:12:24'),
(380, 48, 4, '22', 2, '2022-07-09 04:12:25', '2022-07-09 04:12:25'),
(381, 48, 5, '26', 3, '2022-07-09 04:12:25', '2022-07-09 04:12:25'),
(382, 48, 6, '30', 3, '2022-07-09 04:12:25', '2022-07-09 04:12:25'),
(383, 48, 7, '36', 4, '2022-07-09 04:12:25', '2022-07-09 04:12:25'),
(384, 48, 8, '41', 4, '2022-07-09 04:12:25', '2022-07-09 04:12:25'),
(385, 49, 1, '2', 1, '2022-07-09 04:13:04', '2022-07-24 22:37:55'),
(386, 49, 2, '16', 6, '2022-07-09 04:13:04', '2022-07-09 04:13:04'),
(387, 49, 3, '19', 2, '2022-07-09 04:13:04', '2022-07-09 04:13:04'),
(388, 49, 4, '22', 2, '2022-07-09 04:13:05', '2022-07-09 04:13:05'),
(389, 49, 5, '26', 3, '2022-07-09 04:13:05', '2022-07-09 04:13:05'),
(390, 49, 6, '29', 2, '2022-07-09 04:13:05', '2022-07-09 04:13:05'),
(391, 49, 7, '36', 4, '2022-07-09 04:13:05', '2022-07-09 04:13:05'),
(392, 49, 8, '44', 7, '2022-07-09 04:13:05', '2022-07-23 00:57:32'),
(393, 50, 1, '2', 1, '2022-07-09 04:14:07', '2022-07-24 22:37:55'),
(394, 50, 2, '15', 5, '2022-07-09 04:14:07', '2022-07-09 04:14:07'),
(395, 50, 3, '19', 2, '2022-07-09 04:14:07', '2022-07-09 04:14:07'),
(396, 50, 4, '22', 2, '2022-07-09 04:14:07', '2022-07-09 04:14:07'),
(397, 50, 5, '26', 3, '2022-07-09 04:14:07', '2022-07-09 04:14:07'),
(398, 50, 6, '29', 2, '2022-07-09 04:14:07', '2022-07-09 04:14:07'),
(399, 50, 7, '36', 4, '2022-07-09 04:14:07', '2022-07-09 04:14:07'),
(400, 50, 8, '44', 7, '2022-07-09 04:14:07', '2022-07-23 00:58:05'),
(401, 51, 1, '2', 1, '2022-07-09 04:14:48', '2022-07-24 22:37:55'),
(402, 51, 2, '15', 5, '2022-07-09 04:14:48', '2022-07-09 04:14:48'),
(403, 51, 3, '19', 2, '2022-07-09 04:14:48', '2022-07-09 04:14:48'),
(404, 51, 4, '22', 2, '2022-07-09 04:14:48', '2022-07-09 04:14:48'),
(405, 51, 5, '26', 3, '2022-07-09 04:14:48', '2022-07-09 04:14:48'),
(406, 51, 6, '29', 2, '2022-07-09 04:14:48', '2022-07-09 04:14:48'),
(407, 51, 7, '36', 4, '2022-07-09 04:14:48', '2022-07-09 04:14:48'),
(408, 51, 8, '41', 4, '2022-07-09 04:14:48', '2022-07-09 04:14:48'),
(409, 52, 1, '2', 1, '2022-07-09 04:15:54', '2022-07-24 22:37:56'),
(410, 52, 2, '13', 3, '2022-07-09 04:15:54', '2022-07-09 04:15:54'),
(411, 52, 3, '19', 2, '2022-07-09 04:15:54', '2022-07-09 04:15:54'),
(412, 52, 4, '22', 2, '2022-07-09 04:15:54', '2022-07-09 04:15:54'),
(413, 52, 5, '26', 3, '2022-07-09 04:15:54', '2022-07-09 04:15:54'),
(414, 52, 6, '28', 1, '2022-07-09 04:15:54', '2022-07-09 04:15:54'),
(415, 52, 7, '36', 4, '2022-07-09 04:15:54', '2022-07-09 04:15:54'),
(416, 52, 8, '44', 7, '2022-07-09 04:15:55', '2022-07-23 00:59:02'),
(417, 53, 1, '2', 1, '2022-07-09 04:17:25', '2022-07-24 22:37:56'),
(418, 53, 2, '12', 2, '2022-07-09 04:17:25', '2022-07-09 04:17:25'),
(419, 53, 3, '19', 2, '2022-07-09 04:17:25', '2022-07-09 04:17:25'),
(420, 53, 4, '22', 2, '2022-07-09 04:17:26', '2022-07-09 04:17:26'),
(421, 53, 5, '26', 3, '2022-07-09 04:17:26', '2022-07-09 04:17:26'),
(422, 53, 6, '28', 1, '2022-07-09 04:17:26', '2022-07-09 04:17:26'),
(423, 53, 7, '36', 4, '2022-07-09 04:17:26', '2022-07-09 04:17:26'),
(424, 53, 8, '44', 7, '2022-07-09 04:17:26', '2022-07-23 00:59:45'),
(425, 54, 1, '2', 1, '2022-07-09 04:18:06', '2022-07-24 22:37:56'),
(426, 54, 2, '12', 2, '2022-07-09 04:18:06', '2022-07-09 04:18:06'),
(427, 54, 3, '19', 2, '2022-07-09 04:18:06', '2022-07-09 04:18:06'),
(428, 54, 4, '22', 2, '2022-07-09 04:18:06', '2022-07-09 04:18:06'),
(429, 54, 5, '26', 3, '2022-07-09 04:18:06', '2022-07-09 04:18:06'),
(430, 54, 6, '28', 1, '2022-07-09 04:18:07', '2022-07-09 04:18:07'),
(431, 54, 7, '36', 4, '2022-07-09 04:18:07', '2022-07-09 04:18:07'),
(432, 54, 8, '41', 4, '2022-07-09 04:18:07', '2022-07-09 04:18:07'),
(433, 55, 1, '2', 1, '2022-07-09 04:18:28', '2022-07-24 22:37:56'),
(434, 55, 2, '12', 2, '2022-07-09 04:18:28', '2022-07-09 04:18:28'),
(435, 55, 3, '19', 2, '2022-07-09 04:18:28', '2022-07-09 04:18:28'),
(436, 55, 4, '22', 2, '2022-07-09 04:18:28', '2022-07-09 04:18:28'),
(437, 55, 5, '26', 3, '2022-07-09 04:18:28', '2022-07-09 04:18:28'),
(438, 55, 6, '28', 1, '2022-07-09 04:18:28', '2022-07-09 04:18:28'),
(439, 55, 7, '36', 4, '2022-07-09 04:18:28', '2022-07-09 04:18:28'),
(440, 55, 8, '41', 4, '2022-07-09 04:18:28', '2022-07-09 04:18:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nm_pu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_usaha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint(20) NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_siu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pas_foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_usaha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `shops`
--

INSERT INTO `shops` (`id`, `user_id`, `nm_pu`, `nm_usaha`, `alamat`, `nik`, `longitude`, `latitude`, `img_ktp`, `img_siu`, `pas_foto`, `foto_usaha`, `created_at`, `updated_at`) VALUES
(1, 2, 'Sahlan Ramli', 'CV. RENTAL PASEE', 'Kuta Blang, Kec. Banda Sakti, Kota Lhokseumawe, Aceh', 1000000000000000, '97.13431547805044', '5.180881404640743', NULL, NULL, 'pas_foto/37WtkIuJZNRU9KGhbwWVSGFlb2MC8GsmSYJZ4DWg.png', 'foto_usaha/gA2sJC3E3l5NFrC9rSbpLnxKeWy9IOOO0fA8QEP2.png', '2022-07-09 02:46:13', '2022-07-23 01:36:19'),
(2, 3, 'Andi Safarella', 'CV. ADAM JAYA RENTAL', 'Panggoi, Kec. Muara Dua, Kota Lhokseumawe, Aceh', 1000000000000001, '97.11684470491008', '5.192010791247267', NULL, NULL, NULL, 'foto_usaha/U69kuOuM2ly0SLjCM9GlWgDANYUDSPd1nLXDyTRG.png', '2022-07-09 02:46:13', '2022-07-23 01:38:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasans`
--

CREATE TABLE `ulasans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `komentar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ulasans`
--

INSERT INTO `ulasans` (`id`, `user_id`, `car_id`, `rating`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 1, 45, 1, 'Mantap', '2022-07-25 01:19:29', '2022-07-25 01:19:29'),
(2, 1, 46, 5, 'Mantap', '2022-07-25 01:19:54', '2022-07-25 01:19:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `no_hp`, `password`, `image`, `role`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin-1', 'amirul@pnl.com', 82367256774, '$2y$10$anaviSoAnWHSHjPQ3C/nQODMQdnOkagCSDlAtJ1v.yBiyHr2Vb0MK', NULL, 'admin', NULL, NULL, '2022-07-09 02:46:12', '2022-07-09 02:46:12'),
(2, 'sahlan', 'sahlan@pnl.com', 81360307543, '$2y$10$kcHAd..MPF9yf0A4mfkQG.Rk/J7Y8PdVySMhXY/6dkAcQxCr5tjhW', NULL, 'rental', NULL, NULL, '2022-07-09 02:46:12', '2022-07-09 02:46:12'),
(3, 'andi', 'andi@pnl.com', 80000000000, '$2y$10$x0NYm9sw1ADMIaQn8mnT0OX8MZBEz13nv5GFks.idswFrpcgeh29u', NULL, 'rental', NULL, NULL, '2022-07-09 02:46:12', '2022-07-09 02:46:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alternatifs_kriteria_id_foreign` (`kriteria_id`);

--
-- Indeks untuk tabel `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_user_id_foreign` (`user_id`),
  ADD KEY `cars_shop_id_foreign` (`shop_id`),
  ADD KEY `cars_merk_id_foreign` (`merk_id`),
  ADD KEY `cars_tahun_produksi_id_foreign` (`Tahun_Produksi_id`),
  ADD KEY `cars_kondisi_fisik_id_foreign` (`Kondisi_Fisik_id`),
  ADD KEY `cars_kondisi_mesin_id_foreign` (`Kondisi_Mesin_id`),
  ADD KEY `cars_muatan_penumpang_id_foreign` (`Muatan_Penumpang_id`),
  ADD KEY `cars_kapasitas_mesin_id_foreign` (`Kapasitas_Mesin_id`),
  ADD KEY `cars_jenis_bbm_id_foreign` (`Jenis_BBM_id`),
  ADD KEY `cars_harga_sewa_id_foreign` (`Harga_Sewa_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `histories_shop_id_foreign` (`shop_id`);

--
-- Indeks untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `make_shops`
--
ALTER TABLE `make_shops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `make_shops_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilais_car_id_foreign` (`car_id`),
  ADD KEY `nilais_kriteria_id_foreign` (`kriteria_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shops_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `ulasans`
--
ALTER TABLE `ulasans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ulasans_user_id_foreign` (`user_id`),
  ADD KEY `ulasans_car_id_foreign` (`car_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_no_hp_unique` (`no_hp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatifs`
--
ALTER TABLE `alternatifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `make_shops`
--
ALTER TABLE `make_shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ulasans`
--
ALTER TABLE `ulasans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD CONSTRAINT `alternatifs_kriteria_id_foreign` FOREIGN KEY (`kriteria_id`) REFERENCES `kriterias` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_harga_sewa_id_foreign` FOREIGN KEY (`Harga_Sewa_id`) REFERENCES `alternatifs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cars_jenis_bbm_id_foreign` FOREIGN KEY (`Jenis_BBM_id`) REFERENCES `alternatifs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cars_kapasitas_mesin_id_foreign` FOREIGN KEY (`Kapasitas_Mesin_id`) REFERENCES `alternatifs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cars_kondisi_fisik_id_foreign` FOREIGN KEY (`Kondisi_Fisik_id`) REFERENCES `alternatifs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cars_kondisi_mesin_id_foreign` FOREIGN KEY (`Kondisi_Mesin_id`) REFERENCES `alternatifs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cars_merk_id_foreign` FOREIGN KEY (`merk_id`) REFERENCES `alternatifs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cars_muatan_penumpang_id_foreign` FOREIGN KEY (`Muatan_Penumpang_id`) REFERENCES `alternatifs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cars_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cars_tahun_produksi_id_foreign` FOREIGN KEY (`Tahun_Produksi_id`) REFERENCES `alternatifs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `histories`
--
ALTER TABLE `histories`
  ADD CONSTRAINT `histories_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `make_shops`
--
ALTER TABLE `make_shops`
  ADD CONSTRAINT `make_shops_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilais`
--
ALTER TABLE `nilais`
  ADD CONSTRAINT `nilais_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilais_kriteria_id_foreign` FOREIGN KEY (`kriteria_id`) REFERENCES `kriterias` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ulasans`
--
ALTER TABLE `ulasans`
  ADD CONSTRAINT `ulasans_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ulasans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
