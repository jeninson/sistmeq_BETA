
<?php
  include "../../controles/conexion.php";
?>
<div class="container">
    <br>
    <div class="card">
      <div class="card-header">
        <h5>..:: Nuevo Equipo ::..</h5>
      </div>
    <div class="card-body">
      <form  action="" onsubmit="guardar_equipo()" method="POST" id="form_nuevo_eq" name="form_nuevo_eq">
        <div class="col text-center"><h5 class="card-title">Informaci&oacute;n B&aacute;sica</h5></div>
        <!-- FILA #1 -->
        <div class="row">
          <div class="col">
            <h5 class="card-title">C&oacute;digo  Invetario </h5>
            <input type="card-body text right" class="form-control" id="CodEq" name="CodEq" placeholder="" required>
          </div>
          <div class="col">
            <h5 class="card-title">Nombre del equipo</h5>
            <input type="card-body text-align" class="form-control" id="NomEq" name="NomEq" placeholder="" required>
          </div>
          <div class="col col-md-4">
            <h5 class="card-title text-align">Marca</h5>
            <select class="form-select form-select" aria-label="medium select example" id="IdMarEq" name="IdMarEq" required>
              <?php
                $qry = "SELECT `MarID`, `MarNombre` FROM `tbmarca` ORDER BY `MarNombre` ASC";
                $sql = $conn -> query ($qry);                    
                while ($valores = mysqli_fetch_array($sql)) {
                    echo "<option value='".$valores["MarID"]."'>".$valores["MarNombre"]."</option>";
                }
              ?>
            </select>
          </div>
        </div>
        
        <!-- FILA #2 -->
        <div class="row">
          <div class="col">
            <h5 class="card-title">Modelo</h5>
            <input type="card-body text center" class="form-control" id="ModEq" name="ModEq" placeholder="" required>
          </div>
          <div class="col">
            <h5 class="card-title">Serial</h5>
            <input type="card-body text center" class="form-control" id="SerEq" name="SerEq" placeholder="" required>
          </div>
          <div class="col">
            <h5 class="card-title">Categoria</h5>
            <select class="form-select form-select" aria-label="large select example" id="IdCatEq" name="IdCatEq">
              <?php
                $qry = "SELECT `CatID`, `CatNombre` FROM `tbcategoria` ORDER BY `CatNombre` ASC";
                $sql = $conn -> query ($qry);                    
                while ($valores = mysqli_fetch_array($sql)) {
                    echo "<option value='".$valores["CatID"]."'>".$valores["CatNombre"]."</option>";
                }
              ?>
            </select>
          </div>
        </div>
        <br>    
        <!-- FILA #3 -->
        <div class="row">
          <div class="col text-center"><h5 class="card-title">Informaci&oacute;n T&eacute;cnica</h5></div>
          <div class="col text-center"><h5 class="card-title">Informaci&oacute;n Ubicaci&oacute;n</h5></div>
        </div>
        <!-- FILA #4 -->
        <div class="row">
          <div class="col">
            <h5 class="card-title">Invima</h5>
            <input type="card-body text center" class="form-control" id="InvEq" name="InvEq" placeholder="">
          </div>
          <div class="col">
            <h5 class="card-title text-align">Riesgo</h5>
            <select class="form-select form-select" aria-label="large select example" id="RieEq" name="RieEq">
              <option selected></option>
              <option value="I">I</option>
              <option value="IIA">IIA</option>
              <option value="IIB">IIB</option>
              <option value="III">III</option>
            </select>
          </div>
          <div class="col">
            <h5 class="card-title">Localizaci&oacute;n</h5>
            <input type="card-body text center" class="form-control" id="LocEq" name="LocEq" placeholder="" required>
          </div>
          <div class="col">
            <h5 class="card-title">Ubicaci&oacute;n</h5>
            <input type="card-body text center" class="form-control" id="UbiEq" name="UbiEq" placeholder="" required>
          </div>
        </div>
      </div>
      <div class="card-footer text-center">
        <button type="button" class="btn btn-danger"onclick="menu('general.php')"> Cancelar</button>
        <button type="submit" class="btn btn-success"> Guardar</button>
      </div>
    </form>  
  </div>
  <br>
</div>

<?php
 mysqli_close($conn);
 ?> 