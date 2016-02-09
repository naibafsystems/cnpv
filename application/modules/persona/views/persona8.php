<div id="page8" class="row col-md-10">
	<form id="frmPage8" name="frmPage8" method="post" action="">
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="8" />
  			<input type="hidden" name="edadPersona8" id="edadPersona8" value="" />
  			<input type="hidden" name="nroPersona8" id="nroPersona8" value="" />
  		</div>
		<h4>Actualmente, &iquest;<?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> se encuentra afiliado(a) a salud?</h4>
		<div class="row">
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P60_AFI_SALUD"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p60_afi_salud" name="c4p60_afi_salud" value="1">S&iacute;</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P60_AFI_SALUD"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p60_afi_salud" name="c4p60_afi_salud" value="2">No</label>
				</div>
			</div>
		</div>
		<div class="row">		
			<div class="col-md-12" id="div_c4p60a_regimen">
				<h4>Indique el r&eacute;gimen:</h4>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P60A_REGIMEN"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p60a_regimen" name="c4p60a_regimen" value="1" >Contributivo<span id="hint_c4p60a_regimen_contri"></span></label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P60A_REGIMEN"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p60a_regimen" name="c4p60a_regimen" value="2">Subsidiado<span id="hint_c4p60a_regimen_subsi"></span></label>
					</div>
				</div>
				<div class="col-md-12">
					<div class="radio">
			  			<label><input <?php if($persona["C4P60A_REGIMEN"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p60a_regimen" name="c4p60a_regimen" value="3">Especial (fuerzas armadas, docentes p&uacute;blicos,  Ecopetrol, universidades p&uacute;blicas)</label>
					</div>
				</div>
				<div class="col-md-12">
					<div id="alert_c4p60a_regimen" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
				<br />
			</div>
			<br/>
			
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p60_afi_salud" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<h4>&iquest;En los &uacute;ltimos 30 d&iacute;as, tuvo <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> alguna enfermedad, accidente, problemas odontol&oacute;gicos o alg&uacute;n otro problema de salud?</h4>
		<div class="row">
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P61_ENFERMO"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p61_enfermo" name="c4p61_enfermo" value="1">Si</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P61_ENFERMO"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p61_enfermo" name="c4p61_enfermo" value="2">No</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p61_enfermo" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div id="div_c4p62a_hospital">
			<h4>&iquest;Para tratar ese problema de salud, acudi&oacute; <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> por atenci&oacute;n a:</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="radio">
			  			<label>a. servicio de salud? (hospital, cl&iacute;nica, centro de salud, consultorio m&eacute;dico o servicio m&eacute;dico domiciliario)</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P62A_HOSPITAL"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p62a_hospital" name="c4p62a_hospital" value="1">Si</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P62A_HOSPITAL"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p62a_hospital" name="c4p62a_hospital" value="2">No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p62a_hospital" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br />

			<div class="row">
				<div class="col-md-6">
					<div class="radio">
			  			<label>b. m&eacute;dico tradicional de su pueblo &eacute;tnico?</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P62B_MED_TRAD"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p62b_med_trad" name="c4p62b_med_trad" value="1">Si</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P62B_MED_TRAD"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p62b_med_trad" name="c4p62b_med_trad" value="2">No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p62b_med_trad" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br />
		</div>

		<div id="div_c4p63_atendieron">		
			<h4>&iquest;A <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> lo(a) atendieron?<span id="hint_c4p63_atendieron"></span></h4>
			<div class="row">
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P63_ATENDIERON"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p63_atendieron" name="c4p63_atendieron" value="1">Si</label>
					</div>
				</div>
				<div class="col-md-1">
					<div class="radio">
			  			<label><input <?php if($persona["C4P63_ATENDIERON"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p63_atendieron" name="c4p63_atendieron" value="2">No</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="alert_c4p63_atendieron" class="alert alert-warning" role="alert">
			        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
			      	</div>
				</div>
			</div>			
			<br />
		</div>

		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente8" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>