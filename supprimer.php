<?php
include("connexion.php");

$id = $_GET['id'];

mysqli_query($connexion, "DELETE FROM articles WHERE id=$id");

header("Location: index.php");
exit();
?>