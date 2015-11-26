@extends('master')


@section('name', 'Edita Sede')

@section('content')
 <div class="container col-md-6 col-md-offset-3" ng-app="MedicamentosApp" ng-controller="MedicamentosController">
        


	<h1>Medicamentos</h1>
	<div class="row">
		<div class="col-md-4">
			<input type='text' ng-model="medicamento.nombre">
			<button class="btn btn-primary btn-md"  ng-click="addMedicamento()">Agregar</button>
			<i ng-show="loading" class="fa fa-spinner fa-spin"></i>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4">
			<table class="table table-striped">
				<tr ng-repeat='medicamento in medicamentos'>
					
					<td><% medicamento.nombre_medicamento %></td>
					<td><button class="btn btn-danger btn-xs" ng-click="deleteMedicamento($index)">  <span class="glyphicon glyphicon-trash" ></span></button></td>
				</tr>
			</table>
		</div>
	</div>



</div>
@endsection