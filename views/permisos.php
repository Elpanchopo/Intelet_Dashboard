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
<main>
  <div class="title">
      <h2>Permisos</h2>
      <a><?php echo $_SESSION['nnombre_usuario']?></a>
  </div>


<div style="display: flex; justify-content: space-between;">
<!-- Columna 1: Texto "Usuario" -->
<div style="flex: 1;">
    <p>Usuario</p>
</div>

<!-- Columna 2: Select con 2 opciones de ejemplo -->
<div style="flex: 2;">
    <select id="userSelect">
        <?php

foreach ($users as $u ){
echo '<option value="'. $u['usuario_id'] . '">' . $u['nombre_completo'] . '</option>';
}



        ?>
    </select>
</div>

<!-- Columna 3: Botones "SELECCIONAR" y "GUARDAR" -->
<div style="flex: 1;">
    <button>SELECCIONAR</button>
    <button>GUARDAR</button>
</div>
</div>

<div id="permisos_div">



</div> 






</main>
<script>

var usuarioSelect = document.getElementById('userSelect');
var permisosDiv = document.getElementById('permisos_div');
usuarioSelect.addEventListener('change',function(){
  var optvalue = usuarioSelect.value;
  console.log(arregloBidimensional);
  var usuario = arregloBidimensional.find(function(item){
    return item[0]===optvalue;
  });
  if (usuario){
    permisosDiv.textContent = 'permisos: ' + usuario[3];  
  }
  else {
    alert(optvalue);
  }
});
</script>
<?php
  include 'footer.php';
?>