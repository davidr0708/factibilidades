
<form name="form-data" action="recibCliente.php" method="POST">

    <div class="row">
      <div class="col-md-2">
          <label for="codigo" class="form-label">Codigo CAD</label>
          <input type="text" class="form-control" name="codigo_cad" required='false'>
      </div>
      <div class="col-md-3">
          <label for="departamento" class="form-label">Departamento</label>
          <input type="text" class="form-control" name="departamento" required='false'>
      </div>
      <div class="col-md-3">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="nombre_cad" required='false'>
      </div>
      <div class="col-md-1">
          <label for="opcion" class="form-label">Opción</label>
          <input type="text" class="form-control" name="opcion" required='false'>
      </div>
      <div class="col-md-3">
          <label for="direccion" class="form-label">Dirección</label>
          <input type="text" class="form-control" name="direccion" required='false'>
      </div>
      <div class="col-md-3">
          <label for="barrio" class="form-label">Barrio</label>
          <input type="text" class="form-control" name="barrio" required='false'>
      </div>
      <div class="col-md-2">
          <label for="latitud" class="form-label">Latitud</label>
          <input type="text" class="form-control" name="latitud" required='false'>
      </div>
      <div class="col-md-2">
          <label for="longitud" class="form-label">Longitud</label>
          <input type="text" class="form-control" name="longitud" required='false'>
      </div>
      <div class="col-md-2">
          <label for="fecha" class="form-label">Fecha</label>
          <input type="text" class="form-control" name="fecha" required='false'>
      </div>
      <div class="col-md-1">
          <label for="estado" class="form-label">Estado</label>
          <input type="text" class="form-control" name="estado" required='false'>
      </div>
      <div class="col-md-3">
          <label for="canal_principal" class="form-label">Canal Principal</label>
          <input type="text" class="form-control" name="canal_principal" required='false'>
      </div>
      <div class="col-md-3">
          <label for="canal_backup" class="form-label">Canal Backup</label>
          <input type="text" class="form-control" name="canal_backup" required='false'>
      </div>
    </div>
      <div class="row justify-content-center mt-5">
          <div class="col-2">
              <button class="btn btn-primary btn-block" id="btnEnviar">
                  Registrar Cliente
              </button>
          </div>
      </div>
</form>
