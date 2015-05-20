-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Mag 20, 2015 alle 10:49
-- Versione del server: 5.5.41-0ubuntu0.14.04.1
-- Versione PHP: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_stage`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `aziende`
--

CREATE TABLE IF NOT EXISTS `aziende` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pIva` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CFA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `denominazione` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `associazione` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `settore` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sedeLegale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `citta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cap` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `indirizzoSedeTirocinio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `capSedeTirocinio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cittaSedeTirocinio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomeRappresLegale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cognomeRappresLegale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CFRappresLegale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comuneNascitaRappresLegale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataNascitaRappresLegale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomeTutorAziend` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cognomeTutorAziend` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dump dei dati per la tabella `aziende`
--

INSERT INTO `aziende` (`id`, `pIva`, `CFA`, `denominazione`, `associazione`, `settore`, `sedeLegale`, `citta`, `cap`, `telefono`, `email`, `indirizzoSedeTirocinio`, `capSedeTirocinio`, `cittaSedeTirocinio`, `nomeRappresLegale`, `cognomeRappresLegale`, `CFRappresLegale`, `comuneNascitaRappresLegale`, `dataNascitaRappresLegale`, `nomeTutorAziend`, `cognomeTutorAziend`, `note`, `created_at`, `updated_at`) VALUES
(1, '00307430132', NULL, 'ASSOCIAZIONE LA NOSTRA FAMIGLIA', 'ARIS SANITA''', 'SOCIO SANITARIA', 'VIA DON LUIGI MONZA  1', 'PONTE LAMBRO', NULL, '031877111', NULL, 'VIA DON LUIGI MONZA 20', NULL, 'BOSISIO PARINI', 'CARLA', 'ANDREOTTI', 'NDRCRL45559E507I', 'LECCO', '19/11/1945', 'UMBERTO', 'POZZOLI', NULL, '2015-05-20 06:48:41', '2015-05-20 06:48:41'),
(2, '01342660139', NULL, 'PARROCCHIA SANTA COSMA E DAMIANO', NULL, NULL, 'VIA SAN FRANCESCO 24', 'AIRUNO', NULL, '0399943159', NULL, 'VIA POSTALE VECCHIA', NULL, 'AIRUNO', 'DON ANTONIO', 'COGLIATI', 'CGLNTN40P16A686R', 'BARZANO''', '16/09/1940', 'DAMIANO', 'MEREGALLI', NULL, '2015-05-20 06:48:41', '2015-05-20 06:48:41'),
(3, '00121235013', NULL, 'REDAELLI RICAMBI SRL', 'API - LECCO', 'METALMECCANICO', 'VIA PROVINCIALE PER DOLZAGO 59', 'OGGIONO', NULL, '0341266911', NULL, NULL, NULL, NULL, 'PIETRO', 'REDAELLI', 'RDLPTR40D19GOO9X', 'OGGIONO', '19/04/1940', 'RUGGERO', 'REDAELLI', NULL, '2015-05-20 06:48:41', '2015-05-20 06:48:41'),
(4, '00664380136', NULL, 'ITA SPA', 'API', 'TRAFILATI ACCIAI', 'PIAZZA MAZZINI 13', 'LECCO', NULL, '0341634742', NULL, 'VIA LAGO VECCHIO 9/20', NULL, 'CALOLZIOCORTE', 'ANDREA', 'BERI', 'BRENDR75RI8E507R', 'LECCO', '18/10/1975', 'ANDREA', 'BERI', NULL, '2015-05-20 06:48:41', '2015-05-20 06:48:41'),
(5, '03131730131', NULL, 'STUDIO LEGALE AVV. GIUSEPPE RUSCONI & PATNERS', NULL, 'TERZIARIO STUDIO LEGALE', 'VIA BALICCO 61', 'LECCO', NULL, '0341284259', NULL, NULL, NULL, NULL, 'GIUSEPPE', 'RUSCONI', 'RSCGPP59P15L634C', 'VALMADRERA', '15/09/1959', 'GIUSEPPE', 'RUSCONI', NULL, '2015-05-20 06:48:41', '2015-05-20 06:48:41'),
(6, '02444660134', NULL, 'DOTT. FILIPPO RADAELLI', NULL, 'STUDI PROFESSIONALI - COMMERCIALISTA', 'VIA KENNEDY 4', 'OGGIONO', NULL, '0341263104', NULL, 'VIA BACHELET 13', NULL, 'OGGIONO', 'FILIPPO', 'RADAELLI', 'RDLFPP71B14E507W', 'LECCO', '14/02/1971', 'FILIPPO', 'RADAELLI', NULL, '2015-05-20 06:48:41', '2015-05-20 06:48:41'),
(7, '02933230165', NULL, 'NAV SYSTEM SRL', NULL, 'RIPARAZ MACCHINE PER UFFICIO INFO', 'VIA COMO 3', 'LONGONE AL SEGRINO', NULL, '0313355418', NULL, 'VIA PLINIO 12/14', NULL, 'ERBA', 'ANGELO', 'NAVONI', 'NVNNGL60M08F205T', 'MILANO', '08/08/1960', 'MIRCO', 'CALDERA', NULL, '2015-05-20 06:48:41', '2015-05-20 06:48:41'),
(8, '02220860130', NULL, 'EASYNET', 'CONFINDUSTRIA', 'INFORMATICA', 'CORSO PROMESSI SPOSI 25D', 'LECCO', NULL, '0341256911', NULL, NULL, NULL, NULL, 'GIORGIO', 'MISSAGLIA', 'MSSGRG58D105507C', 'LECCO', '10/04/1958', 'GIORGIO', 'MISSAGLIA', NULL, '2015-05-20 06:48:41', '2015-05-20 06:48:41'),
(9, '00201760139', NULL, 'LIMONTA SPA', NULL, 'TESSILE - CARTOTECNICO - GOMMA', NULL, NULL, NULL, '03185', NULL, 'VIA C. BATTISTI', NULL, 'COSTA MASNAGA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-05-20 06:48:41', '2015-05-20 06:48:41'),
(10, '02085500136', NULL, 'MDG s.n.c.DI GADDI P. e C.', 'CONFINDUSTRIA', 'METALMECCANICO', 'VIA CISERINO 4/E', 'LIERNA', '23827', '0341710256', 'info@mdgitalia.eu', 'VIA CISERINO 4/E', '23827', 'LIERNA', 'PATRIZIO', 'GADDI', 'GDDPRZ65C28A745X', 'BELLANO', '28/03/1965', 'PATRIZIO', 'GADDI', NULL, '2015-05-20 06:48:41', '2015-05-20 06:48:41'),
(11, '03461320131', NULL, 'OFFICINA MECCANICA BM DI BARAGETTI MAURIZIO WALTER', NULL, 'METALMECCANICO', 'VIA PRIVATA MAGNI 1', 'OSNAGO', '23875', '03958076', 'gbaragetti@virgilio.it', 'VIA PRIVATA MAGNI 1', '23875', 'OSNAGO', 'MAURIZIO WALTER', 'BARAGETTI', 'BRGMZW54P28F704F', 'MONZA', '28/09/1954', 'GIOVANNI', 'BARAGETTI', NULL, '2015-05-20 06:48:41', '2015-05-20 06:48:41'),
(12, '00814480133', NULL, 'DEFREMM s.p.a.', 'CONFINDUSTRIA', 'METALMECCANICO', 'VIA BOITO 6', 'LECCO', '23900', '0341251410', 'm.motisi@defremm.it', 'VIA BOITO 6', '23900', 'LECCO', 'ROSA', 'MOLINARI', 'MLNRSO73H64E507W', 'LECCO', '24/06/1973', 'MASSIMO', 'MOTISI', NULL, '2015-05-20 06:48:41', '2015-05-20 06:48:41'),
(13, '00810220137', NULL, 'FIOCCHI MUNIZIONI s.p.a.', 'CONFINDUSTRIA LECCO', 'PRODUZIONE MUNIZIONI CACCIA, TIRO E DIFESA', 'VIA SANTA BARBARA 4', 'LECCO', '23900', '0341473258', 'g.galluccio@fiocchigfl.it', 'VIA SANTA BARBARA 4', '23900', 'LECCO', 'STEFANO', 'FIOCCHI', 'FCCSFN63D24E507E', 'LECCO', '24/04/1963', 'SERGIO', 'SCOTTONI', NULL, '2015-05-20 06:48:41', '2015-05-20 06:48:41'),
(14, '03329960136', NULL, 'SVE.ZIA srl', 'UPAL', 'METALMECCANICO ARTIGIANO', 'VI.LE V.VENETO 4', 'ELLO', '23848', '0341577625', 'info@sve-zia.com', 'VI.LE V.VENETO 4', '23848', 'ELLO', 'MARZIA', 'PANZERI', 'PNZMRZ76P68E507N', 'LECCO', '23/09/1976', 'DANIELE', 'CIVILLINI', NULL, '2015-05-20 06:48:41', '2015-05-20 06:48:41'),
(15, '00912620135', NULL, 'SILEA s.p.a', 'CONFINDUSTRIA LECCO', 'SMALTIMENTO RIFIUTI', 'VIA L.VASSENA 6', 'VALMADRERA', '23868', '0341204441', 'giordano.panzeri@sileaspa.it', 'VIA L.VASSENA 6', '23868', 'VALMADRERA', 'MAURO', 'COLOMBO', 'CLMMRA56E09A794I', 'BERGAMO', '09/05/1956', 'GIANCARLO', 'OFFREDI', NULL, '2015-05-20 06:48:41', '2015-05-20 06:48:41');

-- --------------------------------------------------------

--
-- Struttura della tabella `classi`
--

CREATE TABLE IF NOT EXISTS `classi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `articolazione` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sezione` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `classi`
--

INSERT INTO `classi` (`id`, `classe`, `articolazione`, `sezione`, `created_at`, `updated_at`) VALUES
(1, '4', 'Informatica', 'B', '2015-05-20 06:47:21', '2015-05-20 06:47:21'),
(2, '4', 'Informatica', 'A', '2015-05-20 06:47:32', '2015-05-20 06:47:32');

-- --------------------------------------------------------

--
-- Struttura della tabella `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chiave` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valore` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dump dei dati per la tabella `config`
--

INSERT INTO `config` (`id`, `chiave`, `valore`, `created_at`, `updated_at`) VALUES
(1, 'dataInizio1', '2015-06-15', '2015-05-20 06:46:55', '2015-05-20 06:46:55'),
(2, 'dataFine1', '2015-07-15', '2015-05-20 06:46:55', '2015-05-20 06:46:55'),
(3, 'dataInizio2', '2015-09-15', '2015-05-20 06:46:55', '2015-05-20 06:46:55'),
(4, 'dataFine2', '2015-10-15', '2015-05-20 06:46:55', '2015-05-20 06:46:55'),
(5, 'dataInizio3', '2016-04-15', '2015-05-20 06:46:55', '2015-05-20 06:46:55'),
(6, 'dataFine3', '2016-05-15', '2015-05-20 06:46:55', '2015-05-20 06:46:55');

-- --------------------------------------------------------

--
-- Struttura della tabella `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_04_24_133139_create_table_aziende', 1),
('2015_04_24_133150_create_table_studenti', 1),
('2015_04_24_133156_create_table_stage', 1),
('2015_04_24_133202_create_table_partecipazioneStage', 1),
('2015_04_24_133229_create_table_tutorScuola', 1),
('2015_04_24_133251_aggiunta_colonna_stage', 1),
('2015_04_24_133258_create_table_classi', 1),
('2015_04_24_133313_aggiunta_colonna_studente', 1),
('2015_05_07_062331_create_table_periodi', 1),
('2015_05_07_062830_create_table_config', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `partecipazione_stage`
--

CREATE TABLE IF NOT EXISTS `partecipazione_stage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `studente_id` int(10) unsigned NOT NULL,
  `stage_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `partecipazione_stage_studente_id_foreign` (`studente_id`),
  KEY `partecipazione_stage_stage_id_foreign` (`stage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `periodi`
--

CREATE TABLE IF NOT EXISTS `periodi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dataInizio` date NOT NULL,
  `dataFine` date NOT NULL,
  `partecipazione_stage_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `periodi_partecipazione_stage_id_foreign` (`partecipazione_stage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `stage`
--

CREATE TABLE IF NOT EXISTS `stage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descrizione` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `archiviato` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `azienda_id` int(10) unsigned NOT NULL,
  `tutor_scuola_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `stage_azienda_id_foreign` (`azienda_id`),
  KEY `stage_tutor_scuola_id_foreign` (`tutor_scuola_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `studenti`
--

CREATE TABLE IF NOT EXISTS `studenti` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `matricola` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cognome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CF` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dataNascita` date NOT NULL,
  `comuneNascita` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `indirizzo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comuneResidenza` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `articolazione` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `classe_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `studenti_classe_id_foreign` (`classe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=49 ;

--
-- Dump dei dati per la tabella `studenti`
--

INSERT INTO `studenti` (`id`, `matricola`, `nome`, `cognome`, `CF`, `dataNascita`, `comuneNascita`, `indirizzo`, `comuneResidenza`, `articolazione`, `created_at`, `updated_at`, `classe_id`) VALUES
(1, 0, 'SIMONE', 'BARI', 'BRASMN97T28E507I', '1997-12-28', 'LECCO', 'VIA S. MARIA, 44/A', 'OLGINATE', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(2, 0, 'ALESSANDRO', 'BARILI', 'BRLLSN97A05E507D', '1997-01-05', 'LECCO', 'VIA BOLDONI, 1/L', 'BELLANO', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(3, 0, 'GIUSEPPE', 'BARLETTA', 'BRLGPP97C24E063D', '1997-03-24', 'GIUSSANO', 'VICOLO DELLA ROSA 2/A', 'VEDUGGIO CON COLZANO', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(4, 0, 'MATTIA', 'BERNASCONI', 'BRNMTT97P11E507S', '1997-09-11', 'LECCO', 'VIA BELFIORE 74', 'LECCO', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(5, 0, 'LUCA', 'BERTARINI', 'BRTLCU97B16E507P', '1997-02-16', 'LECCO', 'VIA ALLA VOLTA, 22/b', 'LIERNA', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(6, 0, 'ALESSANDRO', 'BIANCHI', 'BNCLSN96D04E507B', '1996-04-04', 'LECCO', 'VIA RISORGIMENTO N. 18/A', 'ABBADIA LARIANA', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(7, 0, 'LUCA', 'BONACINA', 'BNCLCU97P26E507G', '1997-09-26', 'LECCO', 'VIA DONIZETTI20', 'MONTE MARENZO', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(8, 0, 'NICOLA', 'CASTELLETTI', 'CSTNCL97B18E507S', '1997-02-18', 'LECCO', 'VIA CANTARELLI 10', 'LECCO', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(9, 0, 'GABRIELE', 'DE MATTIA', 'DMTGRL96E13E507G', '1996-05-13', 'LECCO', 'VIA BUON CONSIGLIO, 57', 'VALMADRERA', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(10, 0, 'JUAN DAVID', 'FORERO BETANCOURT', 'FRRJDV97E27Z604Y', '1997-05-27', 'COLOMBIA', 'VIA XXV APRILE,17', 'OLGINATE', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(11, 0, 'SIMONE', 'LA GATTA', 'LGTSMN97A19E507C', '1997-01-19', 'LECCO', 'VIA ALL''ASILO 17', 'ABBADIA LARIANA', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(12, 0, 'MARCO', 'LANFRANCHI', 'LNFMRC97D15E507F', '1997-04-15', 'LECCO', 'VIA CROLLALANZA, 5', 'LECCO', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(13, 0, 'VALERIO', 'LOCATELLI', 'LCTVLR96L14E507H', '1996-07-14', 'LECCO', 'VIA CASTAGNETI, 3/G', 'PASTURO', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(14, 0, 'BRUNO', 'PASHAJ', 'PSHBRN96P19Z100I', '1996-09-19', 'VALONA', 'VIA BESONDA SUP. N.5', 'LECCO', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(15, 0, 'TOMMASO', 'PETRIGNO', 'PTRTMS97H10E507K', '1997-06-10', 'LECCO', 'VIA  S.ALESSANDRO, 20', 'MONTE MARENZO', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(16, 0, 'IACOPO', 'SPREAFICO', 'SPRCPI97C21E507N', '1997-03-21', 'LECCO', 'VICOLO SAN GIOVANNI 4', 'AIRUNO', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(17, 0, 'ANDREA', 'TABBI', 'TBBNDR96C14E573V', '1996-03-14', 'LICATA', 'VIA ROMA,15', 'VERCURAGO', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(18, 0, 'MOEID', 'TAVAKOLI', 'TVKMDO96B02Z224N', '1996-02-02', 'ESFAHAN', 'VIA PETRARCA, 6', 'LECCO', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(19, 0, 'RICCARDO', 'TESTA', 'TSTRCR98B02E507X', '1998-02-02', 'LECCO', 'VIA BERTOLA 9/B', 'MANDELLO DEL LARIO', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(20, 0, 'CLAUDIO', 'TOCCHETTI', 'TCCCLD97S28E507V', '1997-11-28', 'LECCO', 'VIA AZZONE VISCONTI, 70', 'LECCO', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(21, 0, 'LEONARDO', 'TOTARO', 'TTRLRD97M29D643F', '1997-08-29', 'FOGGIA', 'V. IV NOVEMBRE 10', 'VERCURAGO', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(22, 0, 'GIANLUCA', 'VAGO', 'VGAGLC96R12E507A', '1996-10-12', 'LECCO', 'VIA BELFIORE 15', 'LECCO', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(23, 0, 'MATTIA', 'VITALE', 'VTLMTT97P28E507I', '1997-09-28', 'LECCO', 'VIA ARTIGIANI, 10/A', 'OLGINATE', 'INFORMATICA', '2015-05-20 06:47:21', '2015-05-20 06:47:21', 1),
(24, 0, 'ERIKA', 'AMATO', 'MTARKE96H66E507E', '1996-06-26', 'LECCO', 'VIA MAESTRO M.BAROZZI 21/B', 'OLGINATE', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(25, 0, 'NADIA', 'ARRIGONI', 'RRGNDA97P43E507G', '1997-09-03', 'LECCO', 'VIA NOCCOLI 29', 'CREMENO', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(26, 0, 'EMMANUEL', 'AVERSA', 'VRSMNL97H16C352G', '1997-06-16', 'CATANZARO', 'VIA CASTELLO 31', 'LECCO', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(27, 0, 'LUCA', 'BAGLIONI', 'BGLLCU96B17E507V', '1996-02-17', 'LECCO', 'VIA DEL MARE'', 4', 'GALBIATE', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(28, 0, 'ELISA', 'BERNINI', 'BRNLSE97T43E507V', '1997-12-03', 'LECCO', 'VIA XXV APRILE, 7', 'BRIVIO', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(29, 0, 'FILIPPO', 'COLELLA', 'CLLFPP97C28E507B', '1997-03-28', 'LECCO', 'VIA A. STOPPANI,592', 'GARLATE', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(30, 0, 'MARCO', 'COLOMBO', 'CLMMRC96C05E507F', '1996-03-05', 'LECCO', 'VIA PRIVATA COLDOGNA, 5', 'BARZIO', 'TELECOMUNICAZIONI', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(31, 0, 'DANIELE FRANCESCO', 'DI LECCE', 'DLCDLF97B03E507A', '1997-02-03', 'LECCO', 'VIA BONFANTI, 10', 'BOSISIO PARINI', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(32, 0, 'LORENZO', 'ESPOSITO', 'SPSLNZ97P10E507G', '1997-09-10', 'LECCO', 'VIA LAVELLO 2', 'CALOLZIOCORTE', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(33, 0, 'ELIA', 'FRANTUMA', 'FRNLEI97P14E507X', '1997-09-14', 'LECCO', 'VIA GRADISCA 4', 'LECCO', 'TELECOMUNICAZIONI', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(34, 0, 'ERIKA', 'GATTO', 'GTTRKE97M44E507I', '1997-08-04', 'LECCO', 'VIA STATALE, 22', 'GARLATE', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(35, 0, 'CARLO', 'LAZZARI', 'LZZCRL97H04D416Z', '1997-06-04', 'ERBA', 'VIA SABATELLI 59/B', 'VALMADRERA', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(36, 0, 'STEFANO', 'LONGONI', 'LNGSFN98D26D416B', '1998-04-26', 'ERBA', 'VIA DON MINZONI, 5', 'CANZO', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(37, 0, 'STEFANO', 'MAGGIONI', 'MGGSFN97L16D416D', '1997-07-16', 'ERBA', 'VIA G. GARIBALDI, 10', 'MERONE', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(38, 0, 'MATTIA', 'MAURI', 'MRAMTT97R10E507X', '1997-10-10', 'LECCO', 'VIA CARAVAGGIO, 2', 'TACENO', 'TELECOMUNICAZIONI', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(39, 0, 'LEONARDO', 'MOIANA', 'MNOLRD97R21C933F', '1997-10-21', 'COMO', 'VIA CARCANO, 12', 'ALBAVILLA', 'TELECOMUNICAZIONI', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(40, 0, 'GIORGIO', 'PIAZZA', 'PZZGRG97P03E507N', '1997-09-03', 'LECCO', 'VIA POSTALE VECCHIA, 5', 'OLGINATE', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(41, 0, 'NICOLO''', 'PIOVAN', 'PVNNCL97P13E507Q', '1997-09-13', 'LECCO', 'VIA S.ANTONIO 7', 'CALOLZIOCORTE', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(42, 0, 'BENIAMINO', 'PISANIELLO', 'PSNBMN96A03F704J', '1996-01-03', 'MONZA', 'CESARE BATTISTI, 7/C', 'ERBA', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(43, 0, 'ALESSANDRO', 'PRESTI', 'PRSLSN97E04E507S', '1997-05-04', 'LECCO', 'VIA ITALIA, 9', 'AIRUNO', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(44, 0, 'ANDREA', 'RAVASIO', 'RVSNDR97A09E507G', '1997-01-09', 'LECCO', 'VIA GIACOMO PUCCINI,12', 'TORRE DE'' BUSI', 'TELECOMUNICAZIONI', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(45, 0, 'JORDI', 'RUSCONI', 'RSCJRD96D07E507G', '1996-04-07', 'LECCO', 'VIA PRIV. SANTA MARIA, 1', 'LECCO', 'TELECOMUNICAZIONI', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(46, 0, 'STEFANO', 'SALA', 'SLASFN96D05E507T', '1996-04-05', 'LECCO', 'VIA COLOMBARA, 2', 'MONTE MARENZO', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(47, 0, 'LORENZO', 'TOSETTI', 'TSTLNZ97A29E507G', '1997-01-29', 'LECCO', 'VIA FIOCCHI 2', 'LECCO', 'INFORMATICA', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2),
(48, 0, 'FEDERICO', 'VERLINO', 'VRLFRC97B19E507A', '1997-02-19', 'LECCO', 'VIA S. CARLO BORROMEO 81', 'VALMADRERA', 'TELECOMUNICAZIONI', '2015-05-20 06:47:32', '2015-05-20 06:47:32', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `tutorScuola`
--

CREATE TABLE IF NOT EXISTS `tutorScuola` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cognome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `cellulare` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `tutorScuola`
--

INSERT INTO `tutorScuola` (`id`, `nome`, `cognome`, `telefono`, `cellulare`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Paolo', 'Achler', 533564, 63153155, 'paolo@figini.it', '2015-05-20 06:46:55', '2015-05-20 06:46:55'),
(2, 'Carmelo Antonio', 'Burgio', 35343456, 154235, 'burgio@libero.iuty', '2015-05-20 06:46:55', '2015-05-20 06:46:55');

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `partecipazione_stage`
--
ALTER TABLE `partecipazione_stage`
  ADD CONSTRAINT `partecipazione_stage_stage_id_foreign` FOREIGN KEY (`stage_id`) REFERENCES `stage` (`id`),
  ADD CONSTRAINT `partecipazione_stage_studente_id_foreign` FOREIGN KEY (`studente_id`) REFERENCES `studenti` (`id`);

--
-- Limiti per la tabella `periodi`
--
ALTER TABLE `periodi`
  ADD CONSTRAINT `periodi_partecipazione_stage_id_foreign` FOREIGN KEY (`partecipazione_stage_id`) REFERENCES `partecipazione_stage` (`id`);

--
-- Limiti per la tabella `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `stage_tutor_scuola_id_foreign` FOREIGN KEY (`tutor_scuola_id`) REFERENCES `tutorScuola` (`id`),
  ADD CONSTRAINT `stage_azienda_id_foreign` FOREIGN KEY (`azienda_id`) REFERENCES `aziende` (`id`);

--
-- Limiti per la tabella `studenti`
--
ALTER TABLE `studenti`
  ADD CONSTRAINT `studenti_classe_id_foreign` FOREIGN KEY (`classe_id`) REFERENCES `classi` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
