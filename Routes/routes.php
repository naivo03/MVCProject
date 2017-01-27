<?php 
	require_once(__DIR__ . '/../Controllers/ArticleController.php');
	require_once(__DIR__ . '/../Views/index.php');

	if (isset($_GET) && $_GET == NULL)
		ArticleController::indexAction();
	else
		echo "Vous n'avez pas passez les bon parametres pour effectuer un affichage";
 ?>	