<?php 
	require_once(__DIR__ . "/../Models/ArticleRepository.php");

	class ArticleController
	{
		public static function indexAction()
		{
			$articles = ArticleRepository::getAllArticle();
			require(__DIR__ . "/../Views/index.php");
		}
	}
 ?>