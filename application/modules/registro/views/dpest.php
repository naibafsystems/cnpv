<?php  /*var_dump ($datosp);
echo "<br><br>";
var_dump ($pestania);*/
?>
<script type="text/javascript" src="<?php  echo base_url("js/registro/registro.js"); ?>"></script>
<div class="page-header">
	<h1>e-censo / Inscripci&oacute;n</h1>
</div>

<div id="page1" class="row col-md-12">
		<div class="row">
			<div class="col-md-12" id="pestanas">
				<div class="tabbable" > 
					<ul class="nav nav-pills" id="myTabs">
					   <li id="pes1" class="active"><a href="#tab1" id="modulo1" data-toggle="tabajax">Paso 1. Creaci&oacute;n cuenta de acceso</a></li>                   
					   <li id="pes2" ><a href="#tab2" id="modulo2" data-toggle="tabajax" >Paso 2. Datos de ubicaci&oacute;n</a></li>
					   <li id="pes3" ><a href="#tab3" id="modulo3" data-toggle="tabajax">Paso 3. Conformaci&oacute;n del hogar</a></li>
					   <li id="pes4"><a href="#tab4" id="modulo4" data-toggle="tabajax">Paso 4. Confirmaci&oacute;n</a></li>
					</ul>

					 <div class="tab-content">
						<div class="tab-pane active" id="tab1">     
							<?php  $this->load->view("dacceso"); ?>
						</div>
					 	<div class="tab-pane" id="tab2" >
							<?php   $this->load->view("dcoordenadas"); ?>                          
						</div>
						<div class="tab-pane" id="tab3">
							<?php $this->load->view("dtotal"); ?>  
						</div>
						   <div class="tab-pane" id="tab4">
							<?php $this->load->view("dfinalizar");?>
						</div> 
					 </div> 
				</div>
			</div>
		</div>
		<input type="hidden" id="dpestania" name="dpestania" value="<?php echo $pestania;?>"  />
</div>	
	
