const formulario = document.getElementById("formulariopassch")
const passch = document.getElementById("passch")
const passre = document.getElementById("passre")
const parrafo = document.getElementById("warnings")




formulario.addEventListener("submit", e=>{

    let warnings = ""
    let enter = false
    // expresiones Regulares

    if(passch.value.length < 7  || passch.value.length > 15){
        e.preventDefault()
        warnings += '- Las contraseñas tienen que tener entre 7 y 15 caracteres. <br>'
        enter = true
    }

    if(passch.value !== passre.value || passre.value !== passch.value){
        e.preventDefault()
        warnings += '- Las contraseñas no coinciden. <br>'
        enter = true
    }

    if(enter){
        parrafo.innerHTML = warnings
    }
})