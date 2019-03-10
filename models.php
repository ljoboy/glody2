<?php
if (!function_exists('dbConnect')){
    function dbConnect(){
        try{
            $db = new PDO('mysql:dbname=glody2;host=localhost','root', '');
        }catch (PDOException $e){
            die('Erreur du au : '.$e->getMessage());
        }
        return $db;
    }
}

if (!function_exists('recherche')){
    function recherche($fichier){
        $fichier = "%".$fichier."%";
        $db = dbConnect();
        $bdd = $db->prepare("SELECT * FROM fichiers WHERE nom LIKE :fichier");
        $bdd->execute(['fichier'=>$fichier]);
        $fichiers = [];
        while ($f=$bdd->fetch(PDO::FETCH_ASSOC)){
            $fichiers[] = $f;
        }
        return $fichiers;
    }
}
