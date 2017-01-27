<!DOCTYPE html>
<html>
<head>
	<title> Models Views Controller</title>
</head>
<body>
	<?php foreach($articles as $article):?>
		<p><?php echo $article->getTitle() ?></p>
		<p><?php echo $article->getContent() ?></p>
	<?php endforeach; ?>
</body>
</html>