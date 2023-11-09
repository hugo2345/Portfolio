<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Portfolio</title>
    <link rel="stylesheet" href="style/style.css"/>
</head>
<body>
    <section id="accueil">

        <p>HUGO</p>
        <marquee scrolldelay="60">Développeur web - Développeur logiciel </marquee>
        <p>PARAGEAUD</p>

    </section>

    <section id="corps">

        <a id="a_moi" class="a_corps">qui suis-je ?</a>

        <div id="moi" class="contenue">

            <p>je suis un développeur junior. <br>En BTS SIO 2 ème année au Lycée Saint-Vincent de Senlis.</p>

        </div>

        <a id="a_projets" class="a_corps">mes projets </a>

        <div id="projets" class="contenue">
           <div class='projet_row'>
                <div class='projet'>
                    <a id='go_projet' href='page/projet_TPE.php'>
                        <div class='row'>
                            <div class='column'>
                                <div class='content'>
                                    <img src='images/projet_1.png'>
                                    <h3>Projet TPE pour le bac</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class='projet'>
                    <a id='go_projet' href='page/Projet_Inte.php'>
                        <div class='row'>
                            <div class='column'>
                                <div class='content'>
                                    <img src='images/projet_2.png'>
                                    <h3>Projet d'intégration</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class='projet'>
                    <a id='go_projet' href='page/projet_sandwicherie.php'>
                        <div class='row'>
                            <div class='column'>
                                <div class='content'>
                                    <img src='images/projet_sand1.png'>
                                    <h3>Projet Sandwicherie</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class='projet'>
                    <a id='go_projet' href='page/projet_portfolio.php'>
                        <div class='row'>
                            <div class='column'>
                                <div class='content'>
                                    <img src='images/projet_portfolio.png'>
                                    <h3>Projet Portfolio</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class='projet'>
                    <a id='go_projet' href='page/projet_ges_proj.php'>
                        <div class='row'>
                            <div class='column'>
                                <div class='content'>
                                    <img src='images/projet_gestion_proj1.png'>
                                    <h3>Projet gestion de projets</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class='projet'>
                    <a id='go_projet' href='page/projet_ges_comm.php'>
                        <div class='row'>
                            <div class='column'>
                                <div class='content'>
                                    <img src='images/projet_gestion_com1.png'>
                                    <h3>Projet gestion commercials</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class='projet'>
                    <a id='go_projet' href='page/projet_SE.php'>
                        <div class='row'>
                            <div class='column'>
                                <div class='content'>
                                    <img src='images/projet_SE1.png'>
                                    <h3>Institution du Saint-Esprit</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class='projet'>
                    <a id='go_projet' href='page/projet_blockNote.php'>
                        <div class='row'>
                            <div class='column'>
                                <div class='content'>
                                    <img src='images/projetBockNote.png'>
                                    <h3>Projet du Block note</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <a id="a_contact" class="a_corps">me contacter</a>

        <div id="contact" class="contenue">

            <form method="post" name="formulaire">

                <div id="formulaire_contact">
                
                    <input type="text" name="nom" placeholder="nom"><br>

                    <input type="text" name="eMail" placeholder="eMail"><br>

                    <input type="text" name="message" placeholder="message">

                </div>

                <button type="submit" id="send" name="send">
                    envoyer
                </button>

            </form>

        </div>
    </section>


    <footer>
        
        <a href="https://www.linkedin.com/in/hugo-parageaud-824521241/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px"><path fill="#0288d1" d="M8.421 14h.052 0C11.263 14 13 12 13 9.5 12.948 6.945 11.263 5 8.526 5 5.789 5 4 6.945 4 9.5 4 12 5.736 14 8.421 14zM4 17H13V43H4zM44 26.5c0-5.247-4.253-9.5-9.5-9.5-3.053 0-5.762 1.446-7.5 3.684V17h-9v26h9V28h0c0-2.209 1.791-4 4-4s4 1.791 4 4v15h9C44 43 44 27.955 44 26.5z"/></svg>
        </a>
        <p>© HUGO PARAGEAUD 2022</p>
    </footer>
</body>
<script src="animation_acc.js"></script>
</html>