<?php // var_dump ($hogar);?>
<div id="page1" class="row col-md-12">
	<form id="frmPantalla1" name="frmPantalla1" method="post" action="">
		<h4>La vivienda ocupada por su hogar es: </h4>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H25_VIVE_EN" name="C3H25_VIVE_EN"  value="1" <?php echo ($hogar["C3H25_VIVE_EN"]==1)?"checked=\"checked\"":""; ?>> propia totalmente pagada </label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H25_VIVE_EN" name="C3H25_VIVE_EN"  value="2" <?php echo ($hogar["C3H25_VIVE_EN"]==2)?"checked=\"checked\"":""; ?>>propia y la est&aacute;(n) pagando</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H25_VIVE_EN" name="C3H25_VIVE_EN"  value="3" <?php echo ($hogar["C3H25_VIVE_EN"]==3)?"checked=\"checked\"":""; ?>>en arriendo por oficina o inmobiliaria</label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H25_VIVE_EN" name="C3H25_VIVE_EN"  value="4" <?php echo ($hogar["C3H25_VIVE_EN"]==4)?"checked=\"checked\"":""; ?>> en arriendo directamente</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H25_VIVE_EN" name="C3H25_VIVE_EN"  value="5" <?php echo ($hogar["C3H25_VIVE_EN"]==5)?"checked=\"checked\"":""; ?>> con permiso del propietario sin pago alguno</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H25_VIVE_EN" name="C3H25_VIVE_EN"  value="6" <?php echo ($hogar["C3H25_VIVE_EN"]==6)?"checked=\"checked\"":""; ?>> en posesi&oacute;n sin t&iacute;tulo</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alerta1" class="alert alert-warning" role="alert">
        			<strong></strong>
      			</div>	
			</div>
		</div>
		<br/>
		
		<div class="row">
		<h4>&iquest;Cu&aacute;nto paga o pagar&iacute;a, si tuviera que  hacerlo, por el arriendo mensual de la vivienda en donde usted reside? <br>(Excluya el pago de administraci&oacute;n, celadur&iacute;a y servicios p&uacute;blicos): </h4>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H26_VR_ARRDO" name="C3H26_VR_ARRDO"  value="1" <?php echo ($hogar["C3H26_VR_ARRDO"]==1)?"checked=\"checked\"":""; ?>> Menos de $50.000</label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H26_VR_ARRDO" name="C3H26_VR_ARRDO"  value="2" <?php echo ($hogar["C3H26_VR_ARRDO"]==2)?"checked=\"checked\"":""; ?>>De $50.000 a $149.999</label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="radio">
		  			<label><span id="hint1"></span></label>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H26_VR_ARRDO" name="C3H26_VR_ARRDO"  value="3" <?php echo ($hogar["C3H26_VR_ARRDO"]==3)?"checked=\"checked\"":""; ?>>De $150.000 a $299.999</label>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H26_VR_ARRDO" name="C3H26_VR_ARRDO"  value="4" <?php echo ($hogar["C3H26_VR_ARRDO"]==4)?"checked=\"checked\"":""; ?>>De $300.000 a $499.999</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H26_VR_ARRDO" name="C3H26_VR_ARRDO"  value="5"<?php echo ($hogar["C3H26_VR_ARRDO"]==5)?"checked=\"checked\"":""; ?>>De $500.000 a $999.999</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H26_VR_ARRDO" name="C3H26_VR_ARRDO"  value="6" <?php echo ($hogar["C3H26_VR_ARRDO"]==6)?"checked=\"checked\"":""; ?>> De $1.000.000 a $1.999.999</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H26_VR_ARRDO" name="C3H26_VR_ARRDO"  value="7" <?php echo ($hogar["C3H26_VR_ARRDO"]==7)?"checked=\"checked\"":""; ?>>De $2.000.000 a $2.999.999</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="radio">
					<label><input type="radio" id="C3H26_VR_ARRDO" name="C3H26_VR_ARRDO"  value="8"<?php echo ($hogar["C3H26_VR_ARRDO"]==8)?"checked=\"checked\"":""; ?>>$3.000.000 y m&aacute;s</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="alerta2" class="alert alert-warning" role="alert">
        			<strong></strong>
      			</div>	
			</div>
		</div>
		
		<br/>
		
		</div>
		 
		 <div class="row">
			<div class="col-md-6">&nbsp;
			</div>
			<div class="col-md-6">
				<div class="radio">
					<button type="button" id="btnSiguiente2"  name="btnSiguiente2" class="btn btn-sm btn-primary">Guardar y siguiente</button>
				</div>
			</div>			
		</div>
		<div class ="row">
			<div class="col-md-8">
				<input type="hidden" id="index" name="index" value="1"  />
			</div>	
		</div>
	</form>
</div>	
	
