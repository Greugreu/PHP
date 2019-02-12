<?php
$message = "<h1>Je fais du PHP - boucle <em>for</em></h1>";
$message .= "<ul>";
    for($i = 0; $i < 11; $i++){
        $message .= "<li>" . $i . "</li>";
    }
$message .= "</ul>";
echo $message;
