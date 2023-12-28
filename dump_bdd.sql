--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.19
-- Dumped by pg_dump version 13.11 (Debian 13.11-0+deb11u1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: seville; Type: SCHEMA; Schema: -; Owner: chamsedine.amouche
--

CREATE SCHEMA seville;


ALTER SCHEMA seville OWNER TO "chamsedine.amouche";

--
-- Name: sha1(text); Type: FUNCTION; Schema: seville; Owner: chamsedine.amouche
--

CREATE FUNCTION seville.sha1(text) RETURNS text
    LANGUAGE plpgsql
    AS $_$
  DECLARE
    input_text text := $1;
    sha1_result text;
  BEGIN
    SELECT encode(digest(input_text, 'sha1'), 'hex') INTO sha1_result;
    RETURN sha1_result;
  END;
  $_$;


ALTER FUNCTION seville.sha1(text) OWNER TO "chamsedine.amouche";

SET default_tablespace = '';

--
-- Name: admin; Type: TABLE; Schema: seville; Owner: chamsedine.amouche
--

CREATE TABLE seville.admin (
    login character varying(50),
    password_hash character varying(100)
);


ALTER TABLE seville.admin OWNER TO "chamsedine.amouche";

--
-- Name: el_arenal; Type: TABLE; Schema: seville; Owner: chamsedine.amouche
--

CREATE TABLE seville.el_arenal (
    id integer NOT NULL,
    type character varying(50),
    texte text,
    language character varying(2)
);


ALTER TABLE seville.el_arenal OWNER TO "chamsedine.amouche";

--
-- Name: el_arenal_id_seq; Type: SEQUENCE; Schema: seville; Owner: chamsedine.amouche
--

CREATE SEQUENCE seville.el_arenal_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE seville.el_arenal_id_seq OWNER TO "chamsedine.amouche";

--
-- Name: el_arenal_id_seq; Type: SEQUENCE OWNED BY; Schema: seville; Owner: chamsedine.amouche
--

ALTER SEQUENCE seville.el_arenal_id_seq OWNED BY seville.el_arenal.id;


--
-- Name: el_centro; Type: TABLE; Schema: seville; Owner: chamsedine.amouche
--

CREATE TABLE seville.el_centro (
    id integer NOT NULL,
    type character varying(50),
    texte text,
    language character varying(2)
);


ALTER TABLE seville.el_centro OWNER TO "chamsedine.amouche";

--
-- Name: el_centro_id_seq; Type: SEQUENCE; Schema: seville; Owner: chamsedine.amouche
--

CREATE SEQUENCE seville.el_centro_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE seville.el_centro_id_seq OWNER TO "chamsedine.amouche";

--
-- Name: el_centro_id_seq; Type: SEQUENCE OWNED BY; Schema: seville; Owner: chamsedine.amouche
--

ALTER SEQUENCE seville.el_centro_id_seq OWNED BY seville.el_centro.id;


--
-- Name: el_porvenir; Type: TABLE; Schema: seville; Owner: chamsedine.amouche
--

CREATE TABLE seville.el_porvenir (
    id integer NOT NULL,
    type character varying(50),
    texte text,
    language character varying(2)
);


ALTER TABLE seville.el_porvenir OWNER TO "chamsedine.amouche";

--
-- Name: el_porvenir_id_seq; Type: SEQUENCE; Schema: seville; Owner: chamsedine.amouche
--

CREATE SEQUENCE seville.el_porvenir_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE seville.el_porvenir_id_seq OWNER TO "chamsedine.amouche";

--
-- Name: el_porvenir_id_seq; Type: SEQUENCE OWNED BY; Schema: seville; Owner: chamsedine.amouche
--

ALTER SEQUENCE seville.el_porvenir_id_seq OWNED BY seville.el_porvenir.id;


--
-- Name: la_cartuja; Type: TABLE; Schema: seville; Owner: chamsedine.amouche
--

CREATE TABLE seville.la_cartuja (
    id integer NOT NULL,
    type character varying(50),
    texte text,
    language character varying(2)
);


ALTER TABLE seville.la_cartuja OWNER TO "chamsedine.amouche";

--
-- Name: la_cartuja_id_seq; Type: SEQUENCE; Schema: seville; Owner: chamsedine.amouche
--

CREATE SEQUENCE seville.la_cartuja_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE seville.la_cartuja_id_seq OWNER TO "chamsedine.amouche";

--
-- Name: la_cartuja_id_seq; Type: SEQUENCE OWNED BY; Schema: seville; Owner: chamsedine.amouche
--

ALTER SEQUENCE seville.la_cartuja_id_seq OWNED BY seville.la_cartuja.id;


--
-- Name: macarena; Type: TABLE; Schema: seville; Owner: chamsedine.amouche
--

CREATE TABLE seville.macarena (
    id integer NOT NULL,
    type character varying(50),
    texte text,
    language character varying(2)
);


ALTER TABLE seville.macarena OWNER TO "chamsedine.amouche";

--
-- Name: macarena_id_seq; Type: SEQUENCE; Schema: seville; Owner: chamsedine.amouche
--

CREATE SEQUENCE seville.macarena_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE seville.macarena_id_seq OWNER TO "chamsedine.amouche";

--
-- Name: macarena_id_seq; Type: SEQUENCE OWNED BY; Schema: seville; Owner: chamsedine.amouche
--

ALTER SEQUENCE seville.macarena_id_seq OWNED BY seville.macarena.id;


--
-- Name: monuments; Type: TABLE; Schema: seville; Owner: chamsedine.amouche
--

CREATE TABLE seville.monuments (
    id integer NOT NULL,
    quartier character varying(255) NOT NULL,
    titre character varying(255) NOT NULL,
    duree integer,
    image character varying(255),
    description text,
    langue character(2),
    distance_marche integer,
    distance_voiture integer,
    monument character varying(255)
);


ALTER TABLE seville.monuments OWNER TO "chamsedine.amouche";

--
-- Name: monuments_id_seq; Type: SEQUENCE; Schema: seville; Owner: chamsedine.amouche
--

CREATE SEQUENCE seville.monuments_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE seville.monuments_id_seq OWNER TO "chamsedine.amouche";

--
-- Name: monuments_id_seq; Type: SEQUENCE OWNED BY; Schema: seville; Owner: chamsedine.amouche
--

ALTER SEQUENCE seville.monuments_id_seq OWNED BY seville.monuments.id;


--
-- Name: nervion; Type: TABLE; Schema: seville; Owner: chamsedine.amouche
--

CREATE TABLE seville.nervion (
    id integer NOT NULL,
    type character varying(50),
    texte text,
    language character varying(2)
);


ALTER TABLE seville.nervion OWNER TO "chamsedine.amouche";

--
-- Name: nervion_id_seq; Type: SEQUENCE; Schema: seville; Owner: chamsedine.amouche
--

CREATE SEQUENCE seville.nervion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE seville.nervion_id_seq OWNER TO "chamsedine.amouche";

--
-- Name: nervion_id_seq; Type: SEQUENCE OWNED BY; Schema: seville; Owner: chamsedine.amouche
--

ALTER SEQUENCE seville.nervion_id_seq OWNED BY seville.nervion.id;


--
-- Name: parcours; Type: TABLE; Schema: seville; Owner: chamsedine.amouche
--

CREATE TABLE seville.parcours (
    titre character varying(255) NOT NULL,
    duree integer,
    image character varying(255),
    description text,
    lienautrepage character varying(255),
    langue character(2),
    quartier character varying(255)
);


ALTER TABLE seville.parcours OWNER TO "chamsedine.amouche";

--
-- Name: patrimoine; Type: TABLE; Schema: seville; Owner: chamsedine.amouche
--

CREATE TABLE seville.patrimoine (
    id integer NOT NULL,
    page character varying(20),
    titre character varying(255),
    chemin_image character varying(255),
    texte text,
    langue character varying(50),
    CONSTRAINT patrimoine_page_check CHECK (((page)::text = ANY (ARRAY[('histoire'::character varying)::text, ('architecture'::character varying)::text, ('patrimoine_naturel'::character varying)::text, ('urbanisme'::character varying)::text])))
);


ALTER TABLE seville.patrimoine OWNER TO "chamsedine.amouche";

--
-- Name: patrimoine_id_seq; Type: SEQUENCE; Schema: seville; Owner: chamsedine.amouche
--

CREATE SEQUENCE seville.patrimoine_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE seville.patrimoine_id_seq OWNER TO "chamsedine.amouche";

--
-- Name: patrimoine_id_seq; Type: SEQUENCE OWNED BY; Schema: seville; Owner: chamsedine.amouche
--

ALTER SEQUENCE seville.patrimoine_id_seq OWNED BY seville.patrimoine.id;


--
-- Name: santa_cruz; Type: TABLE; Schema: seville; Owner: chamsedine.amouche
--

CREATE TABLE seville.santa_cruz (
    id integer NOT NULL,
    type character varying(50),
    texte text,
    language character varying(2)
);


ALTER TABLE seville.santa_cruz OWNER TO "chamsedine.amouche";

--
-- Name: santa_cruz_id_seq; Type: SEQUENCE; Schema: seville; Owner: chamsedine.amouche
--

CREATE SEQUENCE seville.santa_cruz_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE seville.santa_cruz_id_seq OWNER TO "chamsedine.amouche";

--
-- Name: santa_cruz_id_seq; Type: SEQUENCE OWNED BY; Schema: seville; Owner: chamsedine.amouche
--

ALTER SEQUENCE seville.santa_cruz_id_seq OWNED BY seville.santa_cruz.id;


--
-- Name: triana; Type: TABLE; Schema: seville; Owner: chamsedine.amouche
--

CREATE TABLE seville.triana (
    id integer NOT NULL,
    type character varying(50),
    texte text,
    language character varying(2)
);


ALTER TABLE seville.triana OWNER TO "chamsedine.amouche";

--
-- Name: triana_id_seq; Type: SEQUENCE; Schema: seville; Owner: chamsedine.amouche
--

CREATE SEQUENCE seville.triana_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE seville.triana_id_seq OWNER TO "chamsedine.amouche";

--
-- Name: triana_id_seq; Type: SEQUENCE OWNED BY; Schema: seville; Owner: chamsedine.amouche
--

ALTER SEQUENCE seville.triana_id_seq OWNED BY seville.triana.id;


--
-- Name: el_arenal id; Type: DEFAULT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.el_arenal ALTER COLUMN id SET DEFAULT nextval('seville.el_arenal_id_seq'::regclass);


--
-- Name: el_centro id; Type: DEFAULT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.el_centro ALTER COLUMN id SET DEFAULT nextval('seville.el_centro_id_seq'::regclass);


--
-- Name: el_porvenir id; Type: DEFAULT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.el_porvenir ALTER COLUMN id SET DEFAULT nextval('seville.el_porvenir_id_seq'::regclass);


--
-- Name: la_cartuja id; Type: DEFAULT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.la_cartuja ALTER COLUMN id SET DEFAULT nextval('seville.la_cartuja_id_seq'::regclass);


--
-- Name: macarena id; Type: DEFAULT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.macarena ALTER COLUMN id SET DEFAULT nextval('seville.macarena_id_seq'::regclass);


--
-- Name: monuments id; Type: DEFAULT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.monuments ALTER COLUMN id SET DEFAULT nextval('seville.monuments_id_seq'::regclass);


--
-- Name: nervion id; Type: DEFAULT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.nervion ALTER COLUMN id SET DEFAULT nextval('seville.nervion_id_seq'::regclass);


--
-- Name: patrimoine id; Type: DEFAULT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.patrimoine ALTER COLUMN id SET DEFAULT nextval('seville.patrimoine_id_seq'::regclass);


--
-- Name: santa_cruz id; Type: DEFAULT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.santa_cruz ALTER COLUMN id SET DEFAULT nextval('seville.santa_cruz_id_seq'::regclass);


--
-- Name: triana id; Type: DEFAULT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.triana ALTER COLUMN id SET DEFAULT nextval('seville.triana_id_seq'::regclass);


--
-- Data for Name: admin; Type: TABLE DATA; Schema: seville; Owner: chamsedine.amouche
--

COPY seville.admin (login, password_hash) FROM stdin;
Admin	dd6ee5049d042bf91a10eb69a39778f4
\.


--
-- Data for Name: el_arenal; Type: TABLE DATA; Schema: seville; Owner: chamsedine.amouche
--

COPY seville.el_arenal (id, type, texte, language) FROM stdin;
1	avantages	Quartier animé avec de nombreux bars à tapas.	fr
2	avantages	Boutiques et théâtres à proximité.	fr
3	avantages	Situé près du fleuve Guadalquivir.	fr
4	inconvénients	Très fréquenté par les touristes.	fr
5	inconvénients	Peut être bondé, en particulier lors d'événements.	fr
6	image	../Image/ElArenal.jpg	fr
7	texte	El Arenal est un quartier dynamique situé près du fleuve Guadalquivir. Autrefois un quartier portuaire animé, il est aujourd'hui réputé pour sa vie nocturne animée, ses bars à tapas, ses boutiques et ses théâtres. C'est également le point de départ des bateaux de croisière sur le fleuve.	fr
8	texte	El Arenal is a vibrant neighborhood located near the Guadalquivir River. Once a lively port neighborhood, it is now famous for its lively nightlife, tapas bars, shops, and theaters. It is also the starting point for river cruises.	en
9	texte	El Arenal es un barrio vibrante ubicado cerca del río Guadalquivir. Antiguamente un animado barrio portuario, hoy en día es famoso por su animada vida nocturna, bares de tapas, tiendas y teatros. También es el punto de partida para los cruceros fluviales.	es
10	monuments	Le Guadalquivir	\N
11	monuments	Le Théâtre de la Maestranza	\N
12	monuments	Le musée Naval de la Torre del Oro	\N
13	monuments	La Plaza de oros de la Real Maestranza	\N
14	monuments	Tour de l'Or	\N
15	bars_restaurants	Taberna del Alabardero - Calle Zaragoza, 20, 41001 Sevilla	\N
16	bars_restaurants	La Brunilda - Calle Galera, 5, 41002 Sevilla	\N
17	bars_restaurants	Bar Giralda - Calle Mateos Gago, 1, 41004 Sevilla	\N
18	alimentation	Supersol - Calle San Pablo, 9, 41001 Sevilla	\N
19	alimentation	Dia - Calle Bailén, 1, 41001 Sevilla	\N
20	alimentation	Mercadona - Calle San Pablo, 24, 41001 Sevilla	\N
31	avantages	Lively neighborhood with many tapas bars.	en
32	avantages	Animado distrito con numerosos bares de tapas.	es
33	avantages	Stores and theaters nearby.	en
34	avantages	Tiendas y teatros cercanos.	es
35	avantages	Situado cerca del río Guadalquivir.	es
36	inconvénients	Can be crowded, especially during events.	en
37	inconvénients	Puede estar abarrotado, especialmente durante los eventos.	es
38	avantages	Located near the Guadalquivir river.	en
39	inconvénients	Much frequented by tourists.	en
40	inconvénients	Muy frecuentado por turistas.	es
\.


--
-- Data for Name: el_centro; Type: TABLE DATA; Schema: seville; Owner: chamsedine.amouche
--

COPY seville.el_centro (id, type, texte, language) FROM stdin;
1	avantages	Quartier commerçant avec de nombreuses boutiques.	fr
2	avantages	Abondance de restaurants et de bars.	fr
3	avantages	Sites historiques tels que la cathédrale et la Giralda.	fr
4	inconvénients	Affluence touristique importante.	fr
5	inconvénients	Peut être bondé à certains moments.	fr
6	image	../Image/ElCentro.jpg	fr
7	texte	El Centro est le cœur historique et commercial de Séville. Il abrite la célèbre cathédrale de Séville et la Giralda, ainsi que de nombreux magasins, restaurants et bars. Il est animé, vibrant et constitue le point de départ idéal pour explorer la ville.	fr
8	texte	El Centro is the historic and commercial heart of Seville. It is home to the famous Seville Cathedral and the Giralda, as well as numerous shops, restaurants, and bars. It is lively, vibrant, and serves as the ideal starting point to explore the city.	en
9	texte	El Centro es el corazón histórico y comercial de Sevilla. Alberga la famosa Catedral de Sevilla y la Giralda, así como numerosas tiendas, restaurantes y bares. Es animado, vibrante y sirve como punto de partida ideal para explorar la ciudad.	es
10	monuments	Cathédrale de Séville	\N
11	monuments	Alcázar de Séville	\N
12	monuments	Archivo General de Indias	\N
13	monuments	Tour Giralda	\N
14	monuments	Plaza de San Pedro	\N
15	monuments	Plaza de San Francisco	\N
16	monuments	L'Hôtel de Ville	\N
17	monuments	Le Metropol Parasol	\N
18	monuments	Musée du Flamenco	\N
19	monuments	L'Eglise del Salvadar	\N
20	monuments	Le Palais de Lebrija	\N
21	bars_restaurants	El Pinton - Calle Francos, 42, 41004 Sevilla	\N
22	bars_restaurants	La Azotea - Calle Jesús del Gran Poder, 31, 41002 Sevilla	\N
23	bars_restaurants	El Rinconcillo - Calle Gerona, 40, 41003 Sevilla	\N
24	alimentation	El Corte Inglés - Plaza del Duque de la Victoria, 8, 41002 Sevilla	\N
25	alimentation	Mercado de Triana - Calle...	\N
36	avantages	Shopping neighborhood with many boutiques.	en
37	avantages	Zona comercial con numerosas boutiques.	es
38	avantages	An abundance of restaurants and bars.	en
39	avantages	An abundance of restaurants and bars.	es
40	avantages	Historic sites such as the Cathedral and the Giralda.	en
41	avantages	Lugares históricos como la Catedral y la Giralda.	es
42	inconvénients	High tourist numbers.	en
43	inconvénients	Gran afluencia de turistas.	es
44	inconvénients	Can be crowded at times.	en
45	inconvénients	A veces puede estar abarrotado.	es
\.


--
-- Data for Name: el_porvenir; Type: TABLE DATA; Schema: seville; Owner: chamsedine.amouche
--

COPY seville.el_porvenir (id, type, texte, language) FROM stdin;
1	avantages	Quartier résidentiel calme et paisible.	fr
2	avantages	Présence de beaux parcs.	fr
3	avantages	Architecture éclectique du début du XXe siècle.	fr
4	inconvénients	Ambiance moins animée la nuit.	fr
5	inconvénients	Vie nocturne limitée.	fr
6	image	../Image/ElPorvenir.jpg	fr
7	texte	El Porvenir est un quartier résidentiel calme et verdoyant de Séville. Il a été construit pour l'Exposition ibéro-américaine de 1929 et se distingue par son architecture éclectique du début du XXe siècle. Le quartier est réputé pour ses parcs magnifiques, offrant aux résidents et aux visiteurs un espace de détente.	fr
8	texte	El Porvenir is a quiet and green residential neighborhood in Seville. It was built for the Ibero-American Exposition of 1929 and is distinguished by its eclectic early 20th-century architecture. The neighborhood is renowned for its beautiful parks, providing residents and visitors with a space for relaxation.	en
9	texte	El Porvenir es un barrio residencial tranquilo y verde de Sevilla. Fue construido para la Exposición Iberoamericana de 1929 y se distingue por su arquitectura ecléctica de principios del siglo XX. El barrio es famoso por sus hermosos parques, que ofrecen a residentes y visitantes un espacio de relajación.	es
10	monuments	Plaza de Espana	\N
11	monuments	Plaza de America	\N
12	monuments	Musée de arts et coutumes populaires	\N
13	monuments	Parc de María Luisa	\N
14	monuments	Palais de San Telmo	\N
15	monuments	Théâtre Lope de Vega	\N
16	monuments	Musée archéologique	\N
17	bars_restaurants	Bar Antiguo - Calle Cardenal Bueno Monreal, 48, 41013 Sevilla	\N
18	bars_restaurants	Cervecería La Sureña - Av. de la Borbolla, 6, 41004 Sevilla	\N
19	bars_restaurants	Restaurante Eslava - Calle Eslava, 3, 41002 Sevilla	\N
20	alimentation	Mercadona - Av. de la Borbolla, 57, 41013 Sevilla	\N
21	alimentation	Supersol - Av. de la Borbolla, 37, 41013 Sevilla	\N
22	alimentation	Carrefour Market - Calle Luis Montoto, 117, 41007 Sevilla	\N
33	avantages	Quiet, peaceful residential neighborhood.	en
34	avantages	Zona residencial tranquila y apacible.	es
35	avantages	Presence of beautiful parks.	en
36	avantages	Hermosos parques.	es
37	avantages	Eclectic architecture from the early 20th century.	en
38	avantages	Arquitectura ecléctica de principios del siglo XX.	es
39	inconvénients	Less lively at night.	en
40	inconvénients	Menos animado por la noche.	es
41	inconvénients	Limited nightlife.	en
42	inconvénients	Vida nocturna limitada.	es
\.


--
-- Data for Name: la_cartuja; Type: TABLE DATA; Schema: seville; Owner: chamsedine.amouche
--

COPY seville.la_cartuja (id, type, texte, language) FROM stdin;
3	avantages	Attractions touristiques comme Isla Mágica.	fr
5	inconvénients	Ambiance moins animée.	fr
11	monuments	Pont de l'Alamillo	\N
12	monuments	Pavillon d'Espagne Expo '92	\N
13	bars_restaurants	La Raza - Av. Carlos III, s/n, 41092 Sevilla	\N
14	bars_restaurants	Bar El Rincón - Calle Leonardo da Vinci, 6, 41092 Sevilla	\N
16	alimentation	Mercadona - Av. Expo '92, s/n, 41092 Sevilla	\N
39	avantages	Modern and dynamic neighborhood.	en
40	avantages	Un parque científico y tecnológico.	es
41	avantages	Atracciones turísticas como Isla Mágica.	es
42	avantages	Distrito moderno y dinámico.	es
43	inconvénients	Less lively atmosphere.	en
44	inconvénients	Ambiente poco animado.	es
8	texte	La Cartuja is located on the island of the same name, originally a Carthusian monastery founded in the 13th century. Over the years, it has evolved into a modern and dynamic neighborhood, hosting the scientific and technological park of Seville as well as the Isla Mágica theme park.	en
9	texte	La Cartuja se encuentra en la isla del mismo nombre, originalmente un monasterio cartujo fundado en el siglo XIII. Con el tiempo, se ha convertido en un barrio moderno y dinámico, albergando el parque científico y tecnológico de Sevilla, así como el parque temático Isla Mágica.	es
7	texte	La Cartuja est située sur l'île du même nom, à l'origine un monastère chartreux fondé au XIIIe siècle. Au fil des ans, elle a évolué pour devenir un quartier moderne et dynamique, accueillant le parc scientifique et technologique de Séville ainsi que le parc d'attractions Isla Mágica.	fr
26	monuments	Monsatère de la Cartuja	\N
27	monuments		\N
28	monuments		\N
29	monuments		\N
30	monuments		\N
31	monuments		\N
32	bars_restaurants	El Buey - Calle Torneo, 60, 41002 Sevilla	\N
33	alimentation	SuperSol - Calle Arquitectura, 12, 41015 Sevilla	\N
45	inconvénients	Less central than other neighborhoods.	en
46	inconvénients	Menos céntrico que otros distritos.	es
6	image	../Image/LaCartuja.jpg	fr
35	avantages	Quartier Moderne et dynamique.	fr
36	inconvénients	Moins central que d'autres quartiers.	fr
37	avantages	Presence of a science and technology park.	en
38	avantages	Tourist attractions such as Isla Mágica.	en
\.


--
-- Data for Name: macarena; Type: TABLE DATA; Schema: seville; Owner: chamsedine.amouche
--

COPY seville.macarena (id, type, texte, language) FROM stdin;
1	avantages	Quartier authentique avec une ambiance locale.	fr
2	avantages	Magnifique basilique à visiter.	fr
3	avantages	Ruelles pittoresques.	fr
4	inconvénients	Quartier animé avec la présence d'étudiants et de bars.	fr
5	image	../Image/Macarena.jpg	fr
6	texte	Macarena doit son nom à l'imposante basilique de la Macarena, située dans ce quartier. C'est un quartier authentique avec une ambiance locale, célèbre pour ses processions religieuses lors de la Semaine sainte. Ses ruelles pittoresques et son atmosphère traditionnelle en font un lieu apprécié des visiteurs.	fr
7	texte	Macarena gets its name from the impressive Basilica of Macarena, located in this neighborhood. It is an authentic neighborhood with a local atmosphere, famous for its religious processions during Holy Week. Its picturesque streets and traditional atmosphere make it a popular place for visitors.	en
8	texte	Macarena debe su nombre a la imponente Basílica de la Macarena, ubicada en este barrio. Es un barrio auténtico con un ambiente local, famoso por sus procesiones religiosas durante la Semana Santa. Sus pintorescas calles y su ambiente tradicional lo convierten en un lugar popular para los visitantes.	es
9	monuments	Basilique de la Macarena	\N
10	monuments	Murailles de Macarena	\N
11	monuments	Tour des Perdigones	\N
12	monuments	L'Eglise de San Luis	\N
13	monuments	La Alameda de Hércules	\N
14	bars_restaurants	Bodega Santa Cruz - Calle de Rodrigo Caro, 1, 41004 Sevilla	\N
15	bars_restaurants	Casa Paco - Calle Almirante Apodaca, 9, 41003 Sevilla	\N
16	bars_restaurants	El Rinconcillo - Calle Gerona, 40, 41003 Sevilla	\N
17	alimentation	Supermercados MAS - Calle Resolana, 9, 41002 Sevilla	\N
18	alimentation	Dia - Calle Luis de Morales, 1, 41018 Sevilla	\N
19	alimentation	Carrefour Express - Calle Feria, 158, 41002 Sevilla	\N
28	avantages	Authentic neighborhood with local ambiance.	en
29	avantages	Auténtico barrio de ambiente local.	es
30	avantages	A magnificent basilica to visit.	en
31	avantages	Una magnífica basílica para visitar.	es
32	avantages	Calles pintorescas.	es
33	avantages	Picturesque streets.	en
34	inconvénients	Barrio animado con estudiantes y bares.	es
36	inconvénients	Crowded neighborhood with students and bars.	en
\.


--
-- Data for Name: monuments; Type: TABLE DATA; Schema: seville; Owner: chamsedine.amouche
--

COPY seville.monuments (id, quartier, titre, duree, image, description, langue, distance_marche, distance_voiture, monument) FROM stdin;
102	el centro	Quartier de Santa Cruz	30	https://photo620x400.mnstatic.com/cce0e3260cf2715fe0a27ab6120eaacb/le-quartier-de-santa-cruz.jpg?quality=70&format=pjpg	Le quartier de Santa Cruz est l'un des quartiers les plus célèbres et les plus animés de Séville, en Espagne. Il se trouve dans la partie la plus ancienne de la ville, dans le centre historique de Séville. Il est connu pour ses rues étroites et pavées, ses maisons colorées, ses patios fleuris, ses bars et ses restaurants. Il est également célèbre pour ses monuments historiques tels que l'Alcazar et la Giralda. Le quartier est également populaire pour ses nombreux commerces artisanaux et ses boutiques de souvenirs. Il est un lieu de prédilection pour les visiteurs souhaitant découvrir l'authentique vie de Séville.	fr	15	\N	Quartier de Santa Cruz
95	el centro	Catedral de Sevilla	60	https://www.voyageavecnous.fr/wp-content/uploads/2021/04/billets-cathedrale-de-seville.jpg	La Catedral de Sevilla es un monumento religioso situado en el centro histórico de Sevilla, España. Está considerada una de las mayores catedrales góticas del mundo. Se construyó a partir del siglo XIV en el emplazamiento de una antigua mezquita, y se terminó en el siglo XVI. Es conocida por su gran torre de la Giralda, que antaño fue un minarete, por sus suntuosos interiores, por sus capiteles y por sus magníficas vidrieras. También alberga la tumba de Cristóbal Colón. Es un popular lugar de peregrinación y está declarado Patrimonio de la Humanidad por la UNESCO.	es	10	\N	Cathédrale de Séville
97	el centro	La Giralda	30	https://media.istockphoto.com/id/174653704/fr/photo/la-giralda-de-s%C3%A9ville-catedral-aube-%C3%A9clat.jpg?s=612x612&w=0&k=20&c=PiNkNIoX0bEUfGbrr4lkKxAH4yexsD0Ll9t8Z0NhUWc=	The Giralda is a tower located in Seville, Spain, which is an integral part of the Cathedral of Seville. It was built in the 12th century as the minaret of the mosque of Seville, which was on the same site as the current cathedral. It is an emblematic symbol of Seville and is a UNESCO World Heritage Site.	en	5	\N	La Giralda
103	el centro	Neighborhood of Santa Cruz	30	https://photo620x400.mnstatic.com/cce0e3260cf2715fe0a27ab6120eaacb/le-quartier-de-santa-cruz.jpg?quality=70&format=pjpg	The Santa Cruz neighborhood is one of the most famous and lively areas of Seville, Spain. It is located in the oldest part of the city, in the historical center of Seville. It is known for its narrow, cobbled streets, colorful houses, flowered patios, bars and restaurants. It is also famous for its historical monuments such as the Alcazar and the Giralda. The neighborhood is also popular for its many handicrafts and souvenir stores. It is a favorite place for visitors who want to experience the authentic Sevillian life.	en	15	\N	Quartier de Santa Cruz
99	el centro	L'Alcazar de Séville	60	https://www.hashtagvoyage.fr/wp-content/uploads/2019/10/cour-demoiselles-alcazar-seville.jpg	L'Alcazar de Séville est un palais royal situé dans le centre historique de Séville, en Espagne. Il a été construit au 14ème siècle pour les rois chrétiens et a été utilisé comme résidence royale jusqu'au 17ème siècle. Il est connu pour son architecture Mudéjar, un style architectural unique à l'Espagne qui combine des éléments mauresques et chrétiens. Il est également célèbre pour ses jardins luxuriants, ses patios, ses bassins et ses mosaïques. Il est maintenant ouvert au public comme un musée et est inscrit au patrimoine mondial de l'UNESCO.	fr	\N	2	L'Alcazar de Séville
100	el centro	The Alcazar of Seville	60	https://www.hashtagvoyage.fr/wp-content/uploads/2019/10/cour-demoiselles-alcazar-seville.jpg	The Alcazar of Seville is a royal palace located in the historic center of Seville, Spain. It was built in the 14th century for Christian kings and was used as a royal residence until the 17th century. It is known for its Mudéjar architecture, an architectural style unique to Spain that combines Moorish and Christian elements. It is also famous for its lush gardens, patios, pools and mosaics. It is now open to the public as a museum and is a UNESCO World Heritage Site.	en	\N	2	L'Alcazar de Séville
109	el centro	Promenade le long du Guadalquivir	30	https://img.freepik.com/photos-premium/vue-centre-ville-seville-promenade-du-fleuve-guadalquivir-espagne_501530-7958.jpg?w=2000	The Guadalquivir River Walk is a route located along the Guadalquivir River in Seville, Spain. It is a popular place for walks, leisure activities and outdoor activities. It offers a breathtaking view of the city and the main monuments such as the Giralda, the Cathedral of Seville, the Alcazar and the Torre del Oro. It is also a meeting place for locals and visitors, where they can relax, enjoy the views and the local life. It is also popular for water activities, such as river cruises, sailing trips and kayaking excursions. It is a must-see place for visitors to Seville.	en	5	\N	Promenade le long du Guadalquivir
111	el centro	Promenade dans le parc de Murillo	60	https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/d6/5c/25/quiet-garden.jpg?w=1200&h=-1&s=1	Le parc de Murillo est un parc public situé dans le quartier de El Centro à Séville, en Espagne. Il est nommé d'après le peintre espagnol Bartolomé Esteban Murillo. Il est connu pour ses jardins verdoyants, ses allées ombragées, ses fontaines, ses statues et ses bancs pour se reposer. Il est un lieu populaire pour les promenades, les activités de loisirs et les activités de plein air.	fr	10	\N	parc de Murillo
105	el centro	Plaza de España	60	https://visiterseville.fr/images/plaza-de-espana.jpg	La Plaza de España est une place située à Séville, en Espagne. Elle a été construite pour l'Exposition ibéro-américaine de 1929, qui a eu lieu à Séville. Il est connu pour son architecture néoclassique, pour ses canaux, pour ses fontaines, pour ses mosaïques colorées représentant les provinces d'Espagne, pour ses statues et pour ses bancs en forme de demi-lune. La place est un lieu populaire pour les promenades, les photos et les activités de loisirs. Il a également été utilisé comme décor pour des films tels que Star Wars : Episode II - L'Attaque des Clones. Il est un lieu incontournable pour les visiteurs de Séville et est considéré comme l'un des plus beaux exemples d'architecture de la ville.	fr	15	\N	Plaza de España
112	el centro	Walk in the park of Murillo	60	https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/d6/5c/25/quiet-garden.jpg?w=1200&h=-1&s=1	Murillo Park is a public park located in the El Centro district of Seville, Spain. It is named after the Spanish painter Bartolomé Esteban Murillo. It is known for its lush gardens, shaded walkways, fountains, statues and benches for resting. It is a popular place for walks, leisure activities and outdoor activities.	en	10	\N	parc de Murillo
113	el centro	Paseo por el Parque Murillo	60	https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/d6/5c/25/quiet-garden.jpg?w=1200&h=-1&s=1	El Parque Murillo es un parque público situado en el distrito El Centro de Sevilla, España. Debe su nombre al pintor español Bartolomé Esteban Murillo. Es conocido por sus exuberantes jardines, senderos sombreados, fuentes, estatuas y bancos para descansar. Es un lugar popular para pasear, realizar actividades de ocio y actividades al aire libre.	es	10	\N	parc de Murillo
123	el centro	Promenade dans le quartier de El Arenal	30	https://a.travel-assets.com/findyours-php/viewfinder/images/res70/346000/346152-El-Arenal-Seville.jpg	Le quartier d'El Arenal est un quartier historique situé à Séville, en Espagne. Il est célèbre pour ses rues étroites et pavées, ses maisons colorées, ses patios fleuris, ses bars et ses restaurants. Il est également connu pour ses monuments historiques tels que la Torre del Oro, le Musée Naval et le Parc de la Cartuja. Il est un lieu populaire pour les promenades, les activités de loisirs et les activités de plein air. Il est également un lieu de rencontre pour les locaux et les visiteurs, où ils peuvent découvrir la vie de Séville. Il est un lieu incontournable pour les visiteurs de Séville qui cherchent à découvrir l'authentique vie locale et la culture de la ville.	fr	20	\N	Promenade dans le quartier de El Arenal
124	el centro	Walk in the neighborhood of El Arenal	30	https://a.travel-assets.com/findyours-php/viewfinder/images/res70/346000/346152-El-Arenal-Seville.jpg	El Arenal is a historic neighborhood located in Seville, Spain. It is famous for its narrow cobblestone streets, colorful houses, flowered patios, bars and restaurants. It is also known for its historical monuments such as the Torre del Oro, the Museo Naval and the Parc de la Cartuja. It is a popular place for walks, leisure activities and outdoor activities. It is also a meeting place for locals and visitors, where they can discover the life of Seville. It is a must for visitors to Seville who are looking to discover the authentic local life and culture of the city.	en	20	\N	Promenade dans le quartier de El Arenal
125	el centro	Paseo por el barrio de El Arenal	30	https://a.travel-assets.com/findyours-php/viewfinder/images/res70/346000/346152-El-Arenal-Seville.jpg	El Arenal es un barrio histórico de Sevilla, España. Es famosa por sus estrechas calles empedradas, casas de colores, patios floridos, bares y restaurantes. También es conocida por sus monumentos históricos, como la Torre del Oro, el Museo Naval y el Parque de la Cartuja. Es un lugar popular para paseos, actividades de ocio y actividades al aire libre. También es un lugar de encuentro para sevillanos y visitantes, donde pueden experimentar la vida de Sevilla. Es una visita obligada para los visitantes de Sevilla que buscan experimentar la auténtica vida local y la cultura de la ciudad.	es	20	\N	Promenade dans le quartier de El Arenal
126	el centro	Basilique de la Macarena	30	https://www.lepoint2depart.com/wp-content/uploads/2019/04/IMG_5110.jpg	La Basilique de la Macarena est une basilique située à Séville, en Espagne. Il est consacré à la Vierge de la Esperanza Macarena, une statue de la Vierge Marie très vénérée dans la ville. Il est connu pour son architecture néo-gothique, pour ses fresques, pour ses mosaïques, pour ses statues et pour ses vitraux. Il abrite également une crypte où repose la statue de la Vierge. Il est un lieu de pèlerinage populaire pour les fidèles catholiques et est également un lieu de visite pour les touristes qui veulent découvrir la culture religieuse de Séville. Il est également connu pour sa participation à la Semaine Sainte de Séville, célèbre pour ses processions religieuses.	fr	5	\N	Basilique de la Macarena
118	el centro	Commercial streets of Sierpes and Tetuan	60	https://c8.alamy.com/compfr/j2221x/la-rue-sierpes-seville-andalousie-espagne-europe-j2221x.jpg	Beautiful shopping streets for shopping in your free time. It is known for its high-end stores, souvenir stores, restaurants, bars and cafes. It is also famous for its arcades, colorful facades and pedestrian streets. It is a popular place for shopping and leisure activities. It is also a meeting place for locals and visitors, where they can discover the life of Seville. It is a must for visitors to Seville who are looking to discover local life and local products.	en	8	\N	Rues commerçantes de Sierpes et Tetuan
117	el centro	Rues commerçantes de Sierpes et Tetuan	60	https://c8.alamy.com/compfr/j2221x/la-rue-sierpes-seville-andalousie-espagne-europe-j2221x.jpg	Belles rues marchandes pour faire du shopping pendant le temps libre. Elle est connue pour ses magasins haut de gamme, ses boutiques de souvenirs, ses restaurants, ses bars et ses cafés. Elle est également célèbre pour ses arcades, ses façades colorées et ses rues piétonnes. Elle est un lieu populaire pour les achats et les activités de loisirs. Elle est également un lieu de rencontre pour les locaux et les visiteurs, où ils peuvent découvrir la vie de Séville. Elle est un lieu incontournable pour les visiteurs de Séville qui cherchent à découvrir la vie locale et les produits locaux.	fr	8	\N	Rues commerçantes de Sierpes et Tetuan
127	el centro	Basilica of La Macarena	30	https://www.lepoint2depart.com/wp-content/uploads/2019/04/IMG_5110.jpg	The Basilica of La Macarena is a basilica located in Seville, Spain. It is dedicated to the Virgin of the Esperanza Macarena, a statue of the Virgin Mary very venerated in the city. It is known for its neo-Gothic architecture, frescoes, mosaics, statues and stained glass. It also houses a crypt where the statue of the Virgin rests. It is a popular place of pilgrimage for the Catholic faithful and is also a place to visit for tourists who want to discover the religious culture of Seville. It is also known for its participation in the Holy Week of Seville, famous for its religious processions.	en	5	\N	Basilique de la Macarena
128	el centro	Basílica de la Macarena	30	https://www.lepoint2depart.com/wp-content/uploads/2019/04/IMG_5110.jpg	La Basílica de la Macarena es una basílica situada en Sevilla, España. Está dedicado a la Virgen de la Esperanza Macarena, una imagen de la Virgen María muy venerada en la ciudad. Es conocida por su arquitectura neogótica, frescos, mosaicos, estatuas y vidrieras. También alberga una cripta donde descansa la estatua de la Virgen. Es un popular lugar de peregrinación para los fieles católicos y también un lugar de visita para los turistas que desean descubrir la cultura religiosa de Sevilla. También es conocida por su participación en la Semana Santa de Sevilla, famosa por sus procesiones religiosas.	es	5	\N	Basilique de la Macarena
133	El Porvenir	La Giralda	30	https://media.istockphoto.com/id/174653704/fr/photo/la-giralda-de-s%C3%A9ville-catedral-aube-%C3%A9clat.jpg?s=612x612&w=0&k=20&c=PiNkNIoX0bEUfGbrr4lkKxAH4yexsD0Ll9t8Z0NhUWc=	The Giralda is a tower located in Seville, Spain, which is an integral part of the Cathedral of Seville. It was built in the 12th century as the minaret of the mosque of Seville, which was on the same site as the current cathedral. It is an emblematic symbol of Seville and is a UNESCO World Heritage Site.	en	5	\N	La Giralda
149	Triana	Mercado de Triana	30	https://www.destinationbalades.com/wp-content/uploads/2018/03/march%C3%A9-couvert-quartier-du-Triana-%C3%A0-S%C3%A9ville.jpg	El mercado de Triana es un mercado popular situado en el barrio de Triana de Sevilla, España. Es conocido por su cerámica, alfarería, joyería y artesanía. También es famoso por sus productos frescos, como fruta, verdura, pescado y marisco. El mercado es un lugar de encuentro para los trianeros y una visita obligada para los visitantes que deseen descubrir la vida local de Sevilla. Abre todos los días excepto los domingos por la mañana.	es	25	\N	Marché de Triana
134	El Porvenir	La Giralda	30	https://media.istockphoto.com/id/174653704/fr/photo/la-giralda-de-s%C3%A9ville-catedral-aube-%C3%A9clat.jpg?s=612x612&w=0&k=20&c=PiNkNIoX0bEUfGbrr4lkKxAH4yexsD0Ll9t8Z0NhUWc=	La Giralda es una torre de Sevilla, España, que forma parte integrante de la Catedral de Sevilla. Se construyó en el siglo XII como alminar de la mezquita de Sevilla, que se encontraba en el mismo emplazamiento que la actual catedral. Es un símbolo emblemático de Sevilla y está declarado Patrimonio de la Humanidad por la UNESCO.	es	5	\N	La Giralda
129	el centro	Spectacle de Flamenco	60	https://www.voyageavecnous.fr/wp-content/uploads/2021/03/quand-partir-seville.jpg	Il est recommandé de regarder un spectacle de flamenco à Séville car c'est un art traditionnel fortement lié à la culture de la ville, les spectacles sont généralement de haute qualité avec des artistes talentueux, le flamenco est un mélange expressif de danse, de musique et de chant, il est souvent organisé dans des salles historiques, et c'est une occasion de découvrir une partie de la culture locale de Séville.	fr	\N	\N	Spectacle de Flamenco
135	El Porvenir	L'Alcazar de Séville	60	https://www.hashtagvoyage.fr/wp-content/uploads/2019/10/cour-demoiselles-alcazar-seville.jpg	L'Alcazar de Séville est un palais royal situé dans le centre historique de Séville, en Espagne. Il a été construit au 14ème siècle pour les rois chrétiens et a été utilisé comme résidence royale jusqu'au 17ème siècle. Il est connu pour son architecture Mudéjar, un style architectural unique à l'Espagne qui combine des éléments mauresques et chrétiens. Il est également célèbre pour ses jardins luxuriants, ses patios, ses bassins et ses mosaïques. Il est maintenant ouvert au public comme un musée et est inscrit au patrimoine mondial de l'UNESCO.	fr	\N	2	L'Alcazar de Séville
144	Triana	La Torre del Oro	30	https://www.vanupied.com/wp-content/uploads/1024px-Gold_Tower_Guadalquivir_Seville_Tower_Arabic-JaimePF55-1024x683.jpg	La Torre del Oro est un bâtiment historique situé à Séville, en Espagne. Il a été construit au XIIIe siècle pour protéger la ville contre les invasions par la rivière Guadalquivir. Il a également été utilisé comme prison, entrepôt et même comme musée maritime. Il est connu pour sa couleur dorée, qui est censée être due à un revêtement en chaux mélangée avec de la paille dorée. Il est maintenant un musée naval.	fr	13	\N	La Torre del Oro
147	Triana	Marché de Triana	30	https://www.destinationbalades.com/wp-content/uploads/2018/03/march%C3%A9-couvert-quartier-du-Triana-%C3%A0-S%C3%A9ville.jpg	Le marché de Triana est un marché populaire situé dans le quartier de Triana à Séville, en Espagne. Il est connu pour ses céramiques, ses poteries, ses bijoux et ses articles artisanaux. Il est également célèbre pour ses produits frais tels que les fruits, les légumes, les poissons et les fruits de mer. Le marché est un lieu de rencontre pour les habitants de Triana et un lieu incontournable pour les visiteurs souhaitant découvrir la vie locale de Séville. Il est ouvert tous les jours sauf le dimanche matin.	fr	25	\N	Marché de Triana
139	El Porvenir	Neighborhood of Santa Cruz	30	https://photo620x400.mnstatic.com/cce0e3260cf2715fe0a27ab6120eaacb/le-quartier-de-santa-cruz.jpg?quality=70&format=pjpg	The Santa Cruz neighborhood is one of the most famous and lively areas of Seville, Spain. It is located in the oldest part of the city, in the historical center of Seville. It is known for its narrow, cobbled streets, colorful houses, flowered patios, bars and restaurants. It is also famous for its historical monuments such as the Alcazar and the Giralda. The neighborhood is also popular for its many handicrafts and souvenir stores. It is a favorite place for visitors who want to experience the authentic Sevillian life.	en	15	\N	Quartier de Santa Cruz
142	El Porvenir	Plaza de España	60	https://visiterseville.fr/images/plaza-de-espana.jpg	The Plaza de España is a square located in Seville, Spain. It was built for the Ibero-American Exhibition of 1929, which took place in Seville. It is known for its neoclassical architecture, canals, fountains, colorful mosaics depicting the provinces of Spain, statues and half-moon shaped benches. The square is a popular place for walks, photos and leisure activities. It has also been used as a set for movies such as Star Wars: Episode II - Attack of the Clones. It is a must-see for visitors to Seville and is considered one of the most beautiful examples of architecture in the city.	en	\N	\N	Plaza de España
145	Triana	The Torre del Oro	30	https://www.vanupied.com/wp-content/uploads/1024px-Gold_Tower_Guadalquivir_Seville_Tower_Arabic-JaimePF55-1024x683.jpg	The Torre del Oro is a historic building located in Seville, Spain. It was built in the 13th century to protect the city from invasions by the Guadalquivir River. It has also been used as a prison, warehouse and even as a maritime museum. It is known for its golden color, which is supposed to be due to a coating of lime mixed with golden straw. It is now a naval museum.	en	13	\N	La Torre del Oro
148	Triana	Market of Triana	30	https://www.destinationbalades.com/wp-content/uploads/2018/03/march%C3%A9-couvert-quartier-du-Triana-%C3%A0-S%C3%A9ville.jpg	The Triana market is a popular market located in the Triana district of Seville, Spain. It is known for its ceramics, pottery, jewelry and handicrafts. It is also famous for its fresh products such as fruits, vegetables, fish and seafood. The market is a meeting place for the people of Triana and a must for visitors who want to discover the local life of Seville. It is open every day except Sunday morning.	en	25	\N	Marché de Triana
153	Triana	La maison de Pilatos	30	https://www.hotelholos.com/images/easyblog_articles/11/b2ap3_amp_casa-pilatos-sevilla.jpg	La Maison de Pilatos est un bâtiment historique situé à Séville, en Espagne. Il est considéré comme un exemple de l'architecture mauresque et rennaissante de la ville. Il a été construit au début du 16ème siècle par un riche marchand, et est devenu propriété de la famille Pilatos dans les années suivantes. Il est connu pour ses patios luxuriants, ses azulejos, ses fresques et ses jardins. Il est également célèbre pour sa riche collection d'art et d'objets d'antiquités. Il est maintenant ouvert au public comme un musée.	fr	\N	\N	La maison de Pilatos
94	el centro	Cathedral of Seville	60	https://www.voyageavecnous.fr/wp-content/uploads/2021/04/billets-cathedrale-de-seville.jpg	The Cathedral of Seville is a religious monument located in the historic center of Seville, Spain. It is considered one of the largest Gothic cathedrals in the world. It was built from the 14th century on the site of a former mosque, and was completed in the 16th century. It is known for its great Giralda tower, which was once a minaret, for its sumptuous interiors, for its capitals and for its magnificent stained glass windows. It also houses the tomb of Cristobal Colón. It is a popular place of pilgrimage and is a UNESCO World Heritage Site.	en	10	\N	Cathédrale de Séville
151	Triana	Maria Luisa Park	30	https://visiter-seville.fr/wp-content/uploads/2019/06/parc-maria-luisa-seville.jpg	Maria Luisa Park is a public park located in the center of Seville, Spain. It was created for the Ibero-American Exposition of 1929 and was donated to the city by the Infanta Maria Luisa Fernanda, who gave it her name. It is known for its lush gardens, fountains, statues and pavilions. It also houses museums such as the Cartuja Museum and the Archaeological Museum. It is a popular place for walks, picnics and leisure activities. It is also used for cultural events and happenings.	en	\N	5	Parc Maria Luisa
150	Triana	Parc Maria Luisa	30	https://visiter-seville.fr/wp-content/uploads/2019/06/parc-maria-luisa-seville.jpg	Le Parc de Maria Luisa est un parc public situé dans le centre de Séville, en Espagne. Il a été créé pour l'Exposition ibéro-américaine de 1929 et a été donné à la ville par la Infanta Maria Luisa Fernanda, qui lui a donné son nom. Il est connu pour ses jardins luxuriants, ses fontaines, ses statues et ses pavillons. Il abrite également des musées tels que le Musée de la Cartuja et le Musée Archéologique. Il est un lieu populaire pour les promenades, les pique-niques et les activités de loisirs. Il est également utilisé pour des manifestations culturelles et des événements.	fr	\N	5	Parc Maria Luisa
154	Triana	The house of Pilatos	30	https://www.hotelholos.com/images/easyblog_articles/11/b2ap3_amp_casa-pilatos-sevilla.jpg	The House of Pilatos is a historic building located in Seville, Spain. It is considered an example of the Moorish and Renaissance architecture of the city. It was built in the early 16th century by a wealthy merchant, and became owned by the Pilatos family in later years. It is known for its lush patios, azulejos, frescoes and gardens. It is also famous for its rich collection of art and antiques. It is now open to the public as a museum.	en	\N	\N	La maison de Pilatos
115	el centro	Palace of San Telmo	60	https://visiterseville.fr/images/palacio-de-san-telmo.jpg	The San Telmo Palace is a historic building located in Seville, Spain. It was built in the early 17th century to house the Academy of Sciences, Arts and Letters of Seville. It is known for its baroque architecture and lush gardens. It is also famous for its frescoes, azulejos, mosaics and statues. It became the residence of the Bishop of Seville in 1848 and was used as the seat of the regional government of Andalusia.	en	20	\N	Palais de San Telmo
116	el centro	Palacio de San Telmo	60	https://visiterseville.fr/images/palacio-de-san-telmo.jpg	El Palacio de San Telmo es un edificio histórico situado en Sevilla, España. Fue construido a principios del siglo XVII para albergar la Academia de Ciencias, Artes y Letras de Sevilla. Es conocido por su arquitectura barroca y sus exuberantes jardines. También es famosa por sus frescos, azulejos, mosaicos y estatuas. Se convirtió en la residencia del obispo de Sevilla en 1848 y se utilizó como sede del gobierno regional de Andalucía.	es	20	\N	Palais de San Telmo
131	el centro	Espectáculo flamenco	60	https://www.voyageavecnous.fr/wp-content/uploads/2021/03/quand-partir-seville.jpg	Se recomienda asistir a un espectáculo flamenco en Sevilla, ya que se trata de un arte tradicional fuertemente ligado a la cultura de la ciudad, los espectáculos suelen ser de gran calidad con artistas de talento, el flamenco es una expresiva mezcla de baile, música y cante, suele celebrarse en salas históricas, y es una oportunidad para descubrir parte de la cultura local de Sevilla.	es	\N	\N	Spectacle de Flamenco
96	el centro	La Giralda	30	https://media.istockphoto.com/id/174653704/fr/photo/la-giralda-de-s%C3%A9ville-catedral-aube-%C3%A9clat.jpg?s=612x612&w=0&k=20&c=PiNkNIoX0bEUfGbrr4lkKxAH4yexsD0Ll9t8Z0NhUWc=	La Giralda est une tour située à Séville, en Espagne, qui fait partie intégrante de la cathédrale de Séville. Elle a été construite au 12ème siècle comme minaret de la mosquée de Séville, qui se trouvait sur le même emplacement que la cathédrale actuelle. Elle est un symbole emblématique de Séville et est inscrite au patrimoine mondial de l	fr	5	\N	La Giralda
98	el centro	La Giralda	30	https://media.istockphoto.com/id/174653704/fr/photo/la-giralda-de-s%C3%A9ville-catedral-aube-%C3%A9clat.jpg?s=612x612&w=0&k=20&c=PiNkNIoX0bEUfGbrr4lkKxAH4yexsD0Ll9t8Z0NhUWc=	La Giralda es una torre de Sevilla, España, que forma parte integrante de la Catedral de Sevilla. Se construyó en el siglo XII como alminar de la mezquita de Sevilla, que se encontraba en el mismo emplazamiento que la actual catedral. Es un símbolo emblemático de Sevilla y está declarado Patrimonio de la Humanidad por la UNESCO.	es	5	\N	La Giralda
104	el centro	Barrio de Santa Cruz	30	https://photo620x400.mnstatic.com/cce0e3260cf2715fe0a27ab6120eaacb/le-quartier-de-santa-cruz.jpg?quality=70&format=pjpg	El barrio de Santa Cruz es una de las zonas más famosas y animadas de Sevilla, España. Está situado en la parte más antigua de la ciudad, en el centro histórico de Sevilla. Es conocida por sus estrechas calles empedradas, casas de colores, patios floridos, bares y restaurantes. También es famosa por sus monumentos históricos, como el Alcázar y la Giralda. La zona también es popular por sus numerosas tiendas de artesanía y souvenirs. Es uno de los lugares favoritos de los visitantes para experimentar la auténtica vida sevillana.	es	15	\N	Quartier de Santa Cruz
93	el centro	Cathédrale de Séville	60	https://www.voyageavecnous.fr/wp-content/uploads/2021/04/billets-cathedrale-de-seville.jpg	La cathédrale de Séville est un monument religieux situé dans le centre historique de Séville, en Espagne. Il est considéré comme l	fr	10	\N	Cathédrale de Séville
132	El Porvenir	La Giralda	30	https://media.istockphoto.com/id/174653704/fr/photo/la-giralda-de-s%C3%A9ville-catedral-aube-%C3%A9clat.jpg?s=612x612&w=0&k=20&c=PiNkNIoX0bEUfGbrr4lkKxAH4yexsD0Ll9t8Z0NhUWc=	La Giralda est une tour située à Séville, en Espagne, qui fait partie intégrante de la cathédrale de Séville. Elle a été construite au 12ème siècle comme minaret de la mosquée de Séville, qui se trouvait sur le même emplacement que la cathédrale actuelle. Elle est un symbole emblématique de Séville et est inscrite au patrimoine mondial de l	fr	5	\N	La Giralda
106	el centro	Plaza de España	60	https://visiterseville.fr/images/plaza-de-espana.jpg	The Plaza de España is a square located in Seville, Spain. It was built for the Ibero-American Exhibition of 1929, which took place in Seville. It is known for its neoclassical architecture, canals, fountains, colorful mosaics depicting the provinces of Spain, statues and half-moon shaped benches. The square is a popular place for walks, photos and leisure activities. It has also been used as a set for movies such as Star Wars: Episode II - Attack of the Clones. It is a must-see for visitors to Seville and is considered one of the most beautiful examples of architecture in the city.	en	15	\N	Plaza de España
107	el centro	Plaza de España	60	https://visiterseville.fr/images/plaza-de-espana.jpg	La Plaza de España es una plaza situada en Sevilla, España. Se construyó para la Exposición Iberoamericana de 1929, que tuvo lugar en Sevilla. Es conocida por su arquitectura neoclásica, canales, fuentes, coloridos mosaicos que representan las provincias de España, estatuas y bancos en forma de media luna. La plaza es un lugar popular para pasear, hacer fotos y actividades de ocio. También se ha utilizado como plató para películas como Star Wars: Episodio II - El ataque de los clones. Es una visita obligada para los visitantes de Sevilla y está considerado uno de los mejores ejemplos arquitectónicos de la ciudad.	es	15	\N	Plaza de España
114	el centro	Palais de San Telmo	60	https://visiterseville.fr/images/palacio-de-san-telmo.jpg	Le Palais de San Telmo est un bâtiment historique situé à Séville, en Espagne. Il a été construit au début du 17ème siècle pour accueillir l'Académie des Sciences, des Arts et des Belles-Lettres de Séville. Il est connu pour son architecture baroque et pour ses jardins luxuriants. Il est également célèbre pour ses fresques, ses azulejos, ses mosaïques et ses statues. Il est devenu la résidence de l'évêque de Séville en 1848 et a été utilisé comme siège du gouvernement régional de Andalousie.	fr	20	\N	Palais de San Telmo
110	el centro	Promenade le long du Guadalquivir	30	https://img.freepik.com/photos-premium/vue-centre-ville-seville-promenade-du-fleuve-guadalquivir-espagne_501530-7958.jpg?w=2000	El Paseo Fluvial del Guadalquivir es una ruta a lo largo del río Guadalquivir en Sevilla, España. Es un lugar popular para el senderismo, el ocio y las actividades al aire libre. Ofrece magníficas vistas de la ciudad y de los principales monumentos, como la Giralda, la Catedral de Sevilla, el Alcázar y la Torre del Oro. También es un lugar de encuentro para lugareños y visitantes, donde pueden relajarse, disfrutar de las vistas y de la vida local. También es popular por sus actividades acuáticas, como cruceros fluviales, paseos en velero y excursiones en kayak. Es una visita obligada para los visitantes de Sevilla.	es	5	\N	Promenade le long du Guadalquivir
108	el centro	Promenade le long du Guadalquivir	30	https://img.freepik.com/photos-premium/vue-centre-ville-seville-promenade-du-fleuve-guadalquivir-espagne_501530-7958.jpg?w=2000	La promenade le long du Guadalquivir est un parcours situé le long de la rivière Guadalquivir à Séville, en Espagne. Il est un lieu populaire pour les promenades, les activités de loisirs et les activités de plein air. Il offre une vue imprenable sur la ville et sur les principaux monuments tels que la Giralda, la cathédrale de Séville, l'Alcazar et la Torre del Oro. Il est également un lieu de rencontre pour les locaux et les visiteurs, où ils peuvent se détendre, profiter des vues et de la vie locale. Il est également populaire pour les activités nautiques, telles que les croisières sur le fleuve, les sorties en bateau à voile et les excursions en kayak. Il est un lieu incontournable pour les visiteurs de Séville.	fr	5	\N	Promenade le long du Guadalquivir
119	el centro	Las calles comerciales de Sierpes y Tetuán	60	https://c8.alamy.com/compfr/j2221x/la-rue-sierpes-seville-andalousie-espagne-europe-j2221x.jpg	Bonitas calles comerciales para ir de compras en su tiempo libre. Es conocida por sus tiendas de alta gama, tiendas de recuerdos, restaurantes, bares y cafés. También es famosa por sus soportales, sus coloridas fachadas y sus calles peatonales. Es un lugar popular para ir de compras y realizar actividades de ocio. También es un lugar de encuentro para sevillanos y visitantes, donde pueden experimentar la vida de Sevilla. Es una visita obligada para los visitantes de Sevilla que buscan experimentar la vida y los productos locales.	es	8	\N	Rues commerçantes de Sierpes et Tetuan
130	el centro	Flamenco show	60	https://www.voyageavecnous.fr/wp-content/uploads/2021/03/quand-partir-seville.jpg	It is recommended to watch a flamenco show in Seville as it is a traditional art form strongly linked to the culture of the city, the shows are usually of high quality with talented artists, flamenco is an expressive mix of dance, music and singing, it is often held in historical halls, and it is an opportunity to discover a part of the local culture of Seville	en	\N	\N	Spectacle de Flamenco
140	El Porvenir	Barrio de Santa Cruz	30	https://photo620x400.mnstatic.com/cce0e3260cf2715fe0a27ab6120eaacb/le-quartier-de-santa-cruz.jpg?quality=70&format=pjpg	El barrio de Santa Cruz es una de las zonas más famosas y animadas de Sevilla, España. Está situado en la parte más antigua de la ciudad, en el centro histórico de Sevilla. Es conocida por sus estrechas calles empedradas, casas de colores, patios floridos, bares y restaurantes. También es famosa por sus monumentos históricos, como el Alcázar y la Giralda. La zona también es popular por sus numerosas tiendas de artesanía y souvenirs. Es uno de los lugares favoritos de los visitantes para experimentar la autenticidad de la vida sevillana.	es	15	\N	Quartier de Santa Cruz
138	El Porvenir	Quartier de Santa Cruz	30	https://photo620x400.mnstatic.com/cce0e3260cf2715fe0a27ab6120eaacb/le-quartier-de-santa-cruz.jpg?quality=70&format=pjpg	Le quartier de Santa Cruz est l'un des quartiers les plus célèbres et les plus animés de Séville, en Espagne. Il se trouve dans la partie la plus ancienne de la ville, dans le centre historique de Séville. Il est connu pour ses rues étroites et pavées, ses maisons colorées, ses patios fleuris, ses bars et ses restaurants. Il est également célèbre pour ses monuments historiques tels que l'Alcazar et la Giralda. Le quartier est également populaire pour ses nombreux commerces artisanaux et ses boutiques de souvenirs. Il est un lieu de prédilection pour les visiteurs souhaitant découvrir l'authentique vie de Séville.	fr	15	\N	Quartier de Santa Cruz
143	El Porvenir	Plaza de España	60	https://visiterseville.fr/images/plaza-de-espana.jpg	La Plaza de España es una plaza situada en Sevilla, España. Se construyó para la Exposición Iberoamericana de 1929, que tuvo lugar en Sevilla. Es conocida por su arquitectura neoclásica, canales, fuentes, coloridos mosaicos que representan las provincias de España, estatuas y bancos en forma de media luna. La plaza es un lugar popular para pasear, hacer fotos y actividades de ocio. También se ha utilizado como plató para películas como Star Wars: Episodio II - El ataque de los clones. Es una visita obligada para los visitantes de Sevilla y está considerado uno de los mejores ejemplos arquitectónicos de la ciudad.	es	\N	\N	Plaza de España
141	El Porvenir	Plaza de España	60	https://visiterseville.fr/images/plaza-de-espana.jpg	La Plaza de España est une place située à Séville, en Espagne. Elle a été construite pour l'Exposition ibéro-américaine de 1929, qui a eu lieu à Séville. Il est connu pour son architecture néoclassique, pour ses canaux, pour ses fontaines, pour ses mosaïques colorées représentant les provinces d'Espagne, pour ses statues et pour ses bancs en forme de demi-lune. La place est un lieu populaire pour les promenades, les photos et les activités de loisirs. Il a également été utilisé comme décor pour des films tels que Star Wars : Episode II - L'Attaque des Clones. Il est un lieu incontournable pour les visiteurs de Séville et est considéré comme l'un des plus beaux exemples d'architecture de la ville.	fr	\N	\N	Plaza de España
146	Triana	La Torre del Oro	30	https://www.vanupied.com/wp-content/uploads/1024px-Gold_Tower_Guadalquivir_Seville_Tower_Arabic-JaimePF55-1024x683.jpg	La Torre del Oro es un edificio histórico situado en Sevilla, España. Se construyó en el siglo XIII para proteger la ciudad de las invasiones del río Guadalquivir. También se ha utilizado como prisión, almacén e incluso museo marítimo. Es conocida por su color dorado, que se cree que se debe a una capa de cal mezclada con paja dorada. Ahora es un museo naval.	es	13	\N	La Torre del Oro
152	Triana	Parque Maria Luisa	30	https://visiter-seville.fr/wp-content/uploads/2019/06/parc-maria-luisa-seville.jpg	El Parque de María Luisa es un parque público situado en el centro de Sevilla, España. Fue creado para la Exposición Iberoamericana de 1929 y regalado a la ciudad por la Infanta María Luisa Fernanda, que le dio nombre. Es conocido por sus exuberantes jardines, fuentes, estatuas y pabellones. También alberga museos como el Museo de la Cartuja y el Museo Arqueológico. Es un lugar popular para pasear, hacer picnics y actividades de ocio. También se utiliza para actos y eventos culturales.	es	\N	5	Parc Maria Luisa
155	Triana	Casa de Pilatos	30	https://www.hotelholos.com/images/easyblog_articles/11/b2ap3_amp_casa-pilatos-sevilla.jpg	La Casa de Pilatos es un edificio histórico situado en Sevilla, España. Se considera un ejemplo de la arquitectura morisca y renacentista de la ciudad. Fue construida a principios del siglo XVI por un rico comerciante, y pasó a ser propiedad de la familia Pilatos en años posteriores. Es conocido por sus exuberantes patios, azulejos, frescos y jardines. También es famoso por su rica colección de arte y antigüedades. Actualmente está abierto al público como museo.	es	\N	\N	La maison de Pilatos
101	el centro	El Alcázar de Sevilla	60	https://www.hashtagvoyage.fr/wp-content/uploads/2019/10/cour-demoiselles-alcazar-seville.jpg	El Alcázar de Sevilla es un palacio real situado en el centro histórico de Sevilla, España. Se construyó en el siglo XIV para los reyes cristianos y se utilizó como residencia real hasta el siglo XVII. Es conocida por su arquitectura mudéjar, un estilo arquitectónico único en España que combina elementos moriscos y cristianos. También es famoso por sus exuberantes jardines, patios, piscinas y mosaicos. Actualmente está abierto al público como museo y es Patrimonio de la Humanidad de la UNESCO.	es	\N	2	L'Alcazar de Séville
136	El Porvenir	The Alcazar of Seville	60	https://www.hashtagvoyage.fr/wp-content/uploads/2019/10/cour-demoiselles-alcazar-seville.jpg	The Alcazar of Seville is a royal palace located in the historic center of Seville, Spain. It was built in the 14th century for Christian kings and was used as a royal residence until the 17th century. It is known for its Mudéjar architecture, an architectural style unique to Spain that combines Moorish and Christian elements. It is also famous for its lush gardens, patios, pools and mosaics. It is now open to the public as a museum and is a UNESCO World Heritage Site.	en	\N	2	L'Alcazar de Séville
137	El Porvenir	El Alcázar de Sevilla	60	https://www.hashtagvoyage.fr/wp-content/uploads/2019/10/cour-demoiselles-alcazar-seville.jpg	El Alcázar de Sevilla es un palacio real situado en el centro histórico de Sevilla, España. Se construyó en el siglo XIV para los reyes cristianos y se utilizó como residencia real hasta el siglo XVII. Es conocida por su arquitectura mudéjar, un estilo arquitectónico único en España que combina elementos moriscos y cristianos. También es famoso por sus exuberantes jardines, patios, piscinas y mosaicos. Actualmente está abierto al público como museo y es Patrimonio de la Humanidad de la UNESCO.	es	\N	2	L'Alcazar de Séville
\.


--
-- Data for Name: nervion; Type: TABLE DATA; Schema: seville; Owner: chamsedine.amouche
--

COPY seville.nervion (id, type, texte, language) FROM stdin;
1	avantages	Quartier moderne avec de nombreux commerces.	fr
2	avantages	Présence d'un grand centre commercial.	fr
3	avantages	Bonnes liaisons de transport.	fr
4	inconvénients	Atmosphère moins historique que d'autres quartiers.	fr
5	inconvénients	Moins de charme traditionnel.	fr
6	image	../Image/Nervion.jpg	fr
7	texte	Nervion est un quartier moderne de Séville, caractérisé par des bâtiments contemporains, des commerces et un grand centre commercial. Il doit son nom à la rivière Nervion et offre de bonnes liaisons de transport. Bien que moins historique que d'autres quartiers, il offre une atmosphère urbaine dynamique.	fr
8	texte	Nervion is a modern neighborhood in Seville, characterized by contemporary buildings, shops, and a large shopping center. It takes its name from the Nervion River and offers good transportation connections. Although less historic than other neighborhoods, it offers a dynamic urban atmosphere.	en
9	texte	Nervion es un barrio moderno de Sevilla, caracterizado por edificios contemporáneos, tiendas y un gran centro comercial. Debe su nombre al río Nervion y ofrece buenas conexiones de transporte. Aunque menos histórico que otros barrios, ofrece un ambiente urbano dinámico.	es
10	monuments	Stade Ramón Sánchez Pizjuán	\N
11	monuments	Palais des Expositions de Séville	\N
12	monuments	Palais des Congrès de Séville	\N
13	bars_restaurants	El Patio de la Estrella - Calle Cardenal Bueno Monreal, 47, 41013 Sevilla	\N
14	bars_restaurants	Café de Indias - Av. Eduardo Dato, 54, 41005 Sevilla	\N
15	bars_restaurants	Restaurante Eslava - Calle Eslava, 3, 41002 Sevilla	\N
16	alimentation	Mercadona - Calle José Laguillo, 17, 41003 Sevilla	\N
17	alimentation	Dia - Calle Luis Montoto, 152, 41007 Sevilla	\N
18	alimentation	Lidl - Calle Luis Montoto, 124, 41007 Sevilla	\N
19	avantages	Modern neighborhood with numerous shops.	en
20	avantages	Presence of a large shopping center.	en
21	avantages	Good transportation connections.	en
22	inconvénients	Less historical atmosphere compared to other neighborhoods.	en
23	inconvénients	Less traditional charm.	en
24	avantages	Barrio moderno con numerosos comercios.	es
25	inconvénients	Atmósfera menos histórica que en otros barrios.	es
26	inconvénients	Menos encanto tradicional.	es
27	avantages	Gran centro comercial.	es
28	avantages	Buenas conexiones de transporte.	es
\.


--
-- Data for Name: parcours; Type: TABLE DATA; Schema: seville; Owner: chamsedine.amouche
--

COPY seville.parcours (titre, duree, image, description, lienautrepage, langue, quartier) FROM stdin;
Parcours - Quartier de Triana	2	//img.freepik.com/photos-premium/facades-du-quartier-triana-seville-andalousie-espagne_79295-14692.jpg?w=2000	Ce parcours vous emmène à travers les principaux sites culturels et historiques de Triana, y compris le marché de Triana, le parc de Maria Luisa, la maison de Pilatos et la tour del Oro. Chacun de ces sites offre une expérience unique et vous permettra de découvrir les richesses culturelles et architecturales de la région. Vous pourrez également déguster les spécialités locales et profiter des vues sur le Guadalquivir	./page_parcours/triana/infos_triana.php	fr	Triana
Ruta - Quartier de Triana	2	//img.freepik.com/photos-premium/facades-du-quartier-triana-seville-andalousie-espagne_79295-14692.jpg?w=2000	Esta ruta le llevará por los principales lugares de interés cultural e histórico de Triana, como el Mercado de Triana, el Parque de María Luisa, la Casa de Pilatos y la Torre del Oro. Cada uno de estos lugares ofrece una experiencia única que le permitirá descubrir la riqueza cultural y arquitectónica de la región. También podrá degustar especialidades locales y disfrutar de las vistas sobre el Guadalquivir.	./page_parcours/triana/infos_triana.php	es	Triana
Parcours - Quartier El Porvenir	5	https://cf.bstatic.com/xdata/images/hotel/max1024x768/400571502.jpg?k=06daeb8394eb8c0339f4991697e6276cb1b50219def906d2bc200c5db0ff63d7&o=&hp=1	Ce parcours vous emmène à travers les principaux sites culturels et historiques ou magnifique balade de El Porvenir, tel que la visite de: la Cathédrale de Séville, la Giralda, L'alcazar de Séville, une promenade dans le quartier de santa Cruz, la visite de la Plaza de España et une promenade le long du Guadalguivir. Ces balades et monuments vous offrent une bonne vue d'ensemble de la culture et la beauté de ce quartier de Séville	./page_parcours/triana/infos_triana.php	fr	El Porvenir
Ruta - Quartier El Porvenir	5	https://cf.bstatic.com/xdata/images/hotel/max1024x768/400571502.jpg?k=06daeb8394eb8c0339f4991697e6276cb1b50219def906d2bc200c5db0ff63d7&o=&hp=1	Este tour le llevará por los principales lugares de interés cultural e histórico o por un bonito paseo por El Porvenir, como la visita a la Catedral de Sevilla, la Giralda, el Alcázar de Sevilla, un paseo por el barrio de Santa Cruz, una visita a la Plaza de España y un paseo por el Guadalquivir. Estos paseos y monumentos le ofrecen una buena panorámica de la cultura y belleza de esta zona de Sevilla.	./page_parcours/triana/infos_triana.php	es	El Porvenir
Route - Quartier El Centro	8	https://voyageursintrepides.com/wp-content/uploads/2020/06/shutterstock_1306309261.jpg	This route in El Centro which is the district located in the heart of the historic center of Seville. It is the meeting point between the main districts of the city. You can visit: the Cathedral of Seville, the Giralda, the Alcazar of Seville, the Santa Cruz neighborhood, the Plaza de España, the Murillo Park, the San Telmo Palace, visit the shopping streets of Sierpes and Tetuan, the El Arenal neighborhood, the Basilica of La Macarena, attend a Flamenco show These walks and monuments offer you a good overview of the historical culture and architecture and its cultural heritage	./page_parcours/triana/infos_triana.php	en	El Centro
Parcours - Quartier El Centro	8	https://voyageursintrepides.com/wp-content/uploads/2020/06/shutterstock_1306309261.jpg	Ce parcours dans El Centro qui est le quartier situé au coeur du centre historique de Séville. C'est le point de rencontre entre les principaux quartiers de la ville. Vous pouvez visiter : cathédrale de Séville, la giralda, l'Alcazar de Séville, le quartier de Santa Cruz, la Plaza de España le parc de Murillo, le Palais de San Telmo, visiter les rues marchandes de Sierpes et Tetuan, le quartier de El Arenal, la Basilique de la Macarena, Assister à un spectacle de Flamenco Ces balades et monuments vous offres une bonne vue d'ensemble de la culture historique et l'architecture et son patrimoine culturel.	./page_parcours/triana/infos_triana.php	fr	El Centro
Ruta - Quartier El Centro	8	https://voyageursintrepides.com/wp-content/uploads/2020/06/shutterstock_1306309261.jpg	Esta ruta atraviesa El Centro, el barrio situado en el corazón del casco histórico de Sevilla. Es el punto de encuentro entre las principales zonas de la ciudad. Podrá visitar: la Catedral de Sevilla, la Giralda, el Alcázar de Sevilla, el barrio de Santa Cruz, la Plaza de España, el Parque Murillo, el Palacio de San Telmo, visitar las calles comerciales de Sierpes y Tetuán, el barrio de El Arenal, la Basílica de la Macarena, asistir a un espectáculo flamenco Estos paseos y monumentos le ofrecen una buena panorámica de la cultura y arquitectura históricas y de su patrimonio cultural	./page_parcours/triana/infos_triana.php	es	El Centro
Route - Quartier de Triana	2	//img.freepik.com/photos-premium/facades-du-quartier-triana-seville-andalousie-espagne_79295-14692.jpg?w=2000	Ce parcours vous emmène à travers les principaux sites culturels et historiques de Triana, y compris le marché de Triana, le parc de Maria Luisa, la maison de Pilatos et la tour del Oro. Chacun de ces sites offre une expérience unique et vous permettra de découvrir les richesses culturelles et architecturales de la région. Vous pourrez également déguster les spécialités locales et profiter des vues sur le Guadalquivir	./page_parcours/triana/infos_triana.php	en	Triana
Route - Quartier El Porvenir	5	https://cf.bstatic.com/xdata/images/hotel/max1024x768/400571502.jpg?k=06daeb8394eb8c0339f4991697e6276cb1b50219def906d2bc200c5db0ff63d7&o=&hp=1	This tour takes you through the main cultural and historical sites or a beautiful walk in El Porvenir, such as a visit to: the Cathedral of Seville, the Giralda, the Alcázar of Seville, a walk in the Santa Cruz neighborhood, a visit to the Plaza de España and a walk along the Guadalquivir. These walks and monuments offer you a good overview of the culture and beauty of this area of Seville.	./page_parcours/triana/infos_triana.php	en	El Porvenir
\.


--
-- Data for Name: patrimoine; Type: TABLE DATA; Schema: seville; Owner: chamsedine.amouche
--

COPY seville.patrimoine (id, page, titre, chemin_image, texte, langue) FROM stdin;
2	histoire	Pre roman period	https://www.vanupied.com/wp-content/uploads/Anfiteatro_de_las_ruinas_romanas_de_Itálica_Santiponce_Sevilla_España_diego-delso-1024x379.jpg	The history of Seville dates back to pre-Roman times, when the Tartesians, the people pre-Phoenician who flourished in the area, settled here. The Romans arrived in the 2nd century BC. He founded there city of Hispalis, with walls, aqueducts, baths and other civil engineering structures. Under the reign of Emperor Augustus, Hispalis became the capital of the Roman province of Betica.	en
3	histoire	Periodo pre romano	https://www.vanupied.com/wp-content/uploads/Anfiteatro_de_las_ruinas_romanas_de_Itálica_Santiponce_Sevilla_España_diego-delso-1024x379.jpg	La historia de Sevilla se remonta a la época prerromana, cuando los tartesios, el pueblo prefenicio OMS floreció en la zona, se asentó aquí. Los romanos llegaron en el siglo II a. Él ha fundado allá ciudad de Hispalis, con murallas, acueductos, termas y otras obras de ingeniería civil. Bajo el Bajo el reinado del emperador Augusto, Hispalis se convirtió en la capital de la provincia romana de Bética.	es
4	histoire	Conquête Wisigoth	https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/El_rey_Don_Rodrigo_arengando_a_sus_tropas_en_la_batalla_de_Guadalete_%28Museo_del_Prado%29.jpg/330px-El_rey_Don_Rodrigo_arengando_a_sus_tropas_en_la_batalla_de_Guadalete_%28Museo_del_Prado%29.jpg	Au cours de son histoire, Séville a été conquise à plusieurs reprises par différents groupes. Les premiers à la conquérir furent les Wisigoths en 409, qui régnèrent sur la ville pendant près de trois siècles. Les Wisigoths ont apporté leur propre culture et architecture à la ville, mais ont également adopté certaines des traditions et coutumes romaines des habitants de la ville.	fr
5	histoire	Wisigoth conquest	https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/El_rey_Don_Rodrigo_arengando_a_sus_tropas_en_la_batalla_de_Guadalete_%28Museo_del_Prado%29.jpg/330px-El_rey_Don_Rodrigo_arengando_a_sus_tropas_en_la_batalla_de_Guadalete_%28Museo_del_Prado%29.jpg	Throughout its history, Seville has been conquered several times by different groups. THE first to conquer it were the Visigoths in 409, who reigned over the city for nearly three centuries. THE Visigoths brought their own culture and architecture to the city, but also adopted some of the Roman traditions and customs of the inhabitants of the city.	en
6	histoire	Conquista Wisigoth	https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/El_rey_Don_Rodrigo_arengando_a_sus_tropas_en_la_batalla_de_Guadalete_%28Museo_del_Prado%29.jpg/330px-El_rey_Don_Rodrigo_arengando_a_sus_tropas_en_la_batalla_de_Guadalete_%28Museo_del_Prado%29.jpg	A lo largo de su historia, Sevilla ha sido conquistada varias veces por diferentes grupos. EL primero conquistarla fueron los visigodos en el año 409, que reinaron sobre la ciudad durante casi tres siglos. EL Los visigodos trajeron su propia cultura y arquitectura a la ciudad, pero también adoptaron alguno de las tradiciones y costumbres romanas de los habitantes de la ciudad.	es
7	histoire	Conquête Arabe	https://cdn.futura-sciences.com/sources/images/lAlcazar%20de%20S%C3%A9ville.jpg	Au début du XIIIème siècle, les Arabes ont conquis Séville et rebaptisé la ville Ishberia. Les Arabes ont régné sur la ville pendant près de 500 ans et l'ont radicalement changée. Ils ont construit des structures telles que l'Alcazar, qui existe encore aujourd'hui, et ont introduit des innovations technologiques telles que l'irrigation par canaux. Sous leur règne, Séville est devenue un centre culturel et intellectuel florissant.	fr
8	histoire	Arab conquest	https://cdn.futura-sciences.com/sources/images/lAlcazar%20de%20S%C3%A9ville.jpg	At the beginning of the 13th century, the Arabs conquered Seville and renamed the city Ishberia. THE Arabs have ruled the city for nearly 500 years and changed it dramatically. They built structures such as the Alcazar, which still exists today, and introduced technological innovations such as canal irrigation. Under their rule, Seville became a center of culture and flourishing intellectual.	en
9	histoire	Conquista arabica	https://cdn.futura-sciences.com/sources/images/lAlcazar%20de%20S%C3%A9ville.jpg	A principios del siglo XIII, los árabes conquistaron Sevilla y rebautizaron la ciudad como Ishberia. EL árabes tienen gobernó la ciudad durante casi 500 años y la cambió drásticamente. Ellos construyeron estructuras como el Alcázar, que todavía existe, e introdujo innovaciones tecnológico como el riego por canal. Bajo su dominio, Sevilla se convirtió en un centro de cultura y intelectual floreciente.	es
11	histoire	Christian Conquest	https://www.visitarsevilla.info/images2/cabildocatedral.jpg	In the 13th century the Christians began to reconquer Spain and Seville fell to them. 1248. The Christians retained most of the architecture and traditions of the Arabs, but also brought their own culture and religion. Cultural integration has made Seville a place of peaceful coexistence between different communities, despite the wars between different Christian kingdoms provoking tensions.	en
12	histoire	Conquista cristiana	https://www.visitarsevilla.info/images2/cabildocatedral.jpg	En el siglo XIII los cristianos comenzaron a reconquistar España y Sevilla cayó ante ellos. 1248. Los cristianos conservaron la mayor parte de la arquitectura y las tradiciones de los árabes, pero también trajeron su propia cultura y religión. La integración cultural ha hecho de Sevilla un lugar de coexistencia pacífica entre diferentes comunidades, a pesar de las guerras entre diferentes reinos cristianos provocador tensiones.	es
13	histoire	Essor Commercial	https://resources.manuelnumeriquemax.belin.education/03580212_hist2/03580212_hist2_ch03/Images/03580212_hist2_ch03-105-i0005.jpg	Au XVe siècle, Séville devient le principal port d'Espagne grâce à sa position stratégique sur le fleuve Guadalquivir. Les marchands de Séville ont joué un rôle important dans l'expansion maritime de l'Espagne, ont participé aux expéditions de Christophe Colomb et ont établi des liens commerciaux avec l'Amérique. Les richesses rapportées de ces expéditions ont permis à la ville de se développer économiquement et culturellement. Des bâtiments importants tels que la cathédrale et l'Alcazar ont été construits ou rénovés à cette époque.	fr
10	histoire	Conquête Chrétienne	https://www.visitarsevilla.info/images2/cabildocatedral.jpg	Au XIIIe siècle, les chrétiens commencèrent à reconquérir l'Espagne et Séville leur tomba en 1248. Les chrétiens ont conservé la plupart de l'architecture et des traditions des Arabes, mais ont également apporté leur propre culture et religion. L'intégration culturelle a fait de Séville un lieu de coexistence pacifique entre différentes communautés, malgré les guerres entre différents royaumes chrétiens provoquant des tensions.	fr
27	architecture	Metropol Parasol	https://visiter-seville.fr/wp-content/uploads/2019/04/Metropol-Parasol-Seville-1024x688.jpg	A la Sevilla romana se accede desde uno de los edificios más modernos de la ciudad: el Metropol Parasol. El Antiquarium, el yacimiento arqueológico más importante de este periodo, conserva mosaicos de la Casa Romana, la Casa de la Ninfa y la Casa de Baco, así como un fresco de tres metros en el Ocean Court y el Dolphin Hospitium. En esta zona también hay restos de la época árabe-andalusí, que conserva una casa islámica almohade.	es
14	histoire	Business development	https://resources.manuelnumeriquemax.belin.education/03580212_hist2/03580212_hist2_ch03/Images/03580212_hist2_ch03-105-i0005.jpg	In the 15th century, Seville became the main port of Spain thanks to its strategic position on the river Guadalquivir. The merchants of Seville played an important role in the maritime expansion of Spain, took part in the expeditions of Christopher Columbus and established trade links with America. The wealth brought back from these expeditions allowed the city to develop economically and culturally. Important buildings such as the Cathedral and the Alcazar were built or renovated at that time.	en
15	histoire	Desarrollo de negocios	https://resources.manuelnumeriquemax.belin.education/03580212_hist2/03580212_hist2_ch03/Images/03580212_hist2_ch03-105-i0005.jpg	En el siglo XV, Sevilla se convirtió en el principal puerto de España gracias a su posición estratégica en el río Guadalquivir. Los mercaderes de Sevilla jugaron un papel importante en la expansión marítima de España, participó en las expediciones de Cristóbal Colón y estableció vínculos comerciales con América. La riqueza traída de estas expediciones permitió que la ciudad se desarrollara económicamente y culturalmente. Se construyeron importantes edificios como la Catedral y el Alcázar o renovado en aquella época.	es
16	histoire	Les Archives générales	https://sejour-seville.fr/wp-content/uploads/2020/01/general-des-indes-seville.jpg	Au XVIe siècle, Séville connaît une période de déclin économique, due à la concurrence des ports américains et à la crise économique provoquée par l'Inquisition. Cependant, la ville a conservé sa richesse culturelle, de nombreux artistes et écrivains importants ont vécu et créé à Séville.	fr
17	histoire	General archives	https://sejour-seville.fr/wp-content/uploads/2020/01/general-des-indes-seville.jpg	In the 16th century, Seville experienced a period of economic decline, due to competition from the ports Americans and the economic crisis caused by the Inquisition. However, the city retained her cultural richness, many important artists and writers have lived and created in Seville.	en
18	histoire	El archvo general	https://sejour-seville.fr/wp-content/uploads/2020/01/general-des-indes-seville.jpg	En el siglo XVI, Sevilla vive un período de declive económico, debido a la competencia de los puertos estadounidenses y la crisis económica provocada por la Inquisición. Sin embargo, la ciudad retuvo su riqueza cultural, muchos artistas y escritores importantes han vivido y creado en Sevilla.	es
19	architecture	Le régionalisme	https://thumbs.dreamstime.com/b/l-espagne-c%C3%A9l%C3%A8bre-square-plaza-de-espana-s%C3%A9ville-spainbuilt-le-la-renaissance-m%C3%A9lange-d-architecture-r%C3%A9gionalisme-et-styles-171048560.jpg	Le régionalisme développe un regard vers le passé, une réinterprétation des styles historiques de l'architecture de Séville. Le mudéjar devient néo-mudéjar, le baroque devient néo-baroque, le gothique devient néo-gothique... la Séville historique grandit avec la Séville historiciste. Et tout cela grâce au talent d'un petit groupe d'architectes, parmi lesquels se distingue la figure d'Aníbal González.	fr
20	architecture	The regionalism	https://thumbs.dreamstime.com/b/l-espagne-c%C3%A9l%C3%A8bre-square-plaza-de-espana-s%C3%A9ville-spainbuilt-le-la-renaissance-m%C3%A9lange-d-architecture-r%C3%A9gionalisme-et-styles-171048560.jpg	Regionalism develops a look towards the past, a reinterpretation of historical styles of architecture of Seville. The Mudejar becomes neo-Mudejar, the Baroque becomes neo-Baroque, the Gothic becomes neo-gothic... Historic Seville grows with historicist Seville. And all this thanks to the talent of a small group of architects, among whom stands out the figure Aníbal González.	en
21	architecture	Il regionalismo	https://thumbs.dreamstime.com/b/l-espagne-c%C3%A9l%C3%A8bre-square-plaza-de-espana-s%C3%A9ville-spainbuilt-le-la-renaissance-m%C3%A9lange-d-architecture-r%C3%A9gionalisme-et-styles-171048560.jpg	El regionalismo desarrolla una mirada al pasado, una reinterpretación de los estilos históricos de arquitectura de Sevilla. El mudéjar se convierte en neomudéjar, el barroco en neobarroco, el gótico en neogótico... La Sevilla histórica crece con la Sevilla historicista. Y todo ello gracias al talento de un pequeño grupo de arquitectos, entre los que destaca el Figura Destaca Aníbal González.	es
22	architecture	Architecture mudéjare	https://upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Alcazar_de_S%C3%A9ville_-_Patio_de_la_Doncellas.JPG/1200px-Alcazar_de_S%C3%A9ville_-_Patio_de_la_Doncellas.JPG	L'architecture mudéjare est une architecture qui s'est développée dans la péninsule ibérique du XIIe siècle au XVIe siècle dans les régions conquises par les royaumes chrétiens et qui résulte de l'application aux édifices chrétiens (ou juifs) d'influences, de techniques et de matériaux musulmans	fr
23	architecture	Mudejar architecture	https://upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Alcazar_de_S%C3%A9ville_-_Patio_de_la_Doncellas.JPG/1200px-Alcazar_de_S%C3%A9ville_-_Patio_de_la_Doncellas.JPG	Mudejar architecture is an architecture that developed in the Iberian Peninsula from the 12th century to the 16th century in the regions conquered by the Christian kingdoms and which results from the application to buildings Christian buildings (or Jewish) buildings of influences, of Muslim influences, techniques and materials	en
24	architecture	Arquitectura mudéjar	https://upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Alcazar_de_S%C3%A9ville_-_Patio_de_la_Doncellas.JPG/1200px-Alcazar_de_S%C3%A9ville_-_Patio_de_la_Doncellas.JPG	La arquitectura mudéjar es una arquitectura que se desarrolló en la Península Ibérica a partir del Siglo XII hasta el siglo XVI en las regiones conquistadas por los reinos cristianos y que resultó de la aplicación a edificios Edificios cristianos (o judíos) de influencias musulmanas, influencias, técnicas y materiales a los edificios cristianos (o judíos)	es
25	architecture	Metropol Parasol	https://visiter-seville.fr/wp-content/uploads/2019/04/Metropol-Parasol-Seville-1024x688.jpg	On accède à la Séville romaine à partir d’un des bâtiments les plus modernes de la ville : le Metropol Parasol. L’Antiquarium, le gisement archéologique le plus important de cette période, conserve des mosaïques de la Maison Romaine, la Maison de la Nymphe et la Maison de Bacchus, ainsi qu’une fresque de trois mètres dans la Cour de l’Océan et l’Hospitium des Dauphins. Des vestiges de l´époque arabo-andalouse sont également présents dans cet espace, qui conserve une maison islamique almohade.	fr
26	architecture	Metropol Parasol	https://visiter-seville.fr/wp-content/uploads/2019/04/Metropol-Parasol-Seville-1024x688.jpg	The Roman Seville is accessed from one of the most modern buildings in the city: the Metropol Parasol. The Antiquarium, the most important archaeological site of this period, preserves mosaics of the Roman House, the House of the Nymph and the House of Bacchus, as well as a three-meter fresco in the Court of the Ocean and the Hospitium of the Dolphins. Remains of the Arab-Andalusian period are also present in this space, which preserves an Islamic Almohad house.	en
28	architecture	Les Archives générales	https://sejour-seville.fr/wp-content/uploads/2020/01/general-des-indes-seville.jpg	Les Archives générales des Indes sont nées en 1785 de la volonté de Charles III d'Espagne de centraliser en un lieu unique les documents relatifs aux colonies espagnoles, sans doute avec l'arrière-pensée de favoriser l'écriture d'une histoire de la colonisation qui contredise la légende noire répandue à ce sujet dans plusieurs pays européens, par exemple en France avec l'Histoire des deux Indes de l'abbé Raynal. Ces fonds étaient auparavant répartis entre les Archives générales de Simancas, proches de la saturation, Cadix et Séville. José de Galvez y Gallardo, secrétaire des Indes, fut chargé de mener à bien le projet, avec l'aide de l'historien Juan Bautista Muñoz, premier cosmographe des Indes.	fr
29	architecture	General archives	https://sejour-seville.fr/wp-content/uploads/2020/01/general-des-indes-seville.jpg	The General Archives of the Indies were born in 1785 from the will of Charles III of Spain to centralize in a unique place the documents related to the Spanish colonies, probably with the ulterior motive of encouraging the writing of a history of colonization that contradicts the black legend spread on this subject in several European countries, for example in France with the History of two Indies by Abbé Raynal. These funds were previously distributed among the General Archives of Simancas, close to saturation, Cadiz and Seville. José de Galvez y Gallardo, secretary of the Indies, was in charge of the project, with the help of the historian Juan Bautista Muñoz, first cosmographer of the Indies.	en
30	architecture	El archivo general	https://sejour-seville.fr/wp-content/uploads/2020/01/general-des-indes-seville.jpg	El Archivo General de Indias fue creado en 1785 por Carlos III de España centralizar en un solo lugar los documentos relativos a las colonias españolas, sin duda con la el motivo oculto de fomentar la redacción de una historia de la colonización que contradice la leyenda negra en varios países europeos, por ejemplo en Francia con la Histoire des dos Indias por abate Raynal. Estos fondos estaban previamente distribuidos en el Archivo General de Simancas, cerca de la saturación, Cádiz y Sevilla. José de Galvez y Gallardo, Secretario de Indias, fue el encargado de llevar a cabo el proyecto, con la ayuda del historiador Juan Bautista Muñoz, el primer cosmógrafo de las Indias.	es
31	patrimoine_naturel	La giralda	https://espagnefascinante.fr/wp-content/uploads/giralda_1.jpg	La Giralda est l'ancien minaret de la grande mosquée almohade de Séville, en Andalousie. Après la reconquête de la ville, la mosquée a été convertie en cathédrale et la Giralda est devenue le clocher de la cathédrale.	fr
32	patrimoine_naturel	La giralda	https://espagnefascinante.fr/wp-content/uploads/giralda_1.jpg	The Giralda is the former minaret of the great Almohad mosque in Seville, Andalusia. After the reconquest of the city, the mosque was converted into cathedral and the Giralda became the bell tower of the cathedral.	en
33	patrimoine_naturel	La giralda	https://espagnefascinante.fr/wp-content/uploads/giralda_1.jpg	La Giralda es el antiguo alminar de la gran mezquita almohade de Sevilla, Andalucía. Tras la reconquista de la ciudad, la mezquita fue convertida en catedral y la Giralda se convirtió en el campanario de la catedral.	es
34	patrimoine_naturel	L'alcazar	https://upload.wikimedia.org/wikipedia/commons/c/cf/Patio_de_la_Monter%C3%ADa%2C_01.jpg	L'alcazar de Séville est un palais fortifié construit à Séville par les Omeyyades d'Espagne et modifié à plusieurs reprises pendant et après la période musulmane. Il est considéré comme l'exemple le plus brillant de l'architecture mudéjar sur la péninsule Ibérique. Construit sur un ancien site romain, puis wisigoth, par les Omeyyades d'Espagne à partir de 844 sous le règne de l'émir Abd al-Rahman II, l'alcazar fut modifié à plusieurs reprises durant la période musulmane, notamment sous les Almohades. Au XIIIe siècle, Alphonse X entreprit la construction d'un premier palais, de style gothique sur le site de l'alcazar musulman. Au siècle suivant, Pierre Ier, à la suite du tremblement de terre de 1356 qui détruisit une grande partie de Séville, y ajouta un splendide palais de style mudéjar. L'ensemble, qui ne conserve que peu de vestiges de l'époque d'al-Andalus, fut modifié une nouvelle fois par Charles Quint au xvie siècle.	fr
35	patrimoine_naturel	The alcazar	https://upload.wikimedia.org/wikipedia/commons/c/cf/Patio_de_la_Monter%C3%ADa%2C_01.jpg	The Alcazar of Seville is a fortified palace built in Seville by the Umayyads of Spain and modified several times during and after the Muslim period. It is considered the most brilliant example of Mudejar architecture on the Iberian Peninsula. Built on an ancient Roman site, then Visigoth, by the Umayyads of Spain from 844 under the reign of the emir Abd al-Rahman II, the alcazar was modified several times during the Muslim period, notably under the Almohads. In the 13th century, Alfonso X undertook the construction of a first palace, in the Gothic style on the site of the Muslim alcazar. In the following century, Peter I, following the earthquake of 1356 which destroyed a large part of Seville, added to it a splendid palace in the Mudejar style. All, which retains few vestiges of the time of al-Andalus, was edited again by Charles Quint in the sixteenth century.	en
36	patrimoine_naturel	El alcazar	https://upload.wikimedia.org/wikipedia/commons/c/cf/Patio_de_la_Monter%C3%ADa%2C_01.jpg	El Alcázar de Sevilla es un palacio fortificado construido en Sevilla por el Omeyas de España y modificado varias veces durante y después del período musulmán. Es considerado el ejemplo más brillante de la arquitectura mudéjar en la Península Ibérica. Construido sobre un antiguo emplazamiento romano, luego visigodo, por los omeyas de España desde 844 bajo el reinado del emir Abd al-Rahman II, el alcázar fue modificado varias veces durante el período musulmán, notablemente bajo los almohades. En el siglo XIII, Alfonso X emprende la construcción de un primer palacio, al estilo gótico sobre el solar del alcázar musulmán. En el siglo siguiente, Pedro Yo, tras el terremoto de tierra de 1356 que destruyó gran parte de Sevilla, le añadió una espléndido palacio de estilo mudéjar. Todo, que conserva pocos vestigios de la época de al-Andalus, fue editado de nuevo por Charles Quinta en el siglo dieciseis.	es
61	urbanisme	Le quartier de La Macarena	https://upload.wikimedia.org/wikipedia/commons/e/e5/Puerta_de_la_Macarena_%281%29.jpg	Ce quartier traditionnel est réputé pour son urbanisme qui mêle habilement l'ancien et le nouveau. Les ruelles sinueuses, les places charmantes et les patios fleuris témoignent de l'urbanisme andalou typique, tandis que les rénovations récentes ont apporté une touche de modernité. Le mélange d'architecture traditionnelle et contemporaine crée une ambiance unique et offre un aperçu fascinant de l'évolution de l'urbanisme à Séville.	fr
37	patrimoine_naturel	Parc María Luisa	https://visiterseville.fr/images/pabellon-mudejar-sevilla.jpg	Le parc de María Luisa est l'un des parcs les plus grands de Séville (Andalousie, Espagne). Il se trouve dans le district Sud, juste au sud du quartier de Santa Cruz. Il est longé à l'est par l'avenue de Borbolla, au sud par l'avenue de Eritaña, à l'ouest par la darse du Guadalquivir et le paseo de las Delicias (qui traverse le parc dans sa partie méridionale). Au nord, ses limites sont moins nettes. Elles sont données par la Place d'Espagne, l'Université de Séville et la rue San Fernando.	fr
38	patrimoine_naturel	María Luisa Park	https://visiterseville.fr/images/pabellon-mudejar-sevilla.jpg	María Luisa Park is one of the largest parks in Seville (Andalusia, Spain). It is in the South district, just south of the Santa district. Cruz. It is bordered to the east by the avenue de Borbolla, to the south by the avenue de Eritana, to the west by the Guadalquivir basin and the paseo de las Delicias (which crosses the park in its southern part). To the north, its boundaries are less clear. They are given by the Place from Spain, the University of Seville and San Fernando Street.	en
39	patrimoine_naturel	Parque María Luisa	https://visiterseville.fr/images/pabellon-mudejar-sevilla.jpg	El Parque de María Luisa es uno de los parques más grandes de Sevilla (Andalucía, España). Está en el distrito Sur, justo al sur del distrito de Santa. Cruz. Limita al este con la avenida de Borbolla, al sur con la avenida de Eritana, al oeste por la cuenca del Guadalquivir y el paseo de las Delicias (que atraviesa el parque en su parte sur). Al norte, sus límites son menos claros. Son dados por el Lugar de España, la Universidad de Sevilla y la calle San Fernando.	es
40	patrimoine_naturel	Plaza de España	https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/12/e8/20/photo3jpg.jpg?w=1200&h=1200&s=1	La grandiose Plaza de España est la place la plus connue de Séville. Dans et autour du Parc Maria-Luisa, divers bâtiments furent créés pour l'Exposition ibéro-américaine. Ainsi, Aníbal González conçut cette place espagnole en style Renaissance avec un diamètre de 200 mètres. Pour l'Espagne, l'objectif de cette exposition était de faire la paix, de manière symbolique, avec ses anciennes colonies américaines.	fr
41	patrimoine_naturel	Plaza de España	https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/12/e8/20/photo3jpg.jpg?w=1200&h=1200&s=1	The grandiose Plaza de España is the most famous square in Seville. In and around Maria-Luisa Park, various buildings were created for the Ibero-American Exposition. Thus, Aníbal González designed this Spanish square in Renaissance style with a diameter of 200 meters. For Spain, the objective of this exhibition was to symbolically make peace with its former American colonies.	en
42	patrimoine_naturel	Plaza de España	https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/12/e8/20/photo3jpg.jpg?w=1200&h=1200&s=1	La grandiosa Plaza de España es la plaza más famosa de Sevilla. En y alrededor del Parque Maria-Luisa, se crearon varios edificios para la Exposición Iberoamericana. Así, Aníbal González diseñó esta plaza española en estilo renacentista con un diámetro de 200 metros. Para España, el objetivo de esta exposición era hacer la paz, de manera simbólica, con sus antiguas colonias americanas.	es
43	patrimoine_naturel	Plaza de Toros	https://visiterseville.fr/images/plazadetorosseville.jpg	La Plaza de Toros de Sevilla est la plus grande et la plus importante arène d'Espagne pour les corridas. Ainsi, en avril le plus grand festival de corridas au monde a lieu pendant la Feria de Abril. Le nom complet est "La Plaza de Toros de la Real Maestranza de Caballería de Sevilla" (Les arènes de la Real Maestranza de Caballería de Séville). L'arène ovale jouxte le quartier portuaire El Arenal. Elle fut construite au 18ème siècle et peut accueillir 13000 spectateurs. La Plaza de Toros a une façade baroque unique de la période 1762-1881.	fr
44	patrimoine_naturel	Plaza de Toros	https://visiterseville.fr/images/plazadetorosseville.jpg	Plaza de Toros de Sevilla is the largest and most important arena of Spain for bullfights. Thus, in April the biggest bullfighting festival in the world takes place during the Feria de Abril. The complete name is "La Plaza de Toros de la Real Maestranza de Caballería de Sevilla" (The Real Maestranza bullring of Caballeria of Seville). The oval arena adjoins the port district El Arenal. It was built in the 18th century and can accommodate 13,000 spectators. The Plaza de Toros has a unique baroque facade of the period 1762-1881.	en
45	patrimoine_naturel	Plaza de Toros	https://visiterseville.fr/images/plazadetorosseville.jpg	La Plaza de Toros de Sevilla es la más grande e importante Arena de España para las corridas de toros. Así, en abril tiene lugar la fiesta taurina más grande del mundo durante la Feria de Abril. El apellido completo es "La Plaza de Toros de la Real Maestranza de Caballería de Sevilla" (Plaza de toros de la Real Maestranza de Caballería de Sevilla). El óvalo colinda con el distrito portuario El Arenal. Fue construido en el siglo XVIII. y tiene capacidad para 13.000 espectadores. La Plaza de Toros tiene un fachada barroca única de la época 1762-1881.	es
46	patrimoine_naturel	Casa de Pilatos	https://www.spain.info/.content/imagenes/cabeceras-grandes/andalucia/casa_pilatos_sevilla_c_cynthia_liang_s_661143280.jpg	Le palais de la Casa de Pilatos est situé sur la Plaza de Pilatos dans le quartier de Santa Cruz de Séville. La Casa de Pilatos a été construit au 16ème siècle sur instruction de Don Pedro Enriquez et plus tard par son fils Fadrique Enriques de Ribera. Après l'Alcázar, il s'agit du plus beau palais de Séville et de l'un des bâtiments les mieux conservés du 16ème siècle. La "Maison de Pilate" doit son nom à la maison de Ponce Pilate, que l'on essaya de reproduire et qui inspira Fadrique Enriques de Ribera pendant son pèlerinage à Jérusalem.	fr
47	patrimoine_naturel	Casa de Pilatos	https://www.spain.info/.content/imagenes/cabeceras-grandes/andalucia/casa_pilatos_sevilla_c_cynthia_liang_s_661143280.jpg	The Casa de Pilatos Palace is located in the Plaza de Pilatos in the district of Santa Cruz de Seville. The Casa de Pilatos was built in the 16th century on the instruction of Don Pedro Enriquez and later by his son Fadrique Enriques de Ribera. After the Alcázar, it is the most beautiful palace in Seville and one of the best preserved buildings from the 16th century. The "House of Pilate" owes its name to the house of Ponce Pilate, who we tried to reproduce and who inspired Fadrique Enriques of Ribera during his pilgrimage to Jerusalem.	en
48	patrimoine_naturel	Casa de Pilatos	https://www.spain.info/.content/imagenes/cabeceras-grandes/andalucia/casa_pilatos_sevilla_c_cynthia_liang_s_661143280.jpg	El Palacio Casa de Pilatos se encuentra en la Plaza de Pilatos de el distrito de Santa Cruz de Sevilla. La Casa de Pilatos fue construida en el siglo XVI por orden de Don Pedro Enríquez y posteriormente por su hijo Fadrique Enriques de Ribera. Después del Alcázar, es el más hermoso palacio en Sevilla y uno de los edificios mejor conservados del siglo XVI. La "Casa de Pilatos" debe su nombre a la casa de Ponce Pilatos, a quien intentamos reproducir y que inspiró a Fadrique Enriques de Ribera durante su peregrinación a Jerusalén.	es
52	urbanisme	Le quartier de Triana	https://upload.wikimedia.org/wikipedia/commons/c/c2/Triana_et_la_Calle_Betis.JPG	Ce quartier emblématique de Séville se distingue par son urbanisme pittoresque et ses rues animées. Triana est réputé pour ses maisons traditionnelles aux façades colorées, ses balcons en fer forgé et ses ruelles étroites qui créent une atmosphère authentique. Les places animées, les marchés traditionnels et les tavernes accueillantes font de Triana un lieu incontournable pour découvrir l'urbanisme sévillan traditionnel.	fr
53	urbanisme	The Triana District	https://upload.wikimedia.org/wikipedia/commons/c/c2/Triana_et_la_Calle_Betis.JPG	This iconic district of Seville is characterized by its picturesque urbanism and lively streets. Triana is renowned for its traditional houses with colorful facades, wrought-iron balconies, and narrow streets that create an authentic atmosphere. The vibrant squares, traditional markets, and welcoming taverns make Triana a must-visit place to experience Seville's traditional urbanism.	en
54	urbanisme	El Barrio de Triana	https://upload.wikimedia.org/wikipedia/commons/c/c2/Triana_et_la_Calle_Betis.JPG	Este emblemático barrio de Sevilla se caracteriza por su urbanismo pintoresco y calles animadas. Triana es famosa por sus casas tradicionales con fachadas coloridas, balcones de hierro forjado y estrechas calles que crean una atmósfera auténtica. Las plazas animadas, los mercados tradicionales y las acogedoras tabernas hacen de Triana un lugar imprescindible para experimentar el urbanismo tradicional de Sevilla.	es
55	urbanisme	Parc de Los Principes	https://upload.wikimedia.org/wikipedia/commons/c/c3/Parque_de_los_Pr%C3%ADncipes_-_Metro_de_Sevilla.jpg	Ce magnifique parc offre un exemple remarquable d'urbanisme paysager à Séville. Avec ses vastes espaces verts, ses jardins soignés et ses allées ombragées, le parc de Los Príncipes invite à la détente et à la contemplation. Son aménagement soigneusement conçu met en valeur la beauté naturelle et offre une échappée verdoyante au sein de l'urbanisme dynamique de la ville.	fr
56	urbanisme	Los Principes Park	https://upload.wikimedia.org/wikipedia/commons/c/c3/Parque_de_los_Pr%C3%ADncipes_-_Metro_de_Sevilla.jpg	This magnificent park offers a remarkable example of landscape urbanism in Seville. With its vast green spaces, well-maintained gardens, and shaded pathways, Los Príncipes Park invites relaxation and contemplation. Its carefully designed layout highlights the natural beauty and provides a verdant escape within the dynamic urbanism of the city.	en
57	urbanisme	El Parque de Los Principes	https://upload.wikimedia.org/wikipedia/commons/c/c3/Parque_de_los_Pr%C3%ADncipes_-_Metro_de_Sevilla.jpg	Este magnífico parque ofrece un notable ejemplo de urbanismo paisajístico en Sevilla. Con sus amplios espacios verdes, jardines bien cuidados y senderos sombreados, el Parque de Los Príncipes invita a la relajación y la contemplación. Su diseño cuidadosamente planificado resalta la belleza natural y ofrece un oasis verde en medio del urbanismo dinámico de la ciudad.	es
58	urbanisme	Quartier d'El Arenal	https://upload.wikimedia.org/wikipedia/commons/7/77/El_Arenal_desde_calle_Betis.JPG	Situé près du fleuve Guadalquivir, le quartier d'El Arenal est un témoignage vivant de l'urbanisme historique de Séville. Autrefois un important port commercial, il présente des rues pavées et des bâtiments historiques qui reflètent l'influence des échanges commerciaux passés. Les places pittoresques, les façades ornées et les ruelles étroites vous transportent dans l'histoire de l'urbanisme sévillan et créent une atmosphère captivante.	fr
59	urbanisme	El Arenal District	https://upload.wikimedia.org/wikipedia/commons/7/77/El_Arenal_desde_calle_Betis.JPG	Located near the Guadalquivir River, the Arenal District is a living testament to the historical urbanism of Seville. Once an important commercial port, it features cobblestone streets and historic buildings that reflect the influence of past trade exchanges. The picturesque squares, ornate facades, and narrow alleys transport you to the history of Seville's urbanism, creating a captivating atmosphere.	en
60	urbanisme	El barrio de El Arenal	https://upload.wikimedia.org/wikipedia/commons/7/77/El_Arenal_desde_calle_Betis.JPG	Situado cerca del río Guadalquivir, el Barrio de El Arenal es un testimonio vivo del urbanismo histórico de Sevilla. Antiguamente un importante puerto comercial, cuenta con calles empedradas y edificios históricos que reflejan la influencia de los intercambios comerciales pasados. Las plazas pintorescas, las fachadas ornamentadas y las callejuelas estrechas te transportan a la historia del urbanismo de Sevilla, creando una atmósfera cautivadora.	es
50	patrimoine_naturel	Barrio de Santa Cruz	https://media.traveler.es/photos/63d118c57ec5c465216becc4/16:9/w_2560%2Cc_limit/T7B92J.jpg	The Santa Cruz district is the old Jewish quarter of Seville. In this old quarter, lie some tourist attractions, such as the Alcázar Palace and the tower Giralda of the Cathedral. THE neighborhood is a maze of alleys and narrow passages, where you can have a pleasant walk or delight in one of the many (touristy) restaurants or on places full of atmosphere. Of our days, this district, with its many white houses, constitutes the tourist center of Seville.	en
51	patrimoine_naturel	Barrio de Santa Cruz	https://media.traveler.es/photos/63d118c57ec5c465216becc4/16:9/w_2560%2Cc_limit/T7B92J.jpg	El barrio de Santa Cruz es la antigua judería de Sevilla. En este casco antiguo, mentira algunos atractivos turísticos, como el Alcázar y la torre Giralda de la Catedral. EL barrio es un laberinto de callejones y pasajes estrechos, donde puedes dar un agradable paseo o deléitese en uno de los muchos restaurantes (turísticos) o en lugares llenos de ambiente. De nuestro días, este barrio, con sus muchas casas blancas, es el centro turístico de Sevilla.	es
63	urbanisme	El Barrio de La Macarena	https://upload.wikimedia.org/wikipedia/commons/e/e5/Puerta_de_la_Macarena_%281%29.jpg	Este barrio tradicional es famoso por su urbanismo, que combina hábilmente lo antiguo y lo nuevo. Las calles sinuosas, las encantadoras plazas y los patios llenos de flores muestran el urbanismo típico andaluz, mientras que las renovaciones recientes le han añadido un toque de modernidad. La mezcla de arquitectura tradicional y contemporánea crea una atmósfera única, ofreciendo una visión cautivadora de la evolución del urbanismo en Sevilla.	es
62	urbanisme	The La Macarena District	https://upload.wikimedia.org/wikipedia/commons/e/e5/Puerta_de_la_Macarena_%281%29.jpg	This traditional neighborhood is renowned for its urbanism, skillfully blending the old and the new. The winding streets, charming squares, and flower-filled courtyards showcase typical Andalusian urbanism, while recent renovations have added a touch of modernity. The mix of traditional and contemporary architecture creates a unique atmosphere, offering a captivating glimpse into the evolution of urbanism in Seville.	en
49	patrimoine_naturel	Barrio de Santa Cruz	https://media.traveler.es/photos/63d118c57ec5c465216becc4/16:9/w_2560%2Cc_limit/T7B92J.jpg	Le quartier de Santa Cruz est l'ancien quartier juif de Séville. Dans ce vieux quartier, se trouvent quelques intérêts touristiques, comme le palais de l'Alcázar et la tour Giralda de la cathédrale. Le quartier est un labyrinthe de ruelles et de passages étroits, où vous pouvez vous balader agréablement ou vous délecter dans l'un des nombreux restaurants (touristiques) ou sur les places pleines d'ambiance. De nos jours, ce quartier, avec ses nombreuses maisons blanches, constitue le centre touristique de Séville.	fr
1	histoire	Époque pré-romaine	https://images-ext-2.discordapp.net/external/kFrdlTZ8aleedDXWKNELNuY5dylLf0sQQUPXbdBTzgY/https/www.vanupied.com/wp-content/uploads/Anfiteatro_de_las_ruinas_romanas_de_It%25C3%25A1lica_Santiponce_Sevilla_Espa%25C3%25B1a_diego-delso-1024x379.jpg	L'histoire de Séville remonte à l'époque pré-romaine, lorsque les Tartésiens, le peuple pré-phénicien qui a prospéré dans la région, se sont installés ici. Les Romains sont arrivés au IIe siècle av. Il a fondé la ville d'Hispalis, avec des murs, des aqueducs, des bains et d'autres structures de génie civil. Sous le règne de l'empereur Auguste, Hispalis est devenue la capitale de la province romaine de Bétique.	fr
67	histoire	ahah	https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.discogs.com%2Fartist%2F930055-Grosminet&psig=AOvVaw36uWaPBvMFZPVKWHR90Jbi&ust=1686992162162000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCKjwvda1x_8CFQAAAAAdAAAAABAJ	titi	fr
68	histoire	lalaa	https://www.referenseo.com/wp-content/uploads/2019/03/image-attractive.jpg	lalalala	fr
\.


--
-- Data for Name: santa_cruz; Type: TABLE DATA; Schema: seville; Owner: chamsedine.amouche
--

COPY seville.santa_cruz (id, type, texte, language) FROM stdin;
1	avantages	Quartier historique avec des rues étroites et charmantes.	fr
2	avantages	Beaux patios andalous à découvrir.	fr
3	avantages	Proximité de l'Alcazar et des jardins de Murillo.	fr
4	inconvénients	Zone très touristique et donc parfois bruyante.	fr
5	image	../Image/SantaCruz.jpg	fr
6	texte	Santa Cruz est un quartier emblématique de Séville, situé dans le centre historique. Autrefois un quartier juif, il est caractérisé par ses ruelles étroites, ses patios andalous et son ambiance romantique. Il abrite des sites incontournables tels que l'Alcazar et les jardins de Murillo.	fr
7	texte	Santa Cruz is an iconic neighborhood in Seville, located in the historic center. Once a Jewish quarter, it is characterized by its narrow streets, Andalusian patios, and romantic atmosphere. It is home to must-visit sites such as the Alcazar and the Murillo Gardens.	en
8	texte	Santa Cruz es un barrio emblemático de Sevilla, situado en el centro histórico. Antiguamente un barrio judío, se caracteriza por sus calles estrechas, sus patios andaluces y su ambiente romántico. Alberga lugares imprescindibles como el Alcázar y los Jardines de Murillo.	es
9	monuments	Les Archives des Indes	\N
10	monuments	Maison de Pilate	\N
11	monuments	Muraille d'Alfalfa	\N
12	monuments	Plaza Santa Cruz	\N
13	monuments	Plaza de las Cruces	\N
14	monuments	Palais de l'Adelantado	\N
15	monuments	Hospital de los Venerables	\N
16	monuments	Les jardins de Murillo	\N
17	bars_restaurants	La Carbonería - Calle Levíes, 18, 41004 Sevilla	\N
18	bars_restaurants	Casa Roman - Calle Gloria, 9, 41002 Sevilla	\N
19	bars_restaurants	Bar Europa - Calle Siete Revueltas, 35, 41004 Sevilla	\N
20	alimentation	Supermercado MAS - Calle Albareda, 26, 41001 Sevilla	\N
21	alimentation	Supersol - Calle San Pablo, 9, 41001 Sevilla	\N
22	alimentation	El Jamón - Calle Francos, 42, 41004 Sevilla	\N
31	inconvénients	Zona muy turística y puede ser ruidosa.	es
33	avantages	Historic neighborhood with charming narrow streets.	en
34	avantages	Barrio histórico con encantadoras callejuelas.	es
35	avantages	Beautiful Andalusian patios to discover.	en
36	avantages	Descubra los bellos patios andaluces.	es
37	avantages	Close to the Alcázar and Murillo gardens.	en
38	avantages	Cerca del Alcázar y de los jardines de Murillo.	es
39	inconvénients	Very touristy area, sometimes noisy.	en
\.


--
-- Data for Name: triana; Type: TABLE DATA; Schema: seville; Owner: chamsedine.amouche
--

COPY seville.triana (id, type, texte, language) FROM stdin;
1	avantages	Quartier emblématique de Séville.	fr
2	avantages	Célèbre pour la céramique traditionnelle et le flamenco.	fr
3	avantages	Marchés pittoresques à visiter.	fr
4	avantages	Ambiance bohème.	fr
5	inconvénients	Présence importante de touristes.	fr
6	image	../Image/Triana.jpg	fr
7	texte	Triana est un quartier traditionnel et bohème situé de l'autre côté du fleuve Guadalquivir. Il est célèbre pour sa céramique traditionnelle, son flamenco et son ambiance authentique. Triana possède également des marchés pittoresques, tels que le marché de Triana, où l'on peut découvrir des produits locaux.	fr
8	texte	Triana is a traditional and bohemian neighborhood located on the other side of the Guadalquivir River. It is famous for its traditional ceramics, flamenco, and authentic atmosphere. Triana also has picturesque markets, such as the Triana Market, where you can discover local products.	en
9	texte	Triana es un barrio tradicional y bohemio ubicado al otro lado del río Guadalquivir. Es famoso por su cerámica tradicional, flamenco y ambiente auténtico. Triana también cuenta con mercados pintorescos, como el Mercado de Triana, donde se pueden descubrir productos locales.	es
10	monuments	Pont de Triana	\N
11	monuments	Église de Santa Ana	\N
12	monuments	Atarazanas Reales de Séville	\N
13	monuments	Le Château de San Jorge	\N
14	bars_restaurants	El Faro de Triana - Calle Betis, 3, 41010 Sevilla	\N
15	bars_restaurants	Casa Cuesta - Calle Pureza, 12, 41010 Sevilla	\N
16	bars_restaurants	Bar Betis - Calle Betis, 46, 41010 Sevilla	\N
17	alimentation	Mercadona - Calle Reyes Católicos, 27, 41010 Sevilla	\N
18	alimentation	Dia - Calle Pagés del Corro, 108, 41010 Sevilla	\N
19	alimentation	Lidl - Calle Pages del Corro, 137, 41010 Sevilla	\N
30	avantages	Seville's most emblematic district.	en
31	avantages	El barrio más emblemático de Sevilla.	es
32	avantages	Famous for traditional ceramics and flamenco.	en
33	avantages	Famosa por su cerámica tradicional y el flamenco.	es
34	avantages	Picturesque markets to visit.	en
35	avantages	Mercados pintorescos para visitar.	es
36	avantages	Bohemian atmosphere.	en
37	avantages	Ambiente bohemio.	es
38	inconvénients	Large presence of tourists.	en
39	inconvénients	Gran presencia de turistas.	es
\.


--
-- Name: el_arenal_id_seq; Type: SEQUENCE SET; Schema: seville; Owner: chamsedine.amouche
--

SELECT pg_catalog.setval('seville.el_arenal_id_seq', 40, true);


--
-- Name: el_centro_id_seq; Type: SEQUENCE SET; Schema: seville; Owner: chamsedine.amouche
--

SELECT pg_catalog.setval('seville.el_centro_id_seq', 45, true);


--
-- Name: el_porvenir_id_seq; Type: SEQUENCE SET; Schema: seville; Owner: chamsedine.amouche
--

SELECT pg_catalog.setval('seville.el_porvenir_id_seq', 45, true);


--
-- Name: la_cartuja_id_seq; Type: SEQUENCE SET; Schema: seville; Owner: chamsedine.amouche
--

SELECT pg_catalog.setval('seville.la_cartuja_id_seq', 46, true);


--
-- Name: macarena_id_seq; Type: SEQUENCE SET; Schema: seville; Owner: chamsedine.amouche
--

SELECT pg_catalog.setval('seville.macarena_id_seq', 36, true);


--
-- Name: monuments_id_seq; Type: SEQUENCE SET; Schema: seville; Owner: chamsedine.amouche
--

SELECT pg_catalog.setval('seville.monuments_id_seq', 155, true);


--
-- Name: nervion_id_seq; Type: SEQUENCE SET; Schema: seville; Owner: chamsedine.amouche
--

SELECT pg_catalog.setval('seville.nervion_id_seq', 28, true);


--
-- Name: patrimoine_id_seq; Type: SEQUENCE SET; Schema: seville; Owner: chamsedine.amouche
--

SELECT pg_catalog.setval('seville.patrimoine_id_seq', 68, true);


--
-- Name: santa_cruz_id_seq; Type: SEQUENCE SET; Schema: seville; Owner: chamsedine.amouche
--

SELECT pg_catalog.setval('seville.santa_cruz_id_seq', 39, true);


--
-- Name: triana_id_seq; Type: SEQUENCE SET; Schema: seville; Owner: chamsedine.amouche
--

SELECT pg_catalog.setval('seville.triana_id_seq', 39, true);


--
-- Name: el_arenal el_arenal_pkey; Type: CONSTRAINT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.el_arenal
    ADD CONSTRAINT el_arenal_pkey PRIMARY KEY (id);


--
-- Name: el_centro el_centro_pkey; Type: CONSTRAINT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.el_centro
    ADD CONSTRAINT el_centro_pkey PRIMARY KEY (id);


--
-- Name: el_porvenir el_porvenir_pkey; Type: CONSTRAINT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.el_porvenir
    ADD CONSTRAINT el_porvenir_pkey PRIMARY KEY (id);


--
-- Name: la_cartuja la_cartuja_pkey; Type: CONSTRAINT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.la_cartuja
    ADD CONSTRAINT la_cartuja_pkey PRIMARY KEY (id);


--
-- Name: macarena macarena_pkey; Type: CONSTRAINT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.macarena
    ADD CONSTRAINT macarena_pkey PRIMARY KEY (id);


--
-- Name: monuments monuments_pkey; Type: CONSTRAINT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.monuments
    ADD CONSTRAINT monuments_pkey PRIMARY KEY (id);


--
-- Name: nervion nervion_pkey; Type: CONSTRAINT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.nervion
    ADD CONSTRAINT nervion_pkey PRIMARY KEY (id);


--
-- Name: patrimoine patrimoine_pkey; Type: CONSTRAINT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.patrimoine
    ADD CONSTRAINT patrimoine_pkey PRIMARY KEY (id);


--
-- Name: santa_cruz santa_cruz_pkey; Type: CONSTRAINT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.santa_cruz
    ADD CONSTRAINT santa_cruz_pkey PRIMARY KEY (id);


--
-- Name: triana triana_pkey; Type: CONSTRAINT; Schema: seville; Owner: chamsedine.amouche
--

ALTER TABLE ONLY seville.triana
    ADD CONSTRAINT triana_pkey PRIMARY KEY (id);


--
-- Name: SCHEMA seville; Type: ACL; Schema: -; Owner: chamsedine.amouche
--

REVOKE ALL ON SCHEMA seville FROM PUBLIC;
REVOKE ALL ON SCHEMA seville FROM "chamsedine.amouche";
GRANT ALL ON SCHEMA seville TO "chamsedine.amouche";
GRANT ALL ON SCHEMA seville TO "ahmed.galoul";
GRANT ALL ON SCHEMA seville TO "leo.dessertenne";


--
-- Name: TABLE admin; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON TABLE seville.admin FROM PUBLIC;
REVOKE ALL ON TABLE seville.admin FROM "chamsedine.amouche";
GRANT ALL ON TABLE seville.admin TO "chamsedine.amouche";
GRANT ALL ON TABLE seville.admin TO "ahmed.galoul";


--
-- Name: TABLE el_arenal; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON TABLE seville.el_arenal FROM PUBLIC;
REVOKE ALL ON TABLE seville.el_arenal FROM "chamsedine.amouche";
GRANT ALL ON TABLE seville.el_arenal TO "chamsedine.amouche";
GRANT ALL ON TABLE seville.el_arenal TO "ahmed.galoul";
GRANT ALL ON TABLE seville.el_arenal TO "leo.dessertenne";


--
-- Name: SEQUENCE el_arenal_id_seq; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON SEQUENCE seville.el_arenal_id_seq FROM PUBLIC;
REVOKE ALL ON SEQUENCE seville.el_arenal_id_seq FROM "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.el_arenal_id_seq TO "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.el_arenal_id_seq TO "ahmed.galoul";


--
-- Name: TABLE el_centro; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON TABLE seville.el_centro FROM PUBLIC;
REVOKE ALL ON TABLE seville.el_centro FROM "chamsedine.amouche";
GRANT ALL ON TABLE seville.el_centro TO "chamsedine.amouche";
GRANT ALL ON TABLE seville.el_centro TO "ahmed.galoul";
GRANT ALL ON TABLE seville.el_centro TO "leo.dessertenne";


--
-- Name: SEQUENCE el_centro_id_seq; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON SEQUENCE seville.el_centro_id_seq FROM PUBLIC;
REVOKE ALL ON SEQUENCE seville.el_centro_id_seq FROM "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.el_centro_id_seq TO "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.el_centro_id_seq TO "ahmed.galoul";


--
-- Name: TABLE el_porvenir; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON TABLE seville.el_porvenir FROM PUBLIC;
REVOKE ALL ON TABLE seville.el_porvenir FROM "chamsedine.amouche";
GRANT ALL ON TABLE seville.el_porvenir TO "chamsedine.amouche";
GRANT ALL ON TABLE seville.el_porvenir TO "ahmed.galoul";
GRANT ALL ON TABLE seville.el_porvenir TO "leo.dessertenne";


--
-- Name: SEQUENCE el_porvenir_id_seq; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON SEQUENCE seville.el_porvenir_id_seq FROM PUBLIC;
REVOKE ALL ON SEQUENCE seville.el_porvenir_id_seq FROM "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.el_porvenir_id_seq TO "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.el_porvenir_id_seq TO "ahmed.galoul";


--
-- Name: TABLE la_cartuja; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON TABLE seville.la_cartuja FROM PUBLIC;
REVOKE ALL ON TABLE seville.la_cartuja FROM "chamsedine.amouche";
GRANT ALL ON TABLE seville.la_cartuja TO "chamsedine.amouche";
GRANT ALL ON TABLE seville.la_cartuja TO "ahmed.galoul";
GRANT ALL ON TABLE seville.la_cartuja TO "leo.dessertenne";


--
-- Name: SEQUENCE la_cartuja_id_seq; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON SEQUENCE seville.la_cartuja_id_seq FROM PUBLIC;
REVOKE ALL ON SEQUENCE seville.la_cartuja_id_seq FROM "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.la_cartuja_id_seq TO "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.la_cartuja_id_seq TO "ahmed.galoul";


--
-- Name: TABLE macarena; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON TABLE seville.macarena FROM PUBLIC;
REVOKE ALL ON TABLE seville.macarena FROM "chamsedine.amouche";
GRANT ALL ON TABLE seville.macarena TO "chamsedine.amouche";
GRANT ALL ON TABLE seville.macarena TO "ahmed.galoul";
GRANT ALL ON TABLE seville.macarena TO "leo.dessertenne";


--
-- Name: SEQUENCE macarena_id_seq; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON SEQUENCE seville.macarena_id_seq FROM PUBLIC;
REVOKE ALL ON SEQUENCE seville.macarena_id_seq FROM "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.macarena_id_seq TO "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.macarena_id_seq TO "ahmed.galoul";


--
-- Name: TABLE monuments; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON TABLE seville.monuments FROM PUBLIC;
REVOKE ALL ON TABLE seville.monuments FROM "chamsedine.amouche";
GRANT ALL ON TABLE seville.monuments TO "chamsedine.amouche";
GRANT ALL ON TABLE seville.monuments TO "ahmed.galoul";
GRANT ALL ON TABLE seville.monuments TO "leo.dessertenne";


--
-- Name: SEQUENCE monuments_id_seq; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON SEQUENCE seville.monuments_id_seq FROM PUBLIC;
REVOKE ALL ON SEQUENCE seville.monuments_id_seq FROM "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.monuments_id_seq TO "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.monuments_id_seq TO "ahmed.galoul";


--
-- Name: TABLE nervion; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON TABLE seville.nervion FROM PUBLIC;
REVOKE ALL ON TABLE seville.nervion FROM "chamsedine.amouche";
GRANT ALL ON TABLE seville.nervion TO "chamsedine.amouche";
GRANT ALL ON TABLE seville.nervion TO "ahmed.galoul";
GRANT ALL ON TABLE seville.nervion TO "leo.dessertenne";


--
-- Name: SEQUENCE nervion_id_seq; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON SEQUENCE seville.nervion_id_seq FROM PUBLIC;
REVOKE ALL ON SEQUENCE seville.nervion_id_seq FROM "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.nervion_id_seq TO "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.nervion_id_seq TO "ahmed.galoul";


--
-- Name: TABLE parcours; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON TABLE seville.parcours FROM PUBLIC;
REVOKE ALL ON TABLE seville.parcours FROM "chamsedine.amouche";
GRANT ALL ON TABLE seville.parcours TO "chamsedine.amouche";
GRANT ALL ON TABLE seville.parcours TO "ahmed.galoul";
GRANT ALL ON TABLE seville.parcours TO "leo.dessertenne";


--
-- Name: TABLE patrimoine; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON TABLE seville.patrimoine FROM PUBLIC;
REVOKE ALL ON TABLE seville.patrimoine FROM "chamsedine.amouche";
GRANT ALL ON TABLE seville.patrimoine TO "chamsedine.amouche";
GRANT ALL ON TABLE seville.patrimoine TO "ahmed.galoul";
GRANT ALL ON TABLE seville.patrimoine TO "leo.dessertenne";


--
-- Name: SEQUENCE patrimoine_id_seq; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON SEQUENCE seville.patrimoine_id_seq FROM PUBLIC;
REVOKE ALL ON SEQUENCE seville.patrimoine_id_seq FROM "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.patrimoine_id_seq TO "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.patrimoine_id_seq TO "ahmed.galoul";


--
-- Name: TABLE santa_cruz; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON TABLE seville.santa_cruz FROM PUBLIC;
REVOKE ALL ON TABLE seville.santa_cruz FROM "chamsedine.amouche";
GRANT ALL ON TABLE seville.santa_cruz TO "chamsedine.amouche";
GRANT ALL ON TABLE seville.santa_cruz TO "ahmed.galoul";
GRANT ALL ON TABLE seville.santa_cruz TO "leo.dessertenne";


--
-- Name: SEQUENCE santa_cruz_id_seq; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON SEQUENCE seville.santa_cruz_id_seq FROM PUBLIC;
REVOKE ALL ON SEQUENCE seville.santa_cruz_id_seq FROM "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.santa_cruz_id_seq TO "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.santa_cruz_id_seq TO "ahmed.galoul";


--
-- Name: TABLE triana; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON TABLE seville.triana FROM PUBLIC;
REVOKE ALL ON TABLE seville.triana FROM "chamsedine.amouche";
GRANT ALL ON TABLE seville.triana TO "chamsedine.amouche";
GRANT ALL ON TABLE seville.triana TO "ahmed.galoul";
GRANT ALL ON TABLE seville.triana TO "leo.dessertenne";


--
-- Name: SEQUENCE triana_id_seq; Type: ACL; Schema: seville; Owner: chamsedine.amouche
--

REVOKE ALL ON SEQUENCE seville.triana_id_seq FROM PUBLIC;
REVOKE ALL ON SEQUENCE seville.triana_id_seq FROM "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.triana_id_seq TO "chamsedine.amouche";
GRANT ALL ON SEQUENCE seville.triana_id_seq TO "ahmed.galoul";


--
-- PostgreSQL database dump complete
--

