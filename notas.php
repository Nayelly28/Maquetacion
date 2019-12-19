<?php
/*IMPIDE QUE SE REPITA EL CODIGO*/
require_once("./css/component.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>SISTEMA DE NOTAS</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<link rel="stylesheet" href="./css/styleN.css">


</head>
<body>
	<main>
		<div class="container text-center">
			<h1 class="py-4 bg-dark text-light rounded"><i class="fab fa-battle-net"></i>NOTAS</h1>

			<div class="d-flex justify-content-center">
				<form action="" method="post" class="w-50">
					<div class="pt-2">
					
						  <div class="input-group mb-2">
					        <div class="input-group-prepend">
					          <div class="input-group-text"><i class="fas fa-portrait"></i>
							  </div>
					        </div>
					        <input type="text" autocomplete="off" placeholder="ingresa ID" class="form-control" id="inlineFormInputGroup">
					      </div>
					</div>
					
					<div class="pt-2">
						<?php inputElement("<i class='fas fa-user-check'></i>","Nota 1","n1","");?>	
					</div>
					
					<div class="row pt-2">
						<div class="col">
							<?php inputElement("<i class='fas fa-user-slash'></i>","Nota 2","n2","");?>
						</div>
						<div class="col">
							<?php inputElement("<i class='far fa-registered'></i>","Registro","register","");?>
						</div>
					</div>
					

					<div class="d-flex justify-content-center">
						
						<?php buttonElement("btn-Create","btn btn-success","<i class='fas fa-plus-square'></i>","guardar","dat-toogle='tooltip' data-placement='bottom' title='Create'");?>
						
						<?php buttonElement("btn-Read","btn btn-primary","<i class='fas fa-sync-alt'></i>","view","dat-toogle='tooltip' data-placement='bottom' title='Read'");?>
						
						<?php buttonElement("btn-Update","btn btn-light border","<i class='fas fa-pen-square'></i>","actualizar","dat-toogle='tooltip' data-placement='bottom' title='Update'");?>
						
						<?php buttonElement("btn-Delete","btn btn-danger","<i class='fas fa-trash-alt'></i>","eliminar","dat-toogle='tooltip' data-placement='bottom' title='Delete'");?>
					</div>
				</form>
			</div>		
			
			<div class="d-flex table-data">
				<table class="table table-striped">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Apellidos</th>
							<th>Nota 1</th>
							<th>Nota 2</th>
							<th>Nota 3</th>
							<th>EDITAR</th>
						</tr>
					</thead>
					
					<tbody id="tbody">
						<tr>
							<td>1</td>
							<td>Pablo Jose</td>
							<td>Martinez Chavez</td>
							<td>20</td>
							<td>15</td>
							<td>18</td>
							<span><td><i class="fas fa-edit btnedit"></i></td></span>
							
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</main>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


