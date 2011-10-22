<?php
	include 'src/interface.php';
	$arr=listEventTeams($_GET['eid']);
	$i=1;
	echo "<table border=\"1\">";
	echo "<tr><td></td><td>Event</td><td>".$_GET['eid']."</td></tr>";
	foreach ($arr as $key => $value) {
		 echo "<tr><td>$i</td><td>$key</td><td>$value</td></tr>";
		 $i++;
	}
	echo "</table>";
?>
