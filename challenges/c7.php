<?php
	if (!(isset($_COOKIE['pogingen'])))
	{
		setcookie ('pogingen', 1, time() + 10);
	}
	else
	{
		if ($_COOKIE['pogingen'] >= 20)
		{
			$showButton = true;
		}
	}
	if ($_COOKIE['koekjes'] == 250)
	{
		$output = '<p><img src="http://www.sandierpastures.com/wp-content/uploads/2010/03/empty-plate.jpg" alt="[Papzak]" style="width: 240px; border-radius: 5px; float: left;" /></p>' . PHP_EOL . '<p>What the... <strong>gulzigaard</strong>!! Heb je nou al die 250 koekjes opgegeten?!!</p>';
		header("HTTP/1.1 250 gulzigaard");
	}
	elseif ($_COOKIE['koekjes'] > 250)
	{
		$output = '<p><img src="http://www.hln.be/static/FOTO/pe/1/6/9/large_456609.jpg" alt="[Papzak]" style="width: 200px; border-radius: 5px; float: left;" /></p>' . PHP_EOL . '<p>Papzak!</p>';
		header("HTTP/1.1 402 " . $_COOKIE['koekjes'] . " PapZak!JeHebtHetBordMeeOpgegeten!");
	}
	else
	{
		if (!(isset($_GET['nogeenkoekje'])))
		{
			header('Location: c7.php?nogeenkoekje=');
		}
		if ($_GET['nogeenkoekje'] == 'ja')
		{
			$output = '<p>Alsjeblieft, maar dat was wel echt het laatste hè.</p>';
			if (!(isset($_COOKIE['koekjes'])))
			{
				setcookie ('koekjes', 1, time() + 10);
			}
			else
			{
				setcookie ('koekjes', $_COOKIE['koekjes'] + 1, time() + 10);
				header("HTTP/1.1 250 Koekjes");
			}
			setcookie ('pogingen', $_COOKIE['pogingen'] + 1, time() + 300);
		}
		elseif ($_GET['nogeenkoekje'] == 'ja!')
		{
			$output = '<p>Wees eens niet zo gulzig jij!</p>';
			setcookie ('pogingen', $_COOKIE['pogingen'] + 1, time() + 300);
		}
		else
		{
			$output = '<p>Wil je nog een koekje?</p>';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Challenge 7 &bull; HackIt Challenges</title>
</head>
<body style="color: black; background: white;">
	<p><img src="http://cdn.laaloosh.com/wp-content/uploads/2009/02/chocolate-chip-cookies.jpg" alt="[Koekjes]" style="float: left; width: 120px; margin: 0px 8px 8px 0px; border-radius: 8px;" /></p>
	<?php
	echo $output;
	if ($showButton == true)
	{
		echo "<input type=\"button\" value=\"IK SNAP HIER ECHT GEEN FUCKING HOL VAN!!!\" onClick=\"alert('... Zucht. Ik hoop dat je ondertussen door hebt dat elke keer dat hij zegt «Hier heb je een koekje» dat de waarde van een bepaalde cookie verhoogd wordt? Wel, je moet koekjes blijven eten tot je er een bepaald aantal op hebt (hint naar het aantal in de headers), maar je mag er ook niet te veel eten, anders heb je het bord mee op! Je moet ook elke keer het volgende koekje eten voor het vorige koud is, wat 10 seconden duurt, of je moet opnieuw beginnen eten. Smakelijk!');\" />";
	}
	?>
</body>
</html>
