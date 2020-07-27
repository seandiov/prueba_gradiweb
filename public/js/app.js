var app = angular.module("GradiwebApp", ["ngRoute"], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.config(function ($routeProvider) {
    $routeProvider.when("/", {
        templateUrl: '/vehiculo/inicio',
        controller: 'InicioController'
    }).when("/crear-propietario", {
        templateUrl: '/vehiculo/nuevo',
        controller: 'VehiculoController'
    }).otherwise({
        redirectTo: '/'
    });
});



/* Controlador para listar vehiculos */

app.controller('InicioController', function ($scope, $http, $location) {
    $scope.vehiculoslist = [];
    $http({
        method: 'GET',
        url: '/vehiculo/contarVehiculos'
    }).then(function ( { data }) {
        // hacer algo con el array de datos
        $scope.vehiculoslist = data;
    }, function (response) { // callback de error
        console.error(response.statusText);
    });
});
app.controller('VehiculoController', function ($scope, $http, $location) {
    /* Variables a inicializar */
    $scope.identificaciones = [];
    $scope.marcas = [];
    $scope.modelos = [];
    $scope.vehiculos = [];
    $scope.error = null;
    /* Objetos modelo para enviar al backend */
    $scope.propietario = {};
    $scope.vehiculo = {};
    /* Acciones de carga sobre la UI */
    $http({
        method: 'GET',
        url: '/tipoIdentificacion/listar'
    }).then(function ( { data }) {
        // hacer algo con el array de datos
        $scope.identificaciones = data;
    }, function (response) { // callback de error
        console.error(response.statusText);
    });

    $http({
        method: 'GET',
        url: '/marca/listar'
    }).then(function ( { data }) {
        // hacer algo con el array de datos
        $scope.marcas = data;
    }, function (response) { // callback de error
        console.error(response.statusText);
    });

    /* Funciones de eventos */
    $scope.cargarModelos = function () {
        $http({
            method: 'GET',
            url: '/modelo/filtrarPorMarca/' + $scope.vehiculo.marca_id
        }).then(function ( { data }) {
            // hacer algo con el array de datos
            $scope.modelos = data;
        }, function (response) { // callback de error
            console.error(response.statusText);
        });
    };


    $scope.guardarVehiculo = function () {
        if (jQuery('#formVehiculo').parsley().validate()) {
            $http({
                method: 'POST',
                url: '/vehiculo/crear',
                data: {
                    propietario: $scope.propietario,
                    vehiculo: $scope.vehiculo
                }
            }).then(function ( { data }) {
                $location.path("/");
            }, function (response) { // callback de error
                $scope.error = response.data.message;
            });
        }
    };

});