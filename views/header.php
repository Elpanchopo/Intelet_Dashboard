<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="icon" type="image/x-icon" href="../assets/img/icons/favicon.ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- libs -->
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- bootstrap 5.4.2 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="../assets/css/mdb.min.css" />
  <!-- custom css/js-->
  <link rel="stylesheet" href="../assets/css/style.css">
  <script src="../assets/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- graficos -->
  <script src="../assets/js/grafico.js"></script>


  <title>Inicio</title>
</head>

<body>
  <span class="bckg"></span>

<!-- sidebar -->
<header>
  <h1><a href="index.php">Dashboard</a></h1>
  <nav>
    <ul>
      <li>
        <a href="avn.php" data-title="AVN">AVN</a>
      </li>
      <li>
        <a href="consumer.php" data-title="Consumer">Consumer</a>
      </li>
      <li>
        <a href="entel_movil.php" data-title="Entel_fibra">Entel movil</a>
      </li>
      <li>
        <a href="entel_fibra.php" data-title="Entel_fibra">Entel fibra</a>
      </li>
      <li>
        <a href="entel_hogar.php" data-title="Entel_fibra">Entel hogar</a>
      </li>
      <li>
        <a href="forum.php" data-title="Forum">Forum</a>
      </li>
      <li>
        <a href="globalvia.php" data-title="GlobalVia">Globalvia</a>
      </li>
      <li>
        <a href="salcobran.php" data-title="Salcobrand">Salcobrand</a>
      </li>
      <li>
        <a href="rutamaipo.php" data-title="Ruta del Maipo">Ruta del maipo</a>
      </li>
      <li>
        <a href="santander.php" data-title="Santander">Santander</a>
      </li>
      <li>
        <a href="abcdin.php" data-title="Abcdin">Abcdin</a>
      </li>
    </ul>
  </nav>
</header>


<!-- page content -->

<!-- Style --> 

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