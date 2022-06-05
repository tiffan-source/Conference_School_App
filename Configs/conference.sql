
CREATE TABLE conference (
	id_conf integer NOT NULL primary key ,
	nom_conf varchar(50) NOT NULL,
	description text NOT NULL

);

CREATE TABLE participant (
	id_participant integer NOT NULL  primary key ,
	nom_participant varchar(50) NOT NULL


);

CREATE TABLE activite (
	id_activite integer NOT NULL  primary key ,
	nom_activite varchar(50) NOT NULL,
	description text NOT NULL,
	id_conf_conference integer
	
	

);

CREATE TABLE user (
	id integer NOT NULL  primary key ,
	username varchar(50) NOT NULL,
	password text NOT NULL
	

);

CREATE TABLE appel (
	id_appel integer NOT NULL primary key ,
	sujet varchar(50) NOT NULL,
	id_conf_conference integer
	

);
-- 
CREATE TABLE publication (
	titre varchar(50) NOT NULL,
	contenu text NOT NULL,
	id_publication integer NOT NULL  primary key ,
	id_conf_conference integer
	

);

