<?php
require('connection.php');

// Démarrage d'une session
session_start();

// Connexion à la BD
$co = connexionBdd();

if (isset($_POST['buttonConnect'])){

    $usernameLog = $_POST['usernameLog'];
    $passwordLog = $_POST['passwordLog'];

    $stmt = $co->prepare("SELECT * FROM utilisateur WHERE identifiant = ?"); 
    // on execute la requete
    $stmt->execute(array($usernameLog));
    // on va chercher récuperer les resultats
    $user = $stmt->fetch(); 

    if((password_verify($passwordLog, $user['mdp'])) /*&& $user['role'] == 'Admin'*/){ 
        // on recupere l'id de lutilisateur connecté
        $query = $co->prepare("SELECT `id_utili` FROM `utilisateur` WHERE `identifiant` = :identifiant");
        $query->bindParam(':identifiant', $usernameLog);
        $query->execute();
        $id_utili = $query->fetch();
        $id_utili = $id_utili[0];

        $_SESSION['identifiant'] = $usernameLog;
        $_SESSION['id_utili'] = $id_utili;
        
        // on redirige l'utilisateur
        header('Location: messagerieIndex.php?choiceNavbar=home');
    }else{
        // Si la requête ne retourne rien, alors l'utilisateur ou mdp n'existe pas dans la BD, on lui
        // affiche un message d'erreur
        echo"<h3 class='messageErreur'> Incorrect username or password. <h3>";
    }
}

if (isset($_POST['buttonRegister'])){
    /*$password = "root";
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    echo $hashed_password;*/
 /*
     $identifiant = $_POST['usernameRegister'];
     $mdp1 = $_POST['passRegister1'];
     $mdp2 = $_POST['passRegister2'];
     
     if (preg_match("#[0-9]+#", $mdp1)){
         if($mdp1 == $mdp2){
             $query = $co->prepare("INSERT into utilisateur (:identifiant, :mdp, 'user')");
             // Association des paramètres aux variables/valeurs
             $query->bindParam(':identifiant', $identifiant);
             $query->bindParam(':mdp', $mdp);
             $query->execute();

             header('Location: messagerieWelcome.php');
         }
         else{
            echo"<h3 class='messageErreur'> passwords do not match. <h3>";
         }
         
     }
     else{
        echo"<h3 class='messageErreur'> the password must contain a number. <h3>";
     } */
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>messagerie connection</title>
    <link rel="stylesheet" href="../style/styleMess.css"/>
</head>
<body id="MessaConnexion">

    <h1>Welcome to MESSAGERIE</h1>
    <p id="txtChoiseLog">Already registered ? <span id="log">log in here</span> otherwise <span id="register">register here</span></p>

    <div id="form">
    <div id="formLog">
        <form method="post">
            <div>
                <label for="usernameLog">Username:</label>
                <input type="text" id="usernameLog" name="usernameLog">
            </div>

            <div>
                <label for="passLog">Password :</label>
                <input type="password" id="passLog" name="passwordLog">
            </div>
            <input type="submit" value="connect" class="button" name="buttonConnect">
        </form>
        
    </div>

    <div id="formRegister">
        <form method="post">
            <div>
                <label for="usernameRegister">Username:</label>
                <input type="text" id="usernameRegister" name="usernameRegister">
            </div>
            <div>
                <label for="passRegister1">Password :</label>
                <input type="password" id="passRegister1" name="passRegister1">
            </div>
            <div>
                <label for="passRegister2" id="passRegister2">Confirm Password :</label>
                <input type="password" id="passRegister2" name="passRegister2">
            </div>

            <input type="submit" value="Sign in" class="button" name="buttonRegister">
        </form>
    </div>

</body>
<script src="animationMessagerieLog.js"></script>
</html>
