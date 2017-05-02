<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
		<title>MicroCMS - Home</title>
	</head>

	<body>
	<?php
	try
	{
		$db = new PDO('mysql:host=localhost;dbname=microcms;charset=utf8', 'root', 'frk7xet3g5pny', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ', $e->getMessage());
	}
	$req = $db->query('SELECT * FROM t_article ORDER BY art_id DESC');
	while ($data = $req->fetch())
	{
		echo '<p><strong>' . $data['art_title'] . '</strong><br />' . $data['art_content'] . '</p>';
	}
	$req->closeCursor();
	?>
	</body>
</html>