<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Rutas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8080/codeIgniter/css/bootstrap.min.css" />
</head>
<style>
        h1{
            font-family : times;
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
        }
        #footer{
            background: gray;
            padding:15px;
        }
        #bien{
            margin-top:20px;
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
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4" id="contenido">
                <div class="col text-right">
                    <button class="btn btn-success" onclick="login()" type="button">Login</button>
                    <button class="btn btn-" onclick="regis()" type="button">Registrarse</button>
                </div>                    
            </div>
        </div>
        <div class="row content">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <img src="http://localhost:8080/codeIgniter/img/logo.png" alt="" style="width:55%">
                <h2 id="bien">Bienvenido</h2>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <footer class="container-fluid text-center" id="footer">
        <p>Copyrights 2018</p>
    </footer>
</body>
    <script>
        function regis(){
            location.href='http://localhost:8080/Codeigniter/index.php/login/registro';
        }
        function login(){
            location.href='http://localhost:8080/Codeigniter/index.php/login';
        }
    </script>
</html>