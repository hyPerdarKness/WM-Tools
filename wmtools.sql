-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 May 2021, 23:09:11
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `wmtools`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tools_ayarlar`
--

CREATE TABLE `tools_ayarlar` (
  `id` int(11) NOT NULL,
  `siteadi` varchar(160) COLLATE utf8_bin NOT NULL,
  `keywords` varchar(160) COLLATE utf8_bin NOT NULL,
  `description` varchar(160) COLLATE utf8_bin NOT NULL,
  `analytics` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `tools_ayarlar`
--

INSERT INTO `tools_ayarlar` (`id`, `siteadi`, `keywords`, `description`, `analytics`) VALUES
(1, 'WM Tools', '#', '#', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tools_title`
--

CREATE TABLE `tools_title` (
  `id` int(11) NOT NULL,
  `baslik` varchar(50) COLLATE utf8_bin NOT NULL,
  `url` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `tools_title`
--

INSERT INTO `tools_title` (`id`, `baslik`, `url`) VALUES
(1, 'IP Bul', 'ipbul'),
(2, 'Link Kısaltma', 'linkisalt'),
(3, 'Whois', 'whois'),
(4, 'Site Hız Testi', 'hiztesti'),
(5, 'Site Erişim Kontrolü', 'siteupdown'),
(6, 'Site HTTP Bilgisi', 'sitehttp'),
(7, 'Site DNS Bilgileri', 'sitedns'),
(8, 'Kelime Hesaplayıcı', 'kelimehesaplayici'),
(9, 'HTML Şifreleme', 'htmlsifreleme'),
(10, 'Base64 Şifreleme', 'base64sifreleme'),
(11, 'MD5-SHA1 Şifreleme', 'md5-sha1sifreleme'),
(12, 'Şifre Oluşturucu', 'sifreolusturucu'),
(13, 'Mail Ayıklama', 'mailayiklama');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tools_ayarlar`
--
ALTER TABLE `tools_ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tools_title`
--
ALTER TABLE `tools_title`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tools_ayarlar`
--
ALTER TABLE `tools_ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `tools_title`
--
ALTER TABLE `tools_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
