<?php

$connexion = mysqli_connect(
    "localhost",
    "root",
    "",
    "portfolio"
);

if (!$connexion) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

?>