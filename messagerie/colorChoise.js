// Fonction pour envoyer le code couleur en base de données via AJAX
function sendColorCode(event) {
    var target = event.target;
    var backgroundColor = window.getComputedStyle(target).backgroundColor;

    // Créer un objet XMLHttpRequest pour l'appel AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "save_color.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Envoyer les données en POST
    xhr.send("color=" + encodeURIComponent(backgroundColor));

    // Recharger la page après l'envoi en base de données
    xhr.onload = function() {
        if (xhr.status === 200) {
            location.reload(); // Recharger la page
        }
    };
}

// Ajouter un événement de clic à chaque élément avec la classe "circle-button"
var circleButtons = document.getElementsByClassName("circle-button");
for (var i = 0; i < circleButtons.length; i++) {
    circleButtons[i].addEventListener("click", sendColorCode);
}
