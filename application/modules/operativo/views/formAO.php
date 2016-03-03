<html>
<head>
	<title>certificado</title>
</head>
<body bgcolor="#ffffff">
	<table style="border-collapse: collapse; text-align: center; font-family:Helvetica, Arial, sans-serif;;">
		<tr>
			<td>
				<table border="0" style="border-collapse: collapse;" width="720">
					<tr>
						<td width="280"><?=$logotipo?></td>
						<td style="font-size: large; font-weight: bold; text-align: center;">Registro cuestionarios el&eacute;ctronicos por Area Operativa</td>
						<td width="80" style="color: #E02285; text-align: center;">
							<label style="font-size: large; font-weight: bold;">CNPV</label><br>e-censo
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" style="border-collapse: collapse;" width="720">
					<tr>
						<td colspan="9"  style="background-color: #BFBFBF; border: 1px black solid; text-align: center; font-weight: bold;">
							Modulo identificaci&oacute;n centro operativo</td>
					</tr>
					<tr>
						<td></td>
						<td>C&oacute;digo</td>
						<td>Nombre</td>
						<td></td>
						<td>C&oacute;digo</td>
						<td></td>
						<td>C&oacute;digo</td>
						<td></td>
						<td>C&oacute;digo</td>
					</tr>
					<tr>
						<td>Departamento</td>
						<td style="border: 1px black solid;"></td>
						<td style="border: 1px black solid;"></td>
						<td>Clase</td>
						<td style="border: 1px black solid;"></td>
						<td>Centro poblado</td>
						<td style="border: 1px black solid;"></td>
						<td>&Aacute;rea operativa</td>
						<td style="border: 1px black solid;"></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" style="border-collapse: collapse;" width="720">
					<tr>
						<td colspan="11" style="background-color: #BFBFBF; border: 1px black solid; text-align: center; font-weight: bold;">Reporte e-censo</td>
					</tr>
				</table>
			</td>
		</tr>
		<?php if(isset($arrUsuarios) && count($arrUsuarios) > 0) {
			echo '<tr><td><table border="0" style="border-collapse: collapse;" width="720">
					<tr>
						<td colspan="3" style="border: 1px black solid; text-align: center; font-size: 11px; font-weight: bold;">Ubicaci&oacute;n</td>
						<td colspan="5" style="border: 1px black solid; text-align: center; font-size: 11px; font-weight: bold;">Identificaci&oacute;n persona que diligenci&oacute;</td>
						<td colspan="2" style="border: 1px black solid; text-align: center; font-size: 11px; font-weight: bold;">Contacto</td>
						<td rowspan="2" style="border: 1px black solid; text-align: center; font-size: 11px; font-weight: bold;">Nov.</td>
					</tr>
					<tr>
						<td style="border: 1px black solid; text-align: center; font-size: 11px; font-weight: bold;" width="15">id_Bd ecenso</td>
						<td style="border: 1px black solid; text-align: center; font-size: 11px; font-weight: bold;" width="10">Uni. C</td>
						<td style="border: 1px black solid; text-align: center; font-size: 11px; font-weight: bold;" width="20">Direcci&oacute;n</td>
						<td style="border: 1px black solid; text-align: center; font-size: 11px; font-weight: bold;" width="10">C&eacute;dula</td>
						<td style="border: 1px black solid; text-align: center; font-size: 11px; font-weight: bold;" width="20">Primer<br>nombre</td>
						<td style="border: 1px black solid; text-align: center; font-size: 11px; font-weight: bold;" width="20">Segundo<br>nombre</td>
						<td style="border: 1px black solid; text-align: center; font-size: 11px; font-weight: bold;" width="20">Primer<br>apellido</td>
						<td style="border: 1px black solid; text-align: center; font-size: 11px; font-weight: bold;" width="20">Segundo<br>apellido</td>
						<td style="border: 1px black solid; text-align: center; font-size: 11px; font-weight: bold;" width="20">Tel&eacute;fono<br>fijo</td>
						<td style="border: 1px black solid; text-align: center; font-size: 11px; font-weight: bold;" width="20">Tel&eacute;fono<br>celular</td>
					</tr>';
			foreach ($arrUsuarios AS $indUsua => $valUsua) {
				echo '<tr><td style="border: 1px black solid; font-size: 8px;" width="15">' . $valUsua["codiEncuesta"] . '</td>
					<td style="border: 1px black solid; font-size: 8px;" width="10">querty</td>
					<td style="border: 1px black solid; font-size: 8px;" width="20">' . $valUsua["txtDireccion"] . '</td>
					<td style="border: 1px black solid; font-size: 8px;" width="10">' . $valUsua["txtNroId"] . '</td>
					<td style="border: 1px black solid; font-size: 8px;" width="20">' . $valUsua["txtNombre1"] . '</td>
					<td style="border: 1px black solid; font-size: 8px;" width="20">' . $valUsua["txtNombre2"] . '</td>
					<td style="border: 1px black solid; font-size: 8px;" width="20">' . $valUsua["txtApellido1"] . '</td>
					<td style="border: 1px black solid; font-size: 8px;" width="20">' . $valUsua["txtApellido2"] . '</td>
					<td style="border: 1px black solid; font-size: 8px;" width="20">&nbsp;</td>
					<td style="border: 1px black solid; font-size: 8px;" width="20">&nbsp;</td>
					<td style="border: 1px black solid; font-size: 8px;" width="20">&nbsp;</td></tr>';
			}
			echo '</table></td></tr>';
		}?>
		<tr>
			<td>
				<table border="0" style="border-collapse: collapse;" width="720">
					<tr>
						<td style="background-color: #BFBFBF; border: 1px black solid; text-align: center; font-size: 12px; font-weight: bold;">
							DILIGENCIE LA NOVEDAD (Nov.) DE LA SIGUIENTE MANERA</td>
					</tr>
					<tr>
						<td style="border: 1px black solid; font-size: 10px;">
						Encontr&oacute; el hogar de la persona se&ntilde;alada en la lista y no existen hogares adicionales en esa misma vivienda: Marque <b>1</b><br>
						No encontr&oacute; la direcci&oacute;n se&ntilde;alada en el &aacute;rea operativa asignada: Marque <b>2</b><br>
						Encontr&oacute; el hogar de la persona se&ntilde;alada en la lista y existen hogares adicionales en esa misma vivienda: Marque <b>3</b><br>
						Encontr&oacute; la direcci&oacute;n pero el hogar no coincide con el registro: Marque <b>4</b><br>
						Encontr&oacute; hogares que informan haber realizado el censo electr&oacute;nico pero que no se encuentran en su lista de &Aacute;rea Operativa, 
						registre todos los datos del jefe de hogar con el fin de verificar si este hogar se encuentra registrado en otra área operativa. Marque <b>5</b></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td style="text-align: right;"><?=$pagina?></td>
		</tr>
	</table>
</body>