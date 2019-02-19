<h1>Login</h1>
<?php
if (isset($_POST['barnabe'])) {
    $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";

    $error = array();

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
        include "frmlogin.php";
    }
    else {
            echo "C'est tout bon";
        }

    }

else {
    require_once "frmlogin.php";
}

