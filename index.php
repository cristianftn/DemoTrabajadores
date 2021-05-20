

<?php include 'includes/headerLogin.php'; ?>

      <body class="bodyLogin">
 

      <form class=" w-100 p-5  rounded bg-light col-lg-4 offset-lg-4 align-middle formularioLogin">
        <div class="form-group ">
              <label for="exampleInputEmail1" id="labelGenerico">DNI/NIE*</label>
              <input type="text" class="form-control" id="dniLogin" aria-describedby="emailHelp" >
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" id="labelGenerico">Password*</label>
              <input type="password" class="form-control" id="passLogin" >
          </div>
 
          <button type="button" class="btn  botonGenerico" id="enviarLogin">Aceptar</button>
      </form>
      

      

        
      <!--  <div class="modal fade-scale" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>

              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">DNI/NIE*</label>
                    <input type="text" class="form-control" id="dniLogin">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Password*</label>
                    <input type="password" class="form-control" id="passLogin">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="borrarLogin" >Borrar</button>
                <button type="button" class="btn botonGenerico" id="enviarLogin">entrar</button>
              </div>
            </div>
          </div>
        </div>
      </body>
-->



    
</body>
<?php include 'includes/footer.php'; ?>