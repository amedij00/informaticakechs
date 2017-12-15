
<?php

$verbinding = mysql_connect("localhost", "root", "usbw");
mysql_select_db("vragenlijstproject");
$query = "SELECT * FROM informatielijst"; 
$result = mysql_query($query);

while ($line = mysql_fetch_row($result)) { 
	foreach ($line as $row) {
		echo "$row<br>";
	}
	echo "<hr>";
} 
mysql_close($verbinding);
?>
<h3>Bent u zeker klaar voor de toets?</h3>

<a href="aanmaak.php"><button type="button" formaction="aanmaak.php">Zet de nieuwe toets klaar.</button></a>