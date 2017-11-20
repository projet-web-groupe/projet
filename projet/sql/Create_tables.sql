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
    description varchar(1000),
    label varchar(50),
    profil varchar(1000),
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

CREATE TABLE messages
(
    emetteur varchar(255),
    destinataire varchar(255),
    obj varchar(255),
    date_envoie DATETIME,
    msg TEXT,
    CONSTRAINT pk_messages PRIMARY KEY (emetteur,destinataire,obj,date_envoie)

);

CREATE TABLE blacklist
(
    rh INT,
    candidat INT,
    CONSTRAINT pk_blacklist PRIMARY KEY(rh,candidat),
    FOREIGN KEY(rh) REFERENCES rh(numRh),
    FOREIGN KEY(candidat) REFERENCES candidat(numCandidat)
);