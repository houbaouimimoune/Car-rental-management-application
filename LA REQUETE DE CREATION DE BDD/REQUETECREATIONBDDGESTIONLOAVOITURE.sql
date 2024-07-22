

drop table if exists CLIENT;

drop table if exists PAIEMENT;

drop table if exists PENALISATION;

drop table if exists USER;

drop table if exists VOITURE;

drop table if exists LALOCATION;



create database gestion ; 




create table CLIENT
(
   CIN                  varchar(10) not null,
   NOM                  text,
   PRENOM               text,
   DATENAISSANCE        date,
   ADRESSE              text,
   TELEPHONE            text,
   DATEINSCRIPTION      date,
   MOTDEPASSE           text,
   BLACKLIST            int,
   primary key (CIN)
)
 ENGINE=InnoDB;






create table PAIEMENT
(
   NUMPAIEMENT          smallint not null,
   TYPE                 text,
   MONTANT              float(10,2),
   DATEPAIMENT          date,
   NUMLOCATION          int,
   primary key (NUMPAIEMENT)
)
 ENGINE=InnoDB;





create table PENALISATION
(
   NUMPENALISATION      smallint not null,
   COUT                 float(10,2),
   DATEPROBLEME         date,
   RAISON               text,
   NUMLOCATION          int,
   primary key (NUMPENALISATION)
)
 ENGINE=InnoDB;




create table USER
(
   LOGIN                varchar(10) not null,
   MDP                  text,
   DATECREATION         date,
   DATEDERNIEREAUTH     date,
   primary key (LOGIN)
)
 ENGINE=InnoDB;




create table VOITURE
(
   MATRICULE            varchar(10) not null,
   MARQUE               text,
   CARBURANT            text,
   MODELE               text,
   COULEUR              text,
   CATEGORIE            text,
   PUISSANCE            int,
   COUTPARJOUR          float(10,2),
   primary key (MATRICULE)
)
 ENGINE=InnoDB;






drop table if exists LALOCATION;

create table LALOCATION
(
   NUMLOCATION          int not null,
   DATELOCATION         date not null,
   DATEDEBUT            date not null,
   DATEFIN              date not null,
   TAUXREMISE           float(10,2),
   CIN                  varchar(10) not null,
   MATRICULE            varchar(10) not null,
   primary key (NUMLOCATION)
)
 ENGINE=InnoDB;







ALTER TABLE `voiture` ADD `FICHETECHNIQUE` VARCHAR(30) NOT NULL AFTER `COUTPARJOUR`, ADD `PHOTO` VARCHAR(30) NOT NULL AFTER `FICHETECHNIQUE`;




ALTER TABLE LALOCATION
ADD -- CONSTRAINT FK_LALOCATION_VOITURE
FOREIGN KEY (MATRICULE) REFERENCES VOITURE(MATRICULE);



ALTER TABLE LALOCATION
ADD -- CONSTRAINT FK_LALOCATION_CLIENT
FOREIGN KEY (CIN) REFERENCES CLIENT(CIN);


ALTER TABLE PENALISATION
ADD -- CONSTRAINT FK_LALOCATION_PENALISATION
FOREIGN KEY (NUMLOCATION) REFERENCES LALOCATION(NUMLOCATION);


ALTER TABLE PAIEMENT
ADD -- CONSTRAINT FK_LALOCATION_PAIEMENT
FOREIGN KEY (NUMLOCATION) REFERENCES LALOCATION(NUMLOCATION);