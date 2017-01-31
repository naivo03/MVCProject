<?php 
	require_once(__DIR__ . '/../Controllers/ArticleController.php');
	
	class Router
	{

		private $url = null;
		private $segmentsOfTheUrl = [];

		public function start()
		{
			$this->parseUrl();
			$this->matchRightAction();
		}

		private function parseUrl()
		{
			$this->url = $_SERVER['REQUEST_URI'];
			$segments = explode('/', $this->url);
			$isSegmentOfTheUrl = false;
			foreach ($segments as $segment) {
				if ($isSegmentOfTheUrl === true) {
					$this->segmentsOfTheUrl[] = $segment;
				}
				if ($segment === 'index.php') {
					$isSegmentOfTheUrl = true;
				}
			}
		}

		private function matchRightAction()
		{
			require_once('routes.php');
			var_dump($this->segmentsOfTheUrl);
			foreach($routes as $route => $action)
			{
				if ($this->segmentsOfTheUrl[0] === $route)
					//executer l'action
					$this->execAction($action);
			}
		}

		private function execAction($method)
		{
			$phpCmd = '$r = \'lol\'; ';
			echo "$method";
			eval($method);		}

	}

 ?>