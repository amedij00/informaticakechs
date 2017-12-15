
<?php

if (!isset($_POST['llnr'])) {$llnr ="";}
if (isset($_POST['llnr'])) {$llnr = $_POST['llnr'];}
if (empty($_POST['llnr'])) {$llnr ="llnr";}

if (!isset($_POST['klas'])) {$klas ="";}
if (isset($_POST['klas'])) {$klas = $_POST['klas'];}
if (empty($_POST['klas'])) {$klas ="klas";}

if (!isset($_POST['versie'])) {$versie ="";}
if (isset($_POST['versie'])) {$versie = $_POST['versie'];}
if (empty($_POST['versie'])) {$versie ="versie";}

$verbinding = mysql_connect("localhost", "root", "usbw");
mysql_select_db("vragenlijstproject");

$query = "INSERT INTO informatielijst VALUES('$llnr', '$klas', '$versie') ";

mysql_query($query);
mysql_close($verbinding);
?>
<p>Bent u zeker klaar voor de toets?</p>

<a href="vertoon.php"><button type="button" formaction="vertoon.php">Ja!</button></a>