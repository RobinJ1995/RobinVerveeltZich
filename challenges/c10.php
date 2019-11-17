<?php
// miauwZegtDePoes
$rnd[] = rand(8, 80) . '.' . rand(0, 999);
$rnd[] = rand(6, 80) . '.' . rand(0, 999);
$rnd[] = rand(6, 80) . '.' . rand(0, 999);
$rnd[] = rand(6, 80) . '.' . rand(0, 999);
if (isset($_GET['host']) && ($_GET['command'] == 'ping'))
{
	sleep((($rnd[0] + $rnd[1] + $rnd[2] + $rnd[3])) / 100);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Challenge 10 &bull; HackIt Challenges</title>
</head>
<body style="color: black; background: white;">
	<p><img src="http://fedoraproject.org/w/uploads/8/83/Docs_Drafts_DesktopUserGuide_XfceDesktop_gnome_terminal.png" alt="[Terminal]" style="border-radius: 5px; float: left; margin: 0px 8px 8px 0px;" /></p>
	<p>Ping, pong!</p>
	<br style="clear: both;" />
	<form method="GET">
		<input type="hidden" name="command" value="ping" />
		<label for="wiegaanwepingen?"><input type="url" id="wiegaanwepingen" name="host" placeholder="http://www.robinj.be" /></label>
		<input type="submit" value="Ping!" />
	</form>
	<hr />
<textarea style="width: 90%; height: 200px;">
<?php
if ($_GET['command'] == 'ping')
{
	if (isset($_GET['host']))
	{
		if (strstr($_GET['host'], 'http://'))
		{
?>
PING <?php echo str_replace('http://', '', str_replace('http://www.', '', $_GET['host'])); ?>: 48 data bytes
56 bytes from <?php echo str_replace('http://', '', str_replace('http://www.', '', $_GET['host'])); ?>: icmp_seq=0 ttl=54 time=<?php echo $rnd[0]; ?> ms
56 bytes from <?php echo str_replace('http://', '', str_replace('http://www.', '', $_GET['host'])); ?>: icmp_seq=1 ttl=54 time=<?php echo $rnd[1]; ?> ms
56 bytes from <?php echo str_replace('http://', '', str_replace('http://www.', '', $_GET['host'])); ?>: icmp_seq=2 ttl=54 time=<?php echo $rnd[2]; ?> ms
56 bytes from <?php echo str_replace('http://', '', str_replace('http://www.', '', $_GET['host'])); ?>: icmp_seq=3 ttl=54 time=<?php echo $rnd[3]; ?> ms
--- google.com ping statistics ---
4 packets transmitted, 4 packets received, 0% packet loss
round-trip min/avg/max/stddev = <?php echo $rnd[0]; ?>/<?php echo $rnd[1]; ?>/<?php echo $rnd[2]; ?>/<?php echo $rnd[3]; ?> ms
<?php
		}
		else
		{
			echo 'ping: unknown host';
		}
	}
}
elseif ($_GET['command'] == 'help')
{
	echo 'ping HOST...' . PHP_EOL .
		'cat FILE...' . PHP_EOL . 
		'dir [FILE]...' . PHP_EOL . 
		'ls [FILE]...';
}
elseif ($_GET['command'] == 'cat')
{
	if (($_GET['host'] == 'c10.php') || ($_GET['host'] == './c10.php'))
	{
		$content = file_get_contents('c10.php');
		echo $content;
	}
	else
	{
		$explodedhost = explode(' ', $_GET['host']);
		echo 'cat: ' . $explodedhost[0] . ': Access denied' . PHP_EOL;
		foreach ($explodedhost as $temp)
		{
			if ($temp != $explodedhost[0])
			{
				echo 'cat: ' . $temp . ": File or directory doesn\'t exist" . PHP_EOL;
			}
		}
	}
}
elseif (($_GET['command'] == 'ls') || ($_GET['command'] == 'dir'))
{
	if (($_GET['host'] != '.') && ($_GET['host'] != ''))
	{
		$explodedhost = explode(' ', $_GET['host']);
		echo $_GET['command'] . ": cannot open directory " . $explodedhost[0] . ': Access denied' . PHP_EOL;
		foreach ($explodedhost as $temp)
		{
			if ($temp != $explodedhost[0])
			{
				echo $_GET['command'] . ': ' . $temp . ": cannot open directory " . $temp . ': Access denied' . PHP_EOL;
			}
		}
	}
	else
	{
		$dircontent = scandir('.');
		foreach ($dircontent as $file)
		{
			if (($file != '.') && ($file != '..'))
			{
				echo $file . ' ';
			}
		}
	}
}
elseif (!(isset($_GET['host'])))
{
	// Niets doen
}
else
{
	$explodedcommand = explode(' ', $_GET['command']);
	echo $explodedcommand[0] . ': command not found';
}
?>
</textarea>
</body>
</html>
