<br/>
 <div class="container">
	<div class="row">
		<div class="col-lg-11">
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
			<form role="form" method="post" id="frmPantallas4" name="frmPantallas4" action="">
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
							<label><select  id="dDepartamento" name="dDepartamento" required>
									<option value="-">Selecciona...</option>
									<?php for ($i=0; $i<count($departamentos); $i++){ ?> 
								   	          <option  value="<?php echo $departamentos[$i]["id"]; ?>" <?php echo ($datosp['C1I1_DPTO']==$departamentos[$i]["id"])? "selected='selected'":'' ?>><?php echo $departamentos[$i]["nombre"]; ?></option>
								    <?php } ?>
								</select>
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="radio">
							<div id="dalerta13" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-11" >
						<div class="radio" id="dmunic">
							<label>Municipio<font color="red"><b>*</b></font><img src="<?php echo base_url("images/help.png"); ?>"  title="Entidad territorial fundamental de la división político-administrativa del Estado, con autonomía política, fiscal y administrativa dentro de los límites que le señalen la Constitución y las leyes de la República.."/></label>
							<label><select id="dMunicipio" name="dMunicipio" required>
										<option value="-">Selecciona...</option>
										<?php  for ($i=0; $i<count($mpios); $i++){ ?> 
								   	          <option  value="<?php echo $mpios[$i]["id"]; ?>" <?php echo ($datosp['C1I2_MPIO']==$mpios[$i]["id"])? "selected='selected'":'' ?>><?php echo $mpios[$i]["nombre"]; ?></option>
								   		<?php }  ?>
								</select>
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="radio">
							<div id="dalerta14" class="alert alert-warning" role="alert">
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
							<label><input type="radio" id="dclase" name="dclase" value="1" <?php echo ($datosp["CLASE"]==1)?"checked=\"checked\"":""; ?>>Cabecera municipal (lugar donde est&aacute; la alcald&iacute;a)</label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="dclase" name="dclase" value="2" <?php echo ($datosp["CLASE"]==2)?"checked=\"checked\"":""; ?>>Centro poblado (corregimiento municipal, inspecci&oacute;n de polic&iacute;a, caser&iacute;o)</label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="dclase" name="dclase" value="3" <?php echo ($datosp["CLASE"]==3)?"checked=\"checked\"":""; ?>>Rural disperso (vereda, campo, resguardo, territorio colectivo) <img src="<?php echo base_url("images/help.png"); ?>"  title="Es el área que se caracteriza por la disposición dispersa de viviendas y explotaciones agropecuarias. No cuenta con un trazado o nomenclatura de calles, carreteras, avenidas, y demás.  Dicha área hace parte del Resto municipal."/></label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="dclase" name="dclase" value="4" <?php echo ($datosp["CLASE"]==4)?"checked=\"checked\"":""; ?>>Territorialidad &eacute;tnica</label>
						</div>	
					</div>
				</div>
				<div class="row" id ="dlocal">
					<div class="col-md-12">
						<div class="radio">
							<label>Nombre de la localidad o comuna <img src="<?php echo base_url("images/help.png"); ?>"  title="Es a una unidad administrativa de una ciudad media o principal del país que agrupa sectores o barrios determinados. El término localidad se emplea en las ciudades que corresponden a Distritos Especiales como Bogotá y Cartagena, para el resto de las ciudades se emplea el término comuna."/></label>
							<label><input type="text" id="dtxtlocalidad" name="dtxtlocalidad" value="<?php echo (isset($datosp['LOCALIDAD_COMUNA']))?$datosp['LOCALIDAD_COMUNA']:""; ?>" placeholder="Digita la localidad o comuna"  style=" width:200px" /></label>
						</div>	
					</div>
				</div>
				<div class="row" id ="dpoblado">
					<div class="col-md-12">
						<div class="radio">
							<label>Nombre del centro poblado</label>
							<label><input type="text" id="dtxtpoblado" name="dtxtpoblado" value="<?php echo (isset($datosp['CENTRO_POBLADO']))?$datosp['CENTRO_POBLADO']:""; ?>" placeholder="Digita el centro poblado"  style=" width:200px" /></label>
						</div>	
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<label>Direcci&oacute;n <font color="red"><b>*</b></font></label>
							<label><input type="text" id="dtxtdireccion" name="dtxtdireccion" value="<?php echo (isset($datosp['C1IV10_DIR']))?$datosp['C1IV10_DIR']:""; ?>" placeholder="Digita la direcci&oacute;n"  style=" width:200px" /></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="radio">
							<div id="dalerta15" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label>Barrio / corregimiento o vereda <font color="red"><b>*</b></font> <img src="<?php echo base_url("images/help.png"); ?>"  title="Espacio geográfico en que se divide el área urbana, y donde se ubican un conjunto de manzanas"/></label>
							<label><input type="text" id="dtxtbarrio" name="dtxtbarrio" value="<?php echo (isset($datosp['BARRIO_CORREGI_VEREDA']))?$datosp['BARRIO_CORREGI_VEREDA']:""; ?>" placeholder="Digita el barrio"  style=" width:200px" /></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="radio">
							<div id="dalerta16" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
				</div>
				
				<div id ="detnica">
				<div class="row"  >
					<div class="col-md-10">
						<div class="radio">
						<label><b>Territorial &eacute;tnica</b></label>
						<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="dterrito" name="dterrito" value="1" <?php echo ($datosp["TERRITORIALIDAD_ETNICA"]==1)?"checked=\"checked\"":""; ?>>Resguardo ind&iacute;gena <img src="<?php echo base_url("images/help.png"); ?>"  title="Institución legal y sociopolítica de carácter especial indivisible, inalienable, imprescriptible e inembargable; está conformada por una o varias comunidades o parcialidades de ascendencia amerindia, que con un título de propiedad colectiva o comunitaria, posee un territorio y se rige para el manejo de este y de su vida interna por una organización social ajustada al fuero indígena, el cabildo o a sus pautas y tradiciones culturales."/></label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label>  
							<label><input type="radio" id="dterrito" name="dterrito" value="2" <?php echo ($datosp["TERRITORIALIDAD_ETNICA"]==2)?"checked=\"checked\"":""; ?>>Territorio colectivo de comunidad negra <img src="<?php echo base_url("images/help.png"); ?>"  title="Son los terrenos de ocupación histórica de comunidades negras sobre los cuales se ha reconocido el derecho a la propiedad y han sido adjudicados de manera colectiva mediante resolución del Instituto Colombiano de Reforma Agraria (INCORA) o por el Instituto Colombiano de Desarrollo Rural (INCODER), en la que habitan o realizan actividades sociales, económicas y culturales. Es un tipo de propiedad colectiva."/></label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="dterrito" name="dterrito" value="3" <?php echo ($datosp["TERRITORIALIDAD_ETNICA"]==3)?"checked=\"checked\"":""; ?>>Parcialidad o asentamiento ind&iacute;gena fuera de resguardo</label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="dterrito" name="dterrito" value="4" <?php echo ($datosp["TERRITORIALIDAD_ETNICA"]==4)?"checked=\"checked\"":""; ?>>Territorio de comunidades negras sin titulaci&oacute;n</label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="dterrito" name="dterrito" value="5" <?php echo ($datosp["TERRITORIALIDAD_ETNICA"]==5)?"checked=\"checked\"":""; ?>>Territorio raizal ancestral del Archipi&eacute;lago de San Andres, Providencia y Santa Catalina  <img src="<?php echo base_url("images/help.png"); ?>"  title="Corresponde al territorio sobre el que reclaman autonomía los 'raizales' que habitan los territorios insulares colombianos de San Andrés, Providencia y Santa Catalina desde 1624."/></label>
						</div>	
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<div class="radio">
							<div id="dalerta17" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
				</div>
				
				
				<div class="row" id ="dresguardo">
					<div class="col-md-12">
						<div class="radio">
							<label>Nombre del resguardo ind&iacute;gena</label>
							<label><input type="text" id="dtxtresgu" name="dtxtresgu" value="<?php echo (isset($datosp['NOM_RESGUARDO_ind&iacute;gena']))?$datosp['NOM_RESGUARDO_ind&iacute;gena']:""; ?>" placeholder="Digita el resguardo ind&iacute;gena"  style=" width:200px" /></label>
						</div>	
					</div>
				</div>
				<div class="row" id ="dcomunidadnegra">
					<div class="col-md-12">
						<div class="radio">
							<label>Nombre territorio colectibo de comunidad negra</label>
							<label><input type="text" id="dtxtnomcomu" name="dtxtnomcomu" value="<?php echo (isset($datosp['NOM_COMUNIDAD_NEGRA']))?$datosp['NOM_COMUNIDAD_NEGRA']:""; ?>" placeholder="Digita el territorio colectibo de comunidad negra"  style=" width:200px" /></label>
						</div>	
					</div>
				</div>
				<div  id="dresgterri">
					<div class="row">
						<div class="col-md-10">
							<div class="radio">
								<label></label> 
								<label><input type="radio" id="dresgterrit" name="dresgterrit" value="1" <?php echo ($datosp["COMUNIDAD_VEREDA_RANCHERIA"]==1)?"checked=\"checked\"":""; ?>>Comunidad</label>
								<label></label> 
								<label><input type="radio" id="dresgterrit" name="dresgterrit" value="2" <?php echo ($datosp["COMUNIDAD_VEREDA_RANCHERIA"]==2)?"checked=\"checked\"":""; ?>>Vereda <img src="<?php echo base_url("images/help.png"); ?>"  title="División territorial de carácter administrativo en el área rural de los municipios, establecida mediante acuerdo municipal. Se concibe como una agrupación comunitaria de base territorial y principal espacio de sociabilidad, caracterizada por la proximidad de residencia de sus miembros, el sentido de pertenencia e identidad común y el predominio de las relaciones vecinales. Se conforma principalmente por la agrupación de predios  delimitados por accidentes geográficos  y vías principales. Para el caso de los productos cartográficos censales rurales, la vereda se identifica con un texto dentro de las respectivas áreas operativas y facilita la ubicación del grupo operativo en campo"/></label>
								<label></label> 
								<label><input type="radio" id="dresgterrit" name="dresgterrit" value="3" <?php echo ($datosp["COMUNIDAD_VEREDA_RANCHERIA"]==3)?"checked=\"checked\"":""; ?>>Rancheria <img src="<?php echo base_url("images/help.png"); ?>"  title="Se refiere al espacio geográfico donde convive un grupo de personas que pertenece al pueblo indígena Wayuu."/></label>
							</div>	
						</div>
					</div>
					<div class="row" id ="dnombrevere">
						<div class="col-md-10">
							<div class="radio">
								<label>Nombre</label>
								<label><input type="text" id="dtxtnom" name="dtxtnom" value="<?php echo (isset($datosp['NOM_COMUNIDAD_VEREDA_RANCHERIA']))?$datosp['NOM_COMUNIDAD_VEREDA_RANCHERIA']:""; ?>" placeholder="Digita el nombre"  style=" width:200px" /></label>
							</div>	
						</div>
					</div>
				</div>
				</div>
				
				
				<div class="row">
					<div id="result" class="form-group col-md-10">
		  				&nbsp;
		  			</div>	  				
		  			<div id="result" class="form-group col-md-1">
		  				<button type="button" id="dacepto2" name="dacepto2" class="btn btn-danger">Guardar y siguiente</button>&nbsp;&nbsp;&nbsp;
		  				<input type="hidden" id="dindex" name="dindex" value="4"  />
		  			</div>
		  		</div>
			</form>    		
    	</div>
    </div>
</div>