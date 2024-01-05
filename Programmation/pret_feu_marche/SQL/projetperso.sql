DROP DATABASE IF EXISTS projetpro;

CREATE DATABASE IF NOT EXISTS projetpro;

USE projetpro;

CREATE TABLE Adresse(
   idAdresse INT,
   Numéro VARCHAR(50) NOT NULL,
   rue VARCHAR(50) NOT NULL,
   codePostal VARCHAR(50) NOT NULL,
   ville VARCHAR(50) NOT NULL,
   pays VARCHAR(50) NOT NULL,
   appartement VARCHAR(50),
   PRIMARY KEY(idAdresse)
);

CREATE TABLE Marque(
   idMarque INT,
   nom VARCHAR(50),
   PRIMARY KEY(idMarque),
   UNIQUE(nom)
);

CREATE TABLE Modele(
   idModele INT,
   nom VARCHAR(50),
   idMarque INT NOT NULL,
   PRIMARY KEY(idModele),
   UNIQUE(nom),
   FOREIGN KEY(idMarque) REFERENCES Marque(idMarque)
);

CREATE TABLE Stock(
   idStock INT,
   idChaussure INT,
   idPointure INT,
   PRIMARY KEY(idStock, idChaussure, idPointure)
);

CREATE TABLE Pointure(
   idPointure VARCHAR(50),
   Numero INT,
   PRIMARY KEY(idPointure)
);

CREATE TABLE Client(
   idClient INT,
   prenom VARCHAR(50) NOT NULL,
   nom VARCHAR(50) NOT NULL,
   nomUtilisateur VARCHAR(50) NOT NULL,
   motDePasseClient VARCHAR(50) NOT NULL,
   idAdresse INT NOT NULL,
   PRIMARY KEY(idClient),
   FOREIGN KEY(idAdresse) REFERENCES Adresse(idAdresse)
);

CREATE TABLE Chaussure(
   idChaussure INT,
   idCategorie INT,
   prix DOUBLE NOT NULL,
   couleur VARCHAR(50) NOT NULL,
   UrlImage VARCHAR(50),
   idModele INT NOT NULL,
   idMarque INT NOT NULL,
   PRIMARY KEY(idChaussure, idCategorie),
   FOREIGN KEY(idModele) REFERENCES Modele(idModele),
   FOREIGN KEY(idMarque) REFERENCES Marque(idMarque)
);

CREATE TABLE Commande(
   idCommande INT,
   dateCommande DATE NOT NULL,
   idClient INT NOT NULL,
   PRIMARY KEY(idCommande),
   FOREIGN KEY(idClient) REFERENCES Client(idClient)
);

CREATE TABLE Asso_2(
   idChaussure INT,
   idCategorie INT,
   idCommande INT,
   PRIMARY KEY(idChaussure, idCategorie, idCommande),
   FOREIGN KEY(idChaussure, idCategorie) REFERENCES Chaussure(idChaussure, idCategorie),
   FOREIGN KEY(idCommande) REFERENCES Commande(idCommande)
);

CREATE TABLE stocker(
   idChaussure INT,
   idCategorie INT,
   idStock INT,
   idChaussure_1 INT,
   idPointure INT,
   PRIMARY KEY(idChaussure, idCategorie, idStock, idChaussure_1, idPointure),
   FOREIGN KEY(idChaussure, idCategorie) REFERENCES Chaussure(idChaussure, idCategorie),
   FOREIGN KEY(idStock, idChaussure_1, idPointure) REFERENCES Stock(idStock, idChaussure, idPointure)
);

CREATE TABLE A_en_taille(
   idStock INT,
   idChaussure INT,
   idPointure INT,
   idPointure_1 VARCHAR(50),
   PRIMARY KEY(idStock, idChaussure, idPointure, idPointure_1),
   FOREIGN KEY(idStock, idChaussure, idPointure) REFERENCES Stock(idStock, idChaussure, idPointure),
   FOREIGN KEY(idPointure_1) REFERENCES Pointure(idPointure)
);


INSERT INTO `Marque` (`idMarque`, `nom`) VALUES
(0, 'Nike'),
(1, 'Adidas'),
(2, 'Converse'),
(3, 'Fila'),
(4, 'Reebok'),
(5, 'Timberland'),
(6, 'Vans');

INSERT INTO `Modele` (`idModele`, `nom`, `idMarque`) VALUES
(0, 'Court Vision Low Premium Royal Blue', 0),
(1, 'Dunk Low Retro', 0),
(2, 'Dunk Low', 0),
(3, 'Air Jordan 1 Mid', 0),
(4, 'Chaussure Forum Low', 1),
(5, 'Chaussure Superstar', 1),
(6, 'Chaussure Run 60s 2.0', 1),
(7, 'Chaussure Campus', 1);

INSERT INTO `Chaussure` (`idChaussure`,`idCategorie`, `prix`, `couleur`, `UrlImage`,`idModele`, `idMarque`) VALUES
(0, 1, 88.95, 'RoyalWhiteGum','CVLPRB.png', 0, 0),
(1, 2, 139.99, 'White', 'aj1m.png', 3, 0);

INSERT INTO `Pointure` (`idPointure`, `Numero`) VALUES
(42,42);

SELECT * FROM adresse;
SELECT * FROM Marque;
SELECT * FROM Modele;
SELECT * FROM Chaussure;
