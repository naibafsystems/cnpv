<?php // var_dump ($hogar);?>
<br/><br/>
<div id="page1" class="row col-md-12">
		<div class="row">
			<div class="col-md-12" id="pestanas">
				<div class="tabbable" > 
					<!-- <ul class="nav nav-tabs" id="myTabs">--> 
                    <p>&nbsp;</p>
					<ul class="nav nav-pills" id="myTabs">
					   <li id="pes1" class="active"><a href="#tab1" id="modulo1" data-toggle="tabajax">Paso 1. Creaci&oacute;n cuenta de acceso</a></li>
                      <li style="color:#BBBBBB">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-3x"></i></li>                   
					   <li id="pes2" ><a href="#tab2" id="modulo2" data-toggle="tabajax" >Paso 2. Datos de ubicaci&oacute;n</a></li>
                       <li style="color:#BBBBBB">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-3x"></i></li>
					   <li id="pes3" ><a href="#tab3" id="modulo3" data-toggle="tabajax">Paso 3. Conformaci&oacute;n del hogar</a></li>
                       <li style="color:#BBBBBB">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-3x"></i></li>
					   <li id="pes4"><a href="#tab4" id="modulo4" data-toggle="tabajax">Paso 4. Confirmaci&oacute;n</a></li>
					</ul>
                    <p>&nbsp;</p>


					 <div class="tab-content">
						<div class="tab-pane active" id="tab1">     
							<?php  $this->load->view("acceso"); ?>
						</div>
						  <div class="tab-pane" id="tab2" >
							<?php  $this->load->view("coordenadas"); ?>                          
						</div>
						 <div class="tab-pane" id="tab3">
							<?php  $this->load->view("total"); ?>  
						</div>
						<div class="tab-pane" id="tab4">
							<?php $this->load->view("finalizar");?>
						</div> 
					 </div> 
				</div>
			</div>
		</div>
</div>
	
	
