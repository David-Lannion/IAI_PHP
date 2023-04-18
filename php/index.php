<?php
$host = 'db'; //Nom donné dans le docker-compose.yml
$user = 'myuser';
$password = 'monpassword';
$db = 'iai_php';

// Connect using mysqli
$conn = new mysqli($host,$user,$password,$db);
if(!$conn) {echo "Erreur de connexion à MySQL<br />";}
else{
        echo "Connexion à MySQL ok<br />";
        mysqli_close($conn);
}
// Connect using PDO mysql
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    echo "Connexion à MySQL PDO ok<br />";
}
catch (Exception $e){
    echo "Erreur de connexion à MySQL PDO<br />";
}
// Connect using PDO pgsql
try {
    $conn = new PDO("pgsql:host=postgres;dbname=$db", $user, $password);
    echo "Connexion à PDO PGSQL ok<br />";
}
catch (Exception $e){
    echo "<pre>";
    var_dump($e);
    echo "</pre>";
    echo "Erreur de connexion à PGSQL PDO<br />";
}
phpinfo();
?>