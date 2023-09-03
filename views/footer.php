<!-- Enlace a Bootstrap JS (jQuery y Popper.js requeridos por Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script>
  //alert('<?php echo $perms[0]['access']; ?>');
  // Supongamos que permisosUsuario contiene los números de permisos (ejemplo: [1, 3, 5])
  var permString = "<?php echo $perms[0]['access']; ?>";


  var permisosUsuario = permString.split(",").map(function (numero) {
    return parseInt(numero, 10);
  });

  // Obtén la lista de elementos <li>
  var elementosLi = document.getElementById('menu').getElementsByTagName('li');

    // Enumera cada elemento <li>
    for (var i = 0; i < elementosLi.length; i++) {
    elementosLi[i].setAttribute('data-index', i + 1);
    }

  // Define un array con los índices de los elementos que deseas mostrar (por ejemplo, 1, 3, 5)
  var elementosAMostrar = permisosUsuario;

    // Oculta los elementos que no están en el array elementosAMostrar
    for (var j = 0; j < elementosLi.length; j++) {
    if (!elementosAMostrar.includes(j + 1)) {
        elementosLi[j].style.display = 'none';
    }
    }

</script>

</body>
</html>
