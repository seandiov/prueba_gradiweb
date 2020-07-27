<!DOCTYPE html>
<html>
    <head>
        <!-- META -->
        <title>Prueba Gradiweb</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="" />
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
        <link rel="stylesheet" type="text/css" href="style.css" media="all" /> 
        <link rel="stylesheet" type="text/css" href="parsleyjs/src/parsley.css" media="all" /> 
        <!-- Javascript -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>
            $.noConflict();
        </script>
        <script type="text/javascript" src="js/kickstart.js"></script>
        <script type="text/javascript" src="js/angular/angular.min.js"></script>
        <script type="text/javascript" src="js/angular-route/angular-route.min.js"></script>
        <script type="text/javascript" src="parsleyjs/dist/parsley.min.js"></script>
        <script type="text/javascript" src="parsleyjs/src/i18n/es.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
    </head>
    <body>
        <ng-view></ng-view>
        <div class="p-5" ng-view="">
            <h4>Prueba Gradiweb</h4>
            <div class="col_2">
                <ul class="menu vertical">
                    <li class="current"><a href="">Crear vehiculo</a></li>
                    <li><a href="javascript:void(0)">Logica</a>
                        <ul>
                            <li><a href="">Demo</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col_10" ng-app="GradiwebApp">
                <ng-view></ng-view>
            </div>
        </div>
    </body>
</html>