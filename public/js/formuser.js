const formulario = document.getElementById("formulario-login")
const user = document.getElementById("usuario")
const pas = document.getElementById("pass")
const parraf = document.getElementById("warning")

formulario.addEventListener("submit", e=>{

    let warning = ""
    let enter = false

    // expresiones Regulares
    let expresionuser = /^[a-zA-Z0-9\_\-]{3,16}$/

    if(!expresionuser.test(user.value)){
        e.preventDefault()
        warning += '- Usuario invalido tiene que tener entre 3 y 16 caracteres, solo letras y numeros<br>'
        enter = true
    }
    if(pas.value.length < 7  || pas.value.length > 15){
        e.preventDefault()
        warning += '- Contraseña invalida, tiene que ser entre 7 y 15 caracteres<br>'
        enter = true
    }
    if(enter){
           parraf.innerHTML = warning
    }
    })