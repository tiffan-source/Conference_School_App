
CREATE TABLE conference (
	id_conf integer primary key AUTO_INCREMENT,
	nom_conf varchar(50) NOT NULL,
	description text NOT NULL

);

CREATE TABLE participant (
	id_participant integer NOT NULL  primary key AUTO_INCREMENT,
	nom_participant varchar(50) NOT NULL


);

CREATE TABLE activite (
	id_activite integer NOT NULL  primary key AUTO_INCREMENT,
	nom_activite varchar(50) NOT NULL,
	description text NOT NULL,
	id_conf_conference integer,
	foreign key (id_conf_conference) references conference(id_conf)
	

);

CREATE TABLE user (
	id integer NOT NULL  primary key AUTO_INCREMENT,
	username varchar(50) NOT NULL,
	password text NOT NULL
	

);

CREATE TABLE appel (
	id_appel integer NOT NULL primary key AUTO_INCREMENT,
	sujet varchar(50) NOT NULL,
	id_conf_conference integer,
	foreign key (id_conf_conference) references conference(id_conf)

);
-- 
CREATE TABLE publication (
	titre varchar(50) NOT NULL,
	contenu text NOT NULL,
	id_publication integer NOT NULL  primary key AUTO_INCREMENT,
	id_conf_conference integer,
	foreign key (id_conf_conference) references conference(id_conf)

);