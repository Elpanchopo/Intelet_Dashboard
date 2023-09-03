<?php
  // Incluir el archivo datos.php utilizando include
  require_once __DIR__ . '/../models/permisos_fx.php';
  include 'header.php';
  $jsonUser = getUserList();
  $users = json_decode($jsonUser,true);
?>

<script> 
var listaPermisos = '<?php echo $jsonUser; ?>';
var jsonArray = JSON.parse(listaPermisos);

    // Crea un arreglo bidimensional a partir del array de objetos
    var arregloBidimensional = [];

    for (var i = 0; i < jsonArray.length; i++) {
        var objeto = jsonArray[i];
        var fila = [];

        // Agrega los valores de cada propiedad del objeto a la fila
        fila.push(objeto.usuario_id);
        fila.push(objeto.nombre_completo);
        fila.push(objeto.activo);
        fila.push(objeto.permisos);

        // Agrega la fila al arreglo bidimensional
        arregloBidimensional.push(fila);
    }

    // Ahora, arregloBidimensional contiene un arreglo bidimensional con los datos
    console.log(arregloBidimensional);

</script>

<style>
  /* Estilo CSS para mostrar los checkboxes en 2 listas verticales */
  .checkbox-list {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }

  .checkbox-list-item {
    margin-bottom: 10px; /* Espacio entre elementos de la lista */
  }

  input[type="checkbox"], input[type="radio"] {
    margin-right: 10px!important;
  }
</style>

<main>
  <div class="title">
      <h2>Permisos</h2>
      <a><?php echo $_SESSION['nnombre_usuario']?></a>
  </div>


<div style="display: flex; justify-content: space-between;">
  <div style="flex: 1;">
      <p>Seleccione Usuario:</p>
  </div>

  <div style="flex: 2;">
      <select id="userSelect">
            <option disabled selected>Seleccione Usuario</option>
          <?php
            foreach ($users as $u ){
            echo '<option value="'. $u['usuario_id'] . '">' . $u['nombre_completo'] . '</option>';
            }
          ?>
      </select>
  </div>
</div>

<div id="permisos_div" class="container">
  <h3>Permisos:</h3>
  <div id="checkboxContainer" class="row">
    <div class="col-lg-3 col-lg-offset-2 gauche"><ul class="checkbox-list" id="column1"></ul></div>
    <div class="col-lg-5 corps"><ul class="checkbox-list" id="column2"></ul></div>
  </div>
</div>


<button id="mostrarValores">Actualizar</button>
<div id="resultado"></div>

</main>


<script>
  var usuarioSelect = document.getElementById('userSelect');
  var permisosDiv = document.getElementById('permisos_div');
  var checkboxList1 = document.getElementById('column1');
  var checkboxList2 = document.getElementById('column2');
  var checkboxes = [];
  var checkboxNames = [
    'Abcdin',
    'AVN',
    'Consumer',
    'Entel Fibra',
    'Entel Hogar',
    'Entel Movil',
    'Forum',
    'Globalvia',
    'Ruta del Maipo',
    'Salcobrand',
    //'Santander',
    'Permisos'
  ];

// Crear 10 checkboxes con los nombres correspondientes
for (var i = 0; i < checkboxNames.length; i++) {
    var checkbox = document.createElement('input');
    checkbox.type = 'checkbox';
    checkbox.name = 'permisos[]'; // Nombre del campo del formulario
    checkbox.value = i + 1; // Valor del checkbox (1-10)
    checkboxes.push(checkbox);
    
    var listItem = document.createElement('li');
    listItem.className = 'checkbox-list-item';
    listItem.appendChild(checkbox);
    listItem.appendChild(document.createTextNode(checkboxNames[i]));

    if (i < checkboxNames.length / 2) {
      checkboxList1.appendChild(listItem);
    } else {
      checkboxList2.appendChild(listItem);
    }
  }
    

  usuarioSelect.addEventListener('change',function(){
    var optvalue = usuarioSelect.value;
    console.log(arregloBidimensional);
    var usuario = arregloBidimensional.find(function(item){
      return item[0]===optvalue;
    });
    if (usuario){
      
      var permisos = usuario[3].split(',').map(Number);

      checkboxes.forEach(function (checkbox, index) {
        checkbox.checked = permisos.includes(index + 1);
      });
    }
    else {
      alert(optvalue);
    }
  });

  var mostrarValoresButton = document.getElementById('mostrarValores');
  var resultadoDiv = document.getElementById('resultado');

  mostrarValoresButton.addEventListener('click', function () {
    var optvalue = usuarioSelect.value;
    var usuario = arregloBidimensional.find(function (item) {
      return item[0] === optvalue;
    });

    if (usuario) {
      var permisos = [];
      checkboxes.forEach(function (checkbox, index) {
        if (checkbox.checked) {
          permisos.push(index + 1);
        }
      });

      resultadoDiv.textContent = 'Usuario seleccionado: ' + optvalue + ', Permisos marcados: ' + permisos.join(', ');
    } else {
      resultadoDiv.textContent = 'Usuario no encontrado';
    }

    // Hacer la solicitud AJAX al servidor PHP
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/../dashboard/models/update_perm_fx.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        resultadoDiv.textContent = xhr.responseText;
      }
    };

    // Convertir los datos en una cadena de consulta
    var data = 'usuario=' + encodeURIComponent(optvalue) + '&permisos=' + encodeURIComponent(permisos.join(','));

    // Enviar la solicitud
    xhr.send(data);

    setTimeout(function() {
      location.reload();
    }, 1000);

  });

</script>

<?php
  include 'footer.php';
?>