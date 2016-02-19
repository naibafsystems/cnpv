<br/>
 <div class="container">
	<div class="row">
		<div class="col-lg-10">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h4 class="list-group-item-heading">
						DATOS PERSONALES
					</h4>
				</div>
			</div>
		</div>			
	</div>
</div>  
<div class="container">
    <div class="row">
    	<div class="col-md-12"> 
			<form role="form" method="post" id="frmPantalla2" name="frmPantalla2" action="">
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label>Los campos que est&aacute;n marcados con un asterisco (<font color="red">*</font>) son campos requeridos.</label>
						</div>
					</div>
				</div>	
				
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label><span class="label label-danger">1</span> Diligencia tu tipo y n&uacute;mero de documento de identidad.</label>
						</div>
					</div>
				</div>	
				
				
				<div class="row">
					<div class="col-md-12">
						<div class="radio">
							<label>Tipo de documento de identidad <font color="red"><b>*</b></font></label>
							<label>
								<select  id="txttipodto" name="txttipodto"  required>
									<option value="-">Seleccione su tipo de documento</option>
									<option value="3" >C&eacute;dula de Ciudadan&iacute;a</option> 
									<option value="4" >C&eacute;dula de Extranjer&iacute;a</option>
									<option value="99" >No tiene c&eacute;dula</option> 
								</select>
							</label>
							<label id="divtxttipodto" >
								<select  id="txttipodto2" name="txttipodto2"  required>
									<option value="-">Seleccione su tipo de documento</option>
									<option value="1" >Registro civil de nacimiento</option> 
									<option value="2" >Tarjeta de identidad</option>
								</select>
							</label>
							<label>N&uacute;mero de documento <font color="red"><b>*</b></font></label>
							<label><input type="text" id="txtnumdocumentocc" name="txtnumdocumentocc" value=""  placeholder="Digita tu n&uacute;mero de identificaci&oacute;n" required style=" width:200px"/><span id="divtest"></span>
									<input type="text" id="txtnumdocumentoce" name="txtnumdocumentoce" value=""  placeholder="Digita tu n&uacute;mero de identificaci&oacute;n" required style=" width:200px"/>
									<input type="text" id="txtnumdocumentoreg" name="txtnumdocumentoreg" value=""  placeholder="Digita tu n&uacute;mero de identificaci&oacute;n" required style=" width:200px">
									<input type="text" id="txtnumdocumentotar" name="txtnumdocumentotar" value=""  placeholder="Digita tu n&uacute;mero de identificaci&oacute;n" required style=" width:200px"></label>
						</div>
					</div>
				</div>
				<div id="res_fec_exp" >
					<div class="radio">
						<label >Fecha de expedici&oacute;n <input type="text" id="fec_exp" name="fec_exp" value="" style=" width:200px"/></label>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<div id="alerta4" class="alert alert-warning" role="alert"></div>	
			      		</div>
					</div>
					<div class="col-md-4">
						<div class="radio">
							<div id="alerta5" class="alert alert-warning" role="alert"></div>	
			      		</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label><span class="label label-danger">2</span> Es indispensable  identificarse, por favor diligencia la siguiente informaci&oacute;n: </label>
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<label>Primer Nombre <font color="red"><b>*</b></font></label>
							<label><input type="text" id="txtnombreuno" name="txtnombreuno" value="<?php echo (isset($apellidos))?$apellidos:""; ?>" placeholder="Digita tu primer nombre"  style=" width:200px"/></label>
						</div>
					</div>
					<div class="col-md-5">
						<div class="radio">
							<label>Segundo Nombre</label>
							<label><input type="text" id="txtnombredos" name="txtnombredos" value="<?php echo (isset($apellidos))?$apellidos:""; ?>" placeholder="Digita tu segundo nombre"  style=" width:200px"/></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<div id="alerta2" class="alert alert-warning" role="alert"></div>	
			      		</div>
					</div>
				</div>
				
				
				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<label>Primer Apellido <font color="red"><b>*</b></font></label>
							<label><input type="text" id="txtapellidouno" name="txtapellidouno" value="<?php echo (isset($apellidos))?$apellidos:""; ?>"  placeholder="Digita tu primer apellido"  style=" width:200px" required /></label>
						</div>
					</div>
					<div class="col-md-5">
						<div class="radio">
							<label>Segundo Apellido</label>
							<label><input type="text" id="txtapellidodos" name="txtapellidodos" value="<?php echo (isset($apellidos))?$apellidos:""; ?>"  placeholder="Digita tu segundo apellido" style=" width:200px" /></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<div id="alerta3" class="alert alert-warning" role="alert"></div>	
			      		</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label><span class="label label-danger">3</span> Diligencia tu fecha de nacimiento y sexo.</label>
						</div>
					</div>
				</div>	
			
			
				<div class="row">
					<div class="col-md-2">
						<div class="radio">
			  				<label>D&iacute;a <font color="red"><b>*</b></font></label>
			  				<label>
			  					<select id="dia_nac" name="dia_nac" >
									<option value="-">D&iacute;a</option>
									<?php  for ($i=1; $i<=31; $i++){ ?> 
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									<?php } ?>
								</select>
							</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="radio">
							<label>Mes <font color="red"><b>*</b></font></label>
			  				<label>
							  	<select id="mes_nac" name="mes_nac" >
									<option value="-">Mes</option>
									<?php for ($i=1; $i <= 12; $i++){
										$Mes_Desc = ($i==1) ? "ENERO" : (($i==2) ? "FEBRERO" : (($i==3) ? "MARZO" : (($i==4) ? "ABRIL" : (($i==5) ? "MAYO" : (($i==6) ? "JUNIO" : (($i==7) ? "JULIO" : (($i==8) ? "AGOSTO" : (($i==9) ? "SEPTIEMBRE" : (($i==10) ? "OCTUBRE" : (($i==11) ? "NOVIEMBRE" : "DICIEMBRE" )))))))))) ;
										?>
										<option value="<?php  echo($i);?>"><?php echo($Mes_Desc);?> </option>
									<?PHP  }?>
								</select>
							</label>
						</div>
					</div>
					<div class="col-md-2">
						<div class="radio">
							<label>A&ntilde;o <font color="red"><b>*</b></font></label>
			  				<label>
								<select  id="ano_nac" name="ano_nac"  >
									<option value="-">A&ntilde;o</option>
									<?php for ($i=1998; $i>=1910; $i--){ ?> 
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									<?php }  ?>
								</select>
							</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="radio">
							<label>Sexo <font color="red"><b>*</b></font></label>
							<label>
								<select  id="txtsexo" name="txtsexo"  required>
									<option value="-">Seleccione ...</option>
									<option value="1" >Hombre</option> 
									<option value="2" >Mujer</option>
								</select>
						</div>
					</div>
				</div>
			
			
				<div class="row">
					<div class="col-md-2">
						<div class="radio">
							<div id="alerta17" class="alert alert-warning" role="alert"></div>	
			      		</div>
					</div>
					<div class="col-md-3">
						<div class="radio">
							<div id="alerta18" class="alert alert-warning" role="alert"></div>	
			      		</div>
					</div>
					<div class="col-md-2">
						<div class="radio">
							<div id="alerta19" class="alert alert-warning" role="alert"></div>	
			      		</div>
					</div>
					<div class="col-md-4">
						<div class="radio">
							<div id="alerta20" class="alert alert-warning" role="alert"></div>	
			      		</div>
					</div>
				</div>
				
			
				
				
				
						
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label><span class="label label-danger">4</span> Registra un n&uacute;mero de tel&eacute;fono fijo de contacto o celular.</label>
						</div>
					</div>
				</div>	
			
				<div class="row">
					<div class="col-md-3">
						<div class="radio">
							<label>Indicativo</label>
							<label>
								<select  id="txtindicativo" name="txtindicativo"   >
									<option value="0">Indicativo</option>
									<option value="1" >Amazonas</option> 
									<option value="2" >Antioquia</option> 
									<option value="3" >Arauca</option> 
									<option value="4" >Atl&aacute;ntico</option> 
									<option value="5" >Bogot&aacute; D.C.</option> 
									<option value="6" >Bolivar</option> 
									<option value="7" >Boyac&aacute;</option> 
									<option value="8" >Caldas 6</option> 
									<option value="9" >Caquet&aacute;</option> 
									<option value="10" >Casanare</option> 
									<option value="11" >Cauca</option> 
									<option value="12" >Cesar</option> 
									<option value="13" >Choco</option> 
									<option value="14" >C&oacute;rdoba</option> 
				     				<option value="15" >Cundinamarca</option> 
									<option value="16" >Guainia</option>
									<option value="17" >Guaviare</option>
									<option value="18" >Huila</option> 
									<option value="19" >La Guajira</option> 
									<option value="20" >Magdalena</option> 
									<option value="21" >Meta</option> 
									<option value="22" >Nari&ntilde;o</option> 
									<option value="23" >Norte de Santander</option> 
									<option value="24" >Putumayo</option> 
									<option value="25" >Quind&iacute;o</option> 
								    <option value="26" >Risaralda</option> 
									<option value="27" >San Andres y Providencia</option> 
									<option value="28" >Santander</option> 
									<option value="29" >Sucre</option> 
									<option value="30" >Tolima</option> 
									<option value="31" >Valle del Cauca</option> 
									<option value="32" >Vaup&eacute;s</option>
									<option value="33" >Vichada</option> 
								</select>
							</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="radio">
							<label>Tel&eacute;fono fijo de contacto</label>
							<label><input type="text" id="txtTelF" name="txtTelF" value="<?php echo (isset($apellidos))?$apellidos:""; ?>"  placeholder="Digita tu tel&eacute;fono fijo" /></label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="radio">
							<label>Tel&eacute;fono celular</label>
							<label><input type="text" id="txtTelM" name="txtTelM" value="<?php echo (isset($apellidos))?$apellidos:""; ?>"  placeholder="Digita tu celular"  /></label>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-3">
						<div class="radio">
							<div id="alerta12" class="alert alert-warning" role="alert"></div>	
			      		</div>
					</div>
					<div class="col-md-3">
						<div class="radio">
							<div id="alerta10" class="alert alert-warning" role="alert"></div>	
			      		</div>
					</div>
					<div class="col-md-3">
						<div class="radio">
							<div id="alerta11" class="alert alert-warning" role="alert"></div>	
			      		</div>
					</div>
				</div>
	  			<br/>
	  			<br/>
				<div class="container">
					<div class="row">
						<div class="col-lg-10">
							<div class="panel panel-danger">
								<div class="panel-heading">
									<h4 class="list-group-item-heading">
										Datos de acceso para diligenciar el censo electr&oacute;nico
									</h4>
								</div>
							</div>
						</div>			
					</div>
				</div> 			
		
		
				<div class="row">
					<div class="col-md-10">
						<div class="radio">
							<label><span class="label label-danger">5</span> Registra tu correo electr&oacute;nico. Usar&aacute;s esta informaci&oacute;n para ingresar a diligenciar el censo electr&oacute;nico y recuperar contrase&ntilde;a.</label>
						</div>
					</div>
				</div>	
				
				
				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<label>Correo electr&oacute;nico <font color="red"><b>*</b></font></label>
							<label><input type="text" id="txtcorreo" name="txtcorreo" value="<?php echo (isset($apellidos))?$apellidos:""; ?>"  placeholder=" usuario@ejemplo.com"  required style=" width:200px"/></label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="radio">
							<label>Vuelve a ingresar el correo electr&oacute;nico<font color="red"><b>*</b></font></label>
							<label><input type="text" id="txtcorreo1" name="txtcorreo1" value="<?php echo (isset($apellidos))?$apellidos:""; ?>"  placeholder=" usuario@ejemplo.com"  required style=" width:200px"/></label>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<div id="alerta6" class="alert alert-warning" role="alert"></div>	
			      		</div>
					</div>
					<div class="col-md-5">
						<div class="radio">
							<div id="alerta7" class="alert alert-warning" role="alert"></div>	
			      		</div>
					</div>
				</div>

	  			<div class="row">
					<div class="col-md-9">
						<div class="radio">
							<label>Ten en cuenta que para la contrase&ntilde;a debes combinar letras y n&uacute;meros, con m&iacute;nimo seis (6) caracteres y m&iacute;nimo una may&uacute;scula.</label>
						</div>
					</div>
					<div class="col-md-5">
						<div class="radio">
							<label>Escribe una contrase&ntilde;a. <font color="red"><b>*</b></font></label>
							<label><input type="password" id="txtcontras" name="txtcontras"   placeholder="Digita tu contrase&ntilde;a"  required /></label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="radio">
							<label>Escribe nuevamente tu contrase&ntilde;a: <font color="red"><b>*</b></font></label>
							<label><input type="password" id="txtcontras2" name="txtcontras2" value=""  placeholder="Digita tu contrase&ntilde;a"  required></label>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<div id="alerta8" class="alert alert-warning" role="alert"></div>	
			      		</div>
					</div>
					<div class="col-md-5">
						<div class="radio">
							<div id="alerta9" class="alert alert-warning" role="alert"></div>	
			      		</div>
					</div>
				</div>
					</br></br>					  								
				<div class="row">
					<div id="result" class="form-group col-md-7">
		  				Al hacer clic en aceptar y siguiente estás aceptando los términos y condiciones y podrás continuar con el proceso.
		  				<a href="<?php echo site_url ("registrese/termicondi");?>" target="_blank">Ver términos y condiciones.</a>
		  			</div>	  				
		  			<div id="result" class="form-group col-md-3">
		  				<label>
		  				<button type="button" id="acepto1" name="acepto1" class="btn btn-danger">Aceptar y siguiente</button>&nbsp;&nbsp;&nbsp;
		  				</label>
		  				<label>
		  				<input type="button" id="noacepta" name="noacepta" value="No acepto" class="btn btn-warning"/>
		  				</label>
		  			</div>
		  		</div>
				
				
	  			<input type="hidden" id="index" name="index" value="2"  />
	  			<input type="hidden" id="edad" name="edad" value=""  />
			</form>    		
    	</div>
    </div>
</div>