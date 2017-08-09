<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
	<h1>Nos Clients</h1>
	<?php
		foreach($data as $d)
		{
			echo "<ul>";
			echo ('<li>dateNaissance: '.$d->dateNaissance.'</li>');
			echo ('<li>pieceIdentite: '.$d->pieceIdentite.'</li>');
			echo ('<li>profession: '.$d->profession.'</li>');
			echo ('<li>paysResidence: '.$d->paysResidence.'</li>');
            echo ('<li>villeResidence: '.$d->villeResidence.'</li>');
			echo "</ul>";
		}
	?>
</body>
</html>