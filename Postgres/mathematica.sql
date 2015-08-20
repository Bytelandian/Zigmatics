--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: login; Type: TABLE; Schema: public; Owner: zigmaticsuser; Tablespace: 
--

CREATE TABLE login (
    name character varying(100) NOT NULL,
    emailid character varying(100) NOT NULL,
    level integer NOT NULL,
    lastsolve integer NOT NULL
);


ALTER TABLE public.login OWNER TO zigmaticsuser;

--
-- Data for Name: login; Type: TABLE DATA; Schema: public; Owner: zigmaticsuser
--

COPY login (name, emailid, level, lastsolve) FROM stdin;
Mohit Garg	nikhil55591@gmail.com	2	28176706
\.


--
-- Name: login_emailid_key; Type: CONSTRAINT; Schema: public; Owner: zigmaticsuser; Tablespace: 
--

ALTER TABLE ONLY login
    ADD CONSTRAINT login_emailid_key UNIQUE (emailid);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

