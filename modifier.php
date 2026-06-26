<?php

$con = mysqli_connect("localhost","root","","mabase");

$id = $_GET['id'];

$res = mysqli_query($con,"SELECT * FROM client WHERE id=$id");

$row = mysqli_fetch_assoc($res);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier client</title>
</head>
<body>

<form method="POST">

    <input type="text" name="nom" value="<?php echo $row['nom']; ?>"><br><br>

    <input type="text" name="prenom" value="<?php echo $row['prenom']; ?>"><br><br>

    <input type="text" name="age" value="<?php echo $row['age']; ?>"><br><br>

    <input type="submit" name="modifier" value="Modifier">

</form>

</body>
</html>

<?php

if(isset($_POST['modifier']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];

    $sql = "UPDATE client
            SET nom='$nom',
                prenom='$prenom',
                age='$age'
            WHERE id=$id";

    if(mysqli_query($con,$sql))
    {
        header("Location: travail8.php");
        exit();
    }
    else
    {
        echo mysqli_error($con);
    }
}

?>
