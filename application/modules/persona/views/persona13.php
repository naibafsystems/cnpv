<div id="page13" class="row col-md-10">
	<form id="frmPage13" name="frmPage13" method="post" action="">
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="13" />
  			<input type="hidden" name="edadPersona13" id="edadPersona13" value="" />
  			<input type="hidden" name="nroPersona13" id="nroPersona13" value="" />
  		</div>
		<div class="row">
		<h4>Indique el &uacute;ltimo a&ntilde;o o grado de estudios que <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> aprob&oacute;.<span id="hint_c4p73_nivel_anos"></span></h4>
		</div>
		<br />
		<div class="row">
			<div class="col-md-5">
				<div class="radio">
		  			<label>&nbsp;</label>
				</div>
			</div>
			<div class="col-md-7">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="text">
				  			<label>Grados</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5">
				<div class="radio">
		  			<label>1. Preescolar </label>
				</div>
			</div>
			<div class="col-md-2">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="1">Prejard&iacute;n</label>
				</div>
			</div>
			<div class="col-md-2">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="2">Jard&iacute;n</label>
				</div>
			</div>
				<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="3">Transici&oacute;n</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5">
				<div class="radio">
		  			<label>2. B&aacute;sica primaria </label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="4">1&deg;</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='5'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="5">2&deg;</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='6'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="6">3&deg;</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='7'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="7">4&deg;</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='8'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="8">5&deg;</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5">
				<div class="radio">
		  			<label>3. B&aacute;sica secundaria (bachillerato b&aacute;sico) </label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='9'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="9">6&deg;(1&deg;)</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='10'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="10">7&deg;(2&deg;)</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='11'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="11">8&deg;(3&deg;)</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='12'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="12">9&deg;(4&deg;)</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5">
				<div class="radio">
		  			<label>4. Media acad&eacute;mica o cl&aacute;sica (bachillerato cl&aacute;sico) </label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='13'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="13">10&deg;(5&deg;)</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='14'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="14">11&deg;(6&deg;)</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5">
				<div class="radio">
		  			<label>5. Media t&eacute;cnica (bachillerato t&eacute;cnico)</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='15'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="15">10&deg;</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='16'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="16">11&deg;</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5">
				<div class="radio">
		  			<label>6. Normalista</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='17'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="17">10&deg;</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='18'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="18">11&deg;</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='19'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="19">12&deg;</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='20'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="20">13&deg;</label>
				</div>
			</div>
		</div>	
		<br/>
		<div class="row">
			<div class="col-md-5">
				<div class="radio">
		  			<label><b>SUPERIOR</b></label>
				</div>
			</div>
			<div class="col-md-7">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="text">
				  			<label>A&ntilde;os</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5">
				<div class="radio">
		  			<label>7. T&eacute;cnica profesional</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='21'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="21">1</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='22'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="22">2</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='23'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="23">3</label>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-md-5">
				<div class="radio">
		  			<label>8. Tecnol&oacute;gica</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='24'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="24">1</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='25'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="25">2</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='26'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="26">3</label>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-md-5">
				<div class="radio">
		  			<label>9. Universitario</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='27'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="27">1</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='28'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="28">2</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='29'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="29">3</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='30'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="30">4</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='31'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="31">5</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='32'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="32">6</label>
				</div>
			</div>
		</div>	
		<br/>
		<div class="row">
			<div class="col-md-5">
				<div class="radio">
		  			<label><b>POSTGRADO</b></label>
				</div>
			</div>
			<div class="col-md-7">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="text">
		  					<label>A&ntilde;os</label>
		  				</div>
		  			</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5">
				<div class="radio">
		  			<label>10. Especializaci&oacute;n</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='33'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="33">1</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='34'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="34">2</label>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-md-5">
				<div class="radio">
		  			<label>11. Maestr&iacute;a</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='35'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="35">1</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='36'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="36">2</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='37'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="37">3</label>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-md-5">
				<div class="radio">
		  			<label>12. Doctorado</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='38'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="38">1</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='39'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="39">2</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='40'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="40">3</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='41'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="41">4</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='42'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="42">5</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='43'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="43">6</label>
				</div>
			</div>
		</div>	
			<br/>
		<div class="row">
			<div class="col-md-5">
				<div class="radio">
		  			<label>13. Ninguno</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P73_NIVEL_ANOS"]=='44'){?> checked="checked"<?php }?> type="radio" id="c4p73_nivel_anos" name="c4p73_nivel_anos" value="44"></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p73_nivel_anos" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br/>
		
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente13" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>