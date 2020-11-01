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
            if(j == [1] || j == [2] || j == [4]){
                td.innerHTML = `<textarea class="transparent">${data[i][j]}</textarea>`;
            }else if(j == [3] || j == [6]){
                td.innerHTML =`<select class="transparent"55><option>${data[i][j]}</option></select>`;
            }else if(j == [7]){
                td.innerHTML = `<button><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-check2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
                </button><button class= "buttonDel" onclick="deleteValue(${data[i][0]})">
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg></button>
                `;
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
    console.log(id);
    $.ajax({
        type:"POST",
        url: "ajaxDel.php",
        data: {
            ajax_id : id,
            ajax_del: 1
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
