<?php
include("connexion.php");

$resultat = mysqli_query($connexion, "SELECT * FROM articles ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Mon Portfolio</h1>

    <div class="menu">
        <a href="index.php">Accueil</a>
        <a href="apropos.php">À propos</a>
        <a href="ajouter_article.php">Ajouter un article</a>
    </div>

    <div class="hero">
        <h2>Bienvenue sur mon portfolio</h2>
        <p>Développeur Web PHP & MySQL</p>
    </div>

    <?php while($article = mysqli_fetch_assoc($resultat)) { ?>

        <?php if(!empty($article['titre'])) { ?>

        <div class="article">

            <h2><?php echo $article['titre']; ?></h2>

            <p><?php echo $article['contenu']; ?></p>

            <small>
                Publié le :
                <?php echo $article['date_publication']; ?>
            </small>

            <br><br>

            <a class="btn-modifier"
               href="modifier.php?id=<?php echo $article['id']; ?>">
               Modifier
            </a>

            <a class="btn-supprimer"
               href="supprimer.php?id=<?php echo $article['id']; ?>"
               onclick="return confirm('Voulez-vous vraiment supprimer cet article ?');">
               Supprimer
            </a>

        </div>

        <?php } ?>

    <?php } ?>

    <footer>
        <p>&copy; 2026 Jeanjacques Numbi</p>
        <p>Portfolio PHP / MySQL</p>
    </footer>

</div>

</body>
</html>