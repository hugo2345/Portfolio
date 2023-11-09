<?php
require('connection.php');

// Connexion à la BD
$co = connexionBdd();

session_start();// recup des var de session
if(!isset($_SESSION['id_utili']))//verification que l'utilisateur est bien connecté
{
    header('Location: messagerieConnection.php');
    exit();
}else{
    $identifiant = $_SESSION['identifiant'];//recuperation du nameUser
    $id_utili = $_SESSION['id_utili'];//recuperation de l'idUser
}

/// on compte le nombre d'amis du compte en bd
$query = $co->prepare("SELECT COUNT(*) FROM `message_publique` WHERE mess_pub_utili = :id_utili");
$query->bindParam(':id_utili', $id_utili);
$query->execute();
$nbMessPub = $query->fetch();
$nbMessPub = $nbMessPub[0];
///

/// on compte le nombre de foloweur du compte en bd
$query = $co->prepare("SELECT COUNT(*) FROM `folow` WHERE folow_utili_recep = :id_utili;");
$query->bindParam(':id_utili', $id_utili);
$query->execute();
$nbFriend = $query->fetch();
$nbFriend = $nbFriend[0];
///

/// on récupère la couleur du compte en bd
$query = $co->prepare("SELECT couleur_home FROM utilisateur WHERE id_utili = :id");
$query->bindParam(':id', $id_utili);
$query->execute();

// Vérifier si le résultat contient au moins une ligne
if ($query->rowCount() > 0) {
    $row = $query->fetch();
    $codeCouleur = $row["couleur_home"];
}
///

/// Récupérer la valeur du paramètre d'URL "choiceNavbar"
$choiceNavbar = $_GET['choiceNavbar'];
//
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messagerie</title>
    <link rel="stylesheet" href="../style/styleMess.css"/>
</head>
<body>
    <div id="home">
            <?php 
                require('./require/navbar.php');
            ?>
        <div id="content">
        <?php
        // Vérifier si le paramètre "choiceNavbar" existe dans l'URL
        if (isset($choiceNavbar)) {
            // Afficher la valeur en fonction du paramètre "choiceNavbar"
            if ($choiceNavbar === 'home') 
            {
                require('./require/me.php');
                require('./require/addMessPub.php');
                require('./require/flow.php');

            } elseif ($choiceNavbar === 'PrivateChat') 
            {
            } elseif ($choiceNavbar === 'account')
            {
                require('./require/colorChoise.php');
            }
        }
        ?>
        </div>
    </div>
</body>
<script src="animationMessagerieHome.js"></script>
<script src="colorChoise.js"></script>
</html>