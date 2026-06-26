<?php
include("connexion.php");
      $id = $_get['id'];
      $sql = "delete FROM client WHERE id=$id";
      mysqli_query($con,$sql);
      header("location: travail8.php"); // retour a la liste
      exit
    ?>