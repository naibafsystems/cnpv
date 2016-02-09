<br/>
<div class="container">
	<div class="row">
		<div class="col-lg-11">
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
			<form role="form" method="post" id="frmPantallas2" name="frmPantallas2" action="">
				<div class="row">
					<div class="col-md-9">
						<div class="radio">
							<label>Los campos que est&aacute;n marcados con un asterisco (<font color="red">*</font>) son campos requeridos.</label>
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-md-9">
						<div class="radio">
							<label><span class="label label-danger">1</span> Es indispensable  identificarse, por favor diligenciar la siguiente informaci&oacute;n: </label>
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<label>Primer Nombre <font color="red"><b>*</b></font></label>
							<label><input type="text" id="dtxtnombreuno" name="dtxtnombreuno" value="<?php echo (isset($datosp['PRIMER_NOMBRE']))?$datosp['PRIMER_NOMBRE']:""; ?>" placeholder="Digite su primer nombre"  style=" width:200px" /></label>
						</div>
					</div>
					<div class="col-md-5">
						<div class="radio">
							<label>Segundo Nombre</label>
							<label><input type="text" id="dtxtnombredos" name="dtxtnombredos" value="<?php echo (isset($datosp['SEGUNDO_NOMBRE']))?$datosp['SEGUNDO_NOMBRE']:""; ?>" placeholder="Digite su segundo nombre"  style=" width:200px"/></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="radio">
							<div id="dalerta2" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
				</div>
				
				
				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<label>Primer Apellido <font color="red"><b>*</b></font></label>
							<label><input type="text" id="dtxtapellidouno" name="dtxtapellidouno" value="<?php echo (isset($datosp['PRIMER_APELLIDO']))?$datosp['PRIMER_APELLIDO']:""; ?>"  placeholder="Digite su primer apellido"  style=" width:200px" required /></label>
						</div>
					</div>
					<div class="col-md-5">
						<div class="radio">
							<label>Segundo Apellido</label>
							<label><input type="text" id="dtxtapellidodos" name="dtxtapellidodos" value="<?php echo (isset($datosp['SEGUNDO_APELLIDO']))?$datosp['SEGUNDO_APELLIDO']:""; ?>"  placeholder="Digite su segundo apellido" style=" width:200px" /></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="radio">
							<div id="dalerta3" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-9">
						<div class="radio">
							<label><span class="label label-danger">2</span> Diligencie su fecha de nacimiento e indique  su tipo y n&uacute;mero de documento de identidad.</label>
						</div>
					</div>
				</div>	
				
				<div class="row">
					<div class="col-md-2">
						<div class="radio">
			  				<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D&iacute;a <font color="red"><b>*</b></font> &nbsp;&nbsp;
			  					<select id="ddia_nac" name="ddia_nac" autofocus> 
									<option value="-">D&iacute;a</option>
									<?php  for ($i=1; $i<=31; $i++){ ?> 
										<option <?php if($fec_nac["C4P46A_DIA_NAC"]==$i){?>selected="selected"<?php }?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
									<?php } ?>
								</select>
							</label>
						</div>
					</div>
					<div class="col-md-2">
						<div class="radio">Mes <font color="red"><b>*</b></font> &nbsp;&nbsp;
						  	<select id="dmes_nac" name="dmes_nac" autofocus>
								<option value="-">Mes</option>
								<?php for ($i=1; $i <= 12; $i++){
									$Mes_Desc = ($i==1) ? "ENERO" : (($i==2) ? "FEBRERO" : (($i==3) ? "MARZO" : (($i==4) ? "ABRIL" : (($i==5) ? "MAYO" : (($i==6) ? "JUNIO" : (($i==7) ? "JULIO" : (($i==8) ? "AGOSTO" : (($i==9) ? "SEPTIEMBRE" : (($i==10) ? "OCTUBRE" : (($i==11) ? "NOVIEMBRE" : "DICIEMBRE" )))))))))) ;
									?>
									<option <?php if($fec_nac["C4P46B_MES_NAC"]==$i){?>selected="selected"<?php }?> value="<?php  echo($i);?>"><?php echo($Mes_Desc);?> </option>
								<?PHP  }?>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<div class="radio">A&ntilde;o <font color="red"><b>*</b></font> &nbsp;&nbsp;
							<select  id="dano_nac" name="dano_nac"  autofocus>
								<option value="-">A&ntilde;o</option>
								<?php for ($i=1998; $i>=1910; $i--){ ?> 
									<option <?php if($fec_nac["C4P46C_ANO_NAC"]==$i){?>selected="selected"<?php }?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php }  ?>
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<div class="radio">
							<label>Sexo <font color="red"><b>*</b></font></label>
							<label>
								<select  id="dtxtsexo" name="dtxtsexo"  required>
									<option value="-" >Seleccione ...</option>
									<option value="1" <?php if($fec_nac["C4P45_SEXO"]==1){?>selected="selected"<?php }?>>Hombre</option> 
									<option value="2" <?php if($fec_nac["C4P45_SEXO"]==2){?>selected="selected"<?php }?>>Mujer</option>
								</select>
						</div>
					</div>
				</div>
			
			
			<?php 
			
				if ($datosp['C4P40_TIPO_DOC']==1)
				{
					$numreg=$datosp['CEDULA'];
				}
				if ($datosp['C4P40_TIPO_DOC']==2)
				{
					$numtar=$datosp['CEDULA'];
				}
				if ($datosp['C4P40_TIPO_DOC']==3)
				{
					$numcc=$datosp['CEDULA'];
				} 
				if ($datosp['C4P40_TIPO_DOC']==4)
				{
					$numce=$datosp['CEDULA'];
				}
			?>
				<div class="row">
					<div class="col-md-12">
						<div class="radio">
							<label>Tipo de documento de identidad <font color="red"><b>*</b></font></label>
							<label>
								<select  id="dtxttipodto" name="dtxttipodto"  required>
									<option value="-" <?php echo ($datosp['C4P40_TIPO_DOC']==0)? "selected='selected'":'' ?>>Seleccione su tipo de documento</option>
									<option value="3" <?php echo ($datosp['C4P40_TIPO_DOC']==3)? "selected='selected'":'' ?> >C&eacute;dula de Ciudadan&iacute;a</option> 
									<option value="4" <?php echo ($datosp['C4P40_TIPO_DOC']==4)? "selected='selected'":'' ?> >C&eacute;dula de Extranjer&iacute;a</option>
									<option value="1" <?php echo ($datosp['C4P40_TIPO_DOC']==1)? "selected='selected'":'' ?> >No tiene C&eacute;dula</option>
									<option value="2" <?php echo ($datosp['C4P40_TIPO_DOC']==2)? "selected='selected'":'' ?> >No tiene C&eacute;dula</option> 
								</select>
							</label>
							<label id="ddivtxttipodto" >
								<select  id="dtxttipodto2" name="dtxttipodto2"  required>
									<option value="-">Seleccione su tipo de documento</option>
									<option value="1" <?php echo ($datosp['C4P40_TIPO_DOC']==1)? "selected='selected'":'' ?> >Registro civil de nacimiento</option> 
									<option value="2" <?php echo ($datosp['C4P40_TIPO_DOC']==2)? "selected='selected'":'' ?>>Tarjeta de identidad</option>
								</select>
							</label>
							<label>N&uacute;mero de documento <font color="red"><b>*</b></font></label>
							<label><input type="text" id="dtxtnumdocumentocc" name="dtxtnumdocumentocc" value="<?php echo (isset($numcc))?$numcc:""; ?>"  placeholder="cc Digite su n&uacute;mero de identificaci&oacute;n" required style=" width:200px"/>
									<input type="text" id="dtxtnumdocumentoce" name="dtxtnumdocumentoce" value="<?php echo (isset($numce))?$numce:""; ?>"  placeholder="ce Digite su n&uacute;mero de identificaci&oacute;n" required style=" width:200px"/>
									<input type="text" id="dtxtnumdocumentoreg" name="dtxtnumdocumentoreg" value="<?php echo (isset($numreg))?$numreg:""; ?>"  placeholder="reg Digite su n&uacute;mero de identificaci&oacute;n" required style=" width:200px">
									<input type="text" id="dtxtnumdocumentotar" name="dtxtnumdocumentotar" value="<?php echo (isset($numtar))?$numtar:""; ?>"  placeholder="tar Digite su n&uacute;mero de identificaci&oacute;n" required style=" width:200px"></label>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<div id="dalerta4" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
					<div class="col-md-1">
							&nbsp;
					</div>
					<div class="col-md-4">
						<div class="radio">
							<div id="dalerta5" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
				</div>
						
				<div class="row">
					<div class="col-md-9">
						<div class="radio">
							<label><span class="label label-danger">3</span> Registre un n&uacute;mero de tel&eacute;fono fijo de contacto o celular.</label>
						</div>
					</div>
				</div>	
			
				<div class="row">
					<div class="col-md-4">
						<div class="radio">
							<label>Indicativo</label>
							<label>
								<select  id="dtxtindicativo" name="dtxtindicativo"   >
									<option value="0" <?php echo ($datosp['INDICATIVO']==0)? "selected='selected'":'' ?>>Indicativo</option>
									<option value="1" <?php echo ($datosp['INDICATIVO']==1)? "selected='selected'":'' ?>>Amazonas</option> 
									<option value="2" <?php echo ($datosp['INDICATIVO']==2)? "selected='selected'":'' ?>>Antioquia</option> 
									<option value="3" <?php echo ($datosp['INDICATIVO']==3)? "selected='selected'":'' ?>>Arauca</option> 
									<option value="4" <?php echo ($datosp['INDICATIVO']==4)? "selected='selected'":'' ?>>Atl&aacute;ntico</option> 
									<option value="5" <?php echo ($datosp['INDICATIVO']==5)? "selected='selected'":'' ?>>Bogot&aacute; D.C.</option> 
									<option value="6" <?php echo ($datosp['INDICATIVO']==6)? "selected='selected'":'' ?>>Bolivar</option> 
									<option value="7" <?php echo ($datosp['INDICATIVO']==7)? "selected='selected'":'' ?>>Boyac&aacute;</option> 
									<option value="8" <?php echo ($datosp['INDICATIVO']==8)? "selected='selected'":'' ?>>Caldas 6</option> 
									<option value="9" <?php echo ($datosp['INDICATIVO']==9)? "selected='selected'":'' ?>>Caquet&aacute;</option> 
									<option value="10" <?php echo ($datosp['INDICATIVO']==10)? "selected='selected'":'' ?>>Casanare</option> 
									<option value="11" <?php echo ($datosp['INDICATIVO']==11)? "selected='selected'":'' ?>>Cauca</option> 
									<option value="12" <?php echo ($datosp['INDICATIVO']==12)? "selected='selected'":'' ?>>Cesar</option> 
									<option value="13" <?php echo ($datosp['INDICATIVO']==13)? "selected='selected'":'' ?>>Choco</option> 
									<option value="14" <?php echo ($datosp['INDICATIVO']==14)? "selected='selected'":'' ?>>C&oacute;rdoba</option> 
				     				<option value="15" <?php echo ($datosp['INDICATIVO']==15)? "selected='selected'":'' ?>>Cundinamarca</option> 
									<option value="16" <?php echo ($datosp['INDICATIVO']==16)? "selected='selected'":'' ?>>Guainia</option>
									<option value="17" <?php echo ($datosp['INDICATIVO']==17)? "selected='selected'":'' ?>>Guaviare</option>
									<option value="18" <?php echo ($datosp['INDICATIVO']==18)? "selected='selected'":'' ?>>Huila</option> 
									<option value="19" <?php echo ($datosp['INDICATIVO']==19)? "selected='selected'":'' ?>>La Guajira</option> 
									<option value="20" <?php echo ($datosp['INDICATIVO']==20)? "selected='selected'":'' ?>>Magdalena</option> 
									<option value="21" <?php echo ($datosp['INDICATIVO']==21)? "selected='selected'":'' ?>>Meta</option> 
									<option value="22" <?php echo ($datosp['INDICATIVO']==22)? "selected='selected'":'' ?>>Nari&ntilde;o</option> 
									<option value="23" <?php echo ($datosp['INDICATIVO']==23)? "selected='selected'":'' ?>>Norte de Santander</option> 
									<option value="24" <?php echo ($datosp['INDICATIVO']==24)? "selected='selected'":'' ?>>Putumayo</option> 
									<option value="25" <?php echo ($datosp['INDICATIVO']==25)? "selected='selected'":'' ?>>Quind&iacute;o</option> 
								    <option value="26" <?php echo ($datosp['INDICATIVO']==26)? "selected='selected'":'' ?>>Risaralda</option> 
									<option value="27" <?php echo ($datosp['INDICATIVO']==27)? "selected='selected'":'' ?>>San Andres y Providencia</option> 
									<option value="28" <?php echo ($datosp['INDICATIVO']==28)? "selected='selected'":'' ?>>Santander</option> 
									<option value="29" <?php echo ($datosp['INDICATIVO']==29)? "selected='selected'":'' ?>>Sucre</option> 
									<option value="30" <?php echo ($datosp['INDICATIVO']==30)? "selected='selected'":'' ?>>Tolima</option> 
									<option value="31" <?php echo ($datosp['INDICATIVO']==31)? "selected='selected'":'' ?>>Valle del Cauca</option> 
									<option value="32" <?php echo ($datosp['INDICATIVO']==32)? "selected='selected'":'' ?>>Vaup&eacute;s</option>
									<option value="33" <?php echo ($datosp['INDICATIVO']==33)? "selected='selected'":'' ?>>Vichada</option> 
								</select>
							</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="radio">
							<label>Tel&eacute;fono fijo de contacto</label>
							<label><input type="text" id="dtxtTelF" name="dtxtTelF" value="<?php echo (isset($datosp['TEL_FIJO']))?$datosp['TEL_FIJO']:""; ?>"  placeholder="Digite su tel&eacute;fono fijo" /></label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="radio">
							<label>Tel&eacute;fono celular</label>
							<label><input type="text" id="dtxtTelM" name="dtxtTelM" value="<?php echo (isset($datosp['TEL_CELULAR']))?$datosp['TEL_CELULAR']:""; ?>"  placeholder="Digite su celular"  /></label>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">
						<div class="radio">
							<div id="dalerta12" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
					<div class="col-md-4">
						<div class="radio">
							<div id="dalerta10" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
					<div class="col-md-4">
						<div class="radio">
							<div id="dalerta11" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
				</div>
	  			<br/>
	  			<br/>
				<div class="container">
					<div class="row">
						<div class="col-lg-11">
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
					<div class="col-md-9">
						<div class="radio">
							<label><span class="label label-danger">4</span> Registre su correo electr&oacute;nico. Usar&aacute;s esta informaci&oacute;n para ingresar a diligenciar el censo electr&oacute;nico y recuperar contrase&ntilde;a.</label>
						</div>
					</div>
				</div>	
				
				
				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<label>Correo Electr&oacute;nico <font color="red"><b>*</b></font></label>
							<label><input type="text" id="dtxtcorreo" name="dtxtcorreo" value="<?php echo (isset($datosp['CORREO_ELECTRONICO']))?$datosp['CORREO_ELECTRONICO']:""; ?>"  placeholder=" usuario@ejemplo.com"  required style=" width:200px"/></label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="radio">
							<label>Vuelva a ingresar el correo electr&oacute;nico<font color="red"><b>*</b></font></label>
							<label><input type="text" id="dtxtcorreo1" name="dtxtcorreo1" value="<?php echo (isset($datosp['CORREO_ELECTRONICO']))?$datosp['CORREO_ELECTRONICO']:""; ?>"  placeholder=" usuario@ejemplo.com"  required style=" width:200px"/></label>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<div class="radio">
							<div id="dalerta6" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
					<div class="col-md-6">
						<div class="radio">
							<div id="dalerta7" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
				</div>

	  			<div class="row">
					<div class="col-md-9">
						<div class="radio">
							<label>Tenga en cuenta que para la contrase&ntilde;a debe combinar letras y n&uacute;meros, con m&iacute;nimo seis (6) caracteres y m&iacute;nimo una may&uacute;scula.</label>
						</div>
					</div>
					<div class="col-md-5">
						<div class="radio">
							<label>Escriba una contrase&ntilde;a. <font color="red"><b>*</b></font></label>
							<label><input type="password" id="dtxtcontras" name="dtxtcontras"  value ="<?php echo (isset($datosp['CONTRASENA']))?$datosp['CONTRASENA']:""; ?>" placeholder="Digite su contrase&ntilde;a"  required /></label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="radio">
							<label>Escriba nuevamente su Contrase&ntilde;a: <font color="red"><b>*</b></font></label>
							<label><input type="password" id="dtxtcontras2" name="dtxtcontras2" value="<?php echo (isset($datosp['CONTRASENA']))?$datosp['CONTRASENA']:""; ?>"  placeholder="Digite su contrase&ntilde;a"  required></label>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<div class="radio">
							<div id="dalerta8" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
					<div class="col-md-6">
						<div class="radio">
							<div id="dalerta9" class="alert alert-warning" role="alert">
			        			<strong></strong>
			      			</div>	
			      		</div>
					</div>
				</div>
										  								
				<div class="row">
					<div id="result" class="form-group col-md-10">
		  				&nbsp;
		  			</div>	  				
		  			<div id="result" class="form-group col-md-1">
		  				<button type="button" id="dacepto1a" name="dacepto1a" class="btn btn-danger" >Guardar y siguiente</button>&nbsp;&nbsp;&nbsp;
		  				<!--  <button type="button" id="btnCrearCancelar" name="btnCrearCancelar" class="btn btn-danger">Cancelar</button>-->
		  			</div>
		  		</div>
				
				
	  			<input type="hidden" id="dindex" name="dindex" value="2"  />
			</form>    		
    	</div>
    </div>
</div>