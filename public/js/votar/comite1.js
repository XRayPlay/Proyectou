const formulario = document.getElementById('comite1');
const inputs = document.querySelectorAll('#comite1 input');

campos = {
    comite1_1: false,
}

const validarcheck = (check, campo) => {
    console.log(e.target.name);
    if(check == null || check == 0 ) {

        campos[campo] = false;
    }else{

        campos[campo] = true;
    }
}

const validarvoto1 = (e) => {
    switch (e.target.name) {
        case "comite1_1":
            validarcampo(e.target, 'comite1_1');
        break;
    }
}



inputs.forEach((input) => {
    input.addEventListener('keyup', validarcheck);
    input.addEventListener('blur', validarcheck);
})

formulario.addEventListener('submit', (e) => {

    if(campos.comite1_1){

    }else{
        e.preventDefault();

    }
})