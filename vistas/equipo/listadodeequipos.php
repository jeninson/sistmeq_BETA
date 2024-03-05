<table class="table caption-top table-bordered">
  <caption>Listado de Equipos</caption>
   <thead>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">C.Inventario</th>
      <th scope="col">Nombre del Equipo</th>
      <th scope="col">Marca</th>
      <th scope="col">Categoria</th>
      <th scope="col">Fecha</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
        <?php
          include "../../controles/conexion.php";
          $num=1;
          $filas="";
          $qry = "SELECT e.`EquID`, e.`EquCodigoInv`, e.`EquNombre`, m.MarNombre, c.CatNombre, e.`EquRegFecha`, e.`EquRegHora` FROM `tbequipos` e INNER JOIN tbmarca m ON(e.`MarIdFK`=m.MarID) INNER JOIN tbcategoria c ON(e.CatIdFK=c.CatID) ORDER BY `EquNombre`";
          $sql = $conn -> query ($qry);                    
          while ($valores = mysqli_fetch_array($sql)) {
              $filas.="<tr>";
              $filas.="<th>".$num."</th>";
              $filas.="<td>".$valores["EquCodigoInv"]."</td>";
              $filas.="<td>".$valores["EquNombre"]."</td>";
              $filas.="<td>".$valores["MarNombre"]."</td>";
              $filas.="<td>".$valores["CatNombre"]."</td>";
              $filas.="<td>".$valores["EquRegFecha"]."<br>".$valores["EquRegHora"]."</td>";
              $filas.="<td><button class='btn btn-primary' onclick=\"editar_equipo('".$valores["EquID"]."')\"><i class=' fa fa-edit'></i></button></td>";
              $filas.="</tr>";
              $num++;
          }
          echo $filas;
          mysqli_close($conn);
        ?>      
    
       </tbody>
      
       <button onclick="menu('equipo/nuevo.php')"type="button" class="btn btn-success"> Agregar</button>