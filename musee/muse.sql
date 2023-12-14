DROP DATABASE IF EXISTS Muse;
CREATE DATABASE Muse;
use Muse;
set autocommit=1;
SET SQL_SAFE_UPDATES = 0;
SET default_storage_engine=INNODB;

/*******************************TICKET*******************************/

DROP TABLE IF EXISTS type_ticket;
CREATE TABLE type_ticket 
(
    idticket ENUM('T', 'P', 'D'),
    libelle INT(50),
    CONSTRAINT pk_idticket PRIMARY KEY (idticket)
);
 INSERT INTO type_ticket (idticket, libelle)
 VALUES
  	('P', '6'),
	('T', '8'),
	('D', '15');
    
/*******************************FIN TICKET*******************************/
/*******************************VISITEURS*******************************/

DROP TABLE IF EXISTS visiteurs;
CREATE TABLE visiteurs 
(
	idvisiteurs INT unsigned NOT NULL auto_increment,
	age int(3),
	nom varchar(50),
	prenom varchar(50),
	heure_arrive time,
	heure_depart time,
	_date datetime default current_timestamp on update current_timestamp,
	email varchar(50),
    idticket ENUM ('T', 'P', 'D'),
    constraint pk_visiteurs primary key (idvisiteurs),
    constraint fk_idticketV FOREIGN KEY (idticket) REFERENCES type_ticket (idticket)
);
 INSERT INTO visiteurs (age, nom, prenom, heure_arrive, heure_depart, _date, email, idticket)
 VALUES
	('42', 'jean', 'dupont', '16:30', '18:45', '2022-03-19', 'jeandupont@gmail.com', 'T'),
 	('35', 'rick', 'joe', '14:45', '17:15', '2022-03-26', 'rickjoe@gmail.com', 'T'),
	('42', 'joe', 'ji', '13:30', '16:00', '2022-03-30', 'joeji@gmail.com', 'D');
    select * from visiteurs;
/*******************************FIN VISITEURS*******************************/

select * from visiteurs;