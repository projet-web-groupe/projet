DROP TABLE IF EXISTS Personne;
DROP TABLE IF EXISTS Rh;
DROP TABLE IF EXISTS Candidat;
DROP TABLE IF EXISTS Description;
DROP TABLE IF EXISTS Offre;
DROP TABLE IF EXISTS Qualite;

create table Personne
(
    id INT PRIMARY KEY,
    nom varchar(25),
    prenom varchar(25),
    dateNaissance DATE,
    sexe varchar(1),
    login varchar(25),
    mdp varchar(25),
    mail varchar(50)
    
);


CREATE TABLE RH
(
    numRh INT PRIMARY KEY, 
    id_pers INT,
    FOREIGN KEY(id_pers) REFERENCES personne(id)
);

CREATE TABLE Candidat
(
    numCandidat INT PRIMARY KEY,
    domain varchar(25),
    lastDiploma varchar(25),
    vehicule boolean,
    id_pers INT,
    FOREIGN KEY(id_pers) REFERENCES personne(id)
);

CREATE TABLE Description
(

    description varchar(250) PRIMARY KEY,
    ref varchar(25),
    FOREIGN KEY(ref)REFERENCES OFFRE(ref)

);

CREATE TABLE OFFRE
(
    ref varchar(25) PRIMARY KEY,
    id_cand INT,
    FOREIGN KEY(id_cand) REFERENCES candidat(numCandidat)
);

CREATE TABLE QUALITE
(
    qual varchar(25) PRIMARY KEY,
    num_cand INT,
    FOREIGN KEY(num_cand) REFERENCES candidat(numCandidat)
);