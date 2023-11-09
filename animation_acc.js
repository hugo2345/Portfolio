const moi = document.querySelector("#a_moi"); 
const moiDiv = document.querySelector("#moi");

/*const evo = document.querySelector("#a_evo");
const evoDiv = document.querySelector('#evo');*/

// const filtre = document.querySelector("#a_filtre");
// const filtreDiv = document.querySelector('#filtre');

const projets = document.querySelector("#a_projets"); 
const projetsDiv = document.querySelector('#projets');

const contact = document.querySelector("#a_contact"); 
const contactDiv = document.querySelector('#contact');

const body = document.querySelector('body');

function landing (){
    if(body){
        moiDiv.classList.add('hook');
        /*evoDiv.classList.add('hook');*/
        projetsDiv.classList.add('hook');
        contactDiv.classList.add('hook');
        // filtreDiv.classList.add('hook');
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

    /*evo.addEventListener('click', function(){
        if(evoDiv.classList.contains('hook')){
            evoDiv.classList.remove('hook');
            evo.classList.add('backgroundBtnMain');
        }else{
            evoDiv.classList.add('hook');
            evo.classList.remove('backgroundBtnMain');
        }
    })*/

    // filtre.addEventListener('click', function(){
    //     if(filtreDiv.classList.contains('hook')){
    //         filtreDiv.classList.remove('hook');
    //         filtre.classList.add('backgroundBtnMain');
    //     }else{
    //         filtreDiv.classList.add('hook');
    //         filtre.classList.remove('backgroundBtnMain');
    //     }
    // })
    
    projets.addEventListener('click', function(){
        if(projetsDiv.classList.contains('hook')){
            projetsDiv.classList.remove('hook');
            projets.classList.add('backgroundBtnMain');
        }else{
            projetsDiv.classList.add('hook');
            projets.classList.remove('backgroundBtnMain');
        }
    })

    contact.addEventListener('click', function(){
        if(contactDiv.classList.contains('hook')){
            contactDiv.classList.remove('hook');
            contact.classList.add('backgroundBtnMain');
        }else{
            contactDiv.classList.add('hook');
            contact.classList.remove('backgroundBtnMain');
        }
    })
}

window.onload = () => {
    landing();
    changeColor();
}