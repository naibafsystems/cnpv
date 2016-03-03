 <link href="<?php echo base_url("/css/admin.css"); ?>" rel="stylesheet"/>
 <script type="text/javascript" src="<?php echo base_url("js/operativo/novedad.js"); ?>"> </script>
<div class="container">
	<div class="page-header">
		<h3>Nro. Formulario: <?php echo $usuario["nro_encuesta_form"]; ?></h3>
	</div>
</div>

<div class="container">

	<h3>Datos de Usuario que registra informaci&oacute;n en el sistema:</h3>
	<div class="row">
    	<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Primer Nombre:</label>
    	</div>
		<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Segundo Nombre:</label>
    	</div>
		
	</div>
	<div class="row">
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["primer_nombre"]; ?></label>    		
    	</div>
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["segundo_nombre"]; ?></label>    		
    	</div>
		
	</div>
	
	<div class="row">
		<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Primer Apellido:</label>
    	</div>
    	<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Segundo Apellido:</label>
    	</div>
		
		
	</div>
	<div class="row">
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["primer_apellido"]; ?></label>    		
    	</div>
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["segundo_apellido"]; ?></label>    		
    	</div>
				
	</div>
	<div class="row">
    	<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Tipo Documento:</label>
    	</div>
		<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Nro. Documento Identificaci&oacute;n:</label>
    	</div>
		
	</div>
	<div class="row">
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["tipoDoc"]; ?></label>    		
    	</div>
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["cedula"]; ?></label>    		
    	</div>
		
	</div>
	
	<div class="row">
    	<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Usuario:</label>
    	</div>	
		<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Estado del Usuario:</label>
    	</div>
	</div>
	<div class="row">
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["usuario"]; ?></label>    		
    	</div>
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["desc_estado"]; ?></label>    		
    	</div>
	</div>	
	
	<div class="row">
    	<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Id. Usuario:</label>
    	</div>

		<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Estado Formulario:</label>
    	</div>
	</div>
	<div class="row">
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["id_usuarios"]; ?></label>    		
    	</div>
		
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["estado_form"]; ?></label>    		
    	</div>
	</div>	



<h3>Adicionar novedad:</h3>
<form id="formulario"	name="formulario">
	<input type="hidden" id="hd_formul" name="hd_formul" value="<?php echo $usuario["nro_encuesta_form"]; ?>" /> 			
	
	<div class="row">
		<div class="col-md-4 form-group encabezadoClave">
    		<label>Tipo de novedad</label>
    	</div>
		<div class="col-md-4 form-group ">
			<select id="tipoNovedad" name="tipoNovedad">
				<option value="-">Seleccione...</option>
				<option value="0" >Novedad 0</option>
				<option value="1" >Novedad 1</option>
				<option value="2" >Novedad 2</option>
				<option value="3" >Novedad 3</option>
				<option value="4" >Novedad 4</option>
				<option value="5" >Novedad 5</option>
				<option value="6" >Novedad 6</option>
			</select>
    	</div>
		
	</div>
	<div class="row">
		<div class="col-md-4 form-group encabezadoClave">
    		<label>Descripci&oacute;n</label>
    	</div>
		<div class="col-md-6 form-group ">
    		<input type="text" class="form-control"	 id="descripcion" name="descripcion" />   		
    	</div>
		
	</div>
	
	<br>
	
	
<div class="row" align="center">
<div style="width:50%;" align="center">
		
		<div id="div_cargando" style="display:none">		
		
				<div class="progress progress-striped active">
					<div class="progress-bar" role="progressbar"
						aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
						style="width: 45%">
						<span class="sr-only">45% completado</span>
					</div>
				</div>
		</div>	
		<div id="div_guardado" style="display:none">			
			<div class="alert alert-success"> <span class="glyphicon glyphicon-ok">&nbsp;</span>Guardado correctamente</div>

		</div>	
		<div id="div_error" style="display:none">			
			<div class="alert alert-danger"><span class="glyphicon glyphicon-remove">&nbsp;</span>Error al guardar. Intente nuevamente o actualice la p&aacute;gina</div>			
		</div>	
		
		<div id="div_msj" style="display:none">			
			<div class="alert alert-danger"><span class="glyphicon glyphicon-remove">&nbsp;</span> <span id="span_msj">&nbsp;</span></div>			
		</div>

		<br>
		<input type="button" class="btn btn-primary" value="Guardar" name="btnGuardar" id="btnGuardar">
		
</div>
</div>
	
</form>	
</div>

<?php if($novedades){ ?>
	<h3> Novedades Registradas </h3>
	<div class="row">
	<div class="col-md-12 form-group" >
	<table width="100%" class="table table-striped table-bordered table-condensed" style="font-size:11px;">
	<thead>
	<tr class="encabezadoDetalleUsuario">
		<th>&nbsp;</th>
		<th>Fecha</th>
		<th>Tipo Novedad</th>
		<th>Descripci&oacute;n</th>
	</tr>
	</thead>
	<tbody>
	<?php for ($i=0; $i<count($novedades); $i++){ ?>
	<tr>
		<td><?php echo $i+1; ?></td>
		<td><?php echo $novedades[$i]["fecha"]; ?></td>
		<td><?php echo $novedades[$i]["tipo"]; ?></td>
		<td><?php echo $novedades[$i]["descripcion"]; ?></td>
	</tr>
	<?php } ?>
	</tbody>
	</table>	
	</div>
	</div>
<? } ?>