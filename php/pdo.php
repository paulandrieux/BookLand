<?php
// le pdo est un objet qui permet de se connecter à la bdd, le cas échéant un message d'erreur s'affichera
try {
    $pdo = new PDO ('mysql:host=localhost;dbname=bdd_book_land','root','');
}
catch (Exception $e) {
    echo "probleme : ".$e;
    exit();
}
?>