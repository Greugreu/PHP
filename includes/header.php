<?php

if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
    if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
        $bonjour = $_SESSION['prenom'] . " " . $_SESSION['nom'];
    }
}

else
{
    unset($bonjour);
}

?>

<body>
<header>
    <?php if(isset($bonjour)) echo "<p>Bonjour $bonjour</p>"; ?>
    <nav>
        <ul>
            <li><a href="index.php?page=accueil" >Accueil</a></li>
            <li><a href="index.php?page=produits">Produits</a></li>
            <li><a href="index.php?page=inscription">Inscription</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
            <?php
            if (isset($_SESSION['login']) && $_SESSION['login'] == 1){
                echo "<li><a href=\"index.php?page=logout\">Logout</a></li>";
            }

            else
            {
                echo "<li><a href=\"index.php?page=login\">Login</a></li>";
            }
            ?>

            <?php
            if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
                echo "<ul><li><a href=\"index.php?page=ajouterproduit\">Ajouter Produits</a></li></ul>";
            }
            ?>
        </ul>
    </nav>
</header>
<main>