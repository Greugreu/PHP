<?php
date_default_timezone_set('Europe/Paris');
include "./includes/header.php";
if (isset($_GET['page'])) {
    $page= $_GET['page'];

}
else {
    $page = "accueil";
}

//$page = isset($_GET['page']) ? $_GET['page'] : "accueil";

$page = "./includes/" . $page . ".php";
include $page;
include "./includes/footer.php";