-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 18, 2024 alle 20:43
-- Versione del server: 8.0.33
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elaborato_web`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `commento`
--

CREATE TABLE `commento` (
  `ID_Evento` int NOT NULL,
  `Autore_Commento` varchar(100) NOT NULL,
  `Testo_Commento` mediumtext NOT NULL,
  `DataPubblicazione` datetime NOT NULL,
  `Visualizzato` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `evento`
--

CREATE TABLE `evento` (
  `ID_Evento` int NOT NULL,
  `nome_evento` varchar(100) NOT NULL,
  `Data_Evento` datetime NOT NULL,
  `Luogo` varchar(100) NOT NULL,
  `Descrizione` mediumtext NOT NULL,
  `DataPubblicazione` date NOT NULL,
  `Username_Autore` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `evento`
--

INSERT INTO `evento` (`ID_Evento`, `nome_evento`, `Data_Evento`, `Luogo`, `Descrizione`, `dataPubblicazione`, `Username_Autore`) VALUES
(3, 'Libri in Piazza', '2024-02-15 10:00:00', 'Piazza del Popolo, Roma', 'Un\'iniziativa per gli amanti dei libri! Portate i vostri libri letti e scambiateli con altri appassionati. Saranno presenti anche bancarelle di libri usati a prezzi convenienti. Un\'occasione perfetta per incontrare nuove persone e condividere la passione per la lettura.', '2024-01-14', 'marti_moretti'),
(4, 'Serata Letteraria: Un Libro, Una Conversazione', '2024-03-28 18:30:00', 'Biblioteca Comunale, Via dei Libri, Milano', 'Un\'opportunità per gli amanti della letteratura di condividere le proprie letture preferite. Ogni partecipante è invitato a portare un libro che ha apprezzato particolarmente e a condividerne la storia e le ragioni che l\'hanno reso speciale. Un modo informale e divertente per scoprire nuovi libri e incontrare persone con interessi simili.', '2024-01-17', 'matteoooo'),
(5, 'Festival delle Parole Incantate', '2024-02-14 16:00:00', 'Biblioteca Centrale, Via del Seminario, Genova', 'Il \"Festival delle Parole Incantate\" è un evento letterario che celebra la magia dei libri e dell\'arte della scrittura. Durante questo weekend emozionante, la biblioteca si trasformerà in un luogo incantato, dove lettori, scrittori e appassionati di libri potranno condividere la loro passione per la lettura e l\'esplorazione di mondi fantastici.', '2024-01-02', 'lucamelis'),
(7, 'Versi e Voci: Serata Letteraria sotto le Stelle', '2024-03-14 19:00:00', 'Giardino delle Arti, Via degli Artisti 123, Padova', '\"Versi e Voci: Serata Letteraria sotto le Stelle\" è un evento unico che celebra l\'arte della scrittura e dell\'espressione vocale. Immersi nella magica atmosfera del Giardino delle Arti, gli amanti della letteratura avranno l\'opportunità di connettersi con autori emergenti e affermati mentre condividono le loro opere più ispirate.', '2024-01-18', 'sarina'),
(9, 'Inchiostro e Colori: Festival delle Arti Multimediali', '2024-04-07 15:00:00', 'Centro Culturale Creativo, Piazza dell\'Arte 56, Cesena', '\"Inchiostro e Colori: Festival delle Arti Multimediali\" è un\'immersione totale nell\'esplorazione dell\'arte in tutte le sue forme, dalla scrittura alla pittura, dalla musica alla fotografia. Questo eclettico festival offre un palcoscenico vibrante per artisti di diverse discipline, invitando la comunità a scoprire e apprezzare l\'interconnettività delle diverse forme d\'arte.', '2024-01-18', 'francescoferrari'),
(10, 'Serata Letteraria \"Parole in Viaggio\"', '2024-03-10 19:00:00', 'Libreria Culturale \"La Quercia\", Via degli Scrittori 8, Genova', '\"Parole in Viaggio\" è un evento dedicato alla magia della scrittura e della letteratura. La serata offrirà un\'opportunità unica di incontrare autori locali, ascoltare estratti dalle loro opere e partecipare a discussioni aperte sul processo creativo. Sarà un\'occasione speciale per gli amanti della scrittura e della lettura di condividere le proprie esperienze e passioni in un ambiente accogliente e ispirante. La libreria sarà aperta per l\'acquisto di libri degli autori presenti e per trascorrere una serata immersi nella bellezza delle parole.', '2024-01-18', 'paolamarcelli'),
(11, 'Festival Letterario \"Inchiostro Virtuale\"', '2024-02-18 17:00:00', 'Biblioteca Nazionale, Roma, Italia', 'Il Festival Letterario \"Inchiostro Virtuale\" celebra l\'arte della scrittura e della lettura, offrendo agli appassionati di letteratura l\'opportunità di incontrare autori famosi, partecipare a sessioni di lettura, e discutere di tendenze letterarie moderne. Saranno organizzati workshop creativi e ci saranno anteprime di nuovi romanzi e raccolte di poesie.', '2024-01-22', 'chiaCasti'),
(12, 'Conferenza Internazionale sulla Poesia Contemporanea', '2024-03-14 15:00:00', 'Maison de la Poésie, Parigi, Francia', 'La Conferenza Internazionale sulla Poesia Contemporanea riunisce poeti, critici e studiosi di poesia da tutto il mondo per discutere delle ultime tendenze e innovazioni nella poesia contemporanea. Saranno presentate letture di poesie, tavole rotonde su argomenti poetici e si esploreranno le connessioni tra la poesia e altri media artistici.', '2024-01-19', 'virginiafoschi');

-- --------------------------------------------------------

--
-- Struttura della tabella `genere`
--

CREATE TABLE `genere` (
  `Nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `genere`
--

INSERT INTO `genere` (`Nome`) VALUES
('Autobiografia'),
('Avventura e azione'),
('Biografia'),
('Drammatico'),
('Fantascienza'),
('Giallo'),
('Romanzo'),
('Romanzo di formazione'),
('Romanzo poliziesco'),
('Romanzo storico'),
('Rosa'),
('Thriller'),
('Umoristico'),
('Young Adult');

-- --------------------------------------------------------

--
-- Struttura della tabella `interazione`
--

CREATE TABLE `interazione` (
  `Autore_Recensione` varchar(100) NOT NULL,
  `Titolo_Libro` varchar(100) NOT NULL,
  `Autore_Libro` varchar(100) NOT NULL,
  `Username_Int` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Visualizzato` tinyint(1) NOT NULL DEFAULT '0',
  `DataPubblicazione` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `interesse`
--

CREATE TABLE `interesse` (
  `ID_Evento` int NOT NULL,
  `Username_Int` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Visualizzato` tinyint(1) NOT NULL DEFAULT '0',
  `DataPubblicazione` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `libro_postato`
--

CREATE TABLE `libro_postato` (
  `ID_Libro` int NOT NULL,
  `Titolo` varchar(100) NOT NULL,
  `Autore` varchar(100) NOT NULL,
  `Casa_Editrice` varchar(100) NOT NULL,
  `Trama` mediumtext NOT NULL,
  `Condizioni` varchar(100) NOT NULL,
  `Immagine` varchar(100) NOT NULL,
  `DataPubblicazione` date NOT NULL DEFAULT '2023-10-01',
  `Username_Autore` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Nome_Genere` varchar(100) NOT NULL,
  `Eliminato` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `libro_postato`
--

INSERT INTO `libro_postato` (`ID_Libro`, `Titolo`, `Autore`, `Casa_Editrice`, `Trama`, `Condizioni`, `Immagine`, `dataPubblicazione`, `Username_Autore`, `Nome_Genere`, `Eliminato`) VALUES
(1, 'Mille Splendidi Soli', 'Khaled Hosseini', 'PIEMME', 'A quindici anni, Mariam non è mai stata a Herat. Dalla sua \"kolba\" di legno in cima alla collina, osserva i minareti in lontananza e attende con ansia l\'arrivo del giovedì, il giorno in cui il padre le fa visita e le parla di poeti e giardini meravigliosi, di razzi che atterrano sulla luna e dei film che proietta nel suo cinema. Mariam vorrebbe avere le ali per raggiungere la casa del padre, dove lui non la porterà mai perché Mariam è una \"harami\", una bastarda, e sarebbe un\'umiliazione per le sue tre mogli e i dieci figli legittimi ospitarla sotto lo stesso tetto. Vorrebbe anche andare a scuola, ma sarebbe inutile, le dice sua madre, come lucidare una sputacchiera. L\'unica cosa che deve imparare è la sopportazione. Laila è nata a Kabul la notte della rivoluzione, nell\'aprile del 1978. Aveva solo due anni quando i suoi fratelli si sono arruolati nella jihad. Per questo, il giorno del loro funerale, le è difficile piangere. Per Laila, il vero fratello è Tariq, il bambino dei vicini, che ha perso una gamba su una mina antiuomo ma sa difenderla dai dispetti dei coetanei; il compagno di giochi che le insegna le parolacce in pashtu e ogni sera le dà la buonanotte con segnali luminosi dalla finestra. Mariam e Laila non potrebbero essere più diverse, ma la guerra le farà incontrare in modo imprevedibile. Dall\'intreccio di due destini, una storia che ripercorre la storia di un paese in cerca di pace, dove l\'amicizia e l\'amore sembrano ancora l\'unica salvezza.', 'Ottime', 'milleSplendidiSoli.jpg', '2023-10-01', 'sarina', 'Romanzo', 0),
(2, 'Una storia semplice', 'Leonardo Sciascia', 'Adelphi', '\"Una storia semplice\" è una storia complicatissima, un giallo siciliano, con sfondo di mafia e droga. Eppure mai - ed è un vero tour de force - l\'autore si trova costretto a nominare sia l\'una sia l\'altra parola. Tutto comincia con una telefonata alla polizia, con un messaggio troncato, con un apparente suicidio. E subito, come se assistessimo alla crescita accelerata di un fiore, la storia si espande, si dilata, si aggroviglia, senza lasciarci neppure l\'opportunità di riflettere. Davanti alla proliferazione dei fatti, non solo noi lettori ma anche l\'unico personaggio che nel romanzo ricerca la verità, un brigadiere, siamo chiamati a far agire nel tempo minimo i nostri riflessi - un tempo che può ridursi, come in una memorabile scena del romanzo, a una frazione di secondo. È forse questo l\'estremo azzardo concesso a chi vuole \"ancora una volta scandagliare scrupolosamente le possibilità che forse ancora restano alla giustizia\".', 'Buone', 'unaStoriaSemplice.jpg', '2023-12-11', 'francescoferrari', 'Romanzo poliziesco', 0),
(3, 'Cercando alaska', 'John Green', 'Rizzoli', 'Miles Halter, sedici anni, colto e introverso, comincia a frequentare un\'esclusiva prep school dell\'Alabama. Qui lega subito con Chip, povero e brillantissimo, ammesso alla scuola grazie a una borsa di studio, e con Alaska Young, divertente, sexy, attraente, avventurosa studentessa di cui tutti sono innamorati. Insieme bevono, fumano, stanno svegli la notte e inventano scherzi brillanti e complicati. Ma Miles non ci mette molto a capire che Alaska è infelice, e quando lei muore schiantandosi in auto vuole sapere perché. È stato davvero un incidente? O Alaska ha cercato la morte?', 'Ottime', 'cercando-Alaska.jpg', '2023-10-15', 'lorenzozattoni01', 'Romanzo', 0),
(4, 'Il mondo di Sofia', 'Jostein Gaarder', 'Longanesi & C.', 'Questo è il romanzo di Sofia Amundsen, una ragazzina come tante altre. Tutto comincia dalle strane domande che spuntano dalla sua cassetta delle lettere, passa attraverso le intriganti risposte dell\'eccentrico filosofo Alberto Knox e approda a una bislacca festa di compleanno nel giardino degli Amundsen... Ma è anche il romanzo di Hilde Moller Knag, e per lei comincia proprio nel giorno del suo compleanno, passa attraverso l\'insolito regalo che suo padre, il maggiore Albert Knag, le ha inviato dal Libano e approda a una notte stellata nel giardino della famiglia Knag a Lillesand... Ma è anche il romanzo appassionante della storia della filosofia, e per tutti noi comincia dagli atomi di Democrito e dalle idee di Platone, passa attraverso le geniali intuizioni di Galileo e il complesso sistema di Hegel e approda all\'esistenzialismo di Sartre e al multiforme panorama del pensiero contemporaneo. La copertina del libro può variare.', 'Ottime', 'mondoSofia.jpg', '2024-01-16', 'marti_moretti', 'Romanzo', 0),
(7, 'Una finestra sul mare', 'Corina Bomann', 'Giunti', 'Da generazioni i suoi antenati percorrono ogni giorno il sentiero tra le ginestre che conduce in cima alla scogliera di Land\'s End, in Cornovaglia. Un sentiero pieno di segreti, sepolti nel profondo del suo cuore. Ultima discendente di una famiglia di guardiani del faro, Janet è ormai anziana, ma non riesce a rinunciare del tutto a quell\'antico rituale. Ma quel giorno, giunta in cima al promontorio, scorge una ragazza sul bordo della scogliera, lo sguardo che scruta il vortice delle onde. Troppe volte ha visto quella scena per non intuire subito le sue intenzioni. Con parole confortanti, Janet porta con sé la giovane Kim, accogliendola nel suo piccolo cottage coperto d\'edera. Qui la ragazza le confida il motivo della sua disperazione: la morte dell\'uomo che amava. È così che Janet decide di farle un dono molto speciale: un vecchio diario ritrovato sulla spiaggia dal suo bisnonno. Le memorie di Leandra, che nel 1813, proprio su quegli scogli, aveva cercato di sfuggire al suo doloroso destino. Finché la sua strada non aveva incrociato quella di Christian, il misterioso guardiano del faro.', 'Ottime', 'download.jpg', '2023-10-01', 'paolamarcelli', 'Romanzo', 0),
(8, 'Better-Collisione', 'Leighton Carrie', 'Magazzini Salani', 'Vanessa, studentessa al secondo anno di college, ha un amore viscerale per i libri e la pioggia e un legame indissolubile con i suoi migliori amici. Segnata dal difficile divorzio dei genitori, ha trovato conforto in Travis, all’apparenza il bravo ragazzo che tutte le madri – compresala sua – vorrebbero accanto alle loro figlie. Con lui spera di riuscire a costruire una felicità che ormai da troppo tempo le manca. Dopo due anni, però, anche quell’amore sembra essersi incrinato e nel cuore di Vanessa restano solo macerie. Almeno fino al momento in cui, a lezione, si imbatte per la prima volta in un nuovo compagno di corso, con il corpo ricoperto di tatuaggi e due occhi verdi in cui è fin troppo facile perdersi. Thomas è un miscuglio esplosivo di fascino e arroganza, vittima e carnefice dal passato tormentato. Lui e Vanessa, così diversi tra loro eppure in fondo così simili, si incastrano come pezzi di un puzzle, dando vita a un rapporto tormentato, fatto di attimi di passione e squarci di tenerezza, litigi furiosi e riconciliazioni. Ma Vanessa vuole di più, sogna l’amore vero, romantico e totalizzante, quello raccontato nei romanzi che non si stanca mai di rileggere. Thomas, invece, rifugge ogni legame, nel suo petto si agita un perenne groviglio di spine. Eppure, se capirsi è difficile, separarsi è impossibile.', 'Ottime', 'CopertinaLibro.png', '2024-01-18', 'chiaCasti', 'Rosa', 0),
(9, 'La corte di rose e spine', 'Sarah J.Maas', 'Mondadori', 'Una volta tornata al suo villaggio dopo aver ucciso quel lupo spaventoso, però, la diciannovenne Feyre riceve la visita di una creatura bestiale che irrompe a casa sua per chiederle conto di ciò che ha appena fatto. L\'animale che ha ucciso, infatti, non era un lupo comune ma un Fae e secondo la legge \"ogni attacco ingiustificato da parte di un umano a un essere fatato può essere ripagato solo con una vita umana in cambio. Una vita per una vita\". Ma non è la morte il destino di Feyre, bensì l\'allontanamento dalla sua famiglia, dal suo villaggio, dal mondo degli umani, per finire nel Regno di Prythian, una terra magica e ingannevole di cui fino a quel momento aveva solamente sentito raccontare nelle leggende. Qui Feyre sarà libera di muoversi ma non di tornare a casa, e vivrà nel castello del suo rapitore, Tamlin, che, come ben presto scoprirà la ragazza, non è un animale mostruoso ma un essere immortale, costretto a nascondere il proprio volto dietro a una maschera. Una creatura nei confronti della quale, dopo la fredda ostilità iniziale, e nonostante i rischi che questo comporta, Feyre inizierà a provare un interesse via via più forte che si trasformerà ben presto in una passione dirompente. Quando poi un\'ombra antica si allungherà minacciosa sul regno fatato, la ragazza si troverà di fronte a un bivio drammatico. Se non dovesse trovare il modo di fermarla, sancirà la condanna di Tamlin e del suo mondo...', 'Buone', 'lacorte.jpg', '2024-01-01', 'virginiafoschi', 'Fantascienza', 0),
(10, 'La corona di ossa', 'Jennifer L. Armentrout', 'HarperCollins', 'È stata... Vittima e sopravvissuta: Poppy non avrebbe mai immaginato di innamorarsi del principe Casteel, e men che meno di essere ricambiata con lo stesso trasporto. L’unica cosa che desidera è godersi quella felicità inaspettata, ma il dovere li chiama: devono trovare i rispettivi fratelli prima che sia troppo tardi, e tutto lascia pensare che sarà una missione pericolosa, con conseguenze inimmaginabili. Nemica e guerriera: Poppy non desiderava altro che tornare padrona della propria vita. Di certo non aspirava a controllare quella degli altri, eppure ora deve scegliere se rinunciare al suo diritto di nascita o appropriarsi della corona di ossa dorate e diventare la Regina di Carne e Fuoco. Ma quando vengono alla luce gli oscuri peccati e i sanguinosi segreti del regno, una potenza a lungo dimenticata riemerge, più minacciosa che mai, ed è disposta a tutto per impedire che Poppy porti quella corona. Amante e anima gemella: Il pericolo più grande per Atlantia, però, si annida a occidente: la Regina di Sangue e Cenere trama da secoli per realizzare i suoi progetti, e per impedirlo Cas e Poppy dovranno addentrarsi nelle Terre degli dei e risvegliarne il re. Dovranno affrontare segreti terribili, tradimenti devastanti e nemici determinati a distruggere tutto ciò per cui loro hanno lottato, ma soprattutto dovranno decidere fino a che punto sono disposti a spingersi per il loro popolo... e l’uno per l’altra. E adesso diventerà regina...', 'Ottime', 'coronaDiOssa.jpg', '2024-01-19', 'chiaCasti', 'Romanzo', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `notifiche`
--

CREATE TABLE `notifiche` (
  `ID_Notifica` int NOT NULL,
  `ID_Libro` int NOT NULL,
  `Username_Int` varchar(100) NOT NULL,
  `Tipo` varchar(100) NOT NULL,
  `DataPubblicazione` datetime NOT NULL,
  `Visualizzato` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `preferenze`
--

CREATE TABLE `preferenze` (
  `Nome_Genere` varchar(100) NOT NULL,
  `Username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `preferenze`
--

INSERT INTO `preferenze` (`Nome_Genere`, `Username`) VALUES
('Autobiografia', 'giulia_marchetti'),
('Autobiografia', 'sarina'),
('Avventura e azione', 'margheritagaggi'),
('Avventura e azione', 'matteoooo'),
('Avventura e azione', 'paolamarcelli'),
('Avventura e azione', 'sarina'),
('Biografia', 'lucamelis'),
('Biografia', 'matteoooo'),
('Biografia', 'sarina'),
('Drammatico', 'lucamelis'),
('Drammatico', 'matteoooo'),
('Drammatico', 'sarina'),
('Fantascienza', 'chiaCasti'),
('Fantascienza', 'giulia_marchetti'),
('Fantascienza', 'lucamelis'),
('Fantascienza', 'matteoooo'),
('Fantascienza', 'sarina'),
('Giallo', 'lucamelis'),
('Giallo', 'marghebalz'),
('Giallo', 'sarina'),
('Giallo', 'virginiafoschi'),
('Romanzo', 'chiaCasti'),
('Romanzo', 'lorenzozattoni01'),
('Romanzo', 'marghebalz'),
('Romanzo di formazione', 'giulia_marchetti'),
('Romanzo di formazione', 'sarina'),
('Romanzo storico', 'sarina'),
('Rosa', 'giulia_marchetti'),
('Rosa', 'sarina'),
('Rosa', 'virginiafoschi'),
('Thriller', 'lorenzozattoni01'),
('Thriller', 'marti_moretti'),
('Thriller', 'sarina'),
('Umoristico', 'francescoferrari'),
('Umoristico', 'giulia_marchetti'),
('Umoristico', 'sarina'),
('Young Adult', 'lorenzozattoni01'),
('Young Adult', 'sarina');

-- --------------------------------------------------------

--
-- Struttura della tabella `recensione`
--

CREATE TABLE `recensione` (
  `Autore_Recensione` varchar(100) NOT NULL,
  `Voto` int NOT NULL,
  `Titolo_Libro` varchar(100) NOT NULL,
  `Autore_Libro` varchar(100) NOT NULL,
  `Immagine` varchar(100) NOT NULL,
  `Recensione` mediumtext NOT NULL,
  `DataPubblicazione` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `recensione`
--

INSERT INTO `recensione` (`Autore_Recensione`, `Voto`, `Titolo_Libro`, `Autore_Libro`, `Immagine`, `Recensione`, `DataPubblicazione`) VALUES
('chiaCasti', 5, 'La corona di ossa', 'Jennifer L.Armentrout', 'coronaDiOssa.jpg', 'Anche questo terzo capitolo della saga Blodd and Ash, scritto da Jennifer Armentrout, è stato piacevole da leggere. L\'autrice si conferma con la sua straordinaria capacità di raccontare storie. In questo libro, la protagonista Poppy acquisisce tutta la consapevolezza di quello che è e di quello che può scatenare. Ma questo percorso è lento e inesorabile, che si conclude nelle ultime pagine della storia . Ci sono altri personaggi carismatici e importanti al fine della trama.', '2024-01-09'),
('francescoferrari', 5, 'Il cacciatore di aquiloni', 'Khaled Hosseini', 'il-cacciatore-di-aquiloni.jpg', 'Un racconto toccante e commovente, che riesce a strapparti più di una lacrima durante la lettura. Inoltre trasmette tutto il dolore che la guerra infligge e porta a riflettere su tanti temi e sentimenti. Scrittura scorrevole che lascia il lettore inchiodato al libro fino alla fine. Consiglio vivamente', '2024-01-10'),
('francescoferrari', 5, 'Mille Splendidi Soli', 'Khaled Hosseini', 'milleSplendidiSoli.jpg', 'Non mi entusiasmo facilmente ma so riconoscere il tocco speciale che ha Hosseini e che davvero pochi contemporanei hanno. Dopo il Cacciatore di Aquiloni che è senza dubbio uno dei migliori libri letti fino ad oggi, questo splendido sole illuminerà le giornate estive e non, legando con un dolente filo il lettore ai protagonisti.', '2024-01-14'),
('giulia_marchetti', 4, 'Una storia semplice', 'Leonardo Sciascia', 'unaStoriaSemplice.jpg', 'In poche pagine un racconto che catalizza l’attenzione fino alla fine, un giallo avvincente che fa trattenere il fiato fino all’ epilogo inaspettato. E’ stata la mia prima lettura di Sciascia e lo consiglio vivamente!', '2024-01-13'),
('paolamarcelli', 5, 'Mille splendidi soli', 'Khaled Hosseini', 'milleSplendidiSoli.jpg', 'Che dire: un capolavoro! Quante lacrime versate!!! Struggente, amaro, meraviglioso. Da leggere e rileggere.', '2024-01-18'),
('virginiafoschi', 1, 'Stigma', 'Erin Doom', 'stigma.jpg', 'Ho appena finito di leggere il libro e ne sono rimasta davvero delusa. Ho AMATO con tutta me stessa Il fabbricante di Lacrime, perciò appena ho scoperto di questo libro scritto sempre dalla stessa autrice, mi sono fiondata in libreria a comprarlo. Come ho detto, però, è stato una delusione totale; la lettura non è per niente scorrevole, è noioso ed estremamente ripetitivo, si fa davvero fatica a leggere.', '2024-01-23');

-- --------------------------------------------------------

--
-- Struttura della tabella `scambio`
--

CREATE TABLE `scambio` (
  `ID_Scambio` int NOT NULL,
  `Data_Inizio` date NOT NULL,
  `ID_Libro1` int NOT NULL,
  `ID_Libro2` int NOT NULL,
  `Data_Fine` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `segue`
--

CREATE TABLE `segue` (
  `Username_SeguitoDa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Username_Seguito` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `Nome` varchar(100) NOT NULL,
  `Cognome` varchar(100) NOT NULL,
  `Username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Indirizzo` varchar(100) NOT NULL,
  `Immagine` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`Nome`, `Cognome`, `Username`, `Password`, `Indirizzo`, `Immagine`) VALUES
('Chiara', 'Castiglioni', 'chiaCasti', '$2y$10$Iv8aC9nJ2SaOmycxcJj/.uC/b5TUb6h84715HOKNOmQDgbygqKSj2', 'via Ticino 12, Rimini', 'vario-793646.610x431.jpg'),
('Francesco', 'Ferrari', 'francescoferrari', '$2y$10$x3dI3i.xnP2IPIgvJM.6Menp.robQ0iikdFBwRP8d8RWMQvNvKbZ6', 'via Firenze 1011, Firenze', 'colore-acrilico-rosso-cardinale.jpg'),
('Giulia', 'Marchetti', 'giulia_marchetti', '$2y$10$A0XFmnukBqXOLRFseFg6.ueGg.Q7WR/PKHkQIfi9d/B9XGM1J1l3O', 'via Napoli 789, Napoli', 'immagineProfilo.jpg'),
('Lorenzo', 'Zattoni', 'lorenzozattoni01', '$2y$10$KOnzTsiXjJPpmafKi9VW8OXWNJ6Bxsv2FsnidFD9Nkwd1rJcquWya', 'via del Savio 12, Cesena', 'viola-1.jpg'),
('Luca', 'Melis', 'lucamelis', '$2y$10$juTq2Yimp05uz6mVOz9D1uUmGXsEO5cJ4pItE7L0UwuQMvNTMCKSK', 'via Genova 22, Genova', 'immagineProfilo.jpg'),
('Margherita', 'Balzoni', 'marghebalz', '$2y$10$81NUNmD/BqHfacOQcngx6eu66zCTDhb1jDVxdwZD4tuEl3Ld8sx3W', 'via Veneto 28, Riccione', 'viola-1.jpg'),
('Margherita', 'Gaggi', 'margheritagaggi', '$2y$10$b9dPGw8QjMZLvBxvyPPTB.GgW8VySiVPaO04JAn8GFjaIeQUVNrV6', 'via del Savio 12, Cesena', 'coloreverde.jpg'),
('Martina', 'Moretti', 'marti_moretti', '$2y$10$dHks4l4VABKgbBB5feh45uw09CDiyMB9uNC7mVZshdpcjpVjEF3hi', 'via Palermo 1213, Palermo', 'pixelfactory-instagram-cover.jpg'),
('Matteo', 'Rossetti', 'matteoooo', '$2y$10$R8FFN3Qb2RWhwAyevZLKROsnsHPPdj2vDuznpBJqZxCv/.n9rzhMO', 'via Bologna 12, Bologna', 'viola-1.jpg'),
('Paola', 'Marcelli', 'paolamarcelli', '$2y$10$vrGAbdlIp9LGdddGBlXB3elyXmSapno4zkD4GuF5curO5K1by5Lmu', 'via Venezia 126, Venezia', 'immagineProfilo.jpg'),
('Sara', 'Conti', 'sarina', '$2y$10$x3dI3i.xnP2IPIgvJM.6Menp.robQ0iikdFBwRP8d8RWMQvNvKbZ6', 'via Torino 1617, Torino', 'vario-793646.610x431.jpg'),
('Virginia', 'Foschi', 'virginiafoschi', '$2y$10$X5hCnGNruud5StVDccB8quHaNt/LGFULpp4dg8sWRTcjMyLC5DADG', 'via Cesena 12, Cesena', 'viola-1.jpg');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `commento`
--
ALTER TABLE `commento`
  ADD PRIMARY KEY (`ID_Evento`,`Autore_Commento`,`DataPubblicazione`),
  ADD KEY `FKPUBBLICAC` (`Autore_Commento`);

--
-- Indici per le tabelle `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`ID_Evento`),
  ADD KEY `FKPROPONE` (`Username_Autore`);

--
-- Indici per le tabelle `genere`
--
ALTER TABLE `genere`
  ADD PRIMARY KEY (`Nome`);

--
-- Indici per le tabelle `interazione`
--
ALTER TABLE `interazione`
  ADD PRIMARY KEY (`Username_Int`,`Autore_Recensione`,`Titolo_Libro`,`Autore_Libro`),
  ADD KEY `FKINT_REC` (`Autore_Recensione`,`Titolo_Libro`,`Autore_Libro`);

--
-- Indici per le tabelle `interesse`
--
ALTER TABLE `interesse`
  ADD PRIMARY KEY (`Username_Int`,`ID_Evento`),
  ADD KEY `FKINT_EVE` (`ID_Evento`);

--
-- Indici per le tabelle `libro_postato`
--
ALTER TABLE `libro_postato`
  ADD PRIMARY KEY (`ID_Libro`),
  ADD KEY `FKPOSTA` (`Username_Autore`),
  ADD KEY `FKAPPARTENENZA` (`Nome_Genere`);

--
-- Indici per le tabelle `notifiche`
--
ALTER TABLE `notifiche`
  ADD PRIMARY KEY (`ID_Notifica`),
  ADD UNIQUE KEY `IDNOTIFICHE` (`Username_Int`,`ID_Libro`,`Tipo`,`DataPubblicazione`),
  ADD KEY `FKGENERA` (`ID_Libro`);

--
-- Indici per le tabelle `preferenze`
--
ALTER TABLE `preferenze`
  ADD PRIMARY KEY (`Username`,`Nome_Genere`),
  ADD KEY `FKPRE_GEN` (`Nome_Genere`);

--
-- Indici per le tabelle `recensione`
--
ALTER TABLE `recensione`
  ADD PRIMARY KEY (`Autore_Recensione`,`Titolo_Libro`,`Autore_Libro`);

--
-- Indici per le tabelle `scambio`
--
ALTER TABLE `scambio`
  ADD PRIMARY KEY (`ID_Scambio`),
  ADD UNIQUE KEY `IDSCAMBIO_1` (`ID_Libro1`,`ID_Libro2`,`Data_Inizio`),
  ADD KEY `FKPROPOSTO2` (`ID_Libro2`);

--
-- Indici per le tabelle `segue`
--
ALTER TABLE `segue`
  ADD PRIMARY KEY (`Username_Seguito`,`Username_SeguitoDa`),
  ADD KEY `FKSEG_UTE` (`Username_SeguitoDa`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `evento`
--
ALTER TABLE `evento`
  MODIFY `ID_Evento` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT per la tabella `libro_postato`
--
ALTER TABLE `libro_postato`
  MODIFY `ID_Libro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `notifiche`
--
ALTER TABLE `notifiche`
  MODIFY `ID_Notifica` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT per la tabella `scambio`
--
ALTER TABLE `scambio`
  MODIFY `ID_Scambio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `commento`
--
ALTER TABLE `commento`
  ADD CONSTRAINT `FKINT_EVEC` FOREIGN KEY (`ID_Evento`) REFERENCES `evento` (`ID_Evento`),
  ADD CONSTRAINT `FKPUBBLICAC` FOREIGN KEY (`Autore_Commento`) REFERENCES `utente` (`Username`);

--
-- Limiti per la tabella `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `FKPROPONE` FOREIGN KEY (`Username_Autore`) REFERENCES `utente` (`Username`);

--
-- Limiti per la tabella `interazione`
--
ALTER TABLE `interazione`
  ADD CONSTRAINT `FKINT_REC` FOREIGN KEY (`Autore_Recensione`,`Titolo_Libro`,`Autore_Libro`) REFERENCES `recensione` (`Autore_Recensione`, `Titolo_Libro`, `Autore_Libro`),
  ADD CONSTRAINT `FKINT_UTE` FOREIGN KEY (`Username_Int`) REFERENCES `utente` (`Username`);

--
-- Limiti per la tabella `interesse`
--
ALTER TABLE `interesse`
  ADD CONSTRAINT `FKINT_EVE` FOREIGN KEY (`ID_Evento`) REFERENCES `evento` (`ID_Evento`),
  ADD CONSTRAINT `FKINT_UTEN` FOREIGN KEY (`Username_Int`) REFERENCES `utente` (`Username`);

--
-- Limiti per la tabella `libro_postato`
--
ALTER TABLE `libro_postato`
  ADD CONSTRAINT `FKAPPARTENENZA` FOREIGN KEY (`Nome_Genere`) REFERENCES `genere` (`Nome`),
  ADD CONSTRAINT `FKPOSTA` FOREIGN KEY (`Username_Autore`) REFERENCES `utente` (`Username`);

--
-- Limiti per la tabella `notifiche`
--
ALTER TABLE `notifiche`
  ADD CONSTRAINT `FKGENERA` FOREIGN KEY (`ID_Libro`) REFERENCES `libro_postato` (`ID_Libro`),
  ADD CONSTRAINT `FKPOSSIEDE` FOREIGN KEY (`Username_Int`) REFERENCES `utente` (`Username`);

--
-- Limiti per la tabella `preferenze`
--
ALTER TABLE `preferenze`
  ADD CONSTRAINT `FKPRE_GEN` FOREIGN KEY (`Nome_Genere`) REFERENCES `genere` (`Nome`),
  ADD CONSTRAINT `FKPRE_UTE` FOREIGN KEY (`Username`) REFERENCES `utente` (`Username`);

--
-- Limiti per la tabella `recensione`
--
ALTER TABLE `recensione`
  ADD CONSTRAINT `FKPUBBLICA` FOREIGN KEY (`Autore_Recensione`) REFERENCES `utente` (`Username`);

--
-- Limiti per la tabella `scambio`
--
ALTER TABLE `scambio`
  ADD CONSTRAINT `FKPROPOSTO` FOREIGN KEY (`ID_Libro1`) REFERENCES `libro_postato` (`ID_Libro`),
  ADD CONSTRAINT `FKPROPOSTO2` FOREIGN KEY (`ID_Libro2`) REFERENCES `libro_postato` (`ID_Libro`);

--
-- Limiti per la tabella `segue`
--
ALTER TABLE `segue`
  ADD CONSTRAINT `FKSEG_UTE` FOREIGN KEY (`Username_SeguitoDa`) REFERENCES `utente` (`Username`),
  ADD CONSTRAINT `FKSEGUITO` FOREIGN KEY (`Username_Seguito`) REFERENCES `utente` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
