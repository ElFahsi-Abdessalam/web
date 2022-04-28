<?php
$server = "localhost";
$username = "root";
$password ="";

abstract class Model
{
    protected function executeRequest($sql, $params = null)
    {
        $db = new PDO('mysql:host=localhost;dbname=gamedb;charset=utf8',
            'root', '');
        if ($params == null) {              // exécution directe
            $result = $db->query($sql);
        } else {                            // requête préparée
            $result = $db->prepare($sql);
            $result->execute($params);
        }
        return $fetch = $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
