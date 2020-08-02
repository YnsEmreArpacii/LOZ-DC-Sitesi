-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: sql208.epizy.com
-- Üretim Zamanı: 17 Tem 2020, 17:33:03
-- Sunucu sürümü: 5.6.48-88.0
-- PHP Sürümü: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `VERİTABANIADI`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `baslik` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`baslik`) VALUES
('Code TR'),
('Code TR');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetkililer`
--

CREATE TABLE `yetkililer` (
  `id` int(11) NOT NULL,
  `isim` varchar(300) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `avatar` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `yetkililer`
--

INSERT INTO `yetkililer` (`id`, `isim`, `avatar`) VALUES
(1, 'ꑮ Loz \'Beyᴿᴵᴼ#2996', 'https://i.hizliresim.com/DmPnKR.jpg'),
(2, 'Bayrakk', 'https://cdn.discordapp.com/avatars/570987752842067969/a_f5dba31329186506f684736fcde0a6f6.png');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `yetkililer`
--
ALTER TABLE `yetkililer`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `yetkililer`
--
ALTER TABLE `yetkililer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
