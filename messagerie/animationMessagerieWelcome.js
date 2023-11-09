const body = document.querySelector('body');

function openConfiguration(){
    bodyGoToHome.addEventListener('click', function(){
        window.location.href = "messagerieIndex.php?choiceNavbar=home";
    })
}

window.onload = () => {
    openConfiguration();
}