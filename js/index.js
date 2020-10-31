const formulario = document.querySelector('form');
const inputs = formulario.querySelectorAll('table tr td .validar');
const envio = formulario.querySelector('.envio');
const rest = formulario.querySelector('tbody');

formulario.addEventListener('submit', e =>{
    e.preventDefault();
    this.handleSubmit(e);
});

function handleSubmit(e){
    e.preventDefault();
    const validInput = validInputs();
    const newTr = createTableRow();

    if(validInput[0]){
        insertValues(validInput[1], newTr);
        // formulario.submit();
    }
}

function insertValues(fields, tr){
    for(let i = 0; i < fields.length; i++){
        const td = createTableData();
        td.innerText = fields[i];
        tr.appendChild(td);
    }

    rest.appendChild(tr);
}

function createTableRow(){
    const tr = document.createElement('tr');
    return tr;
}

function createTableData(){
    const td = document.createElement('td');
    return td;
}


function validInputs(){

    let valid = true;
    let values = [];

    for(let error of formulario.querySelectorAll('.error-text')){
        error.classList.remove('error-text');
    }

    for(let campo of inputs){
        if(!campo.value){
            createError(campo);
            valid = false;
        }else{
            values.push(campo.value);
        }
    }

    return [valid, values];
}

function createError(campo){
    campo.classList.add('error-text');
}