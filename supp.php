<?php

$con = mysqli_connect("localhost","root","","mabase");

if(!$con){
    die("Erreur connexion : ".mysqli_connect_error());
}

if(isset($_GET['id'])){

    $id = intval($_GET['id']);

    $sql = "DELETE FROM client WHERE id=$id";

    if(mysqli_query($con,$sql)){
        header("Location: travail8.php");
        exit();
    }else{
        echo "Erreur SQL : ".mysqli_error($con);
    }

}else{
    echo "Aucun ID reçu";
}

mysqli_close($con);

?>
