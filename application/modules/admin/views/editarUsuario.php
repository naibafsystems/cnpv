 <link href="<?php echo base_url("/css/admin.css"); ?>" rel="stylesheet"/>
 <script type="text/javascript" src="<?php echo base_url("js/admin/editar_usuario.js"); ?>"> </script>
<div class="container">
	<div class="page-header">
		<h3>Editar Usuario: <?php echo $usuario["usuario"]; ?></h3>
	</div>
</div>

<div class="container">
<form id="formEditUsuario"	name="formEditUsuario">
	<div class="row">
		<div class="col-md-4 form-group encabezadoDetalleUsuario " <?php // colores bootstrap: bg-primary bg-success bg-info bg-warning bg-danger ?>
    		<label>Id. Usuario:</label>    
    	</div>
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["id_usuarios"]; ?></label>    		
    	</div>
		
	</div>	
	<div class="row">
		<div class="col-md-4 form-group encabezadoDetalleUsuario" 
    		<label>Nro. Formulario:</label>    
    	</div>
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["nro_encuesta_form"]; ?></label> 
			<input type="hidden" id="hd_formul" name="hd_formul" value="<?php echo $usuario["nro_encuesta_form"]; ?>" /> 			
    	</div>
	</div>	
	<div class="row">
		<div class="col-md-4 form-group encabezadoDetalleUsuario" 
    		<label>Estado Formulario:</label>    
    	</div>
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["estado_form"]; ?></label> 			
    	</div>
	</div>	
		
	
	<div class="row">
    	<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Tipo Documento:</label>
    	</div>
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["tipoDoc"]; ?></label>    		
    	</div>
		
		
	</div>
	<div class="row">
		
		<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Nro. Documento Identificaci&oacute;n:</label>
    	</div>
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["cedula"]; ?></label>    		
    	</div>
	</div>
	
	
	<div class="row">
    	<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Primer Nombre:</label>
    	</div>
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["primer_nombre"]; ?></label>    		
    	</div>
		
	</div>
	<div class="row">
		<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Segundo Nombre:</label>
    	</div>
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["segundo_nombre"]; ?></label>    		
    	</div>
	</div>	
	<div class="row">	
		<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Primer Apellido:</label>
    	</div>
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["primer_apellido"]; ?></label>    		
    	</div>
	</div>
	
	<div class="row">
    	<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Segundo Apellido:</label>
    	</div>
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["segundo_apellido"]; ?></label>    		
    	</div>
		
	</div>
	<div class="row">	
		
		<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Estado del Usuario:</label>
    	</div>
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["desc_estado"]; ?></label>    		
    	</div>
		
	</div>
	<div class="row">
    	<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Usuario (email): *</label>
    	</div>
		<div class="col-md-4 form-group ">
    	<input type="text" class="form-control"	value="<?php echo $usuario["usuario"]; ?>" id="txtUsuario" name="txtUsuario" />
		
    	</div>
	</div>	
	<? /*<div class="row">	
		
		<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Estado del Usuario: *</label>
    	</div>
		<div class="col-md-4 form-group ">
    		
			<select id="selEstado" name="selEstado"	class="form-control">
				<option value="-">...</option>
				<option value="1" <?php echo ($usuario["estado"]==1)?"selected":"";?> >Activo</option>
				<option value="2" <?php echo ($usuario["estado"]==2)?"selected":"";?> >Inactivo</option>
			</select>
    	</div>
	</div> */?>
	<div class="row">
		<div class="col-md-4 form-group encabezadoClave">
    		<label>Contrase&ntilde;a (Diligencie solo si va a cambiarla)</label>
    	</div>
		<div class="col-md-4 form-group ">
    		<input type="password" class="form-control"	 id="txtClave" name="txtClave" />   		
    	</div>
		
	</div>
	<div class="row">
		<div class="col-md-4 form-group encabezadoClave">
    		<label>Confirme Contrase&ntilde;a (Diligencie solo si va a cambiarla)</label>
    	</div>
		<div class="col-md-4 form-group ">
    		<input type="password" class="form-control"	 id="txtClave2" name="txtClave2" />   		
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
<!--		<div id="msj_email" style="display:none">			
			<div class="alert alert-danger"><span class="glyphicon glyphicon-remove">&nbsp;</span>El correo electr&oacute;nico ya existe</div>			
		</div>-->
		<!--
		<div id="msj" style="display:inline">		
		<div class="alert alert-danger"  style="display:none" id="msj_email">Error al guardar. Intente nuevamente o actualice la p&aacute;gina</div>			
		</div>-->
		<br>
		<input type="button" class="btn btn-primary" value="Guardar" name="btnEditarUsuario" id="btnEditarUsuario">
		
</div>
</div>
	
</form>	
</div>

	