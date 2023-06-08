-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Haz 2023, 21:47:11
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `crud_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerik`
--

CREATE TABLE `icerik` (
  `id` int(50) NOT NULL,
  `adisoyadi` varchar(100) NOT NULL,
  `telefon` varchar(100) NOT NULL,
  `adres` varchar(100) NOT NULL,
  `borc` varchar(100) NOT NULL,
  `userid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `icerik`
--

INSERT INTO `icerik` (`id`, `adisoyadi`, `telefon`, `adres`, `borc`, `userid`) VALUES
(1, 'Atahan Adanır', '90(819)618-44-33\n', '8002 Ohio Street\nNorth Tonawanda, NY 14120', '264872 TL', 3),
(2, 'Hacı Mehmet	Adıgüzel', '90(443)497-80-34', '383 Rocky River Ave.\nSpringboro, OH 45066', '264872 TL', 3),
(3, 'Bestami	Ağırağaç', '90(631)612-07-70', '720 Maiden Drive\nSuite 6\nPerkasie, PA 18944', '989422 TL', 2),
(4, 'Mügenur	Ahmet', '90(601)290-18-54\r\n', '98 Williams Street\nFairport, NY 14450', '43267 TL', 2),
(5, 'Sevinç	Ak', '90(636)503-62-49\r\n', '625 Livingston Dr.\nScotch Plains, NJ 07076\n', '1235572 TL\n', 2),
(6, 'Cihan	Akarpınar', '90(678)343-45-59\n', '971 Chapel St.\nSanford, NC 27330', '7931634 TL', 7),
(7, 'Nuhaydar	Akbilmez', '90(480)705-72-88\n', '588 Cross Ave.\nRaeford, NC 28376', '84629 TL', 7),
(8, 'Servet	Akçagunay', '90(89)897-35-42\n', '951 West King Street\nNampa, ID 83651', '472052 TL', 8),
(9, 'Çilem	Akçay', '90(3846)308-11-01\r\n', '442 Rockwell Street\nNavarre, FL 32566', '94623 TL', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `userid` int(100) NOT NULL,
  `kullaniciadi` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL,
  `adisoyadi` varchar(100) NOT NULL,
  `emailadresi` varchar(100) NOT NULL,
  `kayittarihi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`userid`, `kullaniciadi`, `sifre`, `adisoyadi`, `emailadresi`, `kayittarihi`) VALUES
(2, 'anka', 'furkan4534', 'furkan2 özgül', 'muhammedfurkanozgul0@gmail.com', 1685962825),
(3, 'deneme', 'deneme123', 'ad soyad', 'deneme@gmail.com', 1686051534),
(7, 'deneme2', 'deneme123', 'deneme ad soyad', 'dene2me@gmail.com', 1686224452),
(8, 'furkan', 'furkan123', 'furkan özgül', 'muhammedfurkanozg3ul0@gmail.com', 1686248397);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `icerik`
--
ALTER TABLE `icerik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`userid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `icerik`
--
ALTER TABLE `icerik`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `icerik`
--
ALTER TABLE `icerik`
  ADD CONSTRAINT `icerik_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `uyeler` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
