<?php

require 'clases/Conexion.php';
require 'dao/EstudianteDAO.php';

  try {
      
      $conexion = new Conexion();

      $estudiante = new EstudianteDAO($conexion);
      $res = $estudiante->listar();

      
  } catch (PDOException $e) {
      print "¡Error!: " . $e->getMessage() . "<br/>";
      die();
  }

?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <title>Usuarios del sistema</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">COVID-19 Córdoba</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Indicadores</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Municipios
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Montería</a></li>
                  <li><a class="dropdown-item" href="#">Cerete</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Sahagún</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" action="buscar.php" method="POST">
              <input name="parametro" class="form-control me-2" type="search" placeholder="Identificación..." aria-label="Search">
              <button class="btn btn-success" type="submit">Buscar</button>
            </form>
          </div>
        </div>
    </nav>


    <div class="container p-2">
        
        <?php
            echo "<h1>Usuarios del sistema</h1>";
        ?>

        <div class="row p-3">
          <div class="col-sm-9">
                
                <table class="table table-sm table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          foreach($res as $fila) {
                              echo "<tr>";
                                echo "<td>" . $fila['username'] . "</td>";
                                echo "<td>" . $fila['nombres'] . "</td>";
                                echo "<td>" . $fila['apellidos'] . "</td>";
                                echo "<td>" . $fila['fecha_nacimiento'] . "</td>";
                                echo "<td> 
                                        <a href='usuario.php?username=" . $fila['username'] . "'>
                                           Ver...
                                        </a> 
                                      </td>";
                              echo "</tr>";
                          }
                      ?>
                    </tbody>
                  </table>

                 
                  
          </div>
          <div class="col-sm-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                Indicadores Generales
                </a>
                <a href="#" class="list-group-item list-group-item-action">Nuevo</a>
                <a href="#" class="list-group-item list-group-item-action">Listado</a>
                <a href="#" class="list-group-item list-group-item-action">Buscar</a>
            </div>
          </div>
        </div>
      </div>


    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->


  </body>
</html>