const moi = document.querySelector("#a_moi"); 
const moiDiv = document.querySelector("#moi");

const projets = document.querySelector("#a_projets"); 
const projetsDiv = document.querySelector('#projets');

const body = document.querySelector('body');

function landing (){
    if(body){
        moiDiv.classList.add('hook');
        projetsDiv.classList.add('hook');
    }
}

function changeColor(){
    moi.addEventListener('click', function(){
        if(moiDiv.classList.contains('hook')){
            moiDiv.classList.remove('hook');
            moi.classList.add('backgroundBtnMain');
        }else{
            moiDiv.classList.add('hook');
            moi.classList.remove('backgroundBtnMain');
        }
    })
    
    projets.addEventListener('click', function(){
        if(projetsDiv.classList.contains('hook')){
            projetsDiv.classList.remove('hook');
            projets.classList.add('backgroundBtnMain');
        }else{
            projetsDiv.classList.add('hook');
            projets.classList.remove('backgroundBtnMain');
        }
    })
}

window.onload = () => {
    landing();
    changeColor();
}
