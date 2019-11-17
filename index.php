<?php
if (($_SERVER['REMOTE_ADDR'] == '202.71.111.247') || ($_SERVER['REMOTE_ADDR'] == '62.220.135.129'))
{
	header('Location: http://www.nobrain.dk');
}
$dblink = new PDO
(
	'mysql:host=localhost;dbname=*', '*', '*'
);
$dblink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>&bull; HackIt Challenges &bull;</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<style type="text/css">
		*
		{
			font-family: 'Droid Sans', sans;
		}
	</style>
</head>
<body>
	<?php
		if ($_POST['cchall'] != 'null')
		{
			if (isset($_POST['cpass']))
			{
				$passed = false;
				if (($_POST['cchall'] == '1') && ($_POST['cpass'] == 'howdoyoudo'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '2') && ($_POST['cpass'] == 'sourceengine'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '3') && ($_POST['cpass'] == 'hellyeahbase64'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '4') && ($_POST['cpass'] == 'hEAdAChE'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '5') && ($_POST['cpass'] == 'stopMetZuipenDan!'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '6') && ($_POST['cpass'] == 'nomnomlekkerkoekje'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '7') && ($_POST['cpass'] == 'gulzigaard'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '8') && ($_POST['cpass'] == 'Pictogram'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '9') && ($_POST['cpass'] == 'FaviconMetVerborgenBoodschap'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '10') && ($_POST['cpass'] == 'miauwZegtDePoes'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '11') && ($_POST['cpass'] == '2.6.35-31-generic'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '12') && ($_POST['cpass'] == 'Plopperdeplopperdeplop!'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '13') && ($_POST['cpass'] == '$_GET[]'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '14') && ($_POST['cpass'] == 'NeverTrustAgents'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '15') && ($_POST['cpass'] == 'syntax error'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '15') && (($_POST['cpass'] == 'T_STRING') || ($_POST['cpass'] == 'unexpected T_STRING')))
				{
					echo '<p style="color: black; background: #FFFF8F; border: 1px solid yellow; border-radius: 5px; text-align: center; padding: 12px;">Bijna juist... Nu nog ietsje algemener denken.</p>';
				}
				elseif (($_POST['cchall'] == '15') && ($_POST['cpass'] == 'Parse error'))
				{
					echo '<p style="color: black; background: #FFFF8F; border: 1px solid yellow; border-radius: 5px; text-align: center; padding: 12px;">Bijna juist... Nu nog ietsje algemener denken.</p>';
				}
				elseif (($_POST['cchall'] == '16') && (strtolower($_POST['cpass']) == 'enchanting'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '17') && (($_POST['cpass'] == 'spin') || ($_POST['cpass'] == 'Spin')))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '18') && (strtolower($_POST['cpass']) == 'lorem ipsum'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '19') && ($_POST['cpass'] == 'RickAstleyWillNeverGiveYouUp'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '20') && ($_POST['cpass'] == 'MisleadingTypo'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '21') && ($_POST['cpass'] == 'SlowRequestQuickResponse'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '22') && (strtolower($_POST['cpass']) == 'banaan'))
				{
					$passed = true;
				}
				elseif (($_POST['cchall'] == '23') && ($_POST['cpass'] == 'HideNSeek'))
				{
					$passed = true;
				}
				else
				{
					$passed = false;
				}
				$query = $dblink->prepare('INSERT INTO pogingen (name, time, ip, useragent, pass, success, challenge) VALUES (:name, :time, :ip, :useragent, :pass, :success, :challenge);');
				$query->bindValue(':name', $_POST['cname']);
				$query->bindValue(':time', time());
				$query->bindValue(':ip', $_SERVER['REMOTE_ADDR']);
				$query->bindValue(':useragent', $_SERVER['HTTP_USER_AGENT']);
				$query->bindValue(':pass', $_POST['cpass']);
				$query->bindValue(':success', (($passed === true) ? (5) : (0)));
				$query->bindValue(':challenge', $_POST['cchall']);
				$query->execute();
				echo '<p style="color: black; background: #FFFF8F; border: 1px solid yellow; border-radius: 5px; text-align: center; padding: 12px;">' . (($passed === true) ? ('Correct!') : ('Dat was hem niet...')) . '</p>';
			}
		}
		else
		{
			echo '<p style="color: black; background: #FFFF8F; border: 1px solid yellow; border-radius: 5px; text-align: center; padding: 12px;">Welke challenge?</p>';
		}
	?>
	<div>
		<h1>De <strong>Robin Verveelt Zich</strong> Challenges, geïnspireerd door de <strong>Buzzer Verveelt Zich</strong> Challenges.</h1>
		<p>Ik verveelde me, dus ik dacht, laat ik eens wat challenges maken, zoals er een paar jaar geleden de <strong>Buzzer Verveelt Zich</strong> Challenges waren <img src="http://digitalplace.nl/forum/images/smilies/default/icon_razz.gif" alt=":p" /></p>
		<h2>Hoe werkt het?</h2>
		<ul>
			<li>Ga naar één van de challenges (logischerwijze begin je best bij <a target="_blank" href="challenges/c1.php">1</a>).</li>
			<li>Zoek het wachtwoord dat er ergens verstopt zit.</li>
			<li>Ga terug naar deze pagina.</li>
			<li>Duid in het formulier hoeronder aan welke challenge je gedaan hebt.</li>
			<li>Geef in het veld <em>Wachtwoord</em> het wachtwoord van de challenge in.</li>
			<li>Geef in het veld <em>Naam</em> je DigitalPlace nickname in.</li>
			<li>Klik op de knop <em>Stuur naar scorelijst</em>.</li>
		</ul>
		<p>Je krijgt dan te zien of het wachtwoord dat je gevonden hebt correct is of niet, en het wordt aan de database toegevoegd.<br />Zolang ik me verveel blijf ik challenges toevoegen. Als je het echt niet kan vinden kan je me een PM sturen met de vraag naar een hint. Je mag in het totaal 4 hints vragen, en voor elke hint die je vraagt wordt er één punt afgetrokken. Vind je het juiste wachtwoord zonder hints, dan krijg je 5 punten.</p>
		
		<h2>Wat heb ik nodig?</h2>
		<p>Firebug, maar met de <em>Element inspecteren</em>-functie van <em>WebKit</em>-browsers zoals <em>Chrome</em>, <em>Midori</em> en <em>Safari</em> zou het ook moeten lukken. Voor het coderen en decoderen van tekst kan je <a href="http://robinj.be/RobinVerveeltZich/tools.php" target="_blank">deze pagina</a> gebruiken.</p>

		<h2>Regels</h2>
		<p><strong>Speel eerlijk!</strong><br />
		Ga elkaar geen wachtwoorden geven en ga ze zeker nergens openbaar zetten. Ga ook niet stiekem hints (door)geven aan elkaar. Dat verpest het spel alleen maar.
		Als ik merk dat teveel mensen moeite hebben met een bepaalde challenge kan het zijn dat ik een gratis hint bij op de challenge pagina zet. De mensen waar ik dan al punten had afgetrokken voor die hint krijgen deze punten terug.</p>

		<h2>Hints</h2>
		<ul>
			<li>De tekst op de challenge pagina geeft je vaak al een tip waar je moet zoeken.</li>
			<li>Het wachtwoord is altijd iets herkenbaars, nooit zomaar wat willekeurige tekens.</li>
		</ul>

		<p>Succes <img src="http://digitalplace.nl/forum/images/smilies/bier.gif" alt=":)" /></p>
	</div>
	<ul>
		<li><a target="_blank" href="challenges/c1.php">Challenge 1</a></li>
		<li><a target="_blank" href="challenges/c2.php">Challenge 2</a></li>
		<li><a target="_blank" href="challenges/c3.php">Challenge 3</a></li>
		<li><a target="_blank" href="challenges/c4.php">Challenge 4</a></li>
		<li><a target="_blank" href="challenges/c5.php">Challenge 5</a></li>
		<li><a target="_blank" href="challenges/c6.php">Challenge 6</a></li>
		<li><a target="_blank" href="challenges/c7.php">Challenge 7</a></li>
		<li><a target="_blank" href="challenges/c8.php">Challenge 8</a></li>
		<li><a target="_blank" href="challenges/c9.php">Challenge 9</a></li>
		<li><a target="_blank" href="challenges/c10.php">Challenge 10</a></li>
		<li><a target="_blank" href="challenges/c11.php">Challenge 11</a></li>
		<li><a target="_blank" href="challenges/c12.php">Challenge 12</a></li>
		<li><a target="_blank" href="challenges/c13.php">Challenge 13</a></li>
		<li><a target="_blank" href="challenges/c14.php">Challenge 14</a></li>
		<li><a target="_blank" href="challenges/c15.php">Challenge 15</a></li>
		<li><a target="_blank" href="challenges/c16.php">Challenge 16</a></li>
		<li><a target="_blank" href="challenges/c17.php">Challenge 17</a></li>
		<li><a target="_blank" href="challenges/c18.php">Challenge 18</a></li>
		<li><a target="_blank" href="challenges/c19.php">Challenge 19</a></li>
		<li><a target="_blank" href="challenges/c20.php">Challenge 20</a></li>
		<li><a target="_blank" href="challenges/c21.php">Challenge 21</a></li>
		<li><a target="_blank" href="challenges/c22.php">Challenge 22</a></li>
		<li><a target="_blank" href="challenges/c23.php">Challenge 23</a></li>
	</ul>
	<form method="POST">
		<fieldset style="border-radius: 5px;">
			<legend>Als je een wachtwoord hebt gevonden, duid dan hieronder aan bij welke challenge, en wat het wachtwoord was.</legend>
			<table style="border: 0px;">
				<tr>
					<td>
						<label for="cchall">Uitdaging: </label>
					</td>
					<td>
						<select id="cchall" name="cchall" style="width: 100%;">
							<option value="null" selected="selected">--</option>
							<option value="1">Challenge 1</option>
							<option value="2">Challenge 2</option>
							<option value="3">Challenge 3</option>
							<option value="4">Challenge 4</option>
							<option value="5">Challenge 5</option>
							<option value="6">Challenge 6</option>
							<option value="7">Challenge 7</option>
							<option value="8">Challenge 8</option>
							<option value="9">Challenge 9</option>
							<option value="10">Challenge 10</option>
							<option value="11">Challenge 11</option>
							<option value="12">Challenge 12</option>
							<option value="13">Challenge 13</option>
							<option value="14">Challenge 14</option>
							<option value="15">Challenge 15</option>
							<option value="16">Challenge 16</option>
							<option value="17">Challenge 17</option>
							<option value="18">Challenge 18</option>
							<option value="19">Challenge 19</option>
							<option value="20">Challenge 20</option>
							<option value="21">Challenge 21</option>
							<option value="22">Challenge 22</option>
							<option value="23">Challenge 23</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label for="cpass">Wachtwoord: </label>
					</td>
					<td>
						<input type="password" name="cpass" id="cpass" style="width: 100%;" />
					</td>
				</tr>
				<tr>
					<td>
						<label for="cname">Naam: </label>
					</td>
					<td>
						<input type="text" name="cname" id="cname" style="width: 100%;" />
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<label for="cname"><em>Gelieve je DigitalPlace nickname te gebruiken als naam, en altijd dezelfde naam te gebruiken.</em></label>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Stuur naar scorelijst" style="padding: 6px 12px 6px 12px; width: 100%; height: 100%;" />
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php include('scorelijst.php'); ?>
</body>
</html>
