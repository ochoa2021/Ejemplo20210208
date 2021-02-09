-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.14-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando datos para la tabla agenda_telefonica.agenda: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
INSERT INTO `agenda` (`id`, `nombre`, `numero`, `direccion`) VALUES
	(5, 'Luis Ocampo', '2147483647', 'Ciudad de Filadelfia '),
	(6, 'Luis Ocampo', '2147483647', 'Ciudad de Filadelfia '),
	(7, 'Luis Ocampo', '2147483647', 'Ciudad de Filadelfia '),
	(9, 'Teresa Vargas', '0438494', 'Ciudad de Villarica 2'),
	(10, 'Teresa Vargas', '232', 'Ciudad de Filadelfia '),
	(11, 'Luis Ocampo', '123', 'Ciudad de Villarica 3');
/*!40000 ALTER TABLE `agenda` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
