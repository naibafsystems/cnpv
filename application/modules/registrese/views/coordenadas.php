<br/>
 <div class="container">
	<div class="row">
		<div class="col-lg-10">
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
			<form role="form" method="post" id="frmPantalla4" name="frmPantalla4" action="">
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
							<label><select  id="Departamento" name="Departamento" required>
									<option value="-">Seleccione...</option>
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
							<label>Municipio<font color="red"><b>*</b></font></label>
							<label><select id="Municipio" name="Municipio" required>
										<option value="-">Seleccione...</option>
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
							<label></label> 
							<label><input type="radio" id="clase" name="clase" value="1" >Cabecera municipal</label>
							<label></label> 
							<label><input type="radio" id="clase" name="clase" value="2" >Centro poblado</label>
							<label></label> 
							<label><input type="radio" id="clase" name="clase" value="3" >Rural disperso</label>
							<label></label> 
							<label><input type="radio" id="clase" name="clase" value="4" >Territorialidad &eacute;tnica</label>
						</div>	
					</div>
				</div>
				<div class="row" id ="local">
					<div class="col-md-12">
						<div class="radio">
							<label>Nombre de la localidad o comuna</label>
							<label><input type="text" id="txtlocalidad" name="txtlocalidad" value="" placeholder="Digite la localidad o comuna"  style=" width:200px" /></label>
						</div>	
					</div>
				</div>
				<div class="row" id ="poblado">
					<div class="col-md-12">
						<div class="radio">
							<label>Nombre del centro poblado</label>
							<label><input type="text" id="txtpoblado" name="txtpoblado" value="" placeholder="Digite el centro poblado"  style=" width:200px" /></label>
						</div>	
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<label>Direcci&oacute;n <font color="red"><b>*</b></font></label>
							<label><input type="text" id="txtdireccion" name="txtdireccion" value="<?php echo (isset($apellidos))?$apellidos:""; ?>" placeholder="Digite direcci&oacute;n"  style=" width:200px" /></label>
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
							<label>Barrio / corregimiento o vereda <font color="red"><b>*</b></font></label>
							<label><input type="text" id="txtbarrio" name="txtbarrio" value="<?php echo (isset($apellidos))?$apellidos:""; ?>" placeholder="Digite barrio"  style=" width:200px" /></label>
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
							<label><input type="radio" id="territo" name="territo" value="1" >Resguardo Indigena</label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label>  
							<label><input type="radio" id="territo" name="territo" value="2" >Territorio colectivo de comunidad negra</label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="territo" name="territo" value="3" >Parcialidad o asentamiento indigena fuera de resguardo</label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="territo" name="territo" value="4" >Territorio de comunidades negras sin titulaci&oacute;n</label>
							<br/>
							<label>&nbsp;&nbsp;&nbsp;&nbsp;</label> 
							<label><input type="radio" id="territo" name="territo" value="5" >Territorio raizal ancestral del Archipi&eacute;lago de San Andres, Providencia y Santa Catalina</label>
						</div>	
					</div>
				</div>
				<div class="row" id ="resguardo">
					<div class="col-md-12">
						<div class="radio">
							<label>Nombre del resguardo indigena</label>
							<label><input type="text" id="txtresgu" name="txtresgu" value="" placeholder="Digite el resguardo indigena"  style=" width:200px" /></label>
						</div>	
					</div>
				</div>
				<div class="row" id ="comunidadnegra">
					<div class="col-md-12">
						<div class="radio">
							<label>Nombre territorio colectibo de comunidad negra</label>
							<label><input type="text" id="txtnomcomu" name="txtnomcomu" value="" placeholder="Digite el territorio colectibo de comunidad negra"  style=" width:200px" /></label>
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
								<label><input type="radio" id="resgterrit" name="resgterrit" value="2" >Vereda</label>
								<label></label> 
								<label><input type="radio" id="resgterrit" name="resgterrit" value="3" >Rancheria</label>
							</div>	
						</div>
					</div>
					<div class="row" id ="nombrevere">
						<div class="col-md-10">
							<div class="radio">
								<label>Nombre</label>
								<label><input type="text" id="txtnom" name="txtnom" value="" placeholder="Digite el nombre"  style=" width:200px" /></label>
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