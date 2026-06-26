<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
<center>
	<input type="text" name="t1" placeholder="saisir nom ici" class="form-control"><br><br>
	<input type="text" name="t2" placeholder="saisir prenom ici" class="form-control"><br><br>
	<input type="submit" name="afficher" value="afficher">
	<button>
		<a href="Travail1.php">Retour</a>
	</button>
	<button>
		<a href="Travail3.php">Suivant</a>
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
<?php
if (isset($_POST['afficher'])) {
$a=$_POST['t2'];
echo "<h3><center>le prenom est $a</h3></center>";	# code...
}
?>

