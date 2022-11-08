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
  `E-mail` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`AccountID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Instructeurs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Instructeurs` (
  `InstructeurID` INT NOT NULL AUTO_INCREMENT,
  `Voornaam` VARCHAR(45) NULL,
  `Achternaam` VARCHAR(45) NULL,
  PRIMARY KEY (`InstructeurID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Leerlingen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Leerlingen` (
  `LeerlingID` INT NOT NULL AUTO_INCREMENT,
  `Voornaam` VARCHAR(45) NULL,
  `Achternaam` VARCHAR(45) NULL,
  `Soort auto` VARCHAR(255) NULL,
  `Leerlingencol` VARCHAR(45) NOT NULL,
  `AccountID` INT NOT NULL,
  PRIMARY KEY (`LeerlingID`),
  CONSTRAINT `fk_Leerlingen_Accounts1`
    FOREIGN KEY (`AccountID`)
    REFERENCES `Accounts` (`AccountID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Lesauto's`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Lesauto's` (
  `AutoID` INT NOT NULL AUTO_INCREMENT,
  `Type` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`AutoID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Lessen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Lessen` (
  `Instructeurs_InstructeurID` INT NOT NULL,
  `Leerlingen_LeerlingID` INT NOT NULL,
  `Datum` DATETIME NOT NULL,
  `Lesduur (uren)` INT NOT NULL,
  `AutoID` INT NOT NULL,
  PRIMARY KEY (`Instructeurs_InstructeurID`, `Leerlingen_LeerlingID`),
  INDEX `fk_Instructeurs_has_Leerlingen_Leerlingen1_idx` (`Leerlingen_LeerlingID` ASC) VISIBLE,
  INDEX `fk_Instructeurs_has_Leerlingen_Instructeurs_idx` (`Instructeurs_InstructeurID` ASC) VISIBLE,
  INDEX `fk_Lessen_Lesauto's1_idx` (`AutoID` ASC) VISIBLE,
  CONSTRAINT `fk_Instructeurs_has_Leerlingen_Instructeurs`
    FOREIGN KEY (`Instructeurs_InstructeurID`)
    REFERENCES `Instructeurs` (`InstructeurID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Instructeurs_has_Leerlingen_Leerlingen1`
    FOREIGN KEY (`Leerlingen_LeerlingID`)
    REFERENCES `Leerlingen` (`LeerlingID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Lessen_Lesauto's1`
    FOREIGN KEY (`AutoID`)
    REFERENCES `Lesauto's` (`AutoID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
