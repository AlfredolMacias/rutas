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
                    <button type="button" class="btn btn-light" style="width:200%;">Recorrido</button>
                </div>
            </div>
            <div class="col-sm-10" id="contenido">
                <div class="col-md-12" style="margin-top:1.5em;">
                    <form action="login/valida" method="POST">
                        <div class="form-group">
                            <label for="unidad">Unidad</label>
                            <select class="form-control">   
                                <option value="Unidad 1">Unidad 1</option>
                                <option value="Unidad 2">Unidad 2</option>
                                <option value="Unidad 3">Unidad 3</option>
                                <option value="Unidad 4">Unidad 4</option>
                            </select>
                            
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
</html>