-- Database generated with pgModeler (PostgreSQL Database Modeler).
-- pgModeler version: 0.9.4
-- PostgreSQL version: 13.0
-- Project Site: pgmodeler.io
-- Model Author: ---

-- Database creation must be performed outside a multi lined SQL file. 
-- These commands were put in this file only as a convenience.
-- 
-- object: "Conference" | type: DATABASE --
-- DROP DATABASE IF EXISTS "Conference";
CREATE DATABASE "Conference";
-- ddl-end --


-- object: public.conference | type: TABLE --
-- DROP TABLE IF EXISTS public.conference CASCADE;
CREATE TABLE public.conference (
	id_conference serial NOT NULL,
	id_partcipant_participant integer,
	id_personne_personne integer,
	id_activite_activite smallint,
	CONSTRAINT conference_pk PRIMARY KEY (id_conference)
);
-- ddl-end --
ALTER TABLE public.conference OWNER TO postgres;
-- ddl-end --

-- object: public.participant | type: TABLE --
-- DROP TABLE IF EXISTS public.participant CASCADE;
CREATE TABLE public.participant (
	id_partcipant integer NOT NULL,
	CONSTRAINT participant_pk PRIMARY KEY (id_partcipant)
);
-- ddl-end --
ALTER TABLE public.participant OWNER TO postgres;
-- ddl-end --

-- object: public.personne | type: TABLE --
-- DROP TABLE IF EXISTS public.personne CASCADE;
CREATE TABLE public.personne (
	id_personne integer NOT NULL,
	CONSTRAINT personne_pk PRIMARY KEY (id_personne)
);
-- ddl-end --
ALTER TABLE public.personne OWNER TO postgres;
-- ddl-end --

-- object: participant_fk | type: CONSTRAINT --
-- ALTER TABLE public.conference DROP CONSTRAINT IF EXISTS participant_fk CASCADE;
ALTER TABLE public.conference ADD CONSTRAINT participant_fk FOREIGN KEY (id_partcipant_participant)
REFERENCES public.participant (id_partcipant) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --

-- object: personne_fk | type: CONSTRAINT --
-- ALTER TABLE public.conference DROP CONSTRAINT IF EXISTS personne_fk CASCADE;
ALTER TABLE public.conference ADD CONSTRAINT personne_fk FOREIGN KEY (id_personne_personne)
REFERENCES public.personne (id_personne) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --

-- object: public.activite | type: TABLE --
-- DROP TABLE IF EXISTS public.activite CASCADE;
CREATE TABLE public.activite (
	id_activite smallint NOT NULL,
	CONSTRAINT activite_pk PRIMARY KEY (id_activite)
);
-- ddl-end --
ALTER TABLE public.activite OWNER TO postgres;
-- ddl-end --

-- object: public.admin | type: TABLE --
-- DROP TABLE IF EXISTS public.admin CASCADE;
CREATE TABLE public.admin (
	id_admin integer NOT NULL,
	CONSTRAINT admin_pk PRIMARY KEY (id_admin)
);
-- ddl-end --
ALTER TABLE public.admin OWNER TO postgres;
-- ddl-end --

-- object: activite_fk | type: CONSTRAINT --
-- ALTER TABLE public.conference DROP CONSTRAINT IF EXISTS activite_fk CASCADE;
ALTER TABLE public.conference ADD CONSTRAINT activite_fk FOREIGN KEY (id_activite_activite)
REFERENCES public.activite (id_activite) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --


