const buttonFlowFilter = document.querySelector('#buttonFlowFilter');
var circleButtons = document.getElementsByClassName("circle-button");

function choiceNavbar(){
    // Récupérer le paramètre choiceNavbar de l'URL
    var urlParams = new URLSearchParams(window.location.search);
    var choiceNavbarParam = urlParams.get('choiceNavbar');

    // Si le paramètre est présent, mettre en évidence la section active
    if (choiceNavbarParam) {
        var navbarLinks = document.querySelectorAll('#navbar a');
        for (var i = 0; i < navbarLinks.length; i++) {
            if (navbarLinks[i].getAttribute('href').includes(choiceNavbarParam)) {
                navbarLinks[i].classList.add('active'); // Ajouter la classe CSS "active"
            }
        }
    }
}

window.onload = () => {
    choiceNavbar();
}
