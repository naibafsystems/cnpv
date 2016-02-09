<br/>
 <div class="container">
	<div class="row">
		<div class="col-lg-11">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h4 class="list-group-item-heading">
						DATOS DE UBICACI&Oacute;N DE SU RESIDENCIA HABITUAL
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
							<label>Registre la ubicaci&oacute;n de la vivienda donde usted reside habitualmente, es decir la vivienda donde habita la mayor parte del tiempo.</label>
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-md-11">
						<div class="radio">
							<label>Departamento <font color="red"><b>*</b></font></label>
							<label><select  id="dDepartamento" name="dDepartamento" required>
									<option value="-">Seleccione...</option>
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
							<label>Municipio<font color="red"><b>*</b></font></label>
							<label><select id="dMunicipio" name="dMunicipio" required>
										<option value="-">Seleccione...</option>
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
							<label></label> 
							<label><input type="radio" id="dclase" name="dclase" value="1" <?php echo ($datosp["CLASE"]==1)?"checked=\"checked\"":""; ?>>Cabecera municipal</label>
							<label></label> 
							<label><input type="radio" id="dclase" name="dclase" value="2" <?php echo ($datosp["CLASE"]==2)?"checked=\"checked\"":""; ?>>Centro poblado</label>
							<label></label> 
							<label><input type="radio" id="dclase" name="dclase" value="3" <?php echo ($datosp["CLASE"]==3)?"checked=\"checked\"":""; ?>>Rural disperso</label>
							<label></label> 
							<label><input type="radio" id="dclase" name="dclase" value="4" <?php echo ($datosp["CLASE"]==4)?"checked=\"checked\"":""; ?>>Territorialidad &eacute;tnica</label>
						</div>	
					</div>
				</div>
				<div class="row" id ="dlocal">
					<div class="col-md-12">
						<div class="radio">
							<label>Nombre de la localidad o comuna</label>
							<label><input type="text" id="dtxtlocalidad" name="dtxtlocalidad" value="<?php echo (isset($datosp['LOCALIDAD_COMUNA']))?$datosp['LOCALIDAD_COMUNA']:""; ?>" placeholder="Digite la localidad o comuna"  style=" width:200px" /></label>
						</div>	
					</div>
				</div>
				<div class="row" id ="dpoblado">
					<div class="col-md-12">
						<div class="radio">
							<label>Nombre del centro poblado</label>
							<label><input type="text" id="dtxtpoblado" name="dtxtpoblado" value="<?php echo (isset($datosp['CENTRO_POBLADO']))?$datosp['CENTRO_POBLADO']:""; ?>" placeholder="Digite el centro poblado"  style=" width:200px" /></label>
						</div>	
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<label>Direcci&oacute;n <font color="red"><b>*</b></font></label>
							<label><input type="text" id="dtxtdireccion" name="dtxtdireccion" value="<?php echo (isset($datosp['C1IV10_DIR']))?$datosp['C1IV10_DIR']:""; ?>" placeholder="Digite direcci&oacute;n"  style=" width:200px" /></label>
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
							<label>Barrio / corregimiento o vereda <font color="red"><b>*</b></font></label>
							<label><input type="text" id="dtxtbarrio" name="dtxtbarrio" value="<?php echo (isset($datosp['BARRIO_CORREGI_VEREDA']))?$datosp['BARRIO_CORREGI_VEREDA']:""; ?>" placeholder="Digite barrio"  style=" width:200px" /></label>
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
							<label><input type="radio" id="dterrito" name="dterrito" value="1" <?php echo ($datosp["TERRITORIALIDAD_ETNICA"]==1)?"checked=\"checked\"":""; ?>>Resguardo Indigena</label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label>  
							<label><input type="radio" id="dterrito" name="dterrito" value="2" <?php echo ($datosp["TERRITORIALIDAD_ETNICA"]==2)?"checked=\"checked\"":""; ?>>Territorio colectivo de comunidad negra</label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="dterrito" name="dterrito" value="3" <?php echo ($datosp["TERRITORIALIDAD_ETNICA"]==3)?"checked=\"checked\"":""; ?>>Parcialidad o asentamiento indigena fuera de resguardo</label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="dterrito" name="dterrito" value="4" <?php echo ($datosp["TERRITORIALIDAD_ETNICA"]==4)?"checked=\"checked\"":""; ?>>Territorio de comunidades negras sin titulaci&oacute;n</label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="dterrito" name="dterrito" value="5" <?php echo ($datosp["TERRITORIALIDAD_ETNICA"]==5)?"checked=\"checked\"":""; ?>>Territorio raizal ancestral del Archipi&eacute;lago de San Andres, Providencia y Santa Catalina</label>
						</div>	
					</div>
				</div>
				<div class="row" id ="dresguardo">
					<div class="col-md-12">
						<div class="radio">
							<label>Nombre del resguardo indigena</label>
							<label><input type="text" id="dtxtresgu" name="dtxtresgu" value="<?php echo (isset($datosp['NOM_RESGUARDO_INDIGENA']))?$datosp['NOM_RESGUARDO_INDIGENA']:""; ?>" placeholder="Digite el resguardo indigena"  style=" width:200px" /></label>
						</div>	
					</div>
				</div>
				<div class="row" id ="dcomunidadnegra">
					<div class="col-md-12">
						<div class="radio">
							<label>Nombre territorio colectibo de comunidad negra</label>
							<label><input type="text" id="dtxtnomcomu" name="dtxtnomcomu" value="<?php echo (isset($datosp['NOM_COMUNIDAD_NEGRA']))?$datosp['NOM_COMUNIDAD_NEGRA']:""; ?>" placeholder="Digite el territorio colectibo de comunidad negra"  style=" width:200px" /></label>
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
								<label><input type="radio" id="dresgterrit" name="dresgterrit" value="2" <?php echo ($datosp["COMUNIDAD_VEREDA_RANCHERIA"]==2)?"checked=\"checked\"":""; ?>>Vereda</label>
								<label></label> 
								<label><input type="radio" id="dresgterrit" name="dresgterrit" value="3" <?php echo ($datosp["COMUNIDAD_VEREDA_RANCHERIA"]==3)?"checked=\"checked\"":""; ?>>Rancheria</label>
							</div>	
						</div>
					</div>
					<div class="row" id ="dnombrevere">
						<div class="col-md-10">
							<div class="radio">
								<label>Nombre</label>
								<label><input type="text" id="dtxtnom" name="dtxtnom" value="<?php echo (isset($datosp['NOM_COMUNIDAD_VEREDA_RANCHERIA']))?$datosp['NOM_COMUNIDAD_VEREDA_RANCHERIA']:""; ?>" placeholder="Digite el nombre"  style=" width:200px" /></label>
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