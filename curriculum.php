



<?php include 'includes/header.php'; ?>

  <body class=" bg-light border-top">
    <div class="container-fluid  mt-5">
      <form class=" formularioCurriculum">

        <div class="row  col-xs-6">
          <div class="col-sm-2 col-xs-12 mt-2">
            <label class="traducir">Nombre*</label>
            <input type="text" class="form-control col-xs-12" id="inputNombre">
          </div>
          <div class="col-sm-2 col-xs-12 mt-2">
            <label class="traducir">Primer apellido*</label>
            <input type="text" class="form-control" id="inputApellido1">
          </div>
          <div class="col-sm-2 col-xs-12 mt-2">
            <label class="traducir">Segundo apellido*</label>
            <input type="text" class="form-control" id="inputApellido2">
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-sm-2 col-xs-12 mt-2">
            <label class="traducir">Telefono*</label>
            <input type="text" class="form-control" id="inputTelefono">
          </div>
          <div class="col-sm-2 col-xs-12 mt-2">
            <label class="traducir">Email*</label>
            <input type="text" class="form-control" id="inputEmail">
          </div>
          <div class="col-sm-2 col-xs-12 mt-2">
            <label class="traducir">DNI*</label>
            <input type="text" class="form-control" id="inputDni">
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-sm-2 col-xs-12 mt-2">
            <label class="traducir">Direccion*</label>
            <input type="text" class="form-control" id="inputDireccion">
          </div>
          <div class="col-sm-2 col-xs-12 mt-2">
            <label class="traducir">C.P.*</label>
            <input type="text" class="form-control" id="inputCodigoPostal">
          </div>
          <div class="col-sm-2 col-xs-12 mt-2">
            <label class="traducir">Población*</label>
            <input type="text" class="form-control" id="inputPoblacion">
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-sm-2 col-xs-12 mt-2">
            <label class="traducir">Fecha de nacimiento*</label>
            <input type="date" class="form-control" id="fechaNacimiento">
          </div>
          <div class="col-sm-2 col-xs-12 mt-2">
            <label class="traducir">Edad</label>
            <input type="text" class="form-control col-xs-12" id="inputEdad">
          </div>
          <div class="col-sm-1 col-xs-12 mt-2">
            <label class="traducir">Genero</label>
            <select class="custom-select" id="genero">
              <option value="Hombre">Hombre</option>
              <option value="Mujer">Mujer</option>
            </select>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-sm-2 col-xs-12 mt-2">
            <label class="traducir">Nacionalidad*</label>
            <input type="text" class="form-control" id="inputNacionalidad" >
          </div>
          <div class="col-sm-1 col-xs-12 mt-2">
            <label class="traducir">Estado civil</label>
            <select class="custom-select" id="estadoCivil">
              <option value="Soltero/a">Soltero/a</option>
              <option value="Casado/a">Casado/a</option>
            </select>
          </div>
        </div>



        <div class="row col-sm-3 col-xs-12 mt-4">
          <div class="col">
            <label for="formFileSm" class="form-label">Adjuntar Curriculum</label>
            <input class="form-control form-control-sm" id="inputFile" type="file"/>
          </div>

        </div>

        <button type="button" class="btn  mt-4 botonGenerico" data-toggle="modal" data-target="#exampleModal"
          data-whatever="@mdo">Añadir experiencia</button>


        <div class="modal fade modalExperiencia" id="exampleModal" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Experiencia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label traducir">Empresa</label>
                    <input type="text" class="form-control" id="experienciaNombreEmpresa">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label traducir">Puesto</label>
                    <input type="text" class="form-control" id="experienciaNombrePuesto">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label traducir">Descripción del puesto</label>
                    <textarea class="form-control" id="experienciaDescripcionPuesto"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label traducir">Conocimientos y tecnologías</label>
                    <input type="text" class="form-control" id="experienciaConocimientos">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn botonGenerico" id="botonGuardarExperiencia"
                  data-dismiss="modal">Guardar experiencia</button>
              </div>
            </div>
          </div>
        </div>



        <button type="button" class="btn btn-primary mt-3" id="botonEnvioFormulario">Enviar</button>
      </form>
      

    </div>

  

  <?php include 'includes/footer.php'; ?>