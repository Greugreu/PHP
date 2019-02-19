<?php
session_start();

/*if (isset($_SESSION['login']) && $_SESSION['login'] == 1)
{
    $data = "SELECT USEPRENOM FROM t_users WHERE USEMAIL='dupondgerard@gerard.com'" ;
    $result = $pdo->fetchAll();
    debug($data);
}
else
{
    echo "Pas Michel !";
}*/
date_default_timezone_set('Europe/Paris');
include_once "./functions/debug.php";
include_once "./includes/pdo.php";
include_once "./functions/displayTitle.php";
include_once "./includes/html.php";
include_once "./includes/header.php";

if (isset($_GET['page'])) {
    $page= $_GET['page'];

}
else {
    $page = "accueil";
}

$path = "./includes/";
$contenu = glob($path . "*.inc.php");
$page = $path . $page . ".inc.php";

if (in_array($page, $contenu)){
    include_once $page;
}

else {
    include_once "./includes/accueil.inc.php";
}

//var_dump($contenu);

//$page = "./includes/" . $page . ".php";
//include $page;
include_once "./includes/footer.php";

//$page = isset($_GET['page']) ? $_GET['page'] : "accueil";
