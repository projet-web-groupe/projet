<?php session_start();

function isConnecter(){
	return (!empty($_SESSION['connecte']) && $_SESSION['connecte']);
}

?>