CREATE TABLE user (
	id integer primary key AUTO_INCREMENT,
	username varchar(50) NOT NULL,
	password text NOT NULL
);

CREATE TABLE conference (
	id_conf integer NOT NULL primary key AUTO_INCREMENT,
	nom_conf varchar(50) NOT NULL,
	description text NOT NULL,
	creator integer not null,
	status varchar(50) default "A venir",
	/* A venir En cours ou Passé */
	last_modification_date datetime default now(),
	 d_day datetime,
	foreign key(creator) references user(id) 

/*Ajouter la date ou aura lieu la conference comme champ html*/
);

CREATE TABLE participant (
	id_participant integer NOT NULL  primary key AUTO_INCREMENT,
	nom_participant varchar(50) NOT NULL,
	id_conf_conference integer,
	foreign key (id_conf_conference) references conference(id_conf)



);

CREATE TABLE activite (
	id_activite integer NOT NULL  primary key AUTO_INCREMENT,
	nom_activite varchar(50) NOT NULL,
	description text NOT NULL,
	id_conf_conference integer,
	foreign key (id_conf_conference) references conference(id_conf)
	

);



CREATE TABLE appel (
	id_appel integer NOT NULL primary key AUTO_INCREMENT,
	sujet varchar(50) NOT NULL,
	id_conf_conference integer,
	foreign key (id_conf_conference) references conference(id_conf)

);
-- 
CREATE TABLE publication (
	id_publication integer primary key AUTO_INCREMENT,
	titre varchar(50) NOT NULL,
	contenu text NOT NULL,
	id_conf_conference integer,
	foreign key (id_conf_conference) references conference(id_conf)
);