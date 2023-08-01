<?php
  // Incluir el archivo datos.php utilizando include
  require_once __DIR__ . '/../models/functions.php';
  include 'header.php';
?>

<style>

.dropdown {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}
.dropdown-last {
  background-color: #777;
  padding: 18px;
  width: 100%;
  border: none;
  outline: none;
  border-radius: 0px 0px 10px 10px
}

.active,
.dropdown:hover {
  background-color: #555;
}

.dropdown::after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active::after {
  content: "\2212";
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.dropdown-content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.35s ease-out;
  background-color: #f1f1f1;
}
#download {
  float: right;
  background-color: #777;
  color: white;
  padding: 18px;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  text-decoration: none;
}
#download:hover {
  background-color: #555;
}
</style>

<main>
  <div class="title">
      <h2>Consumer</h2>
      <a href="javascript:void(0);">Hello Bob !</a>
  </div>


  <!-- Contenedor para todos los graficos -->
  <div class="container mt-5">

    <!-- elemento 1 -->
    <button style="border-radius: 10px 0px 0px 0px" class="dropdown">Gestiones diarias por hora</button>
    <div class="dropdown-content" style="background-color: white!important;">
      <div class="row">
        <div class="col-12">
            <!-- Tarjeta grafico 1  -->
            <div class="card text-black" style=" color: #343a40!important;">
              <div class="card-body">
                <!-- cambiar id canvas para cada grafico -->
                <canvas id="miGrafico" style="width: 100%; height: 300px; margin: auto;"></canvas>

                <!-- javascript que genera grafico 1 -->
                <script>
                  var datos = <?php getGestionesEjecutivosHora2(); ?> ;
                  // parametros del constructor:
                  //datos, etiquetas, valores, id canvas, titulo del grafico, eje x, eje y
                  var g1 = new Grafico(datos, datos.map(obj => obj.bloque_horario), datos.map(obj => obj.total), 'miGrafico', 'Gestiones por Hora', 'Bloque horario', 'Gestiones realizadas');
                  g1.crearGrafico();
                </script>
                
              </div>
            </div>
            <!-- fin tarjeta -->

        </div>

      </div>


      <div class="row">
        
      
        
        <!-- columna 2 - tabla -->
        <div class="col-12">
          <div class="table-responsive">

            <?php 
              $json_data = getTablaGestionesEjecutivosHora2(); // Traigo el json de la consulta
              
              $datos = json_decode($json_data, true);

              if (!empty($datos)) {
                
                echo '<table class="table table-hover table-sm border-light">
                        <thead>
                          <tr>
                            <th scope="col">Ejecutivo</th>
                            <th scope="col">9-10</th>
                            <th scope="col">10-11</th>
                            <th scope="col">11-12</th>
                            <th scope="col">12-13</th>
                            <th scope="col">13-14</th>
                            <th scope="col">14-15</th>
                            <th scope="col">15-16</th>
                            <th scope="col">16-17</th>
                            <th scope="col">17-18</th>
                            <th scope="col">18-19</th>
                            <th scope="col">+19</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
                        <tbody>';

                        //Creamos cada fila
                        foreach ($datos as $fila) {
                          echo '
                          <tr>
                            <th scope="row">' . $fila["ejecutivo"] . '</th>
                            <td>' . $fila["c_9"] . '</td>
                            <td>' . $fila["c_10"] . '</td>
                            <td>' . $fila["c_11"] . '</td>
                            <td>' . $fila["c_12"] . '</td>
                            <td>' . $fila["c_13"] . '</td>
                            <td>' . $fila["c_14"] . '</td>
                            <td>' . $fila["c_15"] . '</td>
                            <td>' . $fila["c_16"] . '</td>
                            <td>' . $fila["c_17"] . '</td>
                            <td>' . $fila["c_18"] . '</td>
                            <td>' . $fila["c_19"] . '</td>
                            <td>' . $fila["total"] . '</td>
                          </tr>';
                        }

                        //cerramos las filas y la tabla
                        echo '</tbody>
                            </table>';

              } else {
                echo "No hay datos para mostrar.";
              }

            ?>


          </div>
        </div>
        <!-- fin col2 - tabla -->
      </div>
    </div>


    <!-- elemento 2 -->
    <button style="border-radius: 0px 0px 0px 0px" class="dropdown">Tipos de Gestiones Realizadas</button>
    <div class="dropdown-content" style="background-color: white!important;">
      <div class="row">
        <div class="col-12">

            <!-- Tarjeta grafico 2  -->
            <div class="card text-black" style="color: #343a40!important;">
              <!-- <div class="card-header">
                Tipos de gestiones realizadas:
              </div> -->
              <div class="card-body">
                <!-- cambiar id canvas para cada grafico -->
                <canvas id="miGrafico2" style="width: 100%; height: 300px; margin: auto;"></canvas>
                
                <!-- javascript que genera grafico 2 -->
                <script>
                  var datos = <?php getTipoGestionesEjecutivos2(); ?>;
                  // parametros del constructor:
                  //datos, etiquetas, valores, id canvas, titulo del grafico, eje x, eje y
                  var g2 = new Grafico(datos, datos.map(obj => obj.tg), datos.map(obj => obj.total), 'miGrafico2', 'Gestiones realizadas', 'Tipos de gestion', 'Gestiones realizadas');
                  g2.crearGrafico();
                </script>

              </div>
            </div>
            <!-- fin tarjeta -->

        </div>
      </div>
      <div class="row">          
        <div class="col-12">
          <!-- tabla 2 -->
          <div class="table-responsive">
            
          <?php 
              $json_data = getTablaTGDiarioTotal2(); // Traigo el json de la consulta
              $datos = json_decode($json_data, true);

              $json_data = getTablaTGDiarioSumTotal2(); // Traigo el json de la consulta totales por TG
              $datosTG = json_decode($json_data, true);
              if (!empty($datos)) {
                
                echo '<table class="table table-hover table-sm border-light">
                        <thead>
                          <tr>
                            <th scope="col">Ejecutivo</th>
                            <th scope="col">CT</th>
                            <th scope="col">TE</th>
                            <th scope="col">NC</th>
                            <th scope="col">CP</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
                        <tbody>';

                        //Creamos cada fila
                        foreach ($datos as $fila) {
                          echo '
                          <tr>
                            <th scope="row">' . $fila["ejecutivo"] . '</th>
                            <td>' . $fila["ct"] . '</td>
                            <td>' . $fila["te"] . '</td>
                            <td>' . $fila["nc"] . '</td>
                            <td>' . $fila["cp"] . '</td>
                            <td>' . $fila["total"] . '</td>
                          </tr>';
                        }
                        foreach ($datosTG as $filaTG) {
                          echo '
                          <tr>
                            <th scope="row"> Total </th>
                            <td>' . $filaTG["ct"] . '</td>
                            <td>' . $filaTG["te"] . '</td>
                            <td>' . $filaTG["nc"] . '</td>
                            <td>' . $filaTG["cp"] . '</td>
                            <td>' . $filaTG["total"] . '</td>
                          </tr>';
                        }


                        //cerramos las filas y la tabla
                        echo '</tbody>
                            </table>';

              } else {
                echo "No hay datos para mostrar.";
              }

            ?>

          </div>
        </div>
      </div>
    </div>

  </div>
    



</main>

<script>
  var dropdowns = document.getElementsByClassName("dropdown");

  for (var i = 0; i < dropdowns.length; i++) {
    dropdowns[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.maxHeight) {
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      }
    });
  }
</script>
<?php
  include 'footer.php';
?>
