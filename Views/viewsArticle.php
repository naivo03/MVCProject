<!DOCTYPE html>
<html>
<head>
	<title> Models Views Controller</title>
</head>
<body>
		<p><h1><?php echo $article->getTitle() ?></h1></p>
		<p><?php echo $article->getContent() ?></p>
		<br><br><br>
		<!--<a href="/MVCProject/Routes/routes.php"> <input type="button" value="Retour a l'acceuil"> </a>-->
		<a href="/MVCProject/index.php"> <input type="button" value="Retour a l'acceuil"> </a>
</body>
</html>