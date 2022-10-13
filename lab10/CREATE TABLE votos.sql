CREATE TABLE votos (
id tinyint(3) unsigned NOT NULL auto_increment,
votos1 int (10) unsigned NOT NULL  default '0',
votos2 int (10) unsigned NOT NULL  default '0',
PRIMARY KEY (id)
);



INSERT INTO votos VALUE (1, 49, 12);




CREATE DEFINER = `root`@`localhost` PROCEDURE `sp_listar_votos` ()
BEGIN
 SELECT votos1,votos2 FROM votos;
END;


   
CREATE DEFINER = `root`@`localhost` PROCEDURE `sp_actualizar_votos` (
IN  param_votos1 VARCHAR (255),
IN  param_votos2 VARCHAR (255)
)
BEGIN
  
  SET @S = CONCAT("UPDATE votos SET votos1=", param_votos1 ,", votos2=", param_votos2);

  PREPARE stmt FROM @S;
  EXECUTE stmt;
  DEALLOCATE PREPARE stmt;

END;


