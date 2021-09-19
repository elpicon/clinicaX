require('https://code.jquery.com/jquery-1.12.4.min.js');
function guardarTodo(datoSave){

$.ajax({
                        type: "POST",
                        url: "queryContratos.php?"+datoSave,
                        data: "",
                        success: function(respuesta) {
                         return respuesta;
                        }
                    });
    
}



exports.guardarTodo=guardarTodo;

                  
                        