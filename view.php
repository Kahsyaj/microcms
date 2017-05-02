<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title>MicroCMS - Home</title>
	</head>

	<body>
		<header>
			<h1>MicroCMS</h1>
		</header>
	<?php
	while ($data = $req->fetch())
	{
		echo '<article><strong>' . $data['art_title'] . '</strong><br /><p>' . $data['art_content'] . '</p></article>';
	}
	$req->closeCursor();
	?>
		<footer class="footer"><a href="https://github.com/Kahsyaj/Exo-OC/tree/master/microcms">MicroCMS</a> is a minimalistic CMS built as a showcase for modern PHP developement.</footer>
	</body>
</html>