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
	try
	{
		$db = new PDO('mysql:host=localhost;dbname=microcms;charset=utf8', 'root', 'frk7xet3g5pny', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	$req = $db->query('SELECT * FROM t_article ORDER BY art_id DESC');
	while ($data = $req->fetch())
	{
		echo '<article><strong>' . $data['art_title'] . '</strong><br /><p>' . $data['art_content'] . '</p></article>';
	}
	$req->closeCursor();
	?>
		<footer class="footer"><a href="https://github.com/Kahsyaj/Exo-OC/tree/master/microcms">MicroCMS</a> is a minimalistic CMS built as a showcase for modern PHP developement.</footer>
	</body>
</html>