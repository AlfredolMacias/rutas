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
                    <?php
                        if(isset($comentarios)){
                            foreach($comentarios as $comentario):
                                echo "<p><strong>".$comentario->usuario.": </strong>".$comentario->comentario."</p>";
                            endforeach;
                        }
                    ?>
                    <form action="nuevoComentario" method="post">
                        <input type="hidden" name="fecha" value="<?php echo $fecha; ?>">
                        <textarea name="comentario" placeholder="Escribe tu comentario" cols="40" rows="5" required></textarea>
                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center" id="footer">
        <p>Copyrights 2018</p>
    </footer>
</body>
    <script>
        function salir(){
            location.href='http://localhost:8080/codeigniter/index.php/login/salir';
        }
        function modificar(){
            location.href='http://localhost:8080/codeigniter/index.php/login/editar';
        }
    </script>
</html>