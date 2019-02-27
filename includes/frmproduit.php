<?php
if (!isset($reference)) $reference = "";
if (!isset($nomProduit)) $nomProduit = "";
if (!isset($prix)) $prix = "";
if (!isset($photo)) $photo = "";
?>
<form method="post" action="index.php?page=ajouterproduit" enctype="multipart/form-data">
    <div>
        <label for="reference">Référence&nbsp;: </label>
        <input type="text" id="reference" name="reference" value="<?=$reference?>" />
    </div>
    <div>
        <label for="nomProduit">Nom du produit&nbsp;: </label>
        <input type="text" id="nomProduit" name="nomProduit" value="<?=$nomProduit?>" />
    </div>
    <div>
        <label for="prix">Prix du produit&nbsp;: </label>
        <input type="text" id="prix" name="prix" value="<?=$prix?>"/>
    </div>
    <div>
        <label for="photo">Photo du produit&nbsp;: </label>
        <input type="file" id="photo" name="photo" value="<?=$photo?>" />
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="ajoutp" />
</form>
