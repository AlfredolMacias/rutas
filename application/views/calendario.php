<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Buscar Unidad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8080/codeIgniter/css/bootstrap.min.css" />
</head>
<style>
    div.ui-datepicker{
         font-size:20px;
         align: center;
    }  
        h1{
            font-family : NewBorou, times;
            font-size : 5em;
            color: white;
        }
        #banner{
            height : 120px;
            background:#00567F;
            padding:10px;
        }
        .sidenav{
            background:#00567F;
            padding:20px;
            color:white;
        }
        #contenido{
            padding: 30px;
            height:435px;
            padding-bottom: 450px;
        }
        #footer{
            background: gray;
            padding:15px;
        }
        
</style>
<body>
    <div class="container-fluid">
        <div class="row text-center" id="banner">
            <div class="col-md-12">
                <h1 align="center">Rutas</h1>
            </div>
        </div>
        <div class="row content">
            <div class="col-sm-2 sidenav">            
                <div class="btn-group-vertical">
                    <button type="button" class="btn btn-light" style="width:200%;">Unidades</button>
                </div>
            </div>
            <div class="col-sm-10" id="contenido">
                <div class="col-md-12" style="margin-top:1.5em;">
                    <div class="col text-right">
                        <?php
                            if(isset($sesion2)){
                                echo "<button class='btn btn-success' type='button'>".$sesion2."</button>";
                            }
                        ?>
                        <button class="btn btn-success" onclick="modificar()" type="button">Editar Perfil</button>
                        <button class="btn btn-danger" onclick="salir()" type="button">Salir</button>
                    </div>
                    <form action="rutas/unidades/" method="POST">
                        <div class="form-group text-center" >
                            <label for="fecha">Fecha: </label>
                            <center><div id="datepicker"></div></center>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-default">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center" id="footer">
        <p>Copyrights 2018</p>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        function salir(){
            location.href='login/salir';
        }
        function modificar(){
            location.href='login/editar';
        }
        $( function() {
            $( "#datepicker" ).datepicker({
                defaultDate: '-10m',
                dateFormat: 'yy/mm/dd',
                onSelect: function(date) {
                    location.href='../../control_bsn2?fecha='+date;
                }
            });
          } );
    </script>
</html>