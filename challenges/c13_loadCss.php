<?php
	header('Content-Type: text/css');
	if ($_GET['css'] == 'c13.css')
	{
		include('c13.css');
	}
	elseif ($_GET['css'] == 'c13_loadCss.php')
	{
		echo file_get_contents('c13_loadCss.php');
	}
	elseif ($_GET['css'] == 'c13.php')
	{
		echo file_get_contents('c13.php');
	}
	elseif (!(isset($_GET['css'])))
	{
		die('Geen stylesheet gedefinieerd');
	}
	else
	{
		echo 'Toegang geweigerd';
	}
?>
