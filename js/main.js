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
        
        for(let j = 0; j <= 7; j++){
            
            const td = createTd();
            
            if(j == [7]){
                td.innerHTML = `<a class= "buttonU" href="Update.php?id=${data[i][0]}"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
                </a>
                <button class= "buttonDel" onclick="deleteValue(${data[i][0]})">
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg></button>
                `;
            }
            else if(j == [1] || j == [2] || j == [4]){
                td.innerHTML = `<textarea disabled class="transparent">${data[i][j]}</textarea>`;
            }
            else{
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

function calculateAderence(data){
    var contA = 0;
    var contB = 0;
    var aderencia = 0;
    for(let i = 0; i < data.length; i++){
        for(let j = 0; j <= 7; j++){
            if(data[i][6] == "Atingido"){
                contA++;
            }
            else if(data[i][6] == "Nao aplicavel"){
                contB ++;
            }
        }
    }
    aderencia = 100  *(contA / (data.length - contB));
    return(aderencia);
}

function sendValues(){
    const dadosValidos = verifyEmptyInputs();

    if(dadosValidos[0]){
        const fields = dadosValidos[1];
        const desc = fields[0];
        

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

function deleteValue(id){
    $.ajax({
        type:"POST",
        url: "ajaxDel.php",
        data: {
            ajax_id : id
        },
        cache:false,
        success: function(response){
            alert('Deletado');
            window.location.href="index.php"
        }
    });
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
