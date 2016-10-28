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
		$lista =$control->obtenerRiesgos();	
	?>
	<div class="general">
		<div class="formulario">
			<form id="IIdentificarRiesgo" method="Post" role="form">
				<div class="contenedor">
					<div class="table-responsive">
  						<table class="table table-bordered">
    						<tr>
								<th>
									<label class="control-label">Nombre</label>
								</th>
								<th>
									<label  class="control-label">Descripcion</label>
								</th>
								<th>
									<label  class="control-label">Estado</label>
								</th>
								<th>
									<label class="control-label">Monto Economico</label>
								</th>
								<th>
									<label  class="control-label">Categoria</label>
								</th>
								<th>
									<label  class="control-label">Causa</label>
								</th>
							</tr>
							<?php 
							foreach ($lista as $riesgo){
					            echo "<tr>					        
						        		<td>
											<label class=\"control-label\">".$riesgo->getNombre()."</label>
										</td>
							        	<td>
											<label class=\"control-label\">".$riesgo->getDescripcion()."</label>
										</td>
										<td>
											<label class=\"control-label\">".$riesgo->getEstaActivo()."</label>
										</td>
										<td>
											<label class=\"control-label\">".$riesgo->getMontoEconomico()."</label>
										</td>
										<td>
											<label class=\"control-label\">".$riesgo->getIdCategoria()."</label>
										</td>
										<td>
											<label class=\"control-label\">".$riesgo->getCausa()."</label>
										</td>
								    </tr>";
								}
							?>
  						</table>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>