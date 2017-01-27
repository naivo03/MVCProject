<?php 
	require_once(__DIR__ . '/../Controllers/ArticleController.php');


	//ici dans route selon les parametres de la requetes recu on definit l'action a effectuer (quelle fonction de quelle controller appeler puis donc de la views a afficher)
	if (isset($_GET) && $_GET == NULL)
		ArticleController::indexAction();
	else
		echo "Vous n'avez pas passez les bon parametres pour effectuer un affichage";
 ?>	