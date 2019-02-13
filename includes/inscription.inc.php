<h1>Inscription</h1>
<?php
if (isset($_POST['maurice'])){
    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";

    $error = array();

    if (!(mb_strlen($nom) >= 2 && ctype_alpha($nom)))
        array_push($error, "Veuillez saisir un nom correct.");

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
        array_push($error, "Veuillez saisir une adresse mail valide");

    if (mb_strlen($password) <6)
        array_push($error, "Votre mot de passe doit comporter un minimum de 6 caractères");

    if (count($error) > 0){
        $message = "<ul>";
        $i = 0;
            while ($i < count($error)){
                $message .= "<li>" . $error[$i] . "</li>";
                $i++;
            }
        $message .= "</ul>";
            echo $message;
            include "frminscription.php";
    }
    else {
        echo "Insertion en BDD";
    }
    //debug($error);
}
else {
    require_once "frminscription.php";
}
?>