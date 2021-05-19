'use strict'


$(document).ready(function() {
    getDataFormulario()
    setEdad()
    guardarExperiencia()

   
});


var arrExperiencia = []
var objEsperiencias = {}


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

      //  console.log(objEsperiencias)

       arrExperiencia.push(objEsperiencias)

       console.log(arrExperiencia)

        $('#experienciaNombreEmpresa').val('') 
        $('#experienciaNombrePuesto').val('') 
        $('#experienciaDescripcionPuesto').val('') 
        $('#experienciaConocimientos').val('') 
       

        //SE DEBE GUARDAR POR CADA PUSH EN arrExperiencia
        
        
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

        //llamadaAjax(objformulario, post, tipoDatos, url)

      // }
    
    })

}


function setEdad(){

    //HAY QUE PULIRLA

    $('#fechaNacimiento').change(function(e){

       let edadAno = $('#fechaNacimiento').val().substring(0, 4)
       let anoActual = new Date().getFullYear();
       let anosUsuario = anoActual - edadAno
       $('#inputEdad').val(anosUsuario)

    })

}


function traduccciones(){

}