const formulario1 = document.getElementById("formulario-register")
const cedula = document.getElementById("cedula")
const nombres = document.getElementById("nom")
const fechanacimiento = document.getElementById("fn")
const correo = document.getElementById("correo")
const usuario = document.getElementById("usuarior")
const pass = document.getElementById("passr")
let fmin = document.getElementById("fmin")
let fmax = document.getElementById("fmax")
const parrafo = document.getElementById("warnings")




formulario1.addEventListener("submit", e=>{

    let warnings = ""
    let enter = false
    // expresiones Regulares
    let expresioncedula = /^[V|E|J|P][0-9]{5,9}$/
    let expresioncorreo = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{3})+$/
    let expresionusuario = /^[a-zA-Z0-9\_\-]{4,16}$/
    let expresionnombre = /^[a-zA-ZÁ-ÿ]{3,40}$/

    if(!expresioncedula.test(cedula.value)){
        e.preventDefault()
        warnings += '- La cedula tiene que comenzar con V, E, J o P y tiene que tener entre 7 y 8 digitos. <br>'
        enter = true
    }
    if(!expresionnombre.test(nombres.value)){
        e.preventDefault()
        warnings += '- El nombre no es valido. <br>'
        enter = true
    }
    if(!expresioncorreo.test(correo.value)){
        e.preventDefault()
        warnings += '- El correo no es valido, tiene que ser example@example.com.<br>'
        enter = true
    }

    if(fechanacimiento.value == "" || fechanacimiento.value <= fmin || fechanacimiento.value >= fmax){
        e.preventDefault()
        warnings += '- La fecha de nacimiento no es valida. <br>'
        enter = true
    }

    if(!expresionusuario.test(usuario.value)){
        e.preventDefault()
        warnings += '- El usuario no es valido <br>'
        enter = true
    }
    if(pass.value.length < 7  || pass.value.length > 15){
        e.preventDefault()
        warnings += '- La contraseña no es valida tiene que ser entre 7 y 15 caracteres<br>'
        enter = true
    }
    if(enter){
        parrafo.innerHTML = warnings
    }
})