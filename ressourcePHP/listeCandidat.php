<?php
	require_once('requeteur.class.php');
	$requeteur= new requeteur;
	$array = NULL;
	$tab= json_decode($_POST['competences']);
	//var_dump($tab);
	//$val= array();
	$res="<tr class=\"bg-primary\" id=\"entete\">
			<th>Id candidat</th>
			<th>Année expérience</th>
			<th>Fiche candidat</th>
			<th>Contacter</th>
			
		</tr>";
	foreach($tab AS $element)
	{
		$req= $requeteur->getRequete('Select nom, prenom, numCandidat, experience, mail from candidat join personne on personne.id= candidat.id_pers where domain = :dom and experience>= :exp');
		$req->bindValue(':dom', $element);
		$req->bindValue(':exp', $_POST['exp']);
		$req->execute();
		while($ligne = $req->fetch()) 
		{
			$res .="
			<tr class=\"info\">
				<td class=\"col-lg-1 col-md-1 col-sm-1 col-xs-1\">".$ligne['numCandidat']."</td>
				<td>".$ligne['experience']." ans</td>
				<td><a href=\"inscription.php\"><span class=\"glyphicon glyphicon-eye-open\"> Voir</span></a></td>
				<td><a href=\"mailto:adresseCandidat@mail.com\">".$ligne['mail']."</a></td>
			</tr>";
			 /*$v=array();
			 $v[]=$ligne['numCandidat'];
			 $v[]=$ligne['experience'];
			 $v[]=$ligne['mail'];
			 $val[]=$v;*/
		}
	     
	}
	
	echo $res;

?>