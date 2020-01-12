<?php
require_once 'models.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (!empty($_POST['recherche'])){
        $recherche = htmlspecialchars(strtolower($_POST['recherche']));
        $resultat = recherche($recherche);
        require_once 'resultat.php';
    }else{
        header('location: index.php');
    }
}else{
    header('location: index.php');
}
