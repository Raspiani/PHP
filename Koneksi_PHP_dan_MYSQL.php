<!DOCTYPE html>
<html>
<head>
	<title>Menguji Koneksi Database</title>
</head>
<body>

<?php

	$koneksi = mysql_connect('localhost', 'root', 'raspiani');

	if ($koneksi) 
	{
		echo "<p style=\"color:green\">";
		echo "<b> Koneksi PHP dan MYSQL Terhadap Database Raspiani SUKSES"</b>;
		echo "<br/>";
		echo "</p>";
	}

	else 
	{
		echo "<p style=\"color:red\">";
		echo "<b> Koneksi PHP dan MYSQL Terhadap Database Raspiani GAGAL </b>";
		echo "<br/>";
		echo "</p>";
	}

?>

</body>
</html>