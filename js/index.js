'use strict'


$(document).ready(function() {
    getDataFormulario()
    setEdad()
    guardarExperiencia()
    traducciones()
    getLogin()
    $("#modalLogin").modal('show');

    

    
});


var arrExperiencia = []
var objEsperiencias = {}
var lenguaje;



function getLogin(){

    $('#enviarLogin').click(function(){

        let loginData = {
            dniNif: $('#dniLogin').val(),
            password: $('#passLogin').val(),
        }

        //console.log(loginData)
        llamadaAjax('POST', 'server/login.php', loginData, setLogin )
       
       //console.log(data)
      /*
       $.ajax({
        type: 'POST',
        url: 'server/login.php',
        data: loginData,
        success: function(responseData) {
        
            //data = JSON.parse(responseData)
            window.location = responseData


           
        },
        error: function(xhr, ajaxOptions, thrownerror) {

            console.error('Response error')
         }
         
    });
    */
    })
}


function setLogin(responseData){
    console.log('desde set')

    console.log(responseData)

}

function formatearFecha(){
    
    let fechaNacimiento = $('#fechaNacimiento').val()
    let fechaNacimientoSplit = fechaNacimiento.split('-')
    let fechaFormateada = fechaNacimientoSplit[2] + '/' + fechaNacimientoSplit[1] + '/' + fechaNacimientoSplit[0]

return fechaFormateada


}



function guardarExperiencia(){

    
    $('#botonGuardarExperiencia').click(function(){

        objEsperiencias.nombreEmpresa = $('#experienciaNombreEmpresa').val()
        objEsperiencias.nombrePuesto = $('#experienciaNombrePuesto').val()
        objEsperiencias.descripcionPuesto = $('#experienciaDescripcionPuesto').val()
        objEsperiencias.ConocimientosPuesto = $('#experienciaConocimientos').val()

      let objExperienciaclone = {...objEsperiencias}

       arrExperiencia.push(objExperienciaclone)

        $('#experienciaNombreEmpresa').val('') 
        $('#experienciaNombrePuesto').val('') 
        $('#experienciaDescripcionPuesto').val('')
        $('#experienciaConocimientos').val('') 
        
    })
}


function getDataFormulario(){

    $('#botonEnvioFormulario').click(function(e){

       let fechaFormateada =  formatearFecha()

       //let arrExperiencia = guardarExperiencia()

       //console.log(arrExperiencia)
       
       /*if($('#inputNombre').val() == ''){
           
            $('#inputNombre').addClass('inputRequired')
        
       }
       /*if($('#inputApellido1').val() == ''){
        $('#inputApellido1').css('border-color','#FF3300')
        
       }
       if($('#inputApellido2').val() == ''){
        $('#inputApellido2').css('border-color','#FF3300')
        
       }
       if($('#inputDni').val() == ''){
        $('#inputDni').css('border-color','#FF3300')
        
       }
       if($('#inputNombre').val() == ''){
        $('#inputNombre').css('border-color','#FF3300')
        
       }
       if($('#fechaNacimiento').val() == ''){
        $('#fechaNacimiento').css('border-color','#FF3300')
        
       }
       if($('#inputNacionalidad').val() == ''){
        $('#inputNacionalidad').css('border-color','#FF3300')
        
       }*/
      // else{

        let objformulario = {
            nombre: $('#inputNombre').val(),
            apellido1: $('#inputApellido1').val(),
            apellido2: $('#inputApellido2').val(),
            telefono: $('#inputTelefono').val(),
            email: $('#inputEmail').val(),
            dni: $('#inputDni').val(),
            fechaNacimiento:  fechaFormateada,
            edad: $('#inputEdad').val(),
            genero: $('#genero').val(),
            nacionalidad: $('#inputNacionalidad').val(),
            direccion: $('#inputDireccion').val(),
            codPostal: $('#inputCodigoPostal').val(), 
            poblacion:$('#inputPoblacion').val(),
            estadoCivil: $('#estadoCivil').val(),
            archivoAdjunto: $('#inputFile').val(),
            experiencia: arrExperiencia,
        }

        console.log(objformulario)

        llamadaAjax('POST', 'getData.php', objformulario )

      // }
    
    })

}


function setEdad(){

    //HAY QUE PULIRLA

    $('#fechaNacimiento').change(function(e){



       let edadAno = $('#fechaNacimiento').val().substring(0, 4)

       let edadDia =  $('#fechaNacimiento').val().substring(4, 6)

       let anoActual = new Date().getFullYear();
       let anosUsuario = anoActual - edadAno

       console.log(edadAno)
       $('#inputEdad').val(anosUsuario)

    })

}


function traducciones(){

    
    
    $.getJSON('js/jsonTraducciones.json', function(json) {
        
        
        $('.botonIdioma').click(function() {
            console.log('XX')
            //lenguaje = $(this).attr('id')
           // $('.traducir').each(function(i, v) {
           //     $(this).text(json[lenguaje][$(this).attr('key')])

            //})
        })
    })
}