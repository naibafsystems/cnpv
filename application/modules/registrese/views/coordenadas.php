<br/>
 <div class="container">
	<div class="row">
		<div class="col-lg-10">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h4 class="list-group-item-heading">
						DATOS DE UBICACI&Oacute;N DE TU RESIDENCIA HABITUAL
					</h4>
				</div>
			</div>
		</div>			
	</div>
</div>  
<div class="container">
    <div class="row">
    	<div class="col-md-11"> 
			<form role="form" method="post" id="frmPantalla4" name="frmPantalla4" action="">
				<div class="row">
					<div class="col-md-9">
						<div class="radio">
							<label>Registra la ubicaci&oacute;n de la vivienda donde resides habitualmente, es decir la vivienda donde habitas la mayor parte del tiempo.</label>
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-md-11">
						<div class="radio">
							<label>Departamento <font color="red"><b>*</b></font><img src="<?php echo base_url("images/help.png"); ?>"  title=" Entidad territorial que goza de autonomía para la administración de los asuntos seccionales y la planificación y promoción del desarrollo económico y social dentro de su territorio en los términos establecidos por la Constitución y las leyes. Los departamentos ejercen funciones: administrativas, de coordinación, de complementariedad de la acción municipal, de intermediación entre la nación y los municipios y de prestación de los servicios que determinen la Constitución y las leyes."/></label>
							<label><select  id="Departamento" name="Departamento" required>
									<option value="-">Selecciona...</option>
									<?php for ($i=0; $i<count($departamentos); $i++){ ?> 
								   	          <option  value="<?php echo $departamentos[$i]["id"]; ?>"><?php echo $departamentos[$i]["nombre"]; ?></option>
								    <?php } ?>
								</select>
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="radio">
							<div id="alerta13" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-11" >
						<div class="radio" id="munic">
							<label>Municipio<font color="red"><b>*</b></font><img src="<?php echo base_url("images/help.png"); ?>"  title="Entidad territorial fundamental de la división político-administrativa del Estado, con autonomía política, fiscal y administrativa dentro de los límites que le señalen la Constitución y las leyes de la República.."/></label>
							<label><select id="Municipio" name="Municipio" required>
										<option value="-">Selecciona...</option>
								</select>
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="radio">
							<div id="alerta14" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<div class="radio">
							<label>Selecciona el lugar donde resides </label> 
							<br/> 
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label>  
							<label><input type="radio" id="clase" name="clase" value="1" >Cabecera municipal (lugar donde est&aacute; la alcald&iacute;a)</label>
							<br/> 
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="clase" name="clase" value="2" >Centro poblado (corregimiento municipal, inspecci&oacute;n de polic&iacute;a, caser&iacute;o)</label>
							<br/> 
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="clase" name="clase" value="3" >Rural disperso (vereda, campo, resguardo, territorio colectivo)<img src="<?php echo base_url("images/help.png"); ?>"  title="Es el área que se caracteriza por la disposición dispersa de viviendas y explotaciones agropecuarias. No cuenta con un trazado o nomenclatura de calles, carreteras, avenidas, y demás.  Dicha área hace parte del Resto municipal."/></label>
							<br/> 
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="clase" name="clase" value="4" >Territorialidad &eacute;tnica</label>
						</div>	
					</div>
				</div>
				<div class="row" id ="local">
					<div class="col-md-12">
						<div class="radio">
							<label>Nombre de la localidad o comuna <img src="<?php echo base_url("images/help.png"); ?>"  title="Es a una unidad administrativa de una ciudad media o principal del país que agrupa sectores o barrios determinados. El término localidad se emplea en las ciudades que corresponden a Distritos Especiales como Bogotá y Cartagena, para el resto de las ciudades se emplea el término comuna."/></label>
							<label><input type="text" id="txtlocalidad" name="txtlocalidad" value="" placeholder="Digita la localidad o comuna"  style=" width:200px" /></label>
						</div>	
					</div>
				</div>
				<div class="row" id ="poblado">
					<div class="col-md-12">
						<div class="radio">
							<label>Nombre del centro poblado</label>
							<label><input type="text" id="txtpoblado" name="txtpoblado" value="" placeholder="Digita el centro poblado"  style=" width:200px" /></label>
						</div>	
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<label>Direcci&oacute;n <font color="red"><b>*</b></font></label>
							<label><input type="text" id="txtdireccion" name="txtdireccion" value="<?php echo (isset($apellidos))?$apellidos:""; ?>" placeholder="Digita la direcci&oacute;n"  style=" width:200px" /></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="radio">
							<div id="alerta15" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label>Barrio / corregimiento o vereda <font color="red"><b>*</b></font> <img src="<?php echo base_url("images/help.png"); ?>"  title="Espacio geográfico en que se divide el área urbana, y donde se ubican un conjunto de manzanas"/></label>
							<label><input type="text" id="txtbarrio" name="txtbarrio" value="<?php echo (isset($apellidos))?$apellidos:""; ?>" placeholder="Digita el barrio"  style=" width:200px" /></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="radio">
							<div id="alerta16" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
				</div>
				
				<div id ="etnica">
				<div class="row"  >
					<div class="col-md-10">
						<div class="radio">
						<label><b>Territorial &eacute;tnica</b></label>
						<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="territo" name="territo" value="1" >Resguardo Ind&iacute;gena <img src="<?php echo base_url("images/help.png"); ?>"  title="Institución legal y sociopolítica de carácter especial indivisible, inalienable, imprescriptible e inembargable; está conformada por una o varias comunidades o parcialidades de ascendencia amerindia, que con un título de propiedad colectiva o comunitaria, posee un territorio y se rige para el manejo de este y de su vida interna por una organización social ajustada al fuero indígena, el cabildo o a sus pautas y tradiciones culturales."/></label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label>  
							<label><input type="radio" id="territo" name="territo" value="2" >Territorio colectivo de comunidad negra <img src="<?php echo base_url("images/help.png"); ?>"  title="Son los terrenos de ocupación histórica de comunidades negras sobre los cuales se ha reconocido el derecho a la propiedad y han sido adjudicados de manera colectiva mediante resolución del Instituto Colombiano de Reforma Agraria (INCORA) o por el Instituto Colombiano de Desarrollo Rural (INCODER), en la que habitan o realizan actividades sociales, económicas y culturales. Es un tipo de propiedad colectiva."/></label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="territo" name="territo" value="3" >Parcialidad o asentamiento Ind&iacute;gena fuera de resguardo</label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="territo" name="territo" value="4" >Territorio de comunidades negras sin titulaci&oacute;n</label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="territo" name="territo" value="5" >Territorio raizal ancestral del Archipi&eacute;lago de San Andres, Providencia y Santa Catalina <img src="<?php echo base_url("images/help.png"); ?>"  title="Corresponde al territorio sobre el que reclaman autonomía los 'raizales' que habitan los territorios insulares colombianos de San Andrés, Providencia y Santa Catalina desde 1624."/></label>
						</div>	
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<div class="radio">
							<div id="alerta21" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
				</div>
				<div class="row" id ="resguardo">
					<div class="col-md-12">
						<div class="radio">
							<label>Nombre del resguardo Ind&iacute;gena</label>
							<label><input type="text" id="txtresgu" name="txtresgu" value="" placeholder="Digita el resguardo Ind&iacute;gena"  style=" width:200px" /></label>
						</div>	
					</div>
				</div>
				<div class="row" id ="comunidadnegra">
					<div class="col-md-12">
						<div class="radio">
							<label>Nombre territorio colectibo de comunidad negra</label>
							<label><input type="text" id="txtnomcomu" name="txtnomcomu" value="" placeholder="Digita el territorio colectibo de comunidad negra"  style=" width:200px" /></label>
						</div>	
					</div>
				</div>
				<div  id="resgterri">
					<div class="row">
						<div class="col-md-10">
							<div class="radio">
								<label></label> 
								<label><input type="radio" id="resgterrit" name="resgterrit" value="1" >Comunidad</label>
								<label></label> 
								<label><input type="radio" id="resgterrit" name="resgterrit" value="2" >Vereda <img src="<?php echo base_url("images/help.png"); ?>"  title="División territorial de carácter administrativo en el área rural de los municipios, establecida mediante acuerdo municipal. Se concibe como una agrupación comunitaria de base territorial y principal espacio de sociabilidad, caracterizada por la proximidad de residencia de sus miembros, el sentido de pertenencia e identidad común y el predominio de las relaciones vecinales. "/></label>
								<label></label> 
								<label><input type="radio" id="resgterrit" name="resgterrit" value="3" >Rancheria <img src="<?php echo base_url("images/help.png"); ?>"  title="Se refiere al espacio geográfico donde convive un grupo de personas que pertenece al pueblo indígena Wayuu."/></label>
							</div>	
						</div>
					</div>
					<div class="row" id ="nombrevere">
						<div class="col-md-10">
							<div class="radio">
								<label>Nombre</label>
								<label><input type="text" id="txtnom" name="txtnom" value="" placeholder="Digita el nombre"  style=" width:200px" /></label>
							</div>	
						</div>
					</div>
				</div>
				</div>
				
				
				<div class="row">
					<div id="result" class="form-group col-md-9">
		  				&nbsp;
		  			</div>	  				
		  			<div id="result" class="form-group col-md-1">
		  				<button type="button" id="acepto2" name="acepto2" class="btn btn-danger">Guardar y siguiente</button>&nbsp;&nbsp;&nbsp;
		  				<input type="hidden" id="index" name="index" value="4"  />
		  			</div>
		  		</div>
			</form>    		
    	</div>
    </div>
</div>