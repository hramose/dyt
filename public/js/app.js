var app = angular.module('CamposBaseApp', ['ngRoute'], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});
 
app.controller('CamposBaseController', function($scope, $http) {
 	
	$scope.camposbase = [];
	$scope.loading = false;
 
	$scope.init = function() {
		$scope.loading = true;
		$http.get('/api/camposbase').success(function(data, status, headers, config) {
			$scope.campobase = data;
				$scope.loading = false;
 
		});
	}
 
	$scope.addCampoBase = function() {
		

		$scope.loading = true;
        
		$http.post('/api/camposbase', {
			nombre: $scope.camposbase.nombre,
			descripcion: $scope.camposbase.descripcion,
			tipo: $scope.camposbase.tipo,
			id_unidad: $scope.camposbase.id_unidad,
			ref_min: $scope.camposbase.ref_min,
			ref_max: $scope.camposbase.ref_max

		}).success(function(data, status, headers, config) {
			$scope.camposbase.push(data);
			$scope.camposbase = '';
			$scope.loading = false;
 
		});
	};


	
 
 
	$scope.init();
 
});