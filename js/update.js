
function updateValues(){
    var id = $("#id").val();
    var desc = $("#desc").val();
    var prob = $("#prob").val();
    var ncf = $("#ncf").val();
    var acao = $("#acao").val();
    var sit = $("#sit").val();

    console.log(id);
    console.log(desc);
    console.log(prob);
    console.log(ncf);
    console.log(acao);
    console.log(sit);

    $.ajax({
        type:"POST",
        url: "ajaxUpdate.php",
        data: {
            ajax_id: id,
            ajax_desc: desc,
            ajax_prob: prob,
            ajax_ncf: ncf,
            ajax_acao: acao,
            ajax_sit: sit
        },
        cache:false,
        success: function(response){
            alert('Atualizado');
            window.location.href="index.php"
        }
    });
    
}