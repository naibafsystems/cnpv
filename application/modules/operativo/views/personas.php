<script type="text/javascript" src="<?php echo base_url("js/admin/personas.js"); ?>"></script>
<div class="container">
	<div class="page-header" align="center">
		<h3>B&uacute;squeda de Personas registradas en un Hogar</h3>		
	</div>
</div>
<div class="container">	
	<div class="row" style=" font-size: 12px;">
		<div class="col-md-1"></div>
		<div class="well col-md-12">
				
			<div class="row">
				
				<div class="form-group col-md-4">
					<label>N&uacute;mero de Documento de Identificaci&oacute;n:</label><br/>
	    			<input type="text" id="txtNroId" name="txtNroId" value="" class="form-control input-sm" placeholder="Num. Identificacion">
				</div>
				
				<div class="form-group col-md-4">
					<label>Primer Nombre</label><br/>
	    			<input type="text" id="txtNombre1" name="txtNombre1" value="" class="form-control input-sm" placeholder="Primer Nombre">
				</div>
				
				<div class="form-group col-md-4">
					<label>Segundo Nombre</label><br/>					
	    			<input type="text" id="txtNombre2" name="txtNombre2" value="" class="form-control input-sm" placeholder="Segundo Nombre">
					
				</div>
				
			</div>	
			<div class="row">
				
				<div class="form-group col-md-4">
					<label>Primer Apellido</label><br/>
	    			<input type="text" id="txtApellido1" name="txtApellido1" value="" class="form-control input-sm" placeholder="Primer Apellido">
				</div>
				
				<div class="form-group col-md-4">
					<label>Segundo Apellido</label><br/>					
	    			<input type="text" id="txtApellido2" name="txtApellid2" value="" class="form-control input-sm" placeholder="Segundo Apellido">
					
				</div>
			
			
			
				<div class="form-group col-md-4" style="text-align: right;" >
					<br>
					<button type="button" id="btnBuscarPersonas" name="btnBuscarPersonas" class="btn btn-sm btn-primary">Buscar</button>
				</div>
			</div>
			
		
		</div>			
		
	</div>	
	<br/>
	<div class="row" >
		<div id="resultAAdmin" class="col-md-12">
			<div class="centergrid" >
				<table id="jqGrid" style="font-size:12px;"></table>
				<div id="jqGridPager"></div>
			</div>
		</div>
	</div>
</div>