<?php
function displayTitle() : string
{
    $titre = "Michel fait du PHP - ";
    $page = isset($_GET['page']) ? $_GET['page'] : "accueil";
    $titre .= ucfirst($page);
    return $titre;
}