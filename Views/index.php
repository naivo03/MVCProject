<!DOCTYPE html>
<html>
<head>
	<title> Models Views Controller</title>
</head>
<body>
	<?php foreach($articles as $article):?>
		<p><?php echo $article->getTitle() ?></p>
		<p><?php echo $article->getContent() ?></p>
		<!--<form method= "POST" action="/MVCProject/Routes/routes.php">-->
		<form method= "POST" action="/MVCProject/index.php">

			<input type="hidden" name="idArticle" value="<?= $article->getId()?>">
			<input type="submit" value="Lire l'article" role="button" >
		</form>
	<?php endforeach; ?>
</body>
</html>