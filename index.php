<ul>
    <li><a href="index.php?page=Truc">Truc</a></li>
    <li><a href="index.php?page=Machin">Michel</a></li>
    <li><a href="index.php?page=Michel">Machin</a></li>
</ul>
<?php
if (isset($_GET['page'])) {
    $page= $_GET['page'];
    echo $page;
}
else {
    echo "message";
}