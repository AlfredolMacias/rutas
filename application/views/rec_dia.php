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
                    <button type="button" class="btn btn-light" style="width:200%;">Unidades</button>
                    <button type="button" class="btn btn-light" style="width:200%;">Recorrido</button>
                </div>
            </div>
            <div class="col-sm-10" id="contenido">
                <div class="col-md-12" style="margin-top:1.5em;">
                    <h2 align="center"><button class="btn-link"><</button>Mes<button class="btn-link">></button></h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Día</th>
                                <th scope="col">Km Recorridos</th>
                                <th scope="col">Km Productivos</th>
                                <th scope="col">Km NO Productivos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>100</td>
                                <td>90</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>400</td>
                                <td>250</td>
                                <td>150</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>800</td>
                                <td>600</td>
                                <td>200</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>100</td>
                                <td>90</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>400</td>
                                <td>250</td>
                                <td>150</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>800</td>
                                <td>600</td>
                                <td>200</td>
                            </tr>
                        </tbody>

                    
                    </table>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center" id="footer">
        <p>Copyrights 2018</p>
    </footer>
</body>
</html>