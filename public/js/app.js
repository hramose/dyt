var app = angular.module('MedicamentosApp', ['ngRoute'], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});
 
app.controller('MedicamentosController', function($scope, $http) {
 
	$scope.medicamentos = [];
	$scope.loading = false;
 
	$scope.init = function() {
		$scope.loading = true;
		$http.get('/api/medicamentos').success(function(data, status, headers, config) {
			$scope.medicamentos = data;
				$scope.loading = false;
 
		});
	}
 
	$scope.addMedicamento = function() {
		

		$scope.loading = true;
        
		$http.post('/api/medicamentos', {
			nombre_medicamento: $scope.medicamento.nombre
		}).success(function(data, status, headers, config) {
			$scope.medicamentos.push(data);
			$scope.medicamento = '';
				$scope.loading = false;
 
		});
	};
 
	$scope.updateMedicamento = function(medicamento) {
		$scope.loading = true;
 
		$http.put('/api/medicamentos/' + medicamento.id, {
			title: medicamento.title
			
		}).success(function(data, status, headers, config) {
			medicamento = data;
				$scope.loading = false;
 
		});;
	};
 
	$scope.deleteMedicamento = function(index) {
		$scope.loading = true;
 
		var medicamento = $scope.medicamentos[index];
 
		$http.delete('/api/medicamentos/' + medicamento.id)
			.success(function() {
				$scope.medicamentos.splice(index, 1);
					$scope.loading = false;
 
			});;
	};
 
 
	$scope.init();
 
});