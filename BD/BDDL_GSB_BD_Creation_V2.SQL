
DROP DATABASE IF EXISTS GSB_BDDL;

CREATE DATABASE IF NOT EXISTS GSB_BDDL;
USE GSB_BDDL;
# -----------------------------------------------------------------------------
#       TABLE : UTILISATEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS UTILISATEUR
 (
   IDUTILISATEUR  INTEGER(2) NOT NULL AUTO_INCREMENT ,
   IDROLE  INTEGER(2) NOT NULL  ,
   LOGIN  varchar (32) NULL  ,
   MDP  varchar (32) NULL  
   , PRIMARY KEY (IDUTILISATEUR) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE UTILISATEUR
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_UTILISATEUR_ROLE
     ON UTILISATEUR (IDROLE ASC);

# -----------------------------------------------------------------------------
#       TABLE : EXCIPIENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS EXCIPIENT
 (
   IDEXCIPIENT INTEGER(2) NOT NULL AUTO_INCREMENT ,
   LIBELLEEXCIPIENT  varchar (32) NULL  
   , PRIMARY KEY (IDEXCIPIENT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : MÉDICAMENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MEDICAMENT
 (
   CIP  char (13) NOT NULL  ,
   NOMMEDICAMENT  varchar (32) NULL  ,
   GRAMMAGE  varchar (32) NULL,
   IDLABORATOIRE INTEGER(2) 
   , PRIMARY KEY (CIP) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : FORME
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FORME
 (
   IDFORME  INTEGER(2) NOT NULL AUTO_INCREMENT ,
   LIBELLEFORME  varchar (32) NULL  
   , PRIMARY KEY (IDFORME) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : LABORATOIRE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS LABORATOIRE
 (
   IDLABORATOIRE  INTEGER(2) NOT NULL AUTO_INCREMENT ,
   RAISONSOCIALE  varchar (32) NULL  
   , PRIMARY KEY (IDLABORATOIRE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : RÔLE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ROLE
 (
   IDROLE  INTEGER(2) NOT NULL AUTO_INCREMENT ,
   LIBELLEROLE  varchar (32) NULL  
   , PRIMARY KEY (IDROLE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : MOLÉCULE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MOLECULE
 (
   IDMOLECULE  INTEGER(2) NOT NULL AUTO_INCREMENT ,
   LIBELLEMOLECULE  varchar (32) NULL  
   , PRIMARY KEY (IDMOLECULE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : ADMINISTRER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ADMINISTRER
 (
   CIP  char (13) NOT NULL  ,
   IDFORME  INTEGER(2) NOT NULL  
   , PRIMARY KEY (CIP,IDFORME) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ADMINISTRER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ADMINISTRER_MÉDICAMENT
     ON ADMINISTRER (CIP ASC);

CREATE  INDEX I_FK_ADMINNISTRER_FORME
     ON ADMINISTRER (IDFORME ASC);

# -----------------------------------------------------------------------------
#       TABLE : COMPOSER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS COMPOSER
 (
   CIP  varchar(13) NOT NULL  ,
   IDEXCIPIENT  INTEGER(2) NOT NULL  
   , PRIMARY KEY (CIP,IDEXCIPIENT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE COMPOSER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_COMPOSER_MEDICAMENT
     ON COMPOSER (CIP ASC);

CREATE  INDEX I_FK_COMPOSER_EXCIPIENT
     ON COMPOSER (IDEXCIPIENT ASC);

# -----------------------------------------------------------------------------
#       TABLE : CONTENIR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CONTENIR
 (
   CIP  varchar(13) NOT NULL  ,
   IDMOLECULE  INTEGER(2) NOT NULL  
   , PRIMARY KEY (CIP,IDMOLECULE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CONTENIR
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CONTENIR_MEDICAMENT
     ON CONTENIR (CIP ASC);

CREATE  INDEX I_FK_CONTENIR_MOLECULE
     ON CONTENIR (IDMOLECULE ASC);

# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE UTILISATEUR 
  ADD FOREIGN KEY FK_UTILISATEUR_ROLE (IDROLE)
      REFERENCES ROLE (IDROLE) ;


ALTER TABLE ADMINISTRER 
  ADD FOREIGN KEY FK_ADMINISTRER_MEDICAMENT (CIP)
      REFERENCES MEDICAMENT (CIP) ;


ALTER TABLE ADMINISTRER 
  ADD FOREIGN KEY FK_ADMINISTRER_FORME (IDFORME)
      REFERENCES FORME (IDFORME) ;


ALTER TABLE COMPOSER 
  ADD FOREIGN KEY FK_COMPOSER_MEDICAMENT (CIP)
      REFERENCES MEDICAMENT (CIP) ;


ALTER TABLE COMPOSER 
  ADD FOREIGN KEY FK_COMPOSER_EXCIPIENT (IDEXCIPIENT)
      REFERENCES EXCIPIENT (IDEXCIPIENT) ;


ALTER TABLE CONTENIR 
  ADD FOREIGN KEY FK_CONTENIR_MEDICAMENT (CIP)
      REFERENCES MEDICAMENT (CIP) ;


ALTER TABLE CONTENIR 
  ADD FOREIGN KEY FK_CONTENIR_MOLECULE (IDMOLECULE)
      REFERENCES MOLECULE (IDMOLECULE) ;

ALTER TABLE MEDICAMENT 
  ADD FOREIGN KEY FK_LABORATOIRE_MEDICAMENT (IDLABORATOIRE)
      REFERENCES LABORATOIRE(IDLABORaTOIRE) ;
