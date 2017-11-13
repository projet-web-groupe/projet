DELETE from `personne`;
DELETE from `candidat`;
DELETE from `rh`;
DELETE from `qualite`;
DELETE from `description`;
DELETE from `offre`;

INSERT INTO `personne` VALUES (1, 'Céler', 'Jack', '1940-06-13', 'F', 'log1', 'mdp1', 'jack.celer@gmail.com');
INSERT INTO `personne` VALUES (2, 'Sop', 'Alain', '1950-02-13', 'H', 'log2', 'mdp2', 'sop.alain@hotmail.fr');
INSERT INTO `personne` VALUES (3, 'Sérien', 'Jean', '1983-07-13', 'H', 'log3', 'mdp3', 'jean.serien@free.fr');
INSERT INTO `personne` VALUES (4, 'Fer', 'Lucie', '1979-03-13', 'F', 'log4', 'mdp4', 'lucie.fer@gmail.com');
INSERT INTO `personne` VALUES (5, 'Croche', 'Sarah', '1997-04-23', 'F', 'log5', 'mdp5', 'sarah.croche@yahou.com');
INSERT INTO `personne` VALUES (6, 'Bistruckla', 'César', '1420-05-19', 'H', 'log6', 'mdp6', 'cesar.bistruckla@hotmail.com');

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