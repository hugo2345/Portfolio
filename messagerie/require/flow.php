<div id="flow">
    <?php
    $query = $co->prepare('SELECT * FROM `message_publique`,`utilisateur` WHERE mess_pub_utili = id_utili GROUP BY id_mess_pub;');
    $query->execute();
    while($row = $query->fetch())
    { 
        echo "<div id='messPub'>
                <div id='infoMessPub'>
                    <h1>".$row['identifiant']."</h1>
                    <h2>".$row['role']."</h2>
                </div>
                <p>".$row['contenue']."</p>
              </div>";
    }
    ?>
</div>