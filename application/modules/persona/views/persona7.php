<div id="page7" class="row col-md-10">
	<form id="frmPage7" name="frmPage7" method="post" action="">
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="7" />
  			<input type="hidden" name="edadPersona7" id="edadPersona7" value="" />
  			<input type="hidden" name="nroPersona7" id="nroPersona7" value="" />
  		</div>
		<h4>&iquest;<?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> se considera:</h4>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P59_CREENCIA"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p59_creencia" name="c4p59_creencia" value="1">creyente practicante?</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P59_CREENCIA"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p59_creencia" name="c4p59_creencia" value="2">creyente no practicante?</label>
				</div>
			</div>
			<div class="col-md-10">
				<div class="radio">
					<label><input <?php if($persona["C4P59_CREENCIA"]=='3'){?> checked="checked"<?php }?> type="radio" id="c4p59_creencia" name="c4p59_creencia" value="3">ateo?</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P59_CREENCIA"]=='4'){?> checked="checked"<?php }?> type="radio" id="c4p59_creencia" name="c4p59_creencia" value="4">agn&oacute;stico?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="hint_c4p59_creencia"></span></label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["C4P59_CREENCIA"]=='5'){?> checked="checked"<?php }?> type="radio" id="c4p59_creencia" name="c4p59_creencia" value="5">no sabe</label>
				</div>
			</div>
			<div class="col-md-10">
				<div class="radio">
					<label><input <?php if($persona["C4P59_CREENCIA"]=='6'){?> checked="checked"<?php }?> type="radio" id="c4p59_creencia" name="c4p59_creencia" value="6">no responde</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p59_creencia" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />

		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente7" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>	
	</form>
</div>