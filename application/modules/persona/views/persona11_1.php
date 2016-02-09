<div id="page111" class="row col-md-10">
	<form id="frmPage111" name="frmPage111" method="post" action="">
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="111" />
  			<input type="hidden" name="edadPersona111" id="edadPersona111" value="" />
  			<input type="hidden" name="nroPersona111" id="nroPersona111" value="" />
  		</div>
		<div class="row">
			<h4>&iquest;<?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> sabe leer y escribir?</h4>
			<div class="col-md-3">
				<div class="radio">
				</div>	
			</div>
			<div class="col-md-6">
				<div class="radio">
		  			<label><span id="hint_c4p71_alfabeta"></span></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P71_ALFABETA"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p71_alfabeta" name="c4p71_alfabeta" value="1">Si</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P71_ALFABETA"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p71_alfabeta" name="c4p71_alfabeta" value="2">No</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p71_alfabeta" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br/>
		
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente111" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>