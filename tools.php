<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hulpmiddelen &bull; HackIt Challenges</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<style type="text/css">
		*
		{
			font-family: 'Droid Sans', sans;
		}
	</style>
</head>
<body>
	<form method="POST">
		<textarea name="tekst" style="width: 90%; height: 400px;"><?php
				if ($_POST['watTeDoen'] == 'base64_encode')
				{
					echo base64_encode($_POST['tekst']);
				}
				elseif ($_POST['watTeDoen'] == 'base64_decode')
				{
					echo base64_decode($_POST['tekst']);
				}
				elseif ($_POST['watTeDoen'] == 'str_rot13')
				{
					echo str_rot13($_POST['tekst']);
				}
				elseif ($_POST['watTeDoen'] == 'hex2bin')
				{
					echo pack("H*" , $_POST['tekst']);
				}
				elseif ($_POST['watTeDoen'] == 'bin2hex')
				{
					echo bin2hex($_POST['tekst']);
				}
			?></textarea>
		<br />
		<label for="watTeDoen">Wat moet er mee gebeuren?</label>
		<select name="watTeDoen" id="watTeDoen">
			<option value="base64_encode">Base64 Encode</option>
			<option value="base64_decode">Base64 Decode</option>
			<option value="str_rot13">Rot13</option>
			<option value="hex2bin">Hex → Bin</option>
			<option value="bin2hex">Hex ← Bin</option>
		</select>
		<br />
		<input type="submit" value="OK" />
	</form>
</body>
</html>
