<?php

require('connection.php');

// Connexion à la BD
$co = connexionBdd();

// Récupérer le code couleur envoyé via POST
if (isset($_POST['color'])) {
    $codeCouleur = $_POST['color'];

        $sql = "UPDATE `utilisateur` SET `couleur_home`= :code_couleur WHERE id_utili = 1;";
        $stmt = $co->prepare($sql);
        $stmt->bindParam(':code_couleur', $codeCouleur);
        $stmt->execute();       
}
?>
