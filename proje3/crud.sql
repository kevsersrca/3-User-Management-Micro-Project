-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Ara 2015, 10:10:40
-- Sunucu sürümü: 10.1.8-MariaDB
-- PHP Sürümü: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje3`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici_bilgileri`
--

CREATE TABLE `kullanici_bilgileri` (
  `id` int(11) NOT NULL,
  `ad` varchar(225) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(225) COLLATE utf8_turkish_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(225) COLLATE utf8_turkish_ci NOT NULL,
  `notlar` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanici_bilgileri`
--
ALTER TABLE `kullanici_bilgileri`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanici_bilgileri`
--
ALTER TABLE `kullanici_bilgileri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
