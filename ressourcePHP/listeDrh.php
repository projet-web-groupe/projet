<?php
	require_once('requeteur.class.php');
	//$_POST['test']="alex";
	//var_dump(($_POST));
	$attribut= $_POST['mot'];
	$requeteur= new requeteur;
	$req= $requeteur->getRequete('Select id, nom, prenom, mail from personne join rh on personne.id= rh.id_pers where nom= :nom or prenom= :nom');
	$req->bindValue(':nom', $_POST['mot']);
	$req->execute();
	//$val=array();
	$res='';
	while($ligne=$req->fetch(PDO::FETCH_ASSOC))
	{
		if($requeteur->isRh($ligne['id']))
		{
			$res .= "<div class=\"ombre\">
				<div class=\"row\">
				
					<div class=\"col-xm-12 col-sm-12 col-md-6 col-lg-6\">
						<label class=\"label label-primary\">Courriel :</label>
						<p class=\"form-control mailRh\">".htmlspecialchars($ligne['mail'],ENT_QUOTES)."</p>
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