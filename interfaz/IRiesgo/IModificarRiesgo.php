<!DOCTYPE html>
<html lang="en">
<head>
	<title>Modificar Riesgo</title>
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
		$idRiesgo = $_GET['idRiesgo'];
		include ("../../data/dtRiesgo.php");
		//include ("../../dominio/dRiesgo.php");
		$control = new dtRiesgo;
		$lista = $control->getRiesgo($idRiesgo);

		include ("../../controladora/ctrDatosSevri.php");
		$control1 = new ctrDatosSevri;	
		$listaC =$control1->obtenerCategorias();	 
	?>
	<div class="general">
		<div class="formulario">
			<form id="IModificarRiesgo" method="Post" role="form">
				<div class="contenedor">
				<?php
					foreach ($lista as $riesgo){
						echo "<div class=\"inputs form-group\">";
							echo "<label class=\"control-label\">Nombre del riesgo</label>";
							echo "<input class=\"form-control\" value=\"".$riesgo->getNombre()."\" type=\"text\" name=\"nombre\" id=\"nombre\" placeholder=\"Nombre del riesgo\">";
						echo "</div>";
						echo "<div class=\"inputs form-group\">";
							echo "<label class=\"control-label\">Descripcion del riesgo</label>";
							echo "<textarea class=\"form-control\" value=\"".$riesgo->getDescripcion()."\" rows=\"5\" id=\"descripcion\" name=\"descripcion\" placeholder=\"Descripcion del riesgo\">".$riesgo->getDescripcion()."</textarea>";
						echo "</div>";
						echo "<div class=\"inputs form-group\">";
							echo "<label class=\"control-label\">Estado del riesgo</label>";
							echo "<select class=\"form-control\" id=\"estado\" name=\"estado\"> 
									<option value=\"1\">Activo</option>
									<option value=\"0\">Inactivo</option>
								  </select>";
						echo "</div>";
						echo "<div class=\"inputs form-group\">";
							echo "<label class=\"control-label\">Monto Economico</label>";
							echo "<input class=\"form-control\" value=\"".$riesgo->getMontoEconomico()."\" type=\"text\" name=\"monto\" id=\"monto\" placeholder=\"Monto economico\">";
						echo "</div>";
						echo "<div class=\"inputs form-group\">";
							echo "<label class=\"control-label\">Categoria</label>";
							echo "<select class=\"form-control\" id=\"categoria\" name=\"categoria\">";
								foreach ($listaC as $categoria){
									echo "<option value=".$categoria->getIdCategoria()." >".$categoria->getNombreCategoria()."</option>";
								}
							echo "</select>";
						echo "</div>";
						echo "<div class=\"inputs form-group\">";
							echo "<label class=\"control-label\">Causa</label>";
							echo "<textarea class=\"form-control\" value=\"".$riesgo->getCausa()."\" rows=\"5\" id=\"causa\" name=\"causa\" placeholder=\"Causa del riesgo\">".$riesgo->getCausa()."</textarea>";
						echo "</div>";
						echo "<input type=\"hidden\" id=\"id\" value=\"".$riesgo->getId()."\">";
						echo "<input type=\"hidden\" id=\"idDepartamento\" value=\"".$riesgo->getIdDepartamento()."\">";
						echo "<input type=\"submit\" value=\"Modificar\" class=\"btn btn-default\" onclick=\"modificarRiesgo()\">";
					}
				?>	
			</form>
		</div>
	</div>
</body>
</html>