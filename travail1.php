<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
<center>
	<input type="text" name="t1" placeholder="saisir nom ici"><br><br>
	<input type="submit" name="afficher" value="afficher">
	<button>
		<a href="Travail6.php">Retour</a>
	</button>
	<button>
		<a href="Travail2.php">Suivant</a>
	</button>
</center>
</form>
</body>
</html>
<?php
if (isset($_POST['afficher'])) {
$a=$_POST['t1'];
echo "<h3><center>le nom est $a</h3></center>";	# code...
}
?>





