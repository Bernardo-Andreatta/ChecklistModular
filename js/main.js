const formulario = document.querySelector('form');
const inputs = formulario.querySelectorAll('.formulario table tr td .validar');
const tbody = formulario.querySelector('tbody');

returnSentValues();

function createTr(){
    const tr = document.createElement('tr');
    return tr;
}

function createTd(){
    const td = document.createElement('td');
    return td;
}

function createTable(data){
    for(let i = 0; i < data.length; i++){
        const tr = createTr();
        for(let j = 0; j <= 6; j++){
            const td = createTd();
            if(j == [1] || j == [2] || j == [4]){
                td.innerHTML = `<textarea>${data[i][j]}</textarea>`;
            }else if(j == [3] || j == [6]){
                td.innerHTML =`<select><option>${data[i][j]}</option></select>`;
            }else{
                td.innerText = data[i][j];
            }
            tr.appendChild(td);
        }
        tbody.appendChild(tr);
    }
}

function returnSentValues(){
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "get-data.php",
        success: function(data){
           createTable(data);
        }
    });
}

function sendValues(){
    const dadosValidos = verifyEmptyInputs();

    if(dadosValidos[0]){
        const fields = dadosValidos[1];
        const desc = fields[0];
        console.log(desc);

        $.ajax({
            type:"POST",
            url: "ajaxjs.php",
            data: {
                ajax_desc: desc
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
