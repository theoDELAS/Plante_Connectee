DROP DATABASE IF EXISTS `bdd_plantes`;
CREATE DATABASE IF NOT EXISTS `bdd_plantes`;
USE `bdd_plantes`;


CREATE TABLE `tb_plantes`
(
	`id_plante` INT NOT NULL,
	`plante_nom` VARCHAR(65) NOT NULL,
	`plante_categorie` VARCHAR(65) NOT NULL,
	`plante_description` TEXT,
	`plante_humidite` INT NOT NULL,
	`plante_photo` BLOB NOT NULL,
	`plante_luminosite` INT NOT NULL,
	`plante_periode` VARCHAR(65) NOT NULL,
	`plante_temperature` INT NOT NULL,
	PRIMARY KEY(`id_plante`)
);	
