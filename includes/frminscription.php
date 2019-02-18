<?php
if (!isset($nom)) $nom = "";
if (!isset($mail)) $mail = "";
if (!isset($prenom)) $prenom = "";
?>
<form method="post" action="index.php?page=inscription">
    <div>
        <label for="nom">Nom&nbsp;:</label>
        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" value="<?=$nom?>" />
    </div>
    <div>
        <label for="prenom">Prénom&nbsp;:</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" value="<?=$prenom?>" />
    </div>
    <div>
        <label for="mail">E-mail&nbsp;:</label>
        <input type="text" id="mail" name="mail" placeholder="Entrez votre adresse mail" value="<?=$mail?>" />
    </div>
    <div>
        <label for="password">Mot de passe&nbsp;:</label>
        <input type="password" id="password" name="password" placeholder="Entrez votre mdp" />
    </div>
    <div>
        <input type="reset" value="Effacer">
        <input type="submit" value="Envoyer">
    </div>
    <input type="hidden" name="maurice" />
</form>