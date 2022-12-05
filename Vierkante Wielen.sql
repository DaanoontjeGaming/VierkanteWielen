-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Database VierkanteWielenDB
-- -----------------------------------------------------
CREATE DATABASE IF NOT EXISTS `VierkanteWielenDB` DEFAULT CHARACTER SET utf8 ;
USE `VierkanteWielenDB` ;

-- -----------------------------------------------------
-- Table `Accounts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Accounts` (
  `AccountID` INT NOT NULL AUTO_INCREMENT,
  `Username` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Function` VARCHAR(45) NOT NULL,
  `resetpw_token` SMALLINT DEFAULT 0,
  PRIMARY KEY (`AccountID`),
  UNIQUE INDEX `Username_UNIQUE` (`Username` ASC),
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC))
ENGINE = InnoDB;

INSERT INTO `Accounts` (`Username`, `Password`, `Email`, `Function`) VALUES ('JornOosterink', 'VierkanteRijschool', 'j.oosterink@rocvf.nl', 'Beheerder'), ('PietdeVries', 'VierkanteRijschool', 'p.devries@rocvf.nl', 'Beheerder');

-- -----------------------------------------------------
-- Table `Instructeurs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Instructeurs` (
  `InstructeursID` INT NOT NULL AUTO_INCREMENT,
  `Voornaam` VARCHAR(45) NOT NULL,
  `Tussenvoegsel` VARCHAR(45) NULL,
  `Achternaam` VARCHAR(45) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Telefoon` VARCHAR(10) NOT NULL,
  `AccountID` INT NOT NULL,
  PRIMARY KEY (`InstructeursID`),
  INDEX `fk_Instructeurs_Accounts_idx` (`AccountID` ASC),
  CONSTRAINT `fk_Instructeurs_Accounts`
    FOREIGN KEY (`AccountID`)
    REFERENCES `Accounts` (`AccountID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Lespaketten`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Lespaketten` (
  `PakketID` INT NOT NULL AUTO_INCREMENT,
  `Pakketnaam` VARCHAR(255) NOT NULL,
  `Prijs` DECIMAL(6,2) NOT NULL,
  `Autosoort` VARCHAR(45) NOT NULL,
  `Lesuren` INT NOT NULL,
  PRIMARY KEY (`PakketID`))
ENGINE = InnoDB;

INSERT INTO `Lespaketten` (`Pakketnaam`, `Prijs`, `Autosoort`, `Lesuren`)
VALUES ('Schakel 36', '2199.99', 'Schakelauto', '36'), ('Schakel 40', '2499.99', 'Schakelauto', '40'), ('Schakel 44', '2799.99', 'Schakelauto', '44'), ('Auto 36', '2399.99', 'Automaat', '36'),
('Auto 40', '2699.99', 'Automaat', '40'), ('Auto 44', '2999.99', 'Automaat', '44'), ('Compleet 36', '2999.99', 'Beide', '36'), ('Compleet 40', '3399.99', 'Beide', '40'), ('Compleet 44', '3799.99', 'Beide', '44'), ('Losse les', '59.99', 'Beide', '1');

-- -----------------------------------------------------
-- Table `Leerlingen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Leerlingen` (
  `LeerlingID` INT NOT NULL AUTO_INCREMENT,
  `Voornaam` VARCHAR(45) NOT NULL,
  `Tussenvoegsel` VARCHAR(45) NULL,
  `Achternaam` VARCHAR(45) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Telefoon` VARCHAR(10) NOT NULL,
  `AccountID` INT NOT NULL,
  `PakketID` INT NOT NULL,
  PRIMARY KEY (`LeerlingID`),
  INDEX `fk_Instructeurs_Accounts_idx` (`AccountID` ASC),
  INDEX `fk_Leerlingen_Lespaketten1_idx` (`PakketID` ASC),
  CONSTRAINT `fk_Instructeurs_Accounts0`
    FOREIGN KEY (`AccountID`)
    REFERENCES `Accounts` (`AccountID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Leerlingen_Lespaketten1`
    FOREIGN KEY (`PakketID`)
    REFERENCES `Lespaketten` (`PakketID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Lessen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Lessen` (
  `LesID` INT NOT NULL,
  `Timeslot` DATETIME NOT NULL,
  `LeerlingID` INT NOT NULL,
  `InstructeursID` INT NOT NULL,
  INDEX `fk_Leerlingen_has_Instructeurs_Instructeurs1_idx` (`InstructeursID` ASC),
  INDEX `fk_Leerlingen_has_Instructeurs_Leerlingen1_idx` (`LeerlingID` ASC),
  PRIMARY KEY (`LesID`),
  CONSTRAINT `fk_Leerlingen_has_Instructeurs_Leerlingen1`
    FOREIGN KEY (`LeerlingID`)
    REFERENCES `Leerlingen` (`LeerlingID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Leerlingen_has_Instructeurs_Instructeurs1`
    FOREIGN KEY (`InstructeursID`)
    REFERENCES `Instructeurs` (`InstructeursID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SELECT * FROM Lespaketten;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
