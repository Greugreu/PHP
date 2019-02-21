<?php

?>
<form method="post" action="index.php?page=ajouterproduit">
    <div>
        <label for="reference">Référence&nbsp;: </label>
        <input type="text" id="reference" name="reference" value="<?=$reference?>" />
    </div>
    <div>
        <label for="nomProduit">Nom du produit&nbsp;: </label>
        <input type="text" id="nomProduit" name="nomProduit" />
    </div>
    <div>
        <label for="prix">Prix du produit&nbsp;: </label>
        <input type="text" id="prix" name="prix" />
    </div>
    <div>
        <label for="photo">Photo du produit&nbsp;: </label>
        <input type="file" id="photo" name="photo" />
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
        <input type="hidden" name="ajoutp" />
</form>
