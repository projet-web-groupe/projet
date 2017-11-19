<?php
require_once('session.php');


function affichageRh()
{
	$val ="<table class=\"table table-bordered \" id=\"listeOffre\">";
	$val .="<thead><tr class=\"bg-primary\">
		<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Réf de l'offre</th>
		<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Lien de l'offre</th>
		<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Profil</th>
		<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\" >Accepter</th>
		<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Refuser</th>
		</tr></thead><tbody>";
	$requeteur= new requeteur;
	$req= $requeteur->getRequete('select offre.ref, id_cand, personne.id, personne.nom, personne.prenom from offre join description on offre.ref= description.ref join candidat on candidat.numCandidat= offre.id_cand join personne on candidat.id_pers= personne.id where approuve=0');
	$req->execute();
	while($l=$req->fetch(PDO::FETCH_ASSOC)){
		$val .= "<tr >
		<td class=\"numCandRh\" hidden>".$l['id_cand']."</td>
		<td class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center ref-rh\">".$l['ref']."</td>

		<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center colorB\">
		<form action= \"postuler.php\" method=\"post\" class=\"lienForm\">
		<input type=\"text\" name=\"id\" value=\"".htmlspecialchars($l['ref'])."\" hidden>
		<span class=\"glyphicon glyphicon-eye-open\"><input class=\"lienForm\" type=\"submit\" value=\"Voir\"></span>
		</form>
		</td>
		<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center colorB\">
		<form action= \"ModifierProfil.php\" method=\"post\">
		<input type=\"text\" name=\"nom\" value=\"".$l['nom']."\" hidden>
		<input type=\"text\" name=\"prenom\" value=\"".$l['prenom']."\" hidden>
		<span class=\"glyphicon glyphicon-eye-open\"><input class=\"lienForm\" type=\"submit\" value=\"Voir\"></span>
		</form>
		</td>
		<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-acc-rh\"><button type=\"button\" class=\"btn btn-success\">Accepter</button></td>
		<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-ref-rh\"><button type=\"button\" class=\"btn btn-danger\">Refuser</button></td>
		</tr>";
	}
	$req= $requeteur->getRequete('select offre.ref, id_cand, personne.id, personne.nom, personne.prenom from offre join description on offre.ref= description.ref join candidat on candidat.numCandidat= offre.id_cand join personne on candidat.id_pers= personne.id where approuve=1 and accepte=0');
	$req->execute();
	while($l=$req->fetch(PDO::FETCH_ASSOC)){
		$val .= "<tr >
		<td class=\"numCandRh\" hidden>".$l['id_cand']."</td>
		<td class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center ref-rh\">".$l['ref']."</td>


		<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center colorB\">
		<form action= \"postuler.php\" method=\"post\" class=\"lienForm\">
		<input type=\"text\" name=\"id\" value=\"".htmlspecialchars($l['ref'])."\" hidden>
		<span class=\"glyphicon glyphicon-eye-open\"><input class=\"lienForm\" type=\"submit\" value=\"Voir\"></span>
		</form>
		</td>

		<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center colorB\">
		<form action= \"ModifierProfil.php\" method=\"post\" class=\"lienForm\">
		<input type=\"text\" name=\"nom\" value=\"".$l['nom']."\" hidden>
		<input type=\"text\" name=\"prenom\" value=\"".$l['prenom']."\" hidden>
		<span class=\"glyphicon glyphicon-eye-open\"><input class=\"lienForm\" type=\"submit\" value=\"Voir\"></span>
		</form>
		</td>
		<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-acc-rh\">pas encore accepté par le candidat</td>
		<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-ref-rh\"> trop tard déjà approuvé</td>
		</tr>";
	}
	$req= $requeteur->getRequete('select offre.ref, id_cand, personne.id, personne.nom, personne.prenom from offre join description on offre.ref= description.ref join candidat on candidat.numCandidat= offre.id_cand join personne on candidat.id_pers= personne.id where approuve=1 and accepte=1');
	$req->execute();
	while($l=$req->fetch(PDO::FETCH_ASSOC)){
		$val .= "<tr >
		<td class=\"numCandRh\" hidden>".$l['id_cand']."</td>
		<td class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center ref-rh\">".$l['ref']."</td>
		<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center colorB\">
		<form action= \"postuler.php\" method=\"post\" class=\"lienForm\">
		<input type=\"text\" name=\"id\" value=\"".htmlspecialchars($l['ref'])."\" hidden>
		<span class=\"glyphicon glyphicon-eye-open\"><input class=\"lienForm\" type=\"submit\" value=\"Voir\"></span>
		</form>
		</td>
		<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center colorB\">
		<form action= \"ModifierProfil.php\" method=\"post\" class=\"lienForm\">
		<input type=\"text\" name=\"nom\" value=\"".$l['nom']."\" hidden>
		<input type=\"text\" name=\"prenom\" value=\"".$l['prenom']."\" hidden>
		<span class=\"glyphicon glyphicon-eye-open\"><input class=\"lienForm\" type=\"submit\" value=\"Voir\"></span>
		</form>
		</td>
		<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-acc-rh\">accepté par le candidat</td>
		<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-ref-rh\">déjà approuvé</td>
		</tr>";
	}
	$val .="</tbody></table>";
	return $val;
}

function affichageCandidat(){
	$val ="<table class=\"table table-bordered \" id=\"listeOffre\">";
	$val .="<thead><tr class=\"bg-primary\">
		<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Réf de l'offre</th>
		<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Lien de l'offre</th>
		<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\" >Accepter</th>
		<th class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">Refuser</th>
		</tr></thead><tbody>";
	$requeteur= new requeteur;
	$req= $requeteur->getRequete('select ref from offre where approuve=0 and accepte= 0 and id_cand = (select numCandidat from candidat where id_pers="'.$_SESSION['id'].'")');	
	$req->execute();
	while($l=$req->fetch(PDO::FETCH_ASSOC)){

		$val.= "<tr >

		<td class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center ref\">".$l['ref']."</td>
		<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center colorB\">
		<form action= \"postuler.php\" method=\"post\" class=\"lienForm\">
		<input type=\"text\" name=\"id\" value=\"".htmlspecialchars($l['ref'])."\" hidden>
		<span class=\"glyphicon glyphicon-eye-open\"><input class=\"lienForm\" type=\"submit\" value=\"Voir\"></span>
		</form>
		</td>
		<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\"><span>En attente</span></td>
		<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-ref\"><button type=\"button\" class=\"btn btn-danger\">Abandonner</button></td>
		</tr>";
	}

	$req= $requeteur->getRequete('select ref from offre where approuve=1 and accepte= 0 and id_cand = (select numCandidat from candidat where id_pers="'.$_SESSION['id'].'")');	
	$req->execute();
	while($l=$req->fetch(PDO::FETCH_ASSOC)){

		$val.= "<tr >

		<td class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center ref\">".$l['ref']."</td>
		<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center colorB\">
		<form action= \"postuler.php\" method=\"post\" class=\"lienForm\">
		<input type=\"text\" name=\"id\" value=\"".htmlspecialchars($l['ref'])."\" hidden>
		<span class=\"glyphicon glyphicon-eye-open\"><input class=\"lienForm\" type=\"submit\" value=\"Voir\"></span>
		</form>
		</td>
		<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-acc\"><button type=\"button\" class=\"btn btn-success\">Accepter</button></td>
		<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-ref\"><button type=\"button\" class=\"btn btn-danger\">Refuser</button></td>
		</tr>";
	}


	$req= $requeteur->getRequete('select ref from offre where approuve=1 and accepte= 1 and id_cand = (select numCandidat from candidat where id_pers="'.$_SESSION['id'].'")');	
	$req->execute();
	while($l=$req->fetch(PDO::FETCH_ASSOC)){

		$val.= "<tr >

		<td class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center ref\">".$l['ref']."</td>
		<td class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3 text-center colorB\">
		<form action= \"postuler.php\" method=\"post\" class=\"lienForm\">
		<input type=\"text\" name=\"id\" value=\"".htmlspecialchars($l['ref'])."\" hidden>
		<span class=\"glyphicon glyphicon-eye-open\"><input class=\"lienForm\" type=\"submit\" value=\"Voir\"></span>
		</form>
		</td>
		<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center\">déjà accepté</td>
		<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1 text-center btn-ref\">trop tard</td>
		</tr>";
	}
	$val .="</tbody></table>";
	return $val;
}
?>
