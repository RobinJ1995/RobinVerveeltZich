<?php
	header("Content-Encode: gzip");
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Challenge 20 &bull; HackIt Challenges</title>
</head>
<body style="background: white; color: black;">
	<p style="display: none;">MisleadingTypo</p>
</body>
</html>
<?php
	echo gzencode(ob_get_clean(), 9);
?>
