<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8080/codeIgniter/css/bootstrap.min.css" />
</head>
<body>
    <div class="container" id="container" style="margin-top:1em;">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="col-md-12 text-center">
                    <img src="http://localhost:8080/codeIgniter/img/logo.png" alt="" style="width:70%">
                </div>
                <div class="col-md-12" style="margin-top:1.5em;">
                    <form action="http://localhost:8080/Codeigniter/index.php/login/valida" method="POST">
                    <?php
                                if(isset($error)){
                                    echo "<p style='color:red;'>".$error."</p>";
                                }
                                if(isset($sesion)){
                                    echo "HOLA: ". $sesion;
                                }
                                
                            ?>
                        <div class="form-group">
                            <label for="user">Usuario</label>
                            <input type="text" class="form-control" name="user" id="user" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña">
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-default">Entrar</button>
                        </div>
                        <div class="col-md-12 text-right">
                            <a href="login/registro"><label for="registrarse">Registrarse</label></a>
                        </div>
                    </form>
                </div>
                
            </div>
            <div class="col-md-4"></div>
        </div>

    </div>
    <script src="http://localhost:8080/codeIgniter/js/jquery-3.3.1.slim.min.js"></script>
    <script src="http://localhost:8080/codeIgniter/js/bootstrap.min.js"></script>
    <script>
        function saluda(){
           alert("HOLA");
        }
        $(document).ready( function(){
           test();
        });
        var re = /([0-9]{2})([a-zA-Z])([0-9]{2})([a-zA-Z])/;
        function test(){
            var ok = re.exec("22A22n");
            if(ok){
                //alert("SI es una cadea correcta");
            }else{
                //alert("Nel, no coincide");
            }
        }

        
    </script>
</body>
</html>