<?php
	if (isset($_GET['koekje']) == false)
	{
		header('Location: c6.php?koekje=');
	}
	if ($_GET['koekje'] == 'ja')
	{
		$output = '<p>Niet enthousiast genoeg...</p>';
	}
	elseif ($_GET['koekje'] == 'ja!')
	{
		$output = '<p>Ok, hier heb je een koekje.<br />Laat het niet koud worden!</p>';
		setcookie ('koekje', 'nomnomlekkerkoekje', time() + 150);
	}
	else
	{
		$output = '<p>Wil je een koekje?</p>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Challenge 6 &bull; HackIt Challenges</title>
</head>
<body style="color: black; background: white;">
	<p><img src="http://cdn.laaloosh.com/wp-content/uploads/2009/02/chocolate-chip-cookies.jpg" alt="[Koekjes]" style="float: left; width: 120px; margin: 0px 8px 8px 0px; border-radius: 8px;" /></p>
	<?php
	echo $output;
	?>
</body>
</html>
