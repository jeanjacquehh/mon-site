<?php
include("connexion.php");

$id = $_GET['id'];

$resultat = mysqli_query($connexion, "SELECT * FROM articles WHERE id=$id");
$article = mysqli_fetch_assoc($resultat);

if(isset($_POST['modifier']))
{
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];

    mysqli_query($connexion,
    "UPDATE articles
    SET titre='$titre', contenu='$contenu'
    WHERE id=$id");

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Modifier un article</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Modifier un article</h1>

<form method="post">

<input type="text"
name="titre"
value="<?php echo $article['titre']; ?>"
required>

<br><br>

<textarea
name="contenu"
rows="8"
required><?php echo $article['contenu']; ?></textarea>

<br><br>

<button type="submit" name="modifier">
Modifier
</button>

</form>

</div>

</body>
</html>