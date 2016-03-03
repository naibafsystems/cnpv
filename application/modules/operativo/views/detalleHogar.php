 <link href="<?php echo base_url("/css/admin.css"); ?>" rel="stylesheet"/>
<div class="container">
	<div class="page-header">
		<h3>Nro. Formulario Hogar: <?php echo $usuario["nro_encuesta_form"]; ?></h3>
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
	<?php 	/*
		<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Contrase&ntilde;a:</label>
    	</div> 
	*/?>	
		<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Estado del Usuario:</label>
    	</div>
	</div>
	<div class="row">
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["usuario"]; ?></label>    		
    	</div>
	<?php 	/*
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["clave"]; ?></label>    		
    	</div>
	*/?>	
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["desc_estado"]; ?></label>    		
    	</div>
	</div>	
	
	<div class="row">
    	<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Nro. Formulario:</label>
    	</div>

		<div class="col-md-4 form-group encabezadoDetalleUsuario">
    		<label>Estado Formulario:</label>
    	</div>
	</div>
	<div class="row">
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["nro_encuesta_form"]; ?></label>    		
    	</div>
		
		<div class="col-md-4 form-group ">
    		<label class="label-control"><?php echo $usuario["estado_form"]; ?></label>    		
    	</div>
	</div>	
	
	
	
</div>

	<h3> Personas del Hogar </h3>
	<div class="row">
	<div class="col-md-12 form-group" >
	<table width="100%" class="table table-striped table-bordered table-condensed" style="font-size:11px;">
	<thead>
	<tr class="encabezadoDetalleUsuario">
		<th>&nbsp;</th>
		<th>Tipo Doc.</th>
		<th>N&uacute;mero Documento</th>
		<th>Primer Nombre</th>
		<th>Segundo Nombre</th>
		<th>Primer Apellido</th>
		<th>Segundo Apellido</th>
		<th>A&ntilde;os Cumplidos</th>
		<th>Sexo</th>
		
	</tr>
	</thead>
	<tbody>
	<?php for ($i=0; $i<count($gridPersonas); $i++){ ?>
	<tr>
		<td><?php echo $i+1; ?></td>
		<td><?php echo $gridPersonas[$i]["C4P43_TIPO_DOC_DES"]; ?></td>
		<td><?php echo $gridPersonas[$i]["C4P44_NRO_DOC"]; ?></td>
		<td><?php echo $gridPersonas[$i]["C4P42A_1ER_NOMBRE"]; ?></td>
		<td><?php echo $gridPersonas[$i]["C3R38B2_2NOMBRE"]; ?></td>
		<td><?php echo $gridPersonas[$i]["C4P42B_1ER_APELLIDO"]; ?></td>
		<td><?php echo $gridPersonas[$i]["C3R38C2_2APELLIDO"]; ?></td>
		<td><?php echo $gridPersonas[$i]["C4P47_EDAD"]; ?></td>
		<td><?php echo $gridPersonas[$i]["C4P45_SEXO_DES"]; ?></td>

	</tr>
	<?php } ?>
	</tbody>
	</table>	
	</div>
	</div>