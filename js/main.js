const formulario = document.querySelector('form');
const inputs = formulario.querySelectorAll('.formulario table tr td .validar');
const rest = formulario.querySelector('tbody');

formulario.addEventListener('submit', (e) =>{
    handleSubmit(e);
});

function handleSubmit(e){
    const verifyInputs = verifyEmptyInputs();
    const newTr = createTableRow();

    if(verifyInputs[0]){
        // insertValues(verifyInputs[1],newTr);
    }
}

function createTableRow(){
    const tr = document.createElement('tr');
    return tr;
}

function createTableData(){
    const td = document.createElement('td');
    return td;
}

function insertValues(fields, tr){
    for(let i = 0; i < fields.length; i++){
        const td = createTableData();
        td.innerText = fields[i];
        tr.appendChild(td);
    }
    rest.appendChild(tr);
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
