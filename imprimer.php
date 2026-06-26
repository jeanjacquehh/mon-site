<?php

$con=mysqli_connect("localhost","root","","mabase");

$id=$_GET['id'];

$res=mysqli_query($con,"SELECT * FROM client WHERE id=$id");

$row=mysqli_fetch_assoc($res);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Impression</title>
</head>
<body onload="window.print()">

<center>
<h2>Fiche Client</h2>

<table border="1" cellpadding="10">
<tr>
<td>Nom</td>
<td><?php echo $row['nom']; ?></td>
</tr>

<tr>
<td>Prénom</td>
<td><?php echo $row['prenom']; ?></td>
</tr>

<tr>
<td>Age</td>
<td><?php echo $row['age']; ?></td>
</tr>
</table>

</center>

</body>
</html>
