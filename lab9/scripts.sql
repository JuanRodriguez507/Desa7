CREATE TABLE noticias (
    id SMALLINT(5) unsigned NOT NULL AUTO_INCREMENT,
    titulo varchar	(100) NOT NULL DEFAULT '',
    texto text NOT NULL,
    categoria ENUM('promociones','ofertas','costos') NOT NULL default 'promociones',
    fecha date NOT NULL,
    imagen varchar(100) DEFAULT NULL,
    PRIMARY KEY (ID)
    );



INSERT INTO noticias VALUES (1, 'Nueva promocion en Ciudad Cristal', '145 viviendas
de lujo en urbanizacion ajardinada situadas en un entorno privilegiado',
'promociones', '2019-02-04', NULL);

    INSERT INTO noticias VALUES (2, 'Ultimas viviendas junto al rio', 'Apartamentos de 1
y 2 dormitorios, con fantasticas vistas. Excelentes condiciones de financiacion.',
'ofertas', '2019-02-05', NULL);

INSERT INTO noticias VALUES (3, 'Apartamentos en el Puerto de San Martin', 'En la
Playa del Sol, en primera linea de playa. Pisos reformados y completamente
amueblados.', 'costas', '2019-02-06', 'apartamento8.jpg');

INSERT INTO noticias VALUES (4, 'Casa reformada en el barrio de la Palmera', 'Dos
plantas y atico, 5 habitaciones, patio interior, amplio garaje. Situada en una calle
tranquila y a un paso del centro historico.', 'promociones', '2019-02-07', NULL);

INSERT INTO noticias VALUES (5, 'Promocion en Costa Mar', 'Con vistas al campo de
golf, magnificas calidades, entorno ajardinado con piscina y servicio de
vigilancia.', 'costas', '2019-02-09', 'apartamento9.jpg');

DELIMITER $$
CREATE DEFINER = `root`@`localhost` PROCEDURE `sp_listar_noticias` ()
BEGIN   

    SELECT id, titulo, texto, categoria, fecha, imagen FROM noticias;

    END



    DELIMITER $$
CREATE DEFINER = `root`@`localhost` PROCEDURE `sp_listar_noticias_filtro` (
IN param_campo VARCHAR(255),
IN param_valor VARCHAR(255)
)
BEGIN   

    SET @S= CONCAT ("SELECT id, titulo, texto, categoria, fecha, imagen 
        FROM noticias WHERE ", param_campo , " LIKE CONCAT ('%", param_valor, "%')");
PREPARE stmt FROM @S;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
    END;







    CREATE TABLE usuarios (
    id SMALLINT(5) unsigned not null AUTO_INCREMENT,
    usuario varchar(20) NOT NULL DEFAULT '',
    clave varchar(20) NOT NULL DEFAULT '',
    PRIMARY KEY (id)
    )


    