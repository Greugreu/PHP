<h1>Ajouter un produit</h1>

<?php

if (isset($_POST['ajoutp']))
{
    $reference = isset($_POST['reference']) ? $_POST['reference'] : "";
    $nomProduit = isset($_POST['nomProduit']) ? $_POST['nomProduit'] : "";
    $prix = isset($_POST['prix']) ? $_POST['prix'] : "";
    $photo = $_FILES['photo'];
    $nomPhoto = $_FILES['photo']['name'];
    $typePhoto = $_FILES['photo']['type'];
    $tmpPhoto = $_FILES['photo']['tmp_name'];
    $errorPhoto = $_FILES['photo']['error'];
    $sizePhoto = $_FILES['photo']['size'];


    if ($errorPhoto == 0) {
        $nomPhoto = supprAxen($nomPhoto);
        if (checkExtension("image", $nomPhoto))
            echo "Extension permise";
        else
            echo "Extension verboten";
    }
}

else
{
    require_once "frmproduit.php";
}

?>