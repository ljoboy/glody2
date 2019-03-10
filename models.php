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
