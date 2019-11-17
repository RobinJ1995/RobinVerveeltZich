<?php
	if (!(isset($_GET['wachtwoord'])))
	{
		header('Location: c13.php?wachtwoord=');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Challenge 13 &bull; HackIt Challenges</title>
	<link type="text/css" rel="stylesheet" href="c13_loadCss.php?css=c13.css" />
</head>
<body>
	<?php
		if ($_GET['wachtwoord'] != '$_GET[]')
		{
			echo '<p><strong>Toegang geweigerd</strong>: Wachtwoord onjuist!</p>';
		}
		else
		{
			echo '<script type="text/javascript">' . PHP_EOL . 'window.location = "../index.php";' . PHP_EOL . '</script>';
		}
	?>
</body>
</html>
