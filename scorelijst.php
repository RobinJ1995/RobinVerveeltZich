<?php
$query = $dblink->prepare('SELECT name, success, challenge FROM pogingen WHERE success>0');
$query->execute();
$temp = $query->fetchAll();
echo '	<h2 id="scorelijst">Scorelijst</h2>
	<table border="1">
		<tr>
			<th>Naam</th>
			<th>Challenges</th>
			<th>Punten</th>
		</tr>';
$punten = array();
$challengesdone = array();
$namen = array();
$strchallengesdone = array();
foreach ($temp as $row)
{
	if (!(in_array ($row['name'], $namen)))
	{
		$namen[] = $row['name'];
	}
	if (!(@in_array ($row['challenge'], $challengesdone[$row['name']])))
	{
		$punten[$row['name']] += $row['success'];
		$challengesdone[$row['name']][] = $row['challenge'];
	}
}
foreach ($namen as $naam)
{
	foreach ($challengesdone[$naam] as $temp)
	{
		$strchallengesdone[$naam] .= $temp . ' ';
	}	
}
foreach ($namen as $naam)
{
	echo '		<tr>
			<td>' . htmlentities($naam) . '</td>
			<td>' . htmlentities($strchallengesdone[$naam]) . '</td>
			<td>' . htmlentities($punten[$naam]) . '</td>
		<tr>';
}
echo '	</table>';
?>
