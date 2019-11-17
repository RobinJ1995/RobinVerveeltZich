<?php
	header('Required-User-Agent: NULL');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Challenge 14 &bull; HackIt Challenges</title>
</head>
<body style="background: white; color: black;">
	<?php
		if ((!(strstr($_SERVER['HTTP_USER_AGENT'], 'X11; Linux'))) && (!(strstr($_SERVER['HTTP_USER_AGENT'], 'X11; U; Linux'))))
		{
			echo 'Sorry, maar om deze pagina te bekijken heb je Linux nodig!';
		}
		else
		{
			echo 'Sorry, maar om deze pagina te bekijken heb je Windows nodig!';
		}
		if (($_SERVER['HTTP_USER_AGENT'] == '') || (strtolower($_SERVER['HTTP_USER_AGENT']) == 'null'))
		{
			echo 'NeverTrustAgents';
		}
	?>
</body>
</html>
