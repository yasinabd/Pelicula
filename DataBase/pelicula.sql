-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: peliculas
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pelicula`
--

DROP TABLE IF EXISTS `pelicula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pelicula` (
  `idPelicula` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Autores` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Plataformas` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Lanzamiento` date NOT NULL,
  `Descripcion` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Imagen` varchar(45) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `ruta` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`idPelicula`),
  UNIQUE KEY `Nombre_UNIQUE` (`Nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelicula`
--

LOCK TABLES `pelicula` WRITE;
/*!40000 ALTER TABLE `pelicula` DISABLE KEYS */;
INSERT INTO `pelicula` VALUES (1,'Joker ','Joaquin Phoenix, Robert De Niro, Zazie Beetz,','Netflix','2019-10-04','Arthur Fleck (Phoenix) vive en Gotham con su madre, y su única motivación en la vida es hacer reír a la gente. Actúa haciendo de payaso en pequeños trabajos, pero tiene problemas mentales que hacen que la gente le vea como un bicho raro. Su gran sueño es actuar como cómico delante del público, pero una serie de trágicos acontecimientos le hará ir incrementando su ira contra una sociedad que le ignora. ','s1.jpg','imagenes/s1.jpg'),(2,'Forrest Gump ','Tom Hanks, Robin Wright, Gary Sinise, Mykelti','Netflix','1994-09-23','Forrest Gump (Tom Hanks) sufre desde pequeño un cierto retraso mental. A pesar de todo, gracias a su tenacidad y a su buen corazón será protagonista de acontecimientos cruciales de su país durante varias décadas. Mientras pasan por su vida multitud de cosas en su mente siempre está presente la bella Jenny (Robin Wright), su gran amor desde la infancia, que junto a su madre será la persona más importante en su vida. ','s2.jpg','imagen2/s2.jpg'),(3,'Bad Boys for Life ','Will Smith, Martin Lawrence, Vanessa Hudgens,','Netflix','2020-01-17','En esta tercera entrega de la franquicia, los policías Mike Lowrey (Will Smith) y Marcus Burnett (Martin Lawrence) vuelven a patrullar juntos para intentar derrotar a Armando Armas (Jacob Scipio), el líder de un cartel de drogas mexicano en Miami. ','s3.jpg','imagen2/s3.jpg'),(4,'Venom','Tom Hardy, Michelle Williams, Woody Harrelson',' Amazon Prime Video, HBO','2018-10-05','Eddie Brock (Tom Hardy) y su simbionte Venom todavía están intentando descubrir cómo vivir juntos cuando un preso que está en el corredor de la muerte (Woody Harrelson) se infecta con un simbionte propio. ','s4.jpg','imagen2/s4.jpg'),(5,'Vengadores: Endgame ','Robert Downey Jr., Chris Evans, Mark Ruffalo,','Amazon Prime','2019-04-26','Después de los eventos devastadores de \'Avengers: Infinity War\', el universo está en ruinas debido a las acciones de Thanos, el Titán Loco. Con la ayuda de los aliados que quedaron, los Vengadores deberán reunirse una vez más para intentar deshacer sus acciones y restaurar el orden en el universo de una vez por todas, sin importar cuáles son las consecuencias... Cuarta y última entrega de la saga \"Vengadores\".','s5.jpg','imagen2/s5.jpg'),(6,'The Equalizer (El protector) ','     Denzel Washington, Marton Csokas, Chloë ','Netflix','2014-10-17','Robert McCall, un antiguo agente de la CIA que lleva ahora una vida tranquila, abandona su retiro para ayudar a Teri, una joven prostituta que está siendo explotada por la mafia rusa. A pesar de que aseguró no volver a ser violento, contemplar tanta crueldad despertará en Robert un implacable y renovado deseo de justicia... Versión cinematográfica de la serie de televisión de los 80, \'El justiciero\'.','s6.jpg','imagen2/s6.jpg'),(7,'El indomable Will Hunting','     Matt Damon, Robin Williams, Minnie Drive','Netflix y HBO','1998-02-27','Will es un joven rebelde con una inteligencia asombrosa, especialmente para las matemáticas. El descubrimiento de su talento por parte de los profesores le planteará un dilema: seguir con su vida de siempre -un trabajo fácil, buenos amigos con los que tomar unas cervezas- o aprovechar sus grandes cualidades intelectuales en alguna universidad. Sólo los consejos de un solitario y bohemio profesor le ayudarán a decidirse.','s7.jpg','imagen2/s7.jpg'),(8,'El padrino ','Marlon Brando, Al Pacino, James Caan, Robert ','Netflix','1972-10-20','América, años 40. Don Vito Corleone (Marlon Brando) es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York. Tiene cuatro hijos: Connie (Talia Shire), el impulsivo Sonny (James Caan), el pusilánime Fredo (John Cazale) y Michael (Al Pacino), que no quiere saber nada de los negocios de su padre. Cuando Corleone, en contra de los consejos de \'Il consigliere\' Tom Hagen (Robert Duvall), se niega a participar en el negocio de las drogas, el jefe de otra banda ordena su asesinato. Empieza entonces una violenta y cruenta guerra entre las familias mafiosas. ','s8.jpg','imagen2/s8.jpg'),(9,'Parker ','     Jason Statham, Jennifer Lopez, Michael C','Netflix','2018-08-12','Parker (Jason Statham) es un ladrón con un código ético muy particular: sólo roba a los ricos. Tras una operación, es traicionado por su equipo y dado por muerto. Entonces decide adoptar una nueva identidad; lo que se propone, con la ayuda de una hermosa mujer (Jennifer Lopez), es apoderarse del botín y que sus antiguos socios lamenten haberse cruzado en su camino.','s9.jpg','imagen2/s9.jpg'),(10,'Roxanne Roxanne ','     Chanté Adams, Mahershala Ali, Nia Long, ','Netflix','2017-01-22','A los 14 años de edad, Lolita \"Roxanne Shanté\" Gooden estaba en el buen camino para convertirse en una leyenda del hip-hop mientras se esforzaba por mantener a su familia mientras se defendía de los peligros de las calles de Queensbridge Projects en Nueva York. ','s10.jpg','imagen2/s10.jpg'),(12,'Eternals','Gemma Chan, Richard Madden, Angelina Jolie, K','Disney plus','2021-11-05','aaaaaaaaaaa','s11.jpg','imagenes/s11.jpg');
/*!40000 ALTER TABLE `pelicula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `series`
--

DROP TABLE IF EXISTS `series`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `series` (
  `idSeries` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Autores` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Plataformas` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Lanzamiento` date NOT NULL,
  `Descripcion` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Imagen` varchar(45) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `ruta` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`idSeries`),
  UNIQUE KEY `Nombre_UNIQUE` (`Nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `series`
--

LOCK TABLES `series` WRITE;
/*!40000 ALTER TABLE `series` DISABLE KEYS */;
INSERT INTO `series` VALUES (1,'Arcane','Riot Games','netflix','2021-11-06','Arcane es una serie de animación basada en el exitoso videojuego League of Legends o también conocido popularmente como Lol. La historia se centra principalmente en dos ciudades: en la rica y equilibrada Piltover y el sórdido corazón de Zaun.','p1.jpg','imagenes/p1.jpg'),(2,'Peaky Blinders','Cillian Murphy, Tom Hardy, Sam Neill, Paul An','netflix y amazon','2013-09-12','Peaky Blinders es una serie de televisión inglesa de drama histórico, emitida por el canal BBC Two. La serie está protagonizada por Cillian Murphy y se centra en una familia de gánsteres de Birmingham, durante los años veinte y del ascenso de su jefe, Thomas Shelby, un mafioso que dominará toda Inglaterra. ','p2.jpg','imagenes/p2.jpg'),(3,'Suits','Gabriel Macht,Patrick J. Adams,Rick Hoffman,M','netflix','2011-06-23','Mike Ross es un joven con una mente brillante que siempre ha soñado con ser abogado, pero un incidente desafortunado le impide cumplirlo. Naturalmente inteligente y con una memoria eidética, se gana la vida suplantando a otros en los exámenes de admisión para la escuela de derecho. Envuelto en un encargo de tráfico de drogas, Mike sospecha que le han tendido una trampa y consigue deshacerse de la policía al colarse en una entrevista de trabajo para uno de los bufetes más importantes de Nueva York (Pearson Hardman). ','p3.jpg','imagenes/p3.jpg'),(4,'Lupin','Omar Sy, Ludivine Sagnier, Nicole García, Her','netflix','2021-06-11','Assane Diop (Omar Sy) es un escurridizo ladrón de guante blanco y aficionado a las aventuras de Arsene Lupin que busca vengar la muerte de su padre a causa del poderoso patriarca de una rica familia. Años después de una trágica injusticia, Assane se propone ajustar cuentas -y una deuda- robando un collar de diamantes, pero las cosas no salen según lo previsto.','p4.jpg','imagenes/p4.jpg'),(5,'Hijos de la anarquía','Charlie Hunnam, Ron Perlman, Katey Sagal, Mar','netflix','2008-09-03','Serie de TV (2008-2014). 7 temporadas. 92 episodios. Serie centrada en un club de moteros (MC) que operan ilegalmente en la ciudad ficticia de Charming (California). La historia se centra en el protagonista, Jackson \"Jax\" Teller (Charlie Hunnam), un joven miembro de la organización, con rango de vicepresidente, que comienza a cuestionarse sus propios actos y los de su club.','p5.jpg','imagenes/p5.jpg'),(6,'Vikingos','Travis Fimmel, Katheryn Winnick, Gustaf Skars','netflix','2013-03-03',' Narra las aventuras del héroe Ragnar Lothbrok, de sus hermanos vikingos y su familia, cuando él se subleva para convertirse en el rey de las tribus vikingas. Además de ser un guerrero valiente, Ragnar encarna las tradiciones nórdicas de la devoción a los dioses. Según la leyenda era descendiente directo del dios Odín.','p6.jpg','imagenes/p6.jpg'),(7,'Marco Polo','Lorenzo Richelmy, Chin Han, Darwin Shaw, Bene','netflix','2014-12-12',' En un mundo repleto de codicia, rivalidad, intrigas sexuales y traiciones, \"Marco Polo\" narra las aventuras del famoso explorador de la corte de Kublai Khan en la China del siglo XIII. ','p7.jpg','imagenes/p7.jpg'),(8,'House','Hugh Laurie, Lisa Edelstein, Omar Epps, Rober','netflix','2004-11-16','Gregory House, el mejor médico del hospital, es un hombre antipático que está especializado en el diagnóstico de enfermedades. Su carácter extravagante, su rebeldía y su honradez con los pacientes y su equipo lo convierten en una persona única. Trata de evitar la relación con los pacientes, porque lo que le interesa por encima de todo es la investigación de las enfermedades. Es además adicto a los calmantes y a las series de hospitales.','p8.jpg','imagenes/p8.jpg');
/*!40000 ALTER TABLE `series` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Password` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Nombre` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Apellido1` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Apellido2` varchar(45) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `Telefono` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Email` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `CP` varchar(5) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Provincia` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ComunidadAutonoma` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Rol` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `DNI` varchar(9) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `idUsuario_UNIQUE` (`idUsuario`),
  UNIQUE KEY `Usuario_UNIQUE` (`Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Yasin','3210','Yasin','Abdelbi','Chlili','608066524','yasin@gmail.com','52003','Melilla','Melilla','admin',NULL),(4,'Ayub','Ayub123','Ayub','Abdelbi','ElOuassdi','952687413','ayub@gmail.com','52003','Melilla','Melilla','usuario',NULL),(6,'Mohamed','Moha@234','Moha','yasin','Moha','652314659','ayub@gmail.com','52003','Melilla','Melilla','usuario','DNI'),(8,'Yasin23','Yasin@23','Moha','Moha','Moha','652314659','ayub@gmail.com','52003','Melilla','Melilla','usuario','DNI'),(11,'Nasera','Nasera23@','Moha','yasin','yasin','952687413','ayub@gmail.com','52003','Melilla','Melilla','usuario','45309850B'),(12,'Raul23','Madrid@23','Moha','Moha','Moha','652314659','ayub@gmail.com','52003','Melilla','Melilla','usuario','45309850B');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-15  3:48:36
