<?php

namespace PortFolio\Infrastructure;

use PDO;

class BDD
{
    static public function connexion()
    {
        $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        try {
            $bdd = new PDO('mysql=127.0.0.1;dbname=portfolio', 'root', '', $option);
        } catch (\Throwable $th) {
            echo "ERREUR {$th}";
        }
        return $bdd;
    }
}
