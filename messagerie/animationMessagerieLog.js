const body = document.querySelector('body');

const log = document.querySelector("#log"); 
const formLog = document.querySelector("#formLog");

const register = document.querySelector("#register");
const formRegister = document.querySelector("#formRegister");

function landing (){
    if(body){
        formLog.classList.add('hook');
        formRegister.classList.add('hook');
    }
}

function changeForm(){
    log.addEventListener('click', function(){
        if(formLog.classList.contains('hook')){
            formLog.classList.remove('hook');
            formRegister.classList.add('hook');
        }else{
            formLog.classList.add('hook');
        }
    })

    register.addEventListener('click', function(){
        if(formRegister.classList.contains('hook')){
            formRegister.classList.remove('hook');
            formLog.classList.add('hook');
        }else{
            formRegister.classList.add('hook');
        }
    })
}


window.onload = () => {
    landing();
    changeForm();
}
