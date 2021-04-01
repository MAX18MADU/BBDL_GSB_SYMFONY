insert INTO role (LIBELLEROLE) VALUES('responsable');
insert INTO role (LIBELLEROLE) VALUES('visiteur');


INSERT INTO utilisateur (LOGIN, MDP, IDROLE) VALUES ('AntonyLambert','MDPALT',1);
INSERT INTO utilisateur (LOGIN, MDP, IDROLE) VALUES ('MatthieuDevillers','MDPMDE',1);

INSERT INTO laboratoire (RaisonSociale) VALUES ('GSB1');
INSERT INTO laboratoire (RaisonSociale) VALUES ('GSB2');

INSERT INTO Medicament (CIP,NomMedicament,Grammage,idlaboratoire) VALUES (3400935955838,'Doliprane','1000 mg',1);
INSERT INTO Medicament (CIP,NomMedicament,Grammage,idlaboratoire) VALUES (3400931923077,'Smecta','3000 mg',1);
INSERT INTO Medicament (CIP,NomMedicament,Grammage,idlaboratoire) VALUES (3400934999161,'Doliprane','200 mg',1);
INSERT INTO Medicament (CIP,NomMedicament,Grammage,idlaboratoire) VALUES (3400932959358,'Advil','200 mg',2);
INSERT INTO Medicament (CIP,NomMedicament,Grammage,idlaboratoire) VALUES (3400938171150,'Advil','400 mg',2);
INSERT INTO Medicament (CIP,NomMedicament,Grammage,idlaboratoire) VALUES (3400935655769,'Aerius','5 mg',2);


INSERT INTO Excipient (LibelleExcipient) VALUES ('amidon de maïs');
INSERT INTO Excipient (LibelleExcipient) VALUES ('amidon prégélatinisé');
INSERT INTO Excipient (LibelleExcipient) VALUES ('silice colloïdale anhydre');
INSERT INTO Excipient (LibelleExcipient) VALUES ('acide stéarique');
INSERT INTO Excipient (LibelleExcipient) VALUES ('povidone');
INSERT INTO Excipient (LibelleExcipient) VALUES ('sodium carboxyméthylamidon');
INSERT INTO Excipient (LibelleExcipient) VALUES ('talc');
INSERT INTO Excipient (LibelleExcipient) VALUES ('magnésium stéarate');
INSERT INTO Excipient (LibelleExcipient) VALUES ('sodium benzoate');
INSERT INTO Excipient (LibelleExcipient) VALUES ('monoglycérides diacétyles');
INSERT INTO Excipient (LibelleExcipient) VALUES ('povidone K 30');
INSERT INTO Excipient (LibelleExcipient) VALUES ('saccharose');
INSERT INTO Excipient (LibelleExcipient) VALUES ('saccharine sodique');
INSERT INTO Excipient (LibelleExcipient) VALUES ('soja lécithine');
INSERT INTO Excipient (LibelleExcipient) VALUES ('phosphate dicalcique dihydrate');
INSERT INTO Excipient (LibelleExcipient) VALUES ('cellulose microcristalline');
INSERT INTO Excipient (LibelleExcipient) VALUES ('lactose monohydrate');




INSERT INTO Composer (CIP,Idexcipient) VALUES (3400935955838,5);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400935955838,2);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400935955838,6);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400935955838,7);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400935955838,8);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400931923077,13);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400931923077,14);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400934999161,9);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400934999161,11);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400934999161,10);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400934999161,12);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400932959358,1);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400932959358,2);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400932959358,3);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400932959358,4);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400932959358,12);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400938171150,12);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400938171150,4);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400938171150,3);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400938171150,2);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400938171150,1);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400935655769,15);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400935655769,16);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400935655769,1);
INSERT INTO Composer (CIP,Idexcipient) VALUES (3400935655769,7);

INSERT INTO Molecule (LibelleMolecule) VALUES ('paracétamol');
INSERT INTO Molecule (LibelleMolecule) VALUES ('ibuprofène');
INSERT INTO Molecule (LibelleMolecule) VALUES ('diosmectite');
INSERT INTO Molecule (LibelleMolecule) VALUES ('desloratdine');

INSERT INTO Contenir (CIP,idMolecule) VALUES (3400935955838,1);
INSERT INTO Contenir (CIP,idMolecule) VALUES (3400931923077,3);
INSERT INTO Contenir (CIP,idMolecule) VALUES (3400934999161,1);
INSERT INTO Contenir (CIP,idMolecule) VALUES (3400932959358,2);
INSERT INTO Contenir (CIP,idMolecule) VALUES (3400938171150,2);
INSERT INTO Contenir (CIP,idMolecule) VALUES (3400935655769,4);

INSERT INTO Forme (LibelleForme) VALUES ('Comprimé');
INSERT INTO Forme (LibelleForme) VALUES ('Solution buvable');


INSERT INTO Administrer (CIP,idForme) VALUES (3400935955838,1);
INSERT INTO Administrer (CIP,idForme) VALUES (3400931923077,2);
INSERT INTO Administrer (CIP,idForme) VALUES (3400934999161,2);
INSERT INTO Administrer (CIP,idForme) VALUES (3400932959358,1);
INSERT INTO Administrer (CIP,idForme) VALUES (3400938171150,1);
INSERT INTO Administrer (CIP,idForme) VALUES (3400935655769,1);



/*INSERT INTO  () VALUES ();*/