<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Challenge 11 &bull; HackIt Challenges</title>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'>
	<style type="text/css">
		*
		{
			font-family: 'Ubuntu Mono', 'Courir New', 'Freemono', 'Mono', 'Monotype';
		}
	</style>
</head>
<body style="color: black; background: white;">
	<p><img src="http://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Tux.png/220px-Tux.png" alt="[Tux]" style="border-radius: 5px; height: 140px; float: left; margin: 0px 8px 8px 0px;" /></p>
	<form method="POST">
		<label for="command"><kbd>Command: </kbd></label>
		<input type="text" name="command" id="command" size="28" value="give me the password" />
		<input type="submit" size="20" value="»" />
	</form>
	<br />
	<input type="text" readonly="readonly" value="<?php
if (($_POST['command'] == 'give me the password') || ($_POST['command'] == 'sudo give me the password') || ($_POST['command'] == 'su -c give me the password') || ($_POST['command'] == 'su -c "give me the password"') || ($_POST['command'] == 'give me the password!') || ($_POST['command'] == 'sudo give me the password!') || ($_POST['command'] == 'su -c give me the password!') || ($_POST['command'] == 'su -c "give me the password"'))
{
	if (strpos($_POST['command'], 'su') === 0)
	{
		echo '2.6.35-31-generic';
		$showCartoon = true;
	}
	else
	{
		echo 'What? Find it yourself!';
	}
}
else
{
	if ($_POST['command'] == '')
	{
		echo 'What? Find it yourself!';
	}
	else
	{
		echo htmlentities($_POST['command']) . ": command not found";
	}
}
?>" size="46" />
<?php
	if ($showCartoon === true)
	{
		echo '<p style="clear: both;"><img src="http://imgs.xkcd.com/comics/sandwich.png" alt="[Cartoon]" /></p>';
	}
?>
</body>
</html>
