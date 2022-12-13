DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizar_registros_factorial`(IN `n` INT, IN `factorial` FLOAT, IN `sumatoria` INT)
BEGIN
  
  SET @S = CONCAT("INSERT parcial2 SET n=", n ,", factorial=", factorial,", sumatoria=", sumatoria);

  PREPARE stmt FROM @S;
  EXECUTE stmt;
  DEALLOCATE PREPARE stmt;

END$$
DELIMITER ;