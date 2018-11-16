<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Buscar Unidad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8080/codeIgniter/css/bootstrap.min.css" />
</head>
<style>
        h1{
            font-family : NewBorou, times;
            font-size : 5em;
            color: white;
        }
        #banner{
            height : 120px;
            background:#00567F;
        }
        .sidenav{
            background:#00567F;
            padding:20px;
            color:white;
        }
        #contenido{
            padding: 30px;
        }
        #footer{
            background: gray;
            padding:15px;
            color:white;
        }
         button{
            margin-top:2em; 
         }     
         li a{
           color:white;
         }
</style>
<body>
  <div class="row text-center" id="banner">
      <div class="col-md-12">
          <h1 align="center">Rutas</h1>
      </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2 sidenav">            
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Unidades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Recorrido</a>
          </li>
        </ul>
      </div>
      <div class="col-sm-10" id="contenido">
        <div class="col-md-12" style="margin-top:1.5em;">
            <?php    
              $dir = "";
              echo "<table class='table'>";
              echo "<tr>";
              echo "<th>Latitud</th><th>Longitud</th><th>DateTime</th>";
              echo "</tr>";
              for($i=0;$i<count($lista);$i++){
                echo "<a href='https://google.com/maps/place/".$lista[$i]->Latitude.",".$lista[$i]->Longitude."'>";
                echo "<tr>";
                echo "<td>".$lista[$i]->Latitude .  "</td>";
                echo "<td>".$lista[$i]->Longitude .  "</td>";
                echo "<td>".$lista[$i]->DateTime_GPS .  "</td></a>";
                echo "</tr></a>";
                $dir = $dir . $lista[$i]->Latitude . "," . $lista[$i]->Longitude ."/";
              }
              echo "</table>";
              
              echo "<div class='text-center'><a href='https://www.google.com/maps/dir/" . $dir . "' ><button class='btn btn-success'>Recorrido</button></a></div><br>";      
            ?>
        </div>
      </div>
    </div>
  </div>    
  <footer class="text-center" id="footer">
    <p>Copyrights 2018</p>
  </footer>
</body>
</html>
