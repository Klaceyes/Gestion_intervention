drop database if exists inter;
create database inter;
use inter;

create table Client (
	idClient int(3) not null auto_increment,
    nom varchar(50),
    adresse varchar(100),
    statut enum('prive', 'public', 'autre'),
    chiffre_affaire float(10, 2),
    primary key(idClient)
);

insert into Client values
    (null, 'EDF', 'rue de paris', 'prive', 5000000),
    (null, 'Atos', 'la defense', 'autre', 6000000),
    (null, 'mairie de paris', 'paris', 'public', 10000);

create table Technicien (
    idTech int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    qualification varchar(50),
    date_entree date,
    primary key(idTech)
);

insert into Technicien values 
    (null, "Wyn", "Swithdas", "Mecanicien", "2015-05-05"),
    (null, "Terni", "Rydic", "Electricien", "2014-04-04"),
    (null, "Beowise", "Ceol", "Soudeur", "2013-03-03");

create table Intervention (
	idInter int(3) not null auto_increment,
	rapport varchar(200),
	dateInter date,
	prix float(8, 2),
	idClient int(3) not null,
	idTech int(3) not null,
	primary key (idInter),
	foreign key (idClient) references Client(idClient),
	foreign key (idTech) references Technicien(idTech)
);

insert into Intervention values
	(null, "ABSSJD Electrique de LLSKS", "2018-10-12", "200", 1, 2),
	(null, "HSHHS Mecanique cassee SQKK", "2018-10-10", "2021", 3, 1);