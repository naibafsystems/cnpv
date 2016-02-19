<?php // var_dump ($hogar);?>
<br/><br/>
<div id ="texty">
<div class="container" style="text-align:center">
		<div class="col-md-9 col-md-offset-1" >
        <p>&nbsp;</p><p>&nbsp;</p>
				<span ><h2><strong>BIENVENIDO </strong></h2><h3>A LA INSCRIPCI&Oacute;N EN LA PRUEBA PILOTO <br> DEL PRIMER eCENSO DEL PA&Iacute;S</h3></span>
		</div>
	</div>
<div class="row">
	<div class="col-md-8" align="justify">
		<div class="radio">
			<label>El e censo es una de las estrategias de recolección del Censo Nacional de Población y Vivienda. Funciona mediante una aplicación web disponible para cualquier dispositivo tecnológico y facilita el diligenciamiento del censo a quienes no disponen de tiempo para la entrevista presencial en el hogar y a quienes prefieren la utilización de medios digitales.
					Te estamos invitando a  participar de una prueba piloto de autodiligenciamiento de la información de tu hogar y tu vivienda que nos ayudará a mejorar este mecanismo de recolección. Para participar debes tener a mano los números de los documentos de identidad, edad  y nombres completos de los miembros de tu hogar.
					Para esta experiencia contarás con apoyo telefónico, correo electrónico y chat durante todo el proceso, estos apoyos siempre están visibles en la parte de debajo de la pantalla. 
			</label>
		</div>
	</div>
		<div class="col-md-4" align="justify"> 
               <h4><span class="label label-info"><i class="fa fa-hand-o-right fa-1x"></i><strong>&nbsp; &nbsp;CONSULTE EL PASO A PASO DE LA INSCRIPCI&Oacute;N</strong></span></h4><a href="<?php echo site_url ("registrese/video");?>" target="_blank"><img src="images/videoTutorial.png" width="325" height="177" alt=""/></a>
		</div> 
	</div>
			</div>	
<br/>
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
	
	
