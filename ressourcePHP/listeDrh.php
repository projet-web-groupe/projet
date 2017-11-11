<?php
	require_once('requeteur.class.php');
	//$_POST['test']="alex";
	//var_dump(($_POST));
	$attribut= $_POST['mot'];
	$requeteur= new requeteur;
	$req= $requeteur->getRequete('Select nom, prenom, mail from personne where nom= :nom or prenom= :nom');
	$req->bindValue(':nom', $_POST['mot']);
	$req->execute();
	//$val=array();
	$res='';
	while($ligne=$req->fetch(PDO::FETCH_ASSOC))
	{
		if($requeteur->isRh($ligne['nom'], $ligne['prenom']))
		{
			$res .= "<div class=\"ombre\">
				<div class=\"row\">
				
					<div class=\"col-xm-12 col-sm-12 col-md-6 col-lg-6\">
						<label class=\"label label-primary\">Courriel :</label>
						<p class=\"form-control mailRh\">".htmlspecialchars($ligne['mail'],ENT_QUOTES)."</p>
					</div>

					<div class=\"col-xm-12 col-sm-12 col-md-6 col-lg-6\">
						<label class=\"label label-primary\">Télephone</label>
						<p class=\"form-control\">0xxxxxxxxx</p>
					</div>
				</div>

				<div class=\"row\">
					
					<div class=\"col-xm-12 col-sm-12 col-md-6 col-lg-6\">
						<label class=\"label label-primary\">Fax :</label>
						<p class=\"form-control\">un numero de fax...</p>
					</div>

					<div class=\"col-xm-12 col-sm-12 col-md-6 col-lg-6\">
						<label class=\"label label-primary\">Adresse</label>
						<p class=\"form-control\">n°1 rue TrouverDuTravail</p>
					</div>
				</div>
			</div>";
		}
			
	}
	/*if($val == false)
	{
		$val['res']="vide";
	}*/
	
	//header('Content-type: application/json');
	//echo json_encode($val);
	echo $res;
?>