<div id="page5">
	<form id="frmPregunta4" name="frmPregunta4" method="post" action="">
		<div class="row">
			<div class="col-md-12"> 
				<h4>La vivienda en la que usted reside cuenta con servicio <span id="hint9"></span> de:</h4>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-1"></div>
					<div id="encEstrato" class="col-md-2" style="text-align: center;"><b>Estrato</b></div>
					<div class="col-md-1"></div>
					<div class="col-md-5"></div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="radio">
				  			<label>A. Energ&iacute;a el&eacute;ctrica</label>
						</div>
					</div>
					<div class="col-md-1">
						<div class="radio">
							<label><input type="radio" id="c2v21a_ee" name="pregunta6" value="1" <?php echo ($vivienda["c2v21a_ee"]==1)?"checked=\"checked\"":""; ?>>Si</label>
						</div>						
					</div>				
					<div class="col-md-2" style="text-align: center;">						
						<div id="cmbEstrato" class="radio">						   				  	
					  		<select id="cmbEstr" name="cmbEstr">
					  			<option value="-">Seleccione...</option>
					  			<option value="0" <?php echo ($vivienda["c2v21a1_estrato"]==0)?"selected=\"selected\"":""; ?>>Estrato 0</option>
					  			<option value="1" <?php echo ($vivienda["c2v21a1_estrato"]==1)?"selected=\"selected\"":""; ?>>Estrato 1</option>
					  			<option value="2" <?php echo ($vivienda["c2v21a1_estrato"]==2)?"selected=\"selected\"":""; ?>>Estrato 2</option>
					  			<option value="3" <?php echo ($vivienda["c2v21a1_estrato"]==3)?"selected=\"selected\"":""; ?>>Estrato 3</option>
					  			<option value="4" <?php echo ($vivienda["c2v21a1_estrato"]==4)?"selected=\"selected\"":""; ?>>Estrato 4</option>
					  			<option value="5" <?php echo ($vivienda["c2v21a1_estrato"]==5)?"selected=\"selected\"":""; ?>>Estrato 5</option>
					  			<option value="6" <?php echo ($vivienda["c2v21a1_estrato"]==6)?"selected=\"selected\"":""; ?>>Estrato 6</option>
					  		</select>
						</div>										
					</div>
					<div class="col-md-1">
						<div class="radio">
				  			<label><input type="radio" id="c2v21a_ee" name="pregunta6" value="2" <?php echo ($vivienda["c2v21a_ee"]==2)?"checked=\"checked\"":""; ?>>No</label>
						</div>
					</div>
					<div class="col-md-5">						
						<div id="alerta6" class="alert alert-warning" role="alert">
        					&nbsp;
      					</div>						
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="radio">
							<label>B. Alcantarillado</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="radio">
				  			<label><input type="radio" id="c2v21b_alc" name="pregunta7" value="1" <?php echo ($vivienda["c2v21b_alc"]==1)?"checked=\"checked\"":""; ?>>Si</label>
						</div>
					</div>				
					<div class="col-md-1">
						<div class="radio">
				  			<label><input type="radio" id="c2v21b_alc" name="pregunta7" value="2" <?php echo ($vivienda["c2v21b_alc"]==2)?"checked=\"checked\"":""; ?>>No</label>
						</div>
					</div>
					<div class="col-md-5">
						<div id="alerta7" class="alert alert-warning" role="alert">
        					&nbsp;
      					</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="radio">
				  			<label>C. Acueducto</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="radio">
				  			<label><input type="radio" id="c2v21c_acu" name="pregunta8" value="1" <?php echo ($vivienda["c2v21c_1acu"]==1)?"checked=\"checked\"":""; ?>>Si</label>
						</div>
					</div>				
					<div class="col-md-1">
						<div class="radio">
				  			<label><input type="radio" id="c2v21c_acu" name="pregunta8" value="2" <?php echo ($vivienda["c2v21c_1acu"]==2)?"checked=\"checked\"":""; ?>>No</label>
						</div>
					</div>
					<div class="col-md-5">
						<div id="alerta8" class="alert alert-warning" role="alert">
        					&nbsp;
      					</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="radio">
				  			<label>D. Gas natural conectado a red p&uacute;blica</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="radio">
				  			<label><input type="radio" id="c2v21d_gas" name="pregunta9" value="1" <?php echo ($vivienda["c2v21d_gas"]==1)?"checked=\"checked\"":""; ?>>Si</label>
						</div>
					</div>				
					<div class="col-md-1">
						<div class="radio">
				  			<label><input type="radio" id="c2v21d_gas" name="pregunta9" value="2" <?php echo ($vivienda["c2v21d_gas"]==2)?"checked=\"checked\"":""; ?>>No</label>
						</div>
					</div>
					<div class="col-md-5">
						<div id="alerta9" class="alert alert-warning" role="alert">
        					&nbsp;
      					</div>
					</div>
				</div>
				
				<br/>
				
				<h4>El servicio sanitario (inodoro) de la vivienda en la que usted reside se encuentra:</h4>
				<div class="row">				
					<div class="col-md-12">
						<div class="radio">
				  			<label><input type="radio" id="c2v22_tipo_sersa" name="pregunta10" value="1" <?php echo ($vivienda["c2v22_tipo_sersa"]==1)?"checked=\"checked\"":""; ?>>Conectado al alcantarillado</label>
						</div>
					</div>
				</div>	
				<div class="row">				
					<div class="col-md-12">
						<div class="radio">
				  			<label><input type="radio" id="c2v22_tipo_sersa" name="pregunta10" value="2" <?php echo ($vivienda["c2v22_tipo_sersa"]==2)?"checked=\"checked\"":""; ?>>Conectado a <span id="hint10">pozo s&eacute;ptico</span></label>
						</div>
					</div>
				</div>
				<div class="row">				
					<div class="col-md-12">
						<div class="radio">
							<label><input type="radio" id="c2v22_tipo_sersa" name="pregunta10" value="3" <?php echo ($vivienda["c2v22_tipo_sersa"]==3)?"checked=\"checked\"":""; ?>>Sin conexi&oacute;n</label>
						</div>
					</div>
				</div>
				<div class="row">				
					<div class="col-md-12">
						<div class="radio">
							<label><input type="radio" id="c2v22_tipo_sersa" name="pregunta10" value="4" <?php echo ($vivienda["c2v22_tipo_sersa"]==4)?"checked=\"checked\"":""; ?>><span id="hint11">Letrina</span></label>
						</div>
					</div>
				</div>
				<div class="row">				
					<div class="col-md-12">
						<div class="radio">
							<label><input type="radio" id="c2v22_tipo_sersa" name="pregunta10" value="5" <?php echo ($vivienda["c2v22_tipo_sersa"]==5)?"checked=\"checked\"":""; ?>>Con descarga directa a fuentes de agua (bajamar)</label>
						</div>
					</div>
				</div>
				<div class="row">				
					<div class="col-md-12">
						<div class="radio">
							<label><input type="radio" id="c2v22_tipo_sersa" name="pregunta10" value="6" <?php echo ($vivienda["c2v22_tipo_sersa"]==6)?"checked=\"checked\"":""; ?>>No tiene servicio sanitario</label>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<div id="alerta10" class="alert alert-warning" role="alert">
        					&nbsp;
      					</div>	
					</div>
				</div>
				
				<br/>
				
				<h4>&iquest;C&oacute;mo eliminan, PRINCIPALMENTE, las basuras en la vivienda en la que usted reside?</h4>
				<div class="row">				
					<div class="col-md-12">
						<div class="radio">
				  			<label><input type="radio" id="c2v23_eli_bas" name="pregunta11" value="1" <?php echo ($vivienda["c2v23_eli_bas"]==1)?"checked=\"checked\"":""; ?>>La recogen los servicios de aseo</label>
						</div>
					</div>
				</div>
				<div class="row">				
					<div class="col-md-12">
						<div class="radio">
				  			<label><input type="radio" id="c2v23_eli_bas" name="pregunta11" value="2" <?php echo ($vivienda["c2v23_eli_bas"]==2)?"checked=\"checked\"":""; ?>>La entierran</label>
						</div>
					</div>
				</div>
				<div class="row">				
					<div class="col-md-12">
						<div class="radio">
							<label><input type="radio" id="c2v23_eli_bas" name="pregunta11" value="3" <?php echo ($vivienda["c2v23_eli_bas"]==3)?"checked=\"checked\"":""; ?>>La queman</label>
						</div>
					</div>
				</div>
				<div class="row">				
					<div class="col-md-12">
						<div class="radio">
				  			<label><input type="radio" id="c2v23_eli_bas" name="pregunta11" value="4" <?php echo ($vivienda["c2v23_eli_bas"]==4)?"checked=\"checked\"":""; ?>>La tiran a un patio, lote, zanja, bald&iacute;o</label>
						</div>
					</div>
				</div>
				<div class="row">				
					<div class="col-md-12">
						<div class="radio">
				  			<label><input type="radio" id="c2v23_eli_bas" name="pregunta11" value="5" <?php echo ($vivienda["c2v23_eli_bas"]==5)?"checked=\"checked\"":""; ?>>La tiran a un r&iacute;o, ca&ntilde;o, quebrada, laguna o al mar</label>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<div id="alerta11" class="alert alert-warning" role="alert">
        					&nbsp;
      					</div>	
					</div>
				</div>
	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align: right">
				<div class="radio">
					<button type="button" id="btnPregunta4" class="btn btn-sm btn-primary">Guardar y siguiente</button>
				</div>
			</div>			
		</div>
	</form>
</div>	