<?php
$host = 'db'; //Nom donné dans le docker-compose.yml
$user = 'myuser';
$password = 'monpassword';
$db = 'iai_php';

$conn = new mysqli($host,$user,$password,$db);
if(!$conn) {echo "Erreur de connexion à MySQL<br />";}
else{
        echo "Connexion à MySQL ok<br />";
        mysqli_close($conn);
}
phpinfo();
?>