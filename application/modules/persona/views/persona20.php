<div id="page20" class="row col-md-10">
	<form id="frmPage20" name="frmPage20" method="post" action="">
		<h3><?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?></h3><br/>
		<div class="row">
  			<input type="hidden" name="index" id="index" value="20" />
  			<input type="hidden" name="edadPersona20" id="edadPersona20" value="" />
  			<input type="hidden" name="nroPersona20" id="nroPersona20" value="" />
  		</div>
		<h4>&iquest;<?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> se reconoce en su orientaci&oacute;n sexual<label><span id="hint_cap87_ori_sex"></span></label> como:</h4>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP87_ORI_SEX"]=='1'){?> checked="checked"<?php }?> type="radio" id="cap87_ori_sex" name="cap87_ori_sex" value="1">heterosexual?</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP87_ORI_SEX"]=='2'){?> checked="checked"<?php }?> type="radio" id="cap87_ori_sex" name="cap87_ori_sex" value="2">homosexual?</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP87_ORI_SEX"]=='3'){?> checked="checked"<?php }?> type="radio" id="cap87_ori_sex" name="cap87_ori_sex" value="3">bisexual? </label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP87_ORI_SEX"]=='4'){?> checked="checked"<?php }?> type="radio" id="cap87_ori_sex" name="cap87_ori_sex" value="4">no sabe</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP87_ORI_SEX"]=='5'){?> checked="checked"<?php }?> type="radio" id="cap87_ori_sex" name="cap87_ori_sex" value="5">no responde</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_cap87_ori_sex" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br/>
		
		
		<h4>&iquest;<?php echo $persona["C4P42A_1ER_NOMBRE"].' '.$persona["C4P42B_1ER_APELLIDO"]?> se reconoce en su identidad de g&eacute;nero <label><span id="hint_cap88_rec_genero"></span></label> como:</h4>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP88_REC_GENERO"]=='1'){?> checked="checked"<?php }?> type="radio" id="cap88_rec_genero" name="cap88_rec_genero" value="1">masculino?</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP88_REC_GENERO"]=='2'){?> checked="checked"<?php }?> type="radio" id="cap88_rec_genero" name="cap88_rec_genero" value="2">femenino?</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP88_REC_GENERO"]=='3'){?> checked="checked"<?php }?> type="radio" id="cap88_rec_genero" name="cap88_rec_genero" value="3">transg&eacute;nero? (travesti, transformista, transexual)</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP88_REC_GENERO"]=='4'){?> checked="checked"<?php }?> type="radio" id="cap88_rec_genero" name="cap88_rec_genero" value="4">interg&eacute;nero?</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP88_REC_GENERO"]=='5'){?> checked="checked"<?php }?> type="radio" id="cap88_rec_genero" name="cap88_rec_genero" value="5">no sabe</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="radio">
		  			<label><input <?php if($persona["CAP88_REC_GENERO"]=='6'){?> checked="checked"<?php }?> type="radio" id="cap88_rec_genero" name="cap88_rec_genero" value="6">no responde</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alert_cap88_rec_genero" class="alert alert-warning" role="alert">
		        	<strong>Warning!</strong> Best check yo self, you're not looking too good.
		      	</div>
			</div>
		</div>			
		<br/>
		
		<div class="row" style="text-align: right">
			<div class="col-md-12">
				<div class="radio">
		  			<button type="button" id="btnSiguiente20" class="btn btn-sm btn-primary"><?php echo $nomBoton; ?></button>
				</div>
			</div>			
		</div>
	</form>	
</div>