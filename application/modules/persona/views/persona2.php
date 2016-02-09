<div id="page2" class="row col-md-10">
	<form id="frmPage2" name="frmPage2" method="post" action="">
		<?php
		$jefeHogar=$this->modpersona->consultarJefeHogar($this->session->userdata("numform"));
		?>
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="2" />
  			<input type="hidden" name="edadPersona2" id="edadPersona2" value="" />
  			<input type="hidden" name="nroPersona2" id="nroPersona2" value="" />
  		</div>
		<h4>Se&ntilde;ale la relaci&oacute;n o parentesco de <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> con <?php echo $jefeHogar["C4P42A_1ER_NOMBRE"].' '.$jefeHogar["C4P42B_1ER_APELLIDO"]?></h4>
		<!-- <div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P49_PARENTESCO"]=='1'){?> checked="checked"<?php }?> type="radio" id=c4p49_parentesco name=c4p49_parentesco value="1">Cabeza (jefe(a)) del hogar</label>
				</div>
			</div>
		</div> -->
		<div class="row">
			<div class="col-md-10">
				<div class="radio">
					<label><input <?php if($persona["C4P49_PARENTESCO"]=='2'){?> checked="checked"<?php }?> type="radio" id=c4p49_parentesco name=c4p49_parentesco value="2">Pareja (c&oacute;nyuge, compa&ntilde;ero(a), esposo(a))</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
					<label><input <?php if($persona["C4P49_PARENTESCO"]=='3'){?> checked="checked"<?php }?> type="radio" id=c4p49_parentesco name=c4p49_parentesco value="3">Hijo(a)</label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
					<label><input <?php if($persona["C4P49_PARENTESCO"]=='4'){?> checked="checked"<?php }?> type="radio" id=c4p49_parentesco name=c4p49_parentesco value="4">Hijastro(a)</label>
				</div>	
			</div>
		</div>		
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P49_PARENTESCO"]=='5'){?> checked="checked"<?php }?> type="radio" id=c4p49_parentesco name=c4p49_parentesco value="5">Yerno/Nuera</label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P49_PARENTESCO"]=='6'){?> checked="checked"<?php }?> type="radio" id=c4p49_parentesco name=c4p49_parentesco value="6">Padre/Madre, Padrastro, Madrastra</label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P49_PARENTESCO"]=='7'){?> checked="checked"<?php }?> type="radio" id=c4p49_parentesco name=c4p49_parentesco value="7">Suegro(a)</label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P49_PARENTESCO"]=='8'){?> checked="checked"<?php }?> type="radio" id=c4p49_parentesco name=c4p49_parentesco value="8">Hermano(a), hermanastro(a)</label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P49_PARENTESCO"]=='9'){?> checked="checked"<?php }?> type="radio" id=c4p49_parentesco name=c4p49_parentesco value="9">Cu&ntilde;ado(a)</label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P49_PARENTESCO"]=='10'){?> checked="checked"<?php }?> type="radio" id=c4p49_parentesco name=c4p49_parentesco value="10">Nieto(a)</label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P49_PARENTESCO"]=='11'){?> checked="checked"<?php }?> type="radio" id=c4p49_parentesco name=c4p49_parentesco value="11">Otro pariente</label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P49_PARENTESCO"]=='12'){?> checked="checked"<?php }?> type="radio" id=c4p49_parentesco name=c4p49_parentesco value="12">Empleado(a) del servicio dom&eacute;stico y sus parientes</label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P49_PARENTESCO"]=='13'){?> checked="checked"<?php }?> type="radio" id=c4p49_parentesco name=c4p49_parentesco value="13">Trabajador(a)</label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P49_PARENTESCO"]=='14'){?> checked="checked"<?php }?> type="radio" id=c4p49_parentesco name=c4p49_parentesco value="14">Otro no pariente</label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alerta6" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br/>
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente2" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>