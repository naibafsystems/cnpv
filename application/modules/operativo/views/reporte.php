<link href="<?php echo base_url("/css/admin.css"); ?>" rel="stylesheet"/>
<script type="text/javascript"	src="<?php echo base_url("js/operativo/reporte.js"); ?>"></script>
<div class="container">
	<div class="page-header">
		<h3>Registro cuestionarios electr&oacute;nicos por &aacute;rea operativa</h3>
	</div>
</div>
<div class="panel panel-danger">
	<div class="panel-heading">
		<h4 class="list-group-item-heading">Modulo identificaci&oacute;n centro operativo</h4>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
    	<div class="col-md-1 form-group encabezadoDetalleUsuario">
    		<label>C&oacute;digo</label>
    	</div>
		<div class="col-md-1 form-group encabezadoDetalleUsuario">
    		<label>Nombre</label>
    	</div>
    	<div class="col-md-1"></div>
		<div class="col-md-1 form-group encabezadoDetalleUsuario">
    		<label>C&oacute;digo</label>
    	</div>
    	<div class="col-md-1"></div>
    	<div class="col-md-1 form-group encabezadoDetalleUsuario">
    		<label>C&oacute;digo</label>
    	</div>
    	<div class="col-md-1"></div>
    	<div class="col-md-1 form-group encabezadoDetalleUsuario">
    		<label>C&oacute;digo</label>
    	</div>
	</div>
	<div class="row">
		<div class="col-md-1 form-group">
			<label>Departamento</label>
		</div>
		<div class="col-md-1 form-group">
    		<label class="label-control">XXX</label>    		
    	</div>
    	<div class="col-md-1 form-group">
			<label>Nombre</label>
		</div>
		<div class="col-md-1 form-group">
			<label>Clase</label>
		</div>
		<div class="col-md-1 form-group">
    		<label class="label-control">xxxx</label>    		
    	</div>
    	<div class="col-md-1 form-group">
			<label>Centro Poblado</label>
		</div>
		<div class="col-md-1 form-group">
    		<label class="label-control">xxxx</label>    		
    	</div>
    	<div class="col-md-1 form-group">
			<label>&Aacute;rea operativa</label>
		</div>
		<div class="col-md-1 form-group">
    		<label class="label-control">xxxx</label>    		
    	</div>
	</div>
	<div class="row">
		<div class="col-md-1 form-group">
			<label>Municipio</label>
		</div>
		<div class="col-md-1 form-group">
    		<label class="label-control">XXX</label>    		
    	</div>
    	<div class="col-md-1 form-group">
			<label>Nombre</label>
		</div>
    	<div class="col-md-1 form-group">
			<label>Localidad y Comuna</label>
		</div>
		<div class="col-md-1 form-group">
    		<label class="label-control">xxxx</label>    		
    	</div>
    	<div class="col-md-1 form-group">
			<label>Coordinaci&oacute;n Operativa</label>
		</div>
		<div class="col-md-3 form-group">
    		<label class="label-control">xxxx</label>    		
    	</div>
	</div>
	<div class="row">
    	<div class="form-group encabezadoDetalleUsuario" style="text-align: center;">
    		<label>Reporte e-censo</label>
    	</div>
    </div>
    <div class="row">
		<div id="divReporte">
			<div class="centergrid">
				<table id="listReporte" style="font-size: 12px;"></table>
				<div id="pagerReporte"></div>
			</div>
		</div>
	</div>
    <div class="row">
    	<div class="form-group encabezadoDetalleUsuario">
    		<label>DILIGENCIE LA NOVEDAD DE LA SIGUIENTE MANERA</label>
    	</div>
    </div>
    <div class="row">
    	<div>
	    	Encontró el hogar de la persona señalada en la lista y no existen hogares adicionales en esa misma vivienda : Marque <label style="font-weight: bold;">1</label><br />
	    	No encontró la dirección señalada en el área operativa asignada: Marque <label style="font-weight: bold;">2</label><br />
	    	Encontró el hogar de la persona señalada en la lista y existen hogares adicionales en esa misma vivienda: Marque <label style="font-weight: bold;">3</label><br />
	    	Encontró la dirección pero el hogar no coincide con el registro.Marque <label style="font-weight: bold;">4</label><br />
	    	Encontró hogares que informan haber realizado el censo electrónico pero que no se encuentran en su lista de Área Operativa, registre todos los datos del jefe de hogar con el fin de verificar si este hogar se encuentra registrado en otra área operativa.  Marque <label style="font-weight: bold;">5</label>    		
    	</div>
    </div>
</div>