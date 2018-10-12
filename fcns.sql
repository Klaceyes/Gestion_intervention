drop database if exists fcns;
create database fcns;
	use fcns;

create table employe (
	idemploye int(3) not null auto_increment,
	nom varchar(50),
	prenom varchar(50),
	adresse varchar (50),
	datenaissance date,
	email varchar(50),
	qualification varchar(50),
	primary key (idemploye)
) charset="utf8";

create table evenement (
	idevenement int(3) not null auto_increment,
	idemploye int(3),
	nom varchar(50),
	datedebut date,
	datefin date,
	libelle varchar(50),
	commentaire varchar(50),
	parution date,
	primary key (idevenement),
	foreign key (idemploye) references employe
) charset="utf8";

create table news (
	idnews int(3) not null auto_increment,
	idemploye int(3),
	titre varchar(50),
	contenu varchar (150),
	parution date,
	primary key (idnews),
	foreign key (idemploye) references employe
) charset="utf8";

create table produit (
	idproduit int(3) not null auto_increment,
	idemploye int(3),
	nom varchar(50),
	libelle varchar(50),
	evaluation varchar(50),
	parution date,
	primary key (idproduit),
	foreign key (idemploye) references employe
) charset="utf8";


insert into employe values
 		(null, "Pierre", "Barriere","Rue de Paz","1999-09-10","Pierrebarriere@gmail.com","Agent"),
		(null,"Jeremy","Dauvois","Rue de Saint mont la breteche","1996-10-02","Jeremydauvois@gmail.com","Technicien"), 
		(null,"Alexandre","Barriere","Faubourg Saint Antoine","1998-06-04","alexandrebarriere@gmail.com","Annonceur");

insert into evenement values 
	(null, 1, "Greve","2016-11-11","2016-12-12","Traffic","Greve generale","2016-11-01"),
	(null, 2,"Accident sur voie","2017-08-08","2017-08-08","Traffic","Probleme de traffic jusqu'a 15 heures","2017-08-08"), 
	(null, 2,"Accident passager","2017-02-05","2017-02-05","Passager","Traffic arrete jusqu'a 13 heures","2017-02-05"), 
	(null, 3,"Nouvel an","2017-12-31","2017-12-31","Fete","Fete du nouvel an","2017-12-31");

insert into news values 
	(null, 1, "Soldes", "-75% sur les souvenirs SNCF","2018-02-03"),  
	(null, 3, "Meteo", "Ralentissement sur les lignes a cause des rails geles" ,"2018-05-06");

insert into produit values
	 (null, 1, "T-shirt SNCF", "Promotions", "Au couleur de l'entreprise", "2018-02-11"), 
	 (null, 2, "Voyage offert","Voyage", "Une destination gratuite pour salaries", "2018-05-05");
	

