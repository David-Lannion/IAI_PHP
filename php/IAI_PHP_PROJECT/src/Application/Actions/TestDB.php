<?php

declare(strict_types=1);

namespace App\Application\Actions;

use Psr\Http\Message\ResponseInterface as Response;

class TestDB extends Action
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $host = 'db'; //Nom donné dans le docker-compose.yml
        $user = 'myuser';
        $password = 'monpassword';
        $db = 'iai_php';
        $res = "";

        $conn = new mysqli($host,$user,$password,$db);
        if(!$conn) {$res = "Erreur de connexion à MySQL<br />";}
        else{
                $res = "Connexion à MySQL ok<br />";
                mysqli_close($conn);
        }

        return $this->respondWithData($res);
    }
}
