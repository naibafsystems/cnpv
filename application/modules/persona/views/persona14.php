<div id="page14" class="row col-md-10">
	<form id="frmPage14" name="frmPage14" method="post" action="">
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="14" />
  			<input type="hidden" name="edadPersona14" id="edadPersona14" value="" />
  			<input type="hidden" name="nroPersona14" id="nroPersona14" value="" />
  		</div>
		<h4>&iquest;<?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> utiliza: </h4>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
				</div>	
			</div>
			<div class="col-md-6">
				<div class="radio">
		  			<label><span id="hint_c4p74"></span></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="radio">
		  			<label>a. tel&eacute;fono celular?</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P74A_CEL"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p74a_cel" name="c4p74a_cel" value="1">Si</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P74A_CEL"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p74a_cel" name="c4p74a_cel" value="2">No</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p74a_cel" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<div class="row">
			<div class="col-md-4">
				<div class="radio">
		  			<label>b. computador?</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P74B_PC"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p74b_pc" name="c4p74b_pc" value="1">Si</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P74B_PC"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p74b_pc" name="c4p74b_pc" value="2">No</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p74b_pc" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<div class="row">
			<div class="col-md-4">
				<div class="radio">
		  			<label>c. tableta?</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P74C_TABLETA"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p74c_tableta" name="c4p74c_tableta" value="1">Si</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P74C_TABLETA"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p74c_tableta" name="c4p74c_tableta" value="2">No</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p74c_tableta" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<div class="row">
			<div class="col-md-4">
				<div class="radio">
		  			<label>d. internet?</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P74D_INTERNET"]=='1'){?> checked="checked"<?php }?> type="radio" id="c4p74d_internet" name="c4p74d_internet" value="1">Si</label>
				</div>
			</div>
			<div class="col-md-1">
				<div class="radio">
		  			<label><input <?php if($persona["C4P74D_INTERNET"]=='2'){?> checked="checked"<?php }?> type="radio" id="c4p74d_internet" name="c4p74d_internet" value="2">No</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_c4p74d_internet" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br />
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente14" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>