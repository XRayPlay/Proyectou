const formulario = document.getElementById("formulario")
const cedula = document.getElementById("cedula")
const nombres = document.getElementById("nombre")
const apellido = document.getElementById("apellido")
const sexo = document.getElementById("sexo")
const fechanacimiento = document.getElementById("fechanacimiento")
const lugarnacimiento = document.getElementById("lugarnacimiento")
const condicion = document.getElementById("condicionvivienda")
const actextra = document.getElementById("catedra")
const aulaintegrada = document.getElementById("aulaintegrada")
const parrafo = document.getElementById("warnings")




formulario.addEventListener("submit", e=>{

    let warnings = ""
    let enter = false
    // expresiones Regulares
    let expresioncedula = /^[V|E|J|P][0-9]{5,9}$/
    let expresionapedillo = /^[a-zA-ZÁ-ÿ]{3,40}$/
    let expresionlugarnacimiento = /^[a-zA-ZÁ-ÿ]{3,40}$/
    let expresionnombre = /^[a-zA-ZÁ-ÿ]{3,40}$/
    let expresionsexo = /^\d{4,14}$/
    let expresioncondicions = /^\d{2,14}$/
    let expresionactextra = /^\d{1,2}$/

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
    if(!expresionapedillo.test(apellido.value)){
        e.preventDefault()
        warnings += '- El apellido no es valido. <br>'
        enter = true
    }
    if(!expresionlugarnacimiento.test(lugarnacimiento.value)){
        e.preventDefault()
        warnings += '- No has seleccionado el lugar de nacimiento. <br>'
        enter = true
    }
    if(sexo.value == ""){
        e.preventDefault()
        warnings += '- No has seleccionado el sexo. <br>'
        enter = true
    }
    if(condicion.value==""){
        e.preventDefault()
        warnings += '- No has seleccionado el estado de vivienda. <br>'
        enter = true
    }
    if(!expresionactextra.test(actextra.value)){
        e.preventDefault()
        warnings += '- No has seleccionado la actividad extra catedra. <br>'
        enter = true
    }
    if(aulaintegrada.value == 1){
        e.preventDefault()
        warnings += '- No has seleccionado el aula integrada. <br>'
        enter = true
    }
    if(enter){
        parrafo.innerHTML = warnings
    }
})