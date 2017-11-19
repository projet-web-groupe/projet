<?php session_start();

function isConnecter(){
	return (!empty($_SESSION['connecte']) && $_SESSION['connecte']);
}

function isInscritCandidat(){
	return (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['login']) and isset($_POST['mdp']) and isset($_POST['genre']) and isset($_POST['date']) and isset($_POST['diplome']) and isset($_POST['exp']) and isset($_POST['mail']) and isset($_POST['vehicule']) and isset($_POST['qualite']) and (trim($_POST['nom']!='')) and (trim($_POST['prenom']!='')) and (trim($_POST['login']!='')) and (trim($_POST['mdp']!='')) and (trim($_POST['genre']!='')) and (trim($_POST['date']!='')) and (trim($_POST['diplome']!='') )and (trim($_POST['exp']!='')) and (trim($_POST['mail']!='')) and (trim($_POST['vehicule']!='')) and (trim($_POST['qualite']!='')));
}

function isModifiableCandidat(){
	return (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['login']) and isset($_POST['genre']) and isset($_POST['date']) and isset($_POST['diplome']) and isset($_POST['exp']) and isset($_POST['mail']) and isset($_POST['vehicule']) and isset($_POST['qualite']) and (trim($_POST['nom']!='')) and (trim($_POST['prenom']!='')) and (trim($_POST['login']!='')) and (trim($_POST['genre']!='')) and (trim($_POST['date']!='')) and (trim($_POST['diplome']!='') )and (trim($_POST['exp']!='')) and (trim($_POST['mail']!='')) and (trim($_POST['vehicule']!='')) and (trim($_POST['qualite']!='')));
}

function isInscritRh(){
	return (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['login']) and isset($_POST['mdp']) and isset($_POST['genre']) and isset($_POST['date']) and isset($_POST['mail']) and (trim($_POST['nom']!='')) and (trim($_POST['prenom']!='')) and (trim($_POST['login']!='')) and (trim($_POST['mdp']!='')) and (trim($_POST['genre']!='')) and (trim($_POST['date']!=''))and (trim($_POST['mail']!='')));
}

function isModifiableRh(){
	return (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['login']) and isset($_POST['genre']) and isset($_POST['date']) and isset($_POST['mail']) and (trim($_POST['genre']!='')) and (trim($_POST['nom']!='')) and (trim($_POST['prenom']!='')) and (trim($_POST['login']!='')) and (trim($_POST['genre']!='')) and (trim($_POST['date']!='')) and (trim($_POST['mail']!='')));
}
?>