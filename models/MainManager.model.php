<?php
require_once('models/Model.class.php');

class MainManager extends Model{
    public function getDataX(){
        $db = $this->getDb()->prepare("SELECT * FROM nom");
        $db->execute();
        $bdd = $db->fetchAll(PDO::FETCH_ASSOC);//evite la multiplication des données
        $db->closeCursor();//permet de libérer la bdd pour que d'autres requêtes puissent être executées
        return $bdd;
    }
}