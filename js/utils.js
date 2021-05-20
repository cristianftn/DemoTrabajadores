'use strict'

 

  

    function llamadaAjax(type, url, data, funcionCallback){

        //console.log('desde llamada')
       // console.log(data)

        $.ajax({
            type: type,
            url: url,
            data: data,
            success: function(responseData) {
            
                //data = JSON.parse(responseData)
                funcionCallback+'('+responseData+')'
            },
            error: function(xhr, ajaxOptions, thrownerror) {

                console.error('Response error')
             }
        });
        
    }


/*

function llamadaAjax(data, tipo, tipoDatos, url){
    $.ajax({
        // En data puedes utilizar un objeto JSON, un array o un query string
        data: {"parametro1" : "valor1", "parametro2" : "valor2"},
        //Cambiar a type: POST si necesario
        type: "GET",
        // Formato de datos que se espera en la respuesta
        dataType: "json",
        // URL a la que se enviará la solicitud Ajax
        url: "script.php",
    })
     .done(function( data, textStatus, jqXHR ) {
         if ( console && console.log ) {
             console.log( "La solicitud se ha completado correctamente." );
         }
     })
     .fail(function( jqXHR, textStatus, errorThrown ) {
         if ( console && console.log ) {
             console.log( "La solicitud a fallado: " +  textStatus);
         }
    });
}

*/ 
