<?php 
	require_once(__DIR__ . "/../Repository/ArticleRepository.php");

	class ArticleController
	{
		//selon l'action a effectuer j'appelle mon repository necessaire afin de l'afficher dans ma view
		public static function indexAction()
		{
			$articles = ArticleRepository::getAllArticle();
			require(__DIR__ . "/../Views/index.php");
		}

		public static function lireMonArticle($id)
		{
			$article = ArticleRepository::getArticleById($id);
			require(__DIR__ . "/../Views/viewsArticle.php");
		}
	}
 ?>