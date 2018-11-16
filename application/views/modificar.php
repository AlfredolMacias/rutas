<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Editar Perfil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8080/codeIgniter/css/bootstrap.min.css" />
</head>
<body>
    <div class="container" id="container" style="margin-top:1em;">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="col-md-12 text-center">
                    <img src="http://localhost:8080/codeIgniter/img/logo.png" alt="" style="width:50%">
                </div>
                <div class="col-md-12" style="margin-top:1.5em;">
                    <form action="http://localhost:8080/codeIgniter/index.php/usuario/modificar" method="POST">
                        <div class="form-group">
                            <label for="user">Usuario</label>
                            <input type="text" class="form-control" name="user" id="user" placeholder="Usuario" required>
                            <?php
                                if(isset($error)){
                                    echo "<p style='color:red;'>".$error."</p>";
                                }
                                if(isset($user)){
                                    echo"<input type='hidden' id='user1' value=".$user.">";
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="pass">Contraseña Actual</label>
                            <input type="password" class="form-control" name="oldpass" id="oldpass" placeholder="Contraseña Actual" required>
                        </div>
                        <div class="form-group">
                            <label for="pass">Nueva Contraseña</label>
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Nueva Contraseña" required>
                        </div>
                        <div class="form-group">
                            <label for="pass">Repite Contraseña</label>
                            <input type="password" class="form-control" name="pass2" id="pass2" placeholder="Repite Contraseña" required>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-default">Guardar</button>
                            <button type="button" onclick="deletes();" class="btn btn-danger">Eliminar Cuenta</button>        
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
        window.onload = function () {
            document.getElementById("pass").onchange = validar;
			document.getElementById("pass2").onchange = validar;
		}
        function validar(){
            var pass = document.getElementById("pass").value;
            var pass2 = document.getElementById("pass2").value;
            if(pass == pass2){
                document.getElementById("pass2").setCustomValidity('');
            }else{
                document.getElementById("pass2").setCustomValidity("Las contraseñas no coinciden");
            }
        }
        
        function deletes(){
            var r=confirm("Estas seguro de que deseas eliminar la cuenta");
            if (r==true){
                var user = document.getElementById("user1").value;
                window.location = "http://localhost:8080/Codeigniter/index.php/usuario/eliminar?user="+user;
            }else
                return false;
        } 
</script>
</body>
</html>