const formulario = document.querySelector('form');
const inputs = formulario.querySelectorAll('.formulario table tr td .validar');

function sendValues(){
    const dadosValidos = verifyEmptyInputs();

    if(dadosValidos[0]){
        const fields = dadosValidos[1];
        const id = fields[0];
        const desc = fields[1];
        const ncf = fields[2];
        const corretiva = fields[3];

        
        $.ajax({
            type:"POST",
            url: "ajaxjs.php",
            data: {
                ajax_id: id,
                ajax_desc: desc,
                ajax_ncf: ncf,
                ajax_corretiva: corretiva
            },
            cache:false,
            success: function(response){
                alert('Enviado');
                window.location.href="index.php"
            }
        });
    }
}

function verifyEmptyInputs(){
    let valid = true;
    let fieldsValues = [];

    for(let errorText of formulario.querySelectorAll('.error-text')){
        errorText.classList.remove('error-text');
    }

    for(let campo of inputs){
        if(!campo.value){
            createError(campo);
            valid = false;
        }
        fieldsValues.push(campo.value);
    }

    return [valid, fieldsValues];
}

function createError(campo){
    campo.classList.add('error-text');
}
