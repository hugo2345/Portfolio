<?php

session_start();// recup des var de session
if(!isset($_SESSION['id_utili']))//verification que l'utilisateur est bien connecté
{
    header('Location: messagerieConnetion.php');
    exit();
}else{
    $identifiant = $_SESSION['identifiant'];//recuperation du nameUser
    $id_utili = $_SESSION['id_utili'];//recuperation de l'idUser
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome in Messagerie</title>
    <link rel="stylesheet" href="../style/styleMess.css"/>
</head>
<body id="bodyGoToHome">
    <h1 id="titleGoToHome">successful registration, click anywhere to go to Messagerie</h1>
</body>
<script src="animationMessagerieWelcome.js"></script>
</html>