DROP TABLE IF EXISTS personne;
DROP TABLE IF EXISTS rh;
DROP TABLE IF EXISTS candidat;
DROP TABLE IF EXISTS description;
DROP TABLE IF EXISTS offre;
DROP TABLE IF EXISTS qualite;

create table personne
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


CREATE TABLE rh
(
    numRh INT PRIMARY KEY, 
    id_pers INT,
    FOREIGN KEY(id_pers) REFERENCES personne(id)
);

CREATE TABLE candidat
(
    numCandidat INT PRIMARY KEY,
    domain varchar(25),
    lastDiploma varchar(25),
    experience INT,
    vehicule boolean,
    id_pers INT,
    FOREIGN KEY(id_pers) REFERENCES personne(id)
);

CREATE TABLE description
(

    ref varchar(25) PRIMARY KEY,
    description varchar(250),
    label varchar(50),
    profil varchar(250),
    FOREIGN KEY(ref)REFERENCES OFFRE(ref)

);

CREATE TABLE offre
(
    ref varchar(25),
    id_cand INT,
    accepte boolean,
    approuve boolean,
    FOREIGN KEY(id_cand) REFERENCES candidat(numCandidat),
    CONSTRAINT pk_offre PRIMARY KEY (ref,id_cand)
);

CREATE TABLE qualite
(
    qual varchar(25),
    num_cand INT,
    FOREIGN KEY(num_cand) REFERENCES candidat(numCandidat),
    CONSTRAINT pk_qualite PRIMARY KEY (qual, num_cand)
);