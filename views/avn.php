<?php
  // Incluir el archivo datos.php utilizando include
  require_once __DIR__ . '/../models/avn_fx.php';
  include 'header.php';
?>

<main>
  <div class="title">
      <h2>AVN</h2>
      <a href="javascript:void(0);">Hello Bob !</a>
  </div>
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="https://media.istockphoto.com/id/903568822/es/foto/llamar-a-los-trabajadores-del-centro.jpg?s=612x612&w=0&k=20&c=1YwT2DTu3WulREPVtUAEDS8W3gn_s5foVI3rFgOYZlk=" class="card-img-top" alt="Hollywood Sign on The Hill"/>
      <div class="card-body">
        <h5 class="card-title">Clientes por contactar</h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://st2.depositphotos.com/2288675/10311/i/450/depositphotos_103113358-stock-photo-headset-on-a-laptop-computer.jpg" class="card-img-top" alt="Palm Springs Road"/>
      <div class="card-body">
        <h5 class="card-title">Clientes Contactados</h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://media.istockphoto.com/id/1331493599/photo/shot-of-a-businessman-using-a-computer-while-working-in-a-call-center.jpg?s=612x612&w=0&k=20&c=ocaFzVRnDARFnANjyd6CMrwAI0Ua6I0Na_MKej8IysA=" class="card-img-top" alt="Los Angeles Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">Gestion diaria promedio</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
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
                  var datos = <?php getGestionesEjecutivosHora(); ?> ;
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
              $json_data = getTablaGestionesEjecutivosHora(); // llama al json de la consulta
              
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
    <button style="border-radius: 0px 0px 0px 0px" class="dropdown">Tipos de Gestiones diarias por ejecutivos</button>
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
                  var datos = <?php getTipoGestionesEjecutivos(); ?>;
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
              $json_data = getTablaTGDiarioTotal(); // Traigo el json de la consulta
              $datos = json_decode($json_data, true);

              $json_data = getTablaTGDiarioSumTotal(); // Traigo el json de la consulta totales por TG
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
