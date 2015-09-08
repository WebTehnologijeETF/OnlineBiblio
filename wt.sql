-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2015 at 02:46 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wt`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE IF NOT EXISTS `komentari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `novost` int(11) NOT NULL,
  `autor` varchar(45) COLLATE utf8_slovenian_ci NOT NULL,
  `tekst` text COLLATE utf8_slovenian_ci NOT NULL,
  `vrijeme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` text COLLATE utf8_slovenian_ci,
  PRIMARY KEY (`id`),
  KEY `novost` (`novost`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id`, `novost`, `autor`, `tekst`, `vrijeme`, `email`) VALUES
(1, 5, 'Anes Lučkin', 'Dobra knjiga, strašna je. :)', '2015-09-04 17:42:02', 'anes_luckin@hotmail.com'),
(2, 5, 'Kenan Mahmutović', 'Ne laži! Loša je.', '2015-09-04 19:35:12', 'kenanmahmutovic@gmail.com'),
(8, 5, 'Edis', 'Sta vi znate!', '2015-09-05 19:38:20', '');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `email` varchar(45) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `username`, `password`, `admin`, `email`) VALUES
(1, 'Anes', '9e5fec8fdd8cf1f1c82235107c424ed3', 1, 'onlinebiblio@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `novosti`
--

CREATE TABLE IF NOT EXISTS `novosti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(45) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `autor` varchar(45) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `tekst` text COLLATE utf8_slovenian_ci,
  `opsirno` text COLLATE utf8_slovenian_ci,
  `vrijeme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slika` text COLLATE utf8_slovenian_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `novosti`
--

INSERT INTO `novosti` (`id`, `naslov`, `autor`, `tekst`, `opsirno`, `vrijeme`, `slika`) VALUES
(5, 'Gospodar prstenova: Povratak kralja', 'J.R.R Tolkien', 'U trećem dijelu, Povratak kralja, nastavljaju se avanture Gandalfa, Aragorna, Gimlija i Legolasa usporedno s Frodovim i Samovim.', 'U trećem dijelu, Povratak kralja, nastavljaju se avanture Gandalfa, Aragorna, Gimlija i Legolasa usporedno s Frodovim i Samovim. Kao što je rečeno u prvoj knjizi, Družina pomaže u posljednjoj bitki protiv Sauronovih snaga, uključujući i opsadu Minas Tiritha u Gondoru i posljednjoj bitki za život i smrt pred Crnim Dverima Mordora, gdje se savez Gondora i Rohana očajnički bori protiv Sauronove vojske, da bi im odvratili pažnju od Prstena, te tako dajući vremena Frodi da ga uništi.', '2015-09-04 16:18:26', 'http://www.gstatic.com/tv/thumb/movieposters/33156/p33156_p_v7_ak.jpg'),
(8, 'Gospodar prstenova: Dvije kule', 'J.R.R Tolkien', 'Gospodar prstenova: Prstenova družina, radnja je podijeljena na tri dijela, dok Frodo i Sam nastavljaju svoj put u Mordor kako bi uništili Jedinstveni Prsten i upoznaju Golluma, njegova bivšeg vlasnika. Aragorn, Legolas i Gimli nailaze na rat u Rohanu i na preporođenog Gandalfa, prije Bitke kod Helmove klisure, dok Merry i Pippin bježe iz zarobljeništva i upoznaju Drvobradaša, divovsko stablo.', ' Gospodar prstenova: Prstenova družina, radnja je podijeljena na tri dijela, dok Frodo i Sam nastavljaju svoj put u Mordor kako bi uništili Jedinstveni Prsten i upoznaju Golluma, njegova bivšeg vlasnika. Aragorn, Legolas i Gimli nailaze na rat u Rohanu i na preporođenog Gandalfa, prije Bitke kod Helmove klisure, dok Merry i Pippin bježe iz zarobljeništva i upoznaju Drvobradaša, divovsko stablo. U Rohanu, orci napreduju sa zarobljenicima Merryjem i Pippinom. Aragorn, Legolas i Gimli ih slijede, trčeći tri dana. Shvaćaju da su u Rohanu, a Legolas pretpostavi da hobite vode u Isengard. Ondje Saruman započinje svoj napad na zemlju i njezin glavni grad Edoras. Kralj Theoden je mentalno i fizički slab zbog čarolije njegova sluge, Grima Wormtonguea, kojeg je potkupio Saruman. Orci divljaju zemljom i ubijaju ljude uključujući kraljeva jedinog sina Theodreda. Theodenov nećak Eomer srdito shvaća da je Grima postao Sarumanov sluga i bijesno ga upita što "mu je obećao". Nakon što Grima nasrne na Eowyn, Eomer ga napada, ali je protjeran zbog podrivanja njegova autoriteta.', '2015-09-08 12:43:07', 'https://upload.wikimedia.org/wikipedia/hr/2/2a/LOTRTTTmovie.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentari`
--
ALTER TABLE `komentari`
  ADD CONSTRAINT `komentari_ibfk_1` FOREIGN KEY (`novost`) REFERENCES `novosti` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
