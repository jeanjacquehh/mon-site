<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Enregistrement des clients</title>
<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
</head>

<body>

<?php

$con=mysqli_connect("localhost","root","","mabase");

$nom="";
$prenom="";
$age="";
$id="";

if(isset($_GET['id']))
{
    $id=$_GET['id'];

    $res=mysqli_query($con,"SELECT * FROM client WHERE id=$id");

    if($row=mysqli_fetch_assoc($res))
    {
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $age=$row['age'];
    }
}

?>

<div class="container">
<div class="col-md-4 offset-4" style="margin-top:100px">

<form method="POST" action="travail7.php">

<center>
<h1><u><font color="blue">Enregistrement des clients</font></u></h1>
</center>

<input type="hidden" name="id" value="<?php echo $id; ?>">

<input type="text" name="nom"
class="form-control"
value="<?php echo $nom; ?>"
placeholder="saisir nom ici"><br><br>

<input type="text" name="prenom"
class="form-control"
value="<?php echo $prenom; ?>"
placeholder="saisir prenom ici"><br><br>
<center>
<input type="number" name="age"
class="form-control"
value="<?php echo $age; ?>"
placeholder="saisir age ici"><br><br>

<input type="submit"
name="Enregistrer"
value="Enregistrer"
class="btn btn-primary"><br><br>


<a href="Travail5.php" class="btn btn-danger">Retour</a>
</center>
<br>

<center>
<a href="Travail8.php" class="btn btn-danger">Suivant</a>
</center>

</form>

</div>
</div>

</body>
</html>
