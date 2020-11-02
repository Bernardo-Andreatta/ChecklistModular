
function addNCF(){
    var nome = $("#nome").val();
    var prazo = $("#prazo").val();
    

    console.log(nome);
    console.log(prazo);


    $.ajax({
        type:"POST",
        url: "ajaxAdd.php",
        data: {
            ajax_nome: nome,
            ajax_prazo: prazo,
            
        },
        cache:false,
        success: function(response){
            alert('Adicionado');
            window.location.href="index.php"
        }
    });
    
}