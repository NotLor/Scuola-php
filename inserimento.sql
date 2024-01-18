INSERT INTO `attore` (`nome`, `cognome`) VALUES ('Margot', 'Robbie'), ('Will', 'Smith'), ('Checco', 'Zalone');

INSERT INTO `film` (`titolo`, `anno`) VALUES ('Io Sono Leggenda', '2007'), ('Cado Dalle Nubi', '2009'), ('Barbie', '2023');

INSERT INTO `recita`(`fkAttore`, `fkFilm`) VALUES (1, 3), (2, 1), (3, 2);

INSERT INTO `genere`(`nome`) VALUES ('Commedia'), ('Azione');

INSERT INTO `appartiene`(`fkFilm`, `fkGenere`) VALUES (1, 2), (2, 1), (3, 1);
