-- --------------------------------------------------------
-- Servidor:                     51.222.19.162
-- Versão do servidor:           10.4.17-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para laplaza
CREATE DATABASE IF NOT EXISTS `laplaza` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `laplaza`;

-- Copiando estrutura para procedure laplaza.login
DELIMITER //
CREATE PROCEDURE `login`(
	IN `p_email` VARCHAR(100),
	IN `p_senha` VARCHAR(100)
)
BEGIN
	SELECT                                               
		A.*,                                              
		B.*,                                              
		C.*,                                              
		(SELECT dvalue FROM vrp_user_data WHERE vrp_user_data.user_id = A.id AND dkey LIKE "%datatable%") AS user_data
	FROM login A                                         
	JOIN vrp_users B ON B.id = A.id_rp                   
	JOIN vrp_user_identities C ON B.id = C.user_id       
	WHERE A.email = p_email AND A.senha = MD5(p_senha);
END//
DELIMITER ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
