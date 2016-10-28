<!DOCTYPE html>
<html lang="en">
<head>
	<title>Identificacion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/styleRiesgo.css">
	<script lang="JavaScript" src="../../js/jQuery.js"></script>
	<script lang="JavaScript" src="../../js/jquery.validate.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<script lang="JavaScript" src="../../js/jsRiesgo.js"></script>
</head>
<body>
	<?php
		include ("../../Controladora/ctrDatosSevri.php");
		$control = new ctrDatosSevri;	
		$lista =$control->obtenerCategorias();	
	?>
	<div class="general">
		<div class="formulario">
			<form id="IIdentificarRiesgo" method="Post" role="form">
				<div class="contenedor">
					<div class="inputs form-group">
						<label class="control-label">Nombre</label>
						<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre del riesgo">
					</div>
					<div class="inputs form-group">
						<label  class="control-label">Descripcion</label>
						<textarea class="form-control" rows="5" id="descripcion" name="descripcion" placeholder="Descripcion del riesgo"></textarea>
					</div>
					<div class="inputs form-group">
						<label  class="control-label">Estado</label>
						<select class="form-control" id="estado" name="estado"> 
							<option value="1">Activo</option>
							<option value="0">Inactivo</option>
						</select>
					</div>
					<div class="inputs form-group">
						<label class="control-label">Monto Economico</label>
						<input class="form-control" type="text" name="monto" id="monto" placeholder="Monto economico">
					</div>
					<div class="inputs form-group">
						<label  class="control-label">Categoria</label>
						<select class="form-control" id="categoria" name="categoria"> 
							<?php 
								foreach ($lista as $categoria){
									echo "<option value=".$categoria->getIdCategoria()." >".$categoria->getNombreCategoria()."</option>";
								}
							?>
						</select>
					</div>
					<div class="inputs form-group">
						<label  class="control-label">Causa</label>
						<textarea class="form-control" rows="5" id="causa" name="causa" placeholder="Causa del riesgo"></textarea>
					</div>
					<input type="submit" value="Crear" class="btn btn-default" onclick="insertarRiesgo()">
				</div>
			</form>
		</div>
	</div>
</body>
</html>