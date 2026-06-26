<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width,initial-scale-1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="col-md-4 offset-4" style="margin-top:100px">
<form method="POST">
</form>
</div>
</div>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','mabase');
if (!$con) {

	          die("probleme de connexion" .mysql_error());
	
}
echo "<center><table border=\"3\">";
echo "<tr>";
echo "<td> Numero</td>";
echo "<td> Nom</td>";
echo "<td> Prenom</td>";
echo "<td> Age</td>";
echo "<td colspan=2><center>controle</center></td>";
echo "</tr>";
$sql="SELECT * FROM client
      WHERE nom<> ''
      AND prenom<> ''
      AND age<> ''";
$res=mysqli_query($con,$sql);
      while ($row=mysqli_fetch_assoc($res)){
                  echo
     "<td>".$row['id']."</td>"."<td>".$row['nom']."</td>"."<td>".$row['prenom']."</td>"."<td>".$row['age']."</td>"."<td><a href='supp.php?id=".$row['id']."' class='btn btn-danger'>supprimer</a></td>"."<td><a href='travail6.php?id=".$row['id']."' class='btn btn-success'>modifier</a></td>"."<td><a href='imprimer.php?id=".$row['id']."' class='btn btn-primary'>imprimer</a></td>";
     echo "</tr>";
     
      }
      mysqli_close($con);
      echo "<a href='travail6.php'class='btn btn-secondary'>retour</a><br><br>";
      ?>
    

