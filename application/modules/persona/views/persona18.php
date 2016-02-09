<div id="page18" class="row col-md-10">
	<form id="frmPage18" name="frmPage18" method="post" action="">
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="18" />
  			<input type="hidden" name="edadPersona18" id="edadPersona18" value="" />
  			<input type="hidden" name="sexoPersona" id="sexoPersona" value="<?php echo $sexoPersona;?>" />
  			<input type="hidden" name="nroPersona18" id="nroPersona18" value="" />
  		</div>
		<h4>Actualmente, el estado civil de <?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> es:</h4>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P81_EST_CIVIL"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p81_est_civil" name="c4p81_est_civil" value="1">uni&oacute;n libre</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P81_EST_CIVIL"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p81_est_civil" name="c4p81_est_civil" value="2">casado(a)</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P81_EST_CIVIL"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p81_est_civil" name="c4p81_est_civil" value="3">divorciado(a) </label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P81_EST_CIVIL"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p81_est_civil" name="c4p81_est_civil" value="4">separado(a) de uni&oacute;n libre</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P81_EST_CIVIL"]=='5'){?> checked="checked"<?php }?> type="radio" id="c4p81_est_civil" name="c4p81_est_civil" value="5">separado(a) de matrimonio </label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P81_EST_CIVIL"]=='6'){?> checked="checked"<?php }?> type="radio" id="c4p81_est_civil" name="c4p81_est_civil" value="6">viudo(a)</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P81_EST_CIVIL"]=='7'){?> checked="checked"<?php }?> type="radio" id="c4p81_est_civil" name="c4p81_est_civil" value="7">soltero(a) (Nunca se ha casado, ni ha vivido en uni&oacute;n libre)</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p81_est_civil" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br/>
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente18" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>