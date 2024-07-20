const formulario = document.getElementById('formulario')
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    cedula: /^[0-9]{7,8}$/,
    nombre: /^[a-zA-ZÁ-ÿ]{3,40}$/,
    apellido: /^[a-zA-ZÁ-ÿ]{3,40}$/,
    fechanacimiento: /^\d{2,4}\-\d{1,2}\-\d{1,2}$/
    
}

const campos = {
    cedula: false,
    nombre: false,
    apellido: false,
    sexo: false,
    fechanacimiento: false,
    familia: false,
    direccion: false,
    comunidad: false,   
}

const validarcampo = (expresion, input, campo) => {
    if(expresion.test(input.value)){
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
    } else {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos[campo] = false;
    }
}


const validarselect = (input, campo) => {
    if(input == null || input == 0 ) {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos[campo] = false;
    }else{
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
    }
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "cedula":
            validarcampo(expresiones.cedula, e.target, 'cedula');
        break;
        case "nombre":
            validarcampo(expresiones.nombre, e.target, 'nombre');
        break;
        case "apellido":
            validarcampo(expresiones.apellido, e.target, 'apellido');
        break;
        case "sexo":
            validarselect(e.target, 'sexo')
        break;
        case "fechanacimiento":
            validarcampo(expresiones.fechanacimiento, e.target, 'fechanacimiento');
        break;
        case "familia":
            validarselect(e.target, 'familia')
        break;
        case "direccion":
            validarselect(e.target, 'direccion')
        break;
        case "comunidad":
            validarselect(e.target, 'comunidad')
        break;
    }
}



inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
})


formulario.addEventListener('submit', (e) => {

    if(campos.cedula && campos.nombre && campos.apellido && campos.fechanacimiento){

    }else{
        e.preventDefault();

    }
})