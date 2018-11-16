<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <br>
    <form action="" method="post" id="myForm">
        Nombre: <input type="text" name="nombre" id="nombre">
        <br>
        Password: <input type="password" name="pass1" id="pass1">
        <br>
        Repetir Password: <input type="password" name="pass2" id="pass2">
        <input type="button" onclick="f()" value="Enviar">
    </form>
    <script>
        function f(){
            var p1 = document.getElementById("pass1").value;
            var p2 = document.getElementById("pass2").value;
            var nom = document.getElementById("nombre").value;
            if(p1==""){
                document.getElementById("pass1").value = "";
                document.getElementById("pass2").value = "";
                document.getElementById("nombre").value = "";
                alert("El password no esta lleno");
            }
            else if(nom==""){
                document.getElementById("pass1").value = "";
                document.getElementById("pass2").value = "";
                document.getElementById("nombre").value = "";
                alert("El nombre no esta lleno") ;
            }else{
                if(p1 == p2){
                    document.getElementById("myForm").submit();
                }else{
                    document.getElementById("pass1").value = "";
                    document.getElementById("pass2").value = "";
                    document.getElementById("nombre").value = "";  
                    alert("El password no es correcto") ;
                }
            }
            
        }
    </script>
</body>
</html>