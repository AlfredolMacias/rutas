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
            padding-top:20px;
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
        .btn-link{
            margin-left:15px;
            margin-right:15px;
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
                    <button type="button" class="btn btn-light" style="width:150%;">Unidades</button>
                    <button type="button" class="btn btn-light" style="width:150%;">Recorrido</button>
                </div>
            </div>
            <div class="col-sm-10" id="contenido">
                <div class="col-md-12" style="margin-top:1.5em;">
                    <div id="map" style="width:100%;height:400px"></div>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center" id="footer">
        <p>Copyrights 2018</p>
    </footer>
    <script src="http://localhost:8080/codeIgniter/js/jquery-3.3.1.slim.min.js"></script>
    <script src="http://localhost:8080/codeIgniter/js/bootstrap.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlwBAa9J2Yqa_5HKnpkT_71XvmQmtIgAM&callback=initMap"
  type="text/javascript"></script>
    <script>
        $(document).ready( function(){
           myMap();
        });
        function myMap() {    
            var mapOptions = {
                center: new google.maps.LatLng(19.005385, -98.204035),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.HYBRID
            }
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        }
    </script>
</body>
</html>