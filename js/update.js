
function updateValues(id){
    
    $.ajax({
        type:"POST",
        url: "ajaxUpdate.php",
        data: $('form').serialize(),
      
        cache:false,
        success: function(response){
            alert('Atualizado');
            
        }
    });
    
}