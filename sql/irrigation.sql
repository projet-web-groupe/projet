DELETE from `personne`;
DELETE from `candidat`;
DELETE from `rh`;
DELETE from `qualite`;
DELETE from `description`;
DELETE from `offre`;

INSERT INTO `personne` VALUES (1, 'Céler', 'Jack', '1940-06-13', 'F', 'log1', '7373c4286633127542e5c2be2e032aa0498d80b2', 'jack.celer@gmail.com');
INSERT INTO `personne` VALUES (2, 'Sop', 'Alain', '1950-02-13', 'H', 'log2', 'f747c08c69f65afea969fe3f2da053a192f01d81', 'sop.alain@hotmail.fr');
INSERT INTO `personne` VALUES (3, 'Sérien', 'Jean', '1983-07-13', 'H', 'log3', '06c5e5c9547af51d43aad1d6402bf4d2ae3ccc37', 'jean.serien@free.fr');
INSERT INTO `personne` VALUES (4, 'Fer', 'Lucie', '1979-03-13', 'F', 'log4', 'f886993e9b022adcde7a2f1d7e26db221b91a9cc', 'lucie.fer@gmail.com');
INSERT INTO `personne` VALUES (5, 'Croche', 'Sarah', '1997-04-23', 'F', 'log5', '8a587d3287cc27b6802b5bc49c46ef780623a178', 'sarah.croche@yahou.com');
INSERT INTO `personne` VALUES (6, 'Bistruckla', 'César', '1420-05-19', 'H', 'log6', '2111184664d46b2b51c589e999a6f3ece3394763', 'cesar.bistruckla@hotmail.com');

INSERT INTO `candidat` VALUES (1, 'Course automobile', 'DUT',5, 1, 1);
INSERT INTO `candidat` VALUES (2, 'Netoyage', 'Bac',3, 0, 3);
INSERT INTO `candidat` VALUES (6, 'Salade', 'BTS',3, 0, 6);

INSERT INTO `rh` VALUES (1,2);
INSERT INTO `rh` VALUES (2,4);
INSERT INTO `rh` VALUES (3,5);

INSERT INTO `qualite` VALUES ('Curieux',1);
INSERT INTO `qualite` VALUES ('Absorbant',2);
INSERT INTO `qualite` VALUES ('Déterminé',3);
INSERT INTO `qualite` VALUES ('Intelligent',4);
INSERT INTO `qualite` VALUES ('Rigoureux',5);
INSERT INTO `qualite` VALUES ('Curieux',6);

INSERT INTO `description` VALUES (1,'desc1','poste à pourvoir 1','profil 1');
INSERT INTO `description` VALUES (2,'desc2','poste à pourvoir 2','profil 2');

INSERT INTO `offre` VALUES (1,1,0,1);
INSERT INTO `offre` VALUES (2,2,0,0);
INSERT INTO `offre` VALUES (2,1,0,0);
INSERT INTO `offre` VALUES (1,2,0,0);

INSERT INTO messages VALUES("testeur","sop.alain@hotmail.fr","test",NOW(),"blabla");