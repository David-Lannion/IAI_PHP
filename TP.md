# TP PHP
Pour chaque exercice, créer un fichier tel que : `ex1.php`

## 1 Hello
Afficher simplement (en HTML) la chaîne de caractères : 
`Hello IAI, nous sommes le ` suivie de la date du jour du serveur.

## 2 Superglobales
Afficher un tableau avec les valeurs des variables d'environnement suivantes :
```
$GLOBALS
$_SERVER
$_GET
$_POST
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV
```
Rq : tester les fonctions ``echo`` et ``var_dump``
### 2.2 Utilisez ``phpinfo()``

## 3 Paramètres HTTP
Créer un formulaire HTML et afficher les valeurs remplies par l'utilisateur.
### Exemple
* input : login
* input : mdp
* submit : Envoyer
* action : http://localhost/?count=1
* method : POST

## 4 Boucles
Soit les tableaux :
```
L1 = [3553, 3523, 3510, 3502, 3445]
L2 = [3553, 3523, 3510, 3445, 1222]
```
Afficher dans un tableau la moyenne et la médiane de chacune des 2 listes.
Pour cela, utilisez d'abord un ``for``, puis un ``foreach`` et enfin un ``while``.

Tester avec les tableaux suivants :
```
L3 = ["val1" => 3553, "val2" => 3523, "val3" => 3510, "val4" => 3502, "val5" => 3445]
L4 = ["val1" => 3553, "val12" => 3523, "val15" => 3510, "val11" => 3445, "val133" => 1222]
```

## 5 BDD
Via PHPMyadmin, créez une Table ``utilisateurs(id, nom, mot_de_passe)`` et ajoutez une entrée.

Connectez-vous à mysql en utilisant chacun des moyens suivants :
#### mysqli
Voir exemple dans index.php
#### PDO
``new PDO(’mysql:host=localhost;dbname=iai_php’, mon_login, mon_password);``


Gérez le cas ou la connexion ne fonctionnerait pas (die/try_except/...)
### 5.1 affichage
Choisissez un mode de connexion (mysqli ou PDO) et créez une page ``list.php`` affichant un tableau du contenu de la table.

### 5.2 ajout
Créez une page ``ajout_user.php`` permettant, via un formulaire POST d'insérer de nouvelles entrées dans la base.
Le mot de passe ne doit pas être en clair dans la base.

## 6 Session
Créez une page de connexion utilisant les valeurs de la table de l'exercice 5. 
L'utilisateur doit pouvoir rester connecté (utilisation de la session) et pouvoir choisir de se déconnecter.

## 7 Backend
* Créez une page accessible pour les utilisateurs connectés disposant des opérations CRUD (Create, Read, Update, Delete) sur une table : ``messages (id , titre, auteur, date_creation, txt)``.

| id  | titre | auteur | date | txt | action  |
|-----|-------|--------|------|-----|---------|
|     |       |        |      |     | C,R,U,D |
|     |       |        |      |     |         |

* Protégez-vous des attaques basiques par injection (SQL, JS).
* Protégez-vous des attaques XSS.
