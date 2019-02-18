<h1>Inscription</h1>
<?php
if (isset($_POST['maurice'])){
    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";

    $error = array();

    if (!(mb_strlen($nom) >= 2 && ctype_alpha($nom)))
        array_push($error, "Veuillez saisir un nom correct.");

    if (!(mb_strlen($prenom) >= 2 && ctype_alpha($nom)))
        array_push($error, "Veuillez saisir un prénom correct.");

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
        $sql = "INSERT INTO T_USERS
                (USENOM, USEPRENOM, USEMAIL, USEPASSWORD)
                VALUES ('" . $nom . "', '" . $prenom . "', '" . $mail . "', '" . password_hash($password, PASSWORD_DEFAULT) . "')";
        $query = $pdo->prepare($sql);
        $query->bindValue('USENOM', $nom, PDO::PARAM_STR);
        $query->bindValue('USEPRENOM', $prenom, PDO::PARAM_STR);
        $query->bindValue('USEMAIL', $mail, PDO::PARAM_STR);
        $query->bindValue('USEPASSWORD', $password, PDO::PARAM_STR);
        $query->execute();

        //debug($sql);

        echo "Coucou c'est bien enregistré !";
    }

}
else {
    require_once "frminscription.php";
}

?>