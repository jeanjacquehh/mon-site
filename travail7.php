<?php

$con=mysqli_connect('localhost','root','','mabase');

$id=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];

if($id=="")
{
    $req="INSERT INTO client(nom,prenom,age)
    VALUES('$nom','$prenom','$age')";
}
else
{
    $req="UPDATE client
    SET nom='$nom',
        prenom='$prenom',
        age='$age'
    WHERE id=$id";
}

mysqli_query($con,$req);

header("location:travail8.php");

?>
